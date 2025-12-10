<?
/*
	Plugin Name: DR: Customized US States 
	Description: Lists all of the US states of your preference in the checkout
	Version: 1.0
	Author: Dustin Robinson
	Author URI: http://www.robinsonbrosenterprise.com
*/

add_filter( 'woocommerce_states', 'custom_states' );
function custom_states( $states ) {
  $states['US'] = array(
  	'AL' => 'Alabama',
	'AK' => 'Alaska',
	'AR' => 'Arkansas',
	'AZ' => 'Arizona',
	'CA' => 'California',
	'CO' => 'Colorado',
	'CT' => 'Connecticut',
	'DC' => 'District of Columbia',
	'DE' => 'Delaware',
	'FL' => 'Florida',
	'GA' => 'Georgia',
	'HI' => 'Hawaii',
	'IA' => 'Iowa',
	'ID' => 'Idaho',
	'IL' => 'Illnois',
	'IN' => 'Indiana',
	'KS' => 'Kansas',
	'KY' => 'Kentucky',
	'lA' => 'Louisana',
	'MA' => 'Massachusetts',
	'MD' => 'Maryland',
	'ME' => 'Maine',
	'MI' => 'Michigan',
	'MN' => 'Minnesota',
	'MO' => 'Missouri',
	'MS' => 'Mississippi',
	'MT' => 'Montana',
	'NC' => 'North Carolina',
	'ND' => 'North Dakota',
	'NE' => 'Nebraska',
	'NH' => 'New Hampshire',
	'NM' => 'New Mexico',
	'NJ' => 'New Jersey',
	'NV' => 'Nevada',
	'NY' => 'New York',
	'OK' => 'Oklahoma',
	'OH' => 'Ohio',
	'OR' => 'Oregon',
	'PA' => 'Pennsylvania',
	'RI' => 'Rhode Island',
	'SC' => 'South Carolina',
	'SD' => 'South Dakota',
	'TN' => 'Tennessee',
	'TX' => 'Texas',
	'UT' => 'Utah',
	'VA' => 'Virginia',
	'VT' => 'Vermont',
	'WA' => 'Washington',
	'WI' => 'Wiscousin',
	'WV' => 'West Virginia',
	'WY' => 'Wyoming',
	'AA' => 'Armed Forces (AA)',
	'AE' => 'Armed Forces (AF)',
	'AP' => 'Armed Forces (AP)',
	'PR' => 'Puerto Rico'
  );
  return $states;
}

?>
