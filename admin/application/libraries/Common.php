<?php
class Common {
	protected $CI;
    public function __construct() {
        $this->CI = & get_instance();
    }
	function orderUpdateMail($id){
		$where = [
			'orders.id'	=> $id
		];

	    $filters = [
	    	'select'	=> 'orders.*, products.name as product_name, products.price as product_price, products.image as product_image, customers.name as customer_name, customer_addresses.address as shipping_address, customer_addresses.city as shipping_city, l1.name as shipping_state, l2.name as shipping_country, customer_addresses.pincode as customer_pincode',
	    	'joins'		=> [
			    [
			    	'table'		=> 'products',
			    	'condition'	=> 'orders.product_id=products.id',
			    	'joinType'	=> 'left'
			    ],
			    [
			    	'table'		=> 'customers',
			    	'condition'	=> 'orders.customer_id=customers.id',
			    	'joinType'	=> 'left'
			    ],
			    [
			    	'table'		=> 'customer_addresses',
			    	'condition'	=> 'orders.customer_address_id=customer_addresses.id',
			    	'joinType'	=> 'left'
			    ],
			    [
			    	'table'		=> 'geo_locations l1',
			    	'condition'	=> 'customer_addresses.state=l1.id',
			    	'joinType'	=> 'left'
			    ],
			    [
			    	'table'		=> 'geo_locations l2',
			    	'condition'	=> 'customer_addresses.country=l2.id',
			    	'joinType'	=> 'left'
			    ]
			]
		];
		$usersData = $this->CI->appmodel->select_one('orders', $where, $filters);
		return $usersData;   
	}

	public function formatUrl($str, $sep='-'){
       $res = strtolower($str);
       $res = preg_replace('/[^[:alnum:]]/', ' ', $res);
       $res = preg_replace('/[[:space:]]+/', $sep, $res);
       return trim($res, $sep);
    }

    public function generate_string($strength = 16) {
		$input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$input_length = strlen($input);
		$random_string = '';
		for($i = 0; $i < $strength; $i++) {
		    $random_character = $input[mt_rand(0, $input_length - 1)];
		    $random_string .= $random_character;
		}
		return $random_string;
	}
}