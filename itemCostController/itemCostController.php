<?
/*
	Plugin Name: DR: Min Item Cost Controller
	Description: Checks if the order is less than $100, add a $10 fee
	Version: 1.0
	Author: Dustin Robinson
	Author URI: http://www.robinsonbrosenterprise.com
*/



add_action( 'woocommerce_cart_calculate_fees', 'addCartFeeByMinAmount' );
if ( ! function_exists( 'addCartFeeByMinAmount' ) ) {
    function addCartFeeByMinAmount( $cart ) {
        $cart_contents_total = $cart->get_cart_contents_total();
        if ( $cart_contents_total < 100 ) {
            $name      = 'Delivery Fee)';
            $amount    = 10;
            $taxable   = true;
            $tax_class = '';
            $cart->add_fee( $name, $amount, $taxable, $tax_class );
        }
    }
}
