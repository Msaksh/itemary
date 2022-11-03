<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Customer_login extends CI_Controller {

	public function __construct(){

        parent:: __construct();

        if(!$this->session->userdata('customer')){

            redirect(base_url('admin/login/customer_login'));

        }

    }

	public function shoppingcart(){

		view_page('shoppingcart');

	}

	public function myAccount(){

		$id = $this->session->userdata('customer'); 
		// $id ='4'; 

		$where=[

			'customer_id' => $id,

			];

		$filters = [

			'order' => ['created_at', 'desc'],

		];

		$data['orders'] = $this->app_model->select_all('item_orders',$where,$filters);
				$where=[

			'id' => $id

		];

		$data['customers'] = $this->app_model->select_one('item_customer',$where);

		$this->load->view('my-account',$data);	

	}

	public function replace_order(){

		$post_data= $this->input->post();

		print_r($post_data);

	}



}?>

