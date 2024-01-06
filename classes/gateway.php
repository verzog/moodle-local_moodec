
<?php
/**
 * Moodec Gateway
 *
 * @package     local
 * @subpackage  local_moodec
 * @author      Thomas Threadgold
 * @copyright   2015 LearningWorks Ltd
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Load Moodle config
require_once dirname(__FILE__) . '/../../../config.php';
// Load Moodec lib
require_once dirname(__FILE__) . '/../lib.php';

abstract class MoodecGateway {

    /**
     * The MoodecTransaction to be handled by this gateway 
     * @var MoodecTransaction
     */
    protected MoodecTransaction $_transaction;

    /**
     * The name of this gateway
     * @var string
     */
    protected string $_gatewayName;

    /**
     * The URL to send the info to
     * @var string
     */
    protected string $_gatewayURL;

    /**
     * The Moodle enrolment plugin
     * @var moodle_enrol_plugin
     */
    protected moodle_enrol_plugin $_enrolPlugin;

    /**
     * Creates a gateway class
     * @param MoodecTransaction|int     $transaction    A transaction class or transaction ID
     */
    public function __construct($transaction) {
        global $CFG;
        require_once $CFG->libdir . '/enrollib.php';

        // Set the transaction to be handled
        $this->_transaction = $transaction instanceof MoodecTransaction ? $transaction : new MoodecTransaction($transaction);

        // Get the enrolment plugin
        $this->_enrolPlugin = enrol_get_plugin('moodec');

        // If the moodec enrolment plugin is not found, fall back to manual
        if (is_null($this->_enrolPlugin)) {
            $this->_enrolPlugin = enrol_get_plugin('manual');
        }

        // Set gateway properties to default strings;
        $this->_gatewayName = '';
        $this->_gatewayURL = '';
    }

    // ... (rest of the code remains unchanged)

    /**
     * Checks the user and transaction items' course and ensures they exist
     * @return bool 
     */
    protected function verify_transaction() {
        global $DB;

        // Ensure that the user associated with the transaction actually exists
        if (!$user = $DB->get_record('user', array('id' => $this->_transaction->get_user_id()))) {
            // Check that user exists
            $this->send_error_to_admin("User " . $this->_transaction->get_user_id() . " doesn't exist");

            $this->_transaction->fail();

            return false;
        }

        // ... (rest of the code remains unchanged)

        return true;
    }

    // ... (rest of the code remains unchanged)

    /**
     * Sends an email notification with the details of the transaction error
     * @param  string $subject email subject line
     * @param  array  $data    transaction data
     * @return void          
     */
    protected function send_error_to_admin($subject, $data = array()) {
        global $CFG;
        require_once $CFG->libdir . '/eventslib.php';

        $admin = get_admin();
        $site = get_site();

        $message = sprintf(
            "%s: Transaction #%d failed. %s \n\n",
            $site->fullname,
            $this->_transaction->get_id(),
            $subject
        );

        foreach ($data as $key => $value) {
            $message .= "$key => $value\n";
        }

        // Update the transaction with the error message details
        $this->_transaction->set_error($message);

        $eventdata = new stdClass();
        $eventdata->component = 'local_moodec';
        $eventdata->name = 'payment_gateway';
        $eventdata->userfrom = $admin;
        $eventdata->userto = $admin;
        $eventdata->subject = $this->_gatewayName . " ERROR: " . $subject;
        $eventdata->fullmessage = $message;
        $eventdata->fullmessageformat = FORMAT_PLAIN;
        $eventdata->fullmessagehtml = '';
        $eventdata->smallmessage = '';
        message_send($eventdata);
    }

    // ... (rest of the code remains unchanged)
}


	/**
	 * Returns the gateway URL
	 * @return string 
	 */
	public function get_url(){
		return $this->_gatewayURL;
	}

	/**
	 * The function to handle the transaction 
	 * @return void
	 */
	abstract public function handle($data = null);

	/**
	 * Function to output the gateway 'button' on the checkout page
	 * @return string 	HTML
	 */
	abstract public function render();

}
