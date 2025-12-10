<?
/*
	Plugin Name: DR: Checkout Email Checker
	Description: Checks the billing email to ensure the address is an valid email address to prevent sending to non-existent email addresses
	Version: 1.0
	Author: Dustin Robinson
	Author URI: http://www.robinsonbrosenterprise.com
*/

function d_email_checker() {
    global $woocommerce;
	if(!$_POST['payment_method'] == 'amazon_payments_advanced'){			
		$b_email = $_POST['billing_email'];	
		$domain = explode('@',$b_email);
		if(!checkdnsrr($domain[1], 'MX')) {
			wc_add_notice("Your email address is invalid - Please try again.", 'error');
		}
	}	
}
add_action('woocommerce_checkout_process', 'd_email_checker');

?>
