<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Customer extends CI_Controller {

	public function index()

	{ 

		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');

		if($this->form_validation->run()==false){



		}

		else{

			$phone=$this->input->post('phone');

			$where=[

				'mobile' =>$phone

			];

			$login=$this->app_model->select_one('item_customer',$where);				

			if($login){

				$this->session->set_userdata('customer', $login->id);

				$login='1';

				echo($login);

				exit;

			}

			else{

				$login='0';

				echo($login);					

				exit;

			}

		}

		// json_encode($login);

	}



	public function customer_signup(){

		$post_data = $this->input->post();


		$insert = [

			'name'	 	=>$post_data['name'],

			'mobile' 	=>$post_data['mobile'],

			'email'  	=>$post_data['email'],

			'pincode' 	=> $post_data['pin'],

			'address' 	=> $post_data['address'],

			'address_type' => $post_data['addressType'],
			'created_at'	=> date('Y-m-d h:i:s')

		];

		$result=$this->app_model->insert_one('item_customer',$insert);	

		

		if(!empty($result)){
			
			$this->session->set_userdata('customer', $result);	
			redirect(base_url('cart'));

		}
		else{
			redirect(base_url('cart'));
		}

		
			// $where=[
			//  	 'mobile' => $post_data['number']			 	

			//  ];

			//  $login=$this->app_model->select_one('item_customer',$where);	

			// $this->session->set_userdata('customer', $login->id);

			// json_encode($result);



	}



	public function customer_login(){

		$phone=$this->input->post('phone');

		$where=[

			'mobile' =>$phone

		];

		$login=$this->app_model->select_one('item_customer',$where);
		

		if($login){

			$this->session->set_userdata('customer', $login->id);

			$login='1';

			echo($login);

			exit;

		}

		else{

			$login='0';

			echo($login);		

			exit;

		}

		// json_encode($login);



	}





	public function check_pin_code(){

		$pin=$this->input->post('pin');

		$where=[

			'pincode' =>$pin

		];

		$login=$this->app_model->select_one('item_pincode',$where);


		if($login){

			$login='1';

			echo($login);

			return true;

		}

		else{

			$login='0';

			echo($login);

			

			return false;

		}

		json_encode($login);



	}



	public function update(){

		$check ='0';

		$post_data=$this->input->post();



		$where=[

			'id'=> $this->session->userdata('customer')

		];

		$data=[

			'name' => $post_data['name'],

			'email' => $post_data['email'],

			// 'mobile' => $post_data['mobile'],

			'address'  => $post_data['address'],

			'address_type' => $post_data['addresstype'],

			'pincode'  => $post_data ['pincode']

		];		

		$data =$this->app_model->update('item_customer',$where,$data);


if($post_data ['cart'] == 0){
		if($data){

			echo('1');
			exit;

		}

		else{

			echo('0');
			exit;

		}
	}

	else if($post_data ['check'] == 1){		

			redirect(base_url('myaccount'));

		}		

	}

}

