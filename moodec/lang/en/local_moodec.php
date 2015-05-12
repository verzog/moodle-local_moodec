<?php
/**
 * Moodec Language file
 *
 * @package     local
 * @subpackage  local_moodec
 * @author   	Thomas Threadgold
 * @copyright   2015 LearningWords Ltd
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'Moodec';

// Pages

// CATALOGUE
$string['catalogue_title'] = 'Store';
$string['filter_category_label'] = 'Category:';
$string['filter_sort_label'] = 'Sort by:';
$string['filter_sort_default'] = 'Default';
$string['filter_sort_fullname_asc'] = 'Course Title: A - Z';
$string['filter_sort_fullname_desc'] = 'Course Title: Z - A';
$string['filter_sort_price_asc'] = 'Price: Low to High';
$string['filter_sort_price_desc'] = 'Price: High to Low';
$string['filter_sort_duration_asc'] = 'Duration: Low to High';
$string['filter_sort_duration_desc'] = 'Duration: High to Low';
$string['course_list_category_label'] = 'Category:';

// PRODUCT
$string['product_title'] = '{$a->coursename}';
$string['enrolment_duration_label'] = 'Course Duration';
$string['price_label'] = 'Price:';

// CHECKOUT
$string['checkout_title'] = 'Checkout';
$string['checkout_message'] = 'Please review your cart once more before purchasing.';
$string['checkout_removed_courses_label'] = 'The following courses have been removed from your cart as you are already enrolled in them:';
$string['checkout_total'] = 'Total:';

// CART
$string['cart_title'] = 'Cart';
$string['cart_total'] = 'Total:';

// Buttons
$string['button_add_label'] = 'Add to cart';
$string['button_remove_label'] = 'Remove';
$string['button_checkout_label'] = 'Proceed to checkout';
$string['button_paypal_label'] = 'Pay with PayPal';
$string['button_return_store_label'] = 'Return to store';

// Edit course form
$string['edit_course_form_title'] = 'Settings for {$a->name}';
$string['show_in_store'] = 'Enable';
$string['show_in_store_label'] = 'Show this course on the catalogue page';
$string['form_price'] = 'Course price';
$string['form_price_default'] = '0';
$string['enrolment_duration'] = 'Enrolment duration';
$string['enrolment_duration_help'] = 'Set the enrolment duration for this course (in days). A value of 0 will make the enrolment never expire.';
$string['enrolment_duration_default'] = '0';
