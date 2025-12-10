<?
/*
	Plugin Name: DR: Modify Cancelled Order Notifications 
	Description: Adds the customer email on the receipient list for cancelled orders notifications
	Version: 1.0
	Author: Dustin Robinson
	Author URI: http://www.robinsonbrosenterprise.com
*/

function cancelled_order_add_customer_email($emails){
	global $order_id;
	class My_WC_Email_Cancelled_Order extends WC_Email_Cancelled_Order{		
		//update error due to  '$order = false' not in function
		public function trigger($order_id, $order = false) {
			$this->recipient .= (empty($this->recipient) ? '' : ',').wc_get_order($order_id)->billing_email;
			return parent::trigger($order_id);	
		}
	}
	$emails['WC_Email_Cancelled_Order'] = new My_WC_Email_Cancelled_Order();
	return $emails;
}
add_filter('woocommerce_email_classes', 'cancelled_order_add_customer_email', 10);

?>
