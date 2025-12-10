<?
/*
	Plugin Name: DR: Automatically add coupon to all products 
	Description: For a speical promos, using this plugin to enable coupon to be added sitewide for any products.
	Version: 1.0
	Author: Dustin Robinson
	Author URI: http://www.robinsonbrosenterprise.com
*/
add_action('woocommerce_before_cart','apply_coupon_to_all_products');

function apply_coupon_to_all_products(){
	$couponCode = "artwork5off";
	if(WC()->cart->has_discount($couponCode)) return;
	WC()->cart->apply_coupon($couponCode);
	wc_print_notices();
}

?>
