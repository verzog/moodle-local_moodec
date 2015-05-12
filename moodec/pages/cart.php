<?php
/**
 *Moodec Cart Page
 *
 * @package     local
 * @subpackage  local_moodec
 * @author   	Thomas Threadgold
 * @copyright   2015 LearningWords Ltd
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once dirname(__FILE__) . '/../../../config.php';
require_once $CFG->dirroot . '/local/moodec/lib.php';

$systemcontext = context_system::instance();

$PAGE->set_context($systemcontext);
$PAGE->set_url('/local/moodec/pages/cart.php');
$PAGE->set_pagelayout('standard');

//
// TODO: Check for new items and add to cart
//

// Get the cart in it's current state
$cart = local_moodec_get_cart();

// If we are adding to the cart, process this first
if (isset($_POST['action']) && $_POST['action'] === 'addToCart') {
	// Updates the cart var with the new addition
	$cart = local_moodec_cart_add($_POST['id']);
	// redirect back to the course page
	redirect(new moodle_url('/local/moodec/pages/cart.php'));
}

if (isset($_POST['action']) && $_POST['action'] === 'removeFromCart') {
	// Updates the cart var with the new addition
	$cart = local_moodec_cart_remove($_POST['id']);
	// redirect back to the course page
	redirect(new moodle_url('/local/moodec/pages/cart.php'));
}

echo $OUTPUT->header();

echo $OUTPUT->heading(get_string('cart_title', 'local_moodec'));

?>


<div class="cart-overview">

	<ul class="products">

	<?php foreach ($cart['courses'] as $product => $value) {

	$moodecCourse = $DB->get_record('local_moodec_course', array('courseid' => $product));
	$thisCourse = get_course($product);?>

		<li class="product-item">
			<h4 class="product-title"><?php echo $thisCourse->fullname;?></h4>
			<div class="product-price"><?php echo local_moodec_get_currency_symbol(get_config('local_moodec', 'currency')) . $moodecCourse->price;?></div>
			<form class="product__form" action="" method="POST">
				<input type="hidden" name="id" value="<?php echo $product;?>">
				<input type="hidden" name="action" value="removeFromCart">
				<input class="form__submit" type="submit" value="<?php echo get_string('button_remove_label', 'local_moodec');?>">
			</form>
		</li>

	<?php }?>

	</ul>

	<div class="cart-summary">
		<h3 class="cart-total__label"><?php echo get_string('cart_total', 'local_moodec');?></h3><h3 class="cart-total"><?php echo local_moodec_get_currency_symbol(get_config('local_moodec', 'currency')) . local_moodec_cart_get_total();?></h3>
	</div>

	<div class="cart-actions">
		<form action="/local/moodec/pages/catalogue.php" method="POST">
			<input type="submit" value="<?php echo get_string('button_return_store_label', 'local_moodec');?>">
		</form>
		<form action="/local/moodec/pages/checkout.php" method="POST">
			<input type="submit" value="<?php echo get_string('button_checkout_label', 'local_moodec');?>">
		</form>
	</div>
</div>


<?php
echo $OUTPUT->footer();