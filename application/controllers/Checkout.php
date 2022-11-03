<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {

	public function index(){

		$data=$this->input->post();
		
		$post_data=$this->input->post();

		$date=$this->input->post('date');

		$time=$this->input->post('time');

		$id=$this->input->post('id');

		$data = $this->cart->contents();

		@$rep_order_id = @$_COOKIE['rep_order_id'];
		@$order_id=@$rep_order_id==null ? @$rep_order_id:rand(100000,999999);
		@$rep_status = @$rep_order_id ? 'D':'A';

		$final_time = $date.' '.$time;

			// print_r($order_id);
			// exit;

		$order_id='item'.$order_id;

		foreach($data as $value){

			$insert = [

				'order_id' => $order_id,

				'customer_id' => $this->session->userdata('customer'),

				'payment_mode' => 'cash',

					// 'payment' => $this->cart->total(),

				'product_qty' => $value['product_qty'],

				'delivery_time' => $final_time,			 				

				'product_id' => $value['id'],

				'total' => $post_data['total'],

				'details' => $value['details'],

				'img' => $value['image'],

				'product_unit' => $value['product_unit'],
				'rep_status'  => $rep_status,

				'created_at' =>  date('Y-m-d H:i:s')

			];	


			$data = $this->app_model->insert_one('item_orders',$insert);					

			if($data){

				$this->session->set_flashdata('success','');
			}			

		}
		setcookie('rep_order_id', null, -1, '/');
		$where =[
			'id' => $this->session->userdata('customer') 
		];
		$email = $this->app_model->select_one('item_customer',$where);
		$email = $email->email;

		print_r($email);

		email($order_id ,$email);
		$this->cart->destroy();

		redirect(base_url('myaccount'));			

	}


	public function replace_order(){
		$post_data =$this->input->post();
		$reason = $post_data['reason'];
		$other =$post_data['other'];
		$where = [
			'id' => $post_data['id']
		];
		$insert = [
			'status' => 'D',
			'updated_at' => date('Y-m-d H:i:s'),
			'replace_reason' => $reason.'<br> Other : '.$other
		];

		$data = $this->app_model->update('item_orders',$where,$insert);
		if($data){
			$this->session->set_flashdata('replace','');
		}
		else{
			$this->session->set_flashdata('rep_error','');
		}

		redirect(base_url('myaccount'));	
	}

}
?>