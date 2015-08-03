<?php
/**
 * Moodec Language file
 *
 * @package     local
 * @subpackage  local_moodec
 * @author   	Thomas Threadgold
 * @copyright   2015 LearningWorks Ltd
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'Moodec';

// SETTINGS
$string['moodec_pages'] = 'Page settings';
$string['moodec_settings'] = 'General settings';
$string['moodec_course_settings'] = 'Edit product settings';
$string['page_setting_heading_catalogue'] = 'Catalogue page';
$string['page_setting_heading_product'] = 'Product page';

$string['page_catalogue_show_description'] = 'Show course description';
$string['page_catalogue_show_description_desc'] = 'This will show the course description excerpt on the catalogue list page';
$string['page_catalogue_show_additional_description'] = 'Show additional description';
$string['page_catalogue_show_additional_description_desc'] = 'This will show the additional description excerpt on the catalogue list page';
$string['page_catalogue_show_duration'] = 'Show product enrolment duration';
$string['page_catalogue_show_duration_desc'] = 'This will show the product enrolment duration excerpt on the catalogue list page';
$string['page_catalogue_show_image'] = 'Show product image';
$string['page_catalogue_show_image_desc'] = 'This will show the product image on the catalogue list page';
$string['page_catalogue_show_category'] = 'Show product category';
$string['page_catalogue_show_category_desc'] = 'This will show the product category on the catalogue list page';
$string['page_catalogue_show_price'] = 'Show product price';
$string['page_catalogue_show_price_desc'] = 'This will show the product price on the catalogue list page';
$string['page_catalogue_show_button'] = 'Show add to cart button';
$string['page_catalogue_show_button_desc'] = 'This will show the add to cart button on the catalogue list page';

$string['page_product_enable'] = 'Enable this page';
$string['page_product_enable_desc'] = 'This will allow users to view individual products and add links to the navigation block';
$string['page_product_show_image'] = 'Show product image';
$string['page_product_show_image_desc'] = 'This will show the product image on the product page';
$string['page_product_show_description'] = 'Show course description';
$string['page_product_show_description_desc'] = 'This will show the course description excerpt on the product page';
$string['page_product_show_additional_description'] = 'Show product\'s additional description';
$string['page_product_show_additional_description_desc'] = 'This will show the product\'s additional description excerpt on the product page';
$string['page_product_show_category'] = 'Show course category';
$string['page_product_show_category_desc'] = 'This will show the course category on the product page';
$string['page_product_show_related_products'] = 'Show related products';
$string['page_product_show_related_products_desc'] = 'This will show the related products on the product page';

$string['businessemail'] = 'PayPal business email';
$string['businessemail_desc'] = 'The email address of your business PayPal account';
$string['currency'] = 'Currency';
$string['pagination'] = 'Courses per page';
$string['pagination_desc'] = 'The number of courses to be displayed per page in the catalogue';

// Pages

// CATALOGUE
$string['catalogue_title'] = 'Store';
$string['catalogue_empty'] = 'No products available.';
$string['catalogue_enrolment_duration_label'] = 'Course duration:';
$string['filter_category_label'] = 'Category:';
$string['filter_sort_label'] = 'Sort by:';
$string['filter_sort_default_asc'] = 'Default';
$string['filter_sort_fullname_asc'] = 'Course Title: A - Z';
$string['filter_sort_fullname_desc'] = 'Course Title: Z - A';
$string['filter_sort_simple_price_asc'] = 'Price: Low to High';
$string['filter_sort_simple_price_desc'] = 'Price: High to Low';
$string['filter_sort_simple_enrolment_duration_asc'] = 'Duration: Low to High';
$string['filter_sort_simple_enrolment_duration_desc'] = 'Duration: High to Low';
$string['course_list_category_label'] = 'Category:';

// PRODUCT
$string['product_title'] = '{$a->coursename}';
$string['enrolment_duration_label'] = 'Course duration:';
$string['price_label'] = 'Price:';
$string['product_related_label'] = 'Related Products';
$string['product_related_button_label'] = 'View details';

// CHECKOUT
$string['checkout_title'] = 'Checkout';
$string['checkout_message'] = 'Please review your cart once more before purchasing.';
$string['checkout_removed_courses_label'] = 'The following courses have been removed from your cart as you are already enrolled in them:';
$string['checkout_total'] = 'Total:';
$string['checkout_guest_message'] = 'You cannot be logged in as guest to purchase courses! Please log out and create your own account to continue.';

// CART
$string['cart_title'] = 'Cart';
$string['cart_total'] = 'Total:';
$string['cart_empty_message'] = 'Your cart is empty!';

// Buttons
$string['button_add_label'] = 'Add to cart';
$string['button_remove_label'] = 'Remove';
$string['button_checkout_label'] = 'Proceed to checkout';
$string['button_paypal_label'] = 'Pay with PayPal';
$string['button_return_store_label'] = 'Return to store';
$string['button_logout_label'] = 'Logout';
$string['button_enrolled_label'] = 'Already enrolled';
$string['button_in_cart_label'] = 'In cart';

// Lib
$string['enrolment_duration_unlimited'] = 'Unlimited';
$string['enrolment_duration_year'] = 'year';
$string['enrolment_duration_year_plural'] = 'years';
$string['enrolment_duration_month'] = 'month';
$string['enrolment_duration_month_plural'] = 'months';
$string['enrolment_duration_week'] = 'week';
$string['enrolment_duration_week_plural'] = 'weeks';
$string['enrolment_duration_day'] = 'day';
$string['enrolment_duration_day_plural'] = 'days';

// Edit course form
$string['edit_course_form_title'] = 'Product settings for {$a->name}';
$string['show_in_store'] = 'Enable';
$string['show_in_store_label'] = 'Show this course on the catalogue page';
$string['additional_info'] = 'Additional product information';
$string['pricing_model'] = 'Pricing model';

$string['simple_price'] = 'Course price';
$string['simple_price_default'] = '0';
$string['simple_enrolment_duration'] = 'Enrolment duration';
$string['simple_enrolment_duration_help'] = 'Set the enrolment duration for this course (in days). A value of 0 will make the enrolment never expire.';
$string['simple_enrolment_duration_default'] = '0';
$string['simple_group'] = 'Group';
$string['simple_group_help'] = 'Select a group for users to automatically join when they are enrolled in the course.';

$string['variable_tiers'] = 'Number of tiers';
$string['variable_name'] = 'Name';
$string['variable_name_default'] = 'Tier {$a->tier}';
$string['variable_price'] = 'Price';
$string['variable_enrolment_duration'] = 'Enrolment duration';
$string['variable_group'] = 'Group';
$string['variable_group_title'] = 'Group';
$string['variable_group_title_help'] = 'Select a group for users to automatically join when they purchase this tier.';
$string['variable_group_none'] = 'No group';

$string['product_tags'] = 'Product tags';
$string['product_tags_title'] = 'Product tags';
$string['product_tags_title_help'] = 'List the keyword tags, comma separated, that will be compared against when performing a search.';