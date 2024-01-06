
<?php
/**
 * Moodec Cart
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

class MoodecCart {

    /**
     * The name of the session/cookie for the cart
     * @var string
     */
    const STORAGE_ID = 'MoodecCart';

    /**
     * The string time version of the Moodec Cart.
     * If the version here is newer than the version stored by the user, we ditch the old cart
     * @var string 
     */
    const CART_VERSION = '2015092300';

    /**
     * @var array    Associative array of products, with the product ID as the key, variation ID as value
     */
    protected array $_products;

    /**
     * @var float    The cart total, updated when products are added and removed
     */
    protected float $_cartTotal;

    /**
     * @var ?int     If they've visited the checkout page, this will contain an existing transaction ID
     */
    protected ?int $_transactionId;

    /**
     * @var ?int     Stores the last time the
     */
    protected ?int $_lastUpdated; 

    /**
     * Constructor will check if any SESSION or COOKIE exists and will load that data if so.
     * Otherwise, an empty cart is initialised
     */
    public function __construct(){
        // ... (rest of the code remains unchanged)
    }

    // ... (rest of the code remains unchanged)

    /**
     * Returns whether the cart is empty or not
     * @return bool
     */
    public function is_empty(){
        return empty($this->_products);
    }

    /**
     * Will return the transactionId if set, otherwise false
     * @return int|bool 
     */    
    public function get_transaction_id(){
        return $this->_transactionId ?? false;
    }

    /**
     * Set the transaction id for the cart
     * @param int $id 
     */
    public function set_transaction_id($id) {
        $this->_transactionId = (int) $id;

        // update the cart storage
        $this->update();
    }
}
