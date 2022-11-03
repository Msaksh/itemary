<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$where = ['status' =>'A'];
		$filters = [
			'order'	=> ['id','desc'],
			'limit'	=> [0, 8]			
		];

		$data['banners']=$this->app_model->select_all('item_banner',$where);
		$where = [
			'status' => 'A',
			'p_category' =>'2'];

		$data['products']=$this->app_model->select_all('item_product',$where,$filters);
		

		$where = [
			'status' => 'A',
			'p_category' =>'3'];
		$data['fruits']=$this->app_model->select_all('item_product',$where ,$filters);

		$where = [
			'status' => 'A',
			'p_category' =>'4'
		];
		$data['breakfasts']=$this->app_model->select_all('item_product',$where ,$filters);
		view_page('index',$data);
	}
	public function about(){
		view_page('about');

	}

	public function contact(){

		$post_data=$this->input->post();
		if($post_data){
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');
			$this->form_validation->set_rules('subject','Subject','trim|required');
			if($this->form_validation->run() == TRUE){					 
				$insert =[
					'name'	  => $post_data['name'],
					'email'   =>$post_data['email'],
					'subject' => $post_data['subject'],
					'message' => $post_data['message'],
					"status"  =>  'A',
				];
				$data =$this->app_model->insert_one('item_contact',$insert);
				if($data){					 		
					echo('1');
					return true;
					exit;
				}					 	
			}
			exit;		 
		}
		view_page('contact');			
	}

	public function shop(){
		view_page('shop');
	}

	public function shopdetail(){
		view_page('shopdetail');
	}

	public function checkout(){
		view_page_wf('checkout');
	}

	public function vegetables(){
		view_page('vegetables');
	}

	public function fruits(){

		$where = ['p_category' => 3];
		$data['fruits']=$this->app_model->select_all('item_product',$where);
		view_page('fruits',$data);
	}
	
	public function breakfast(){
		$where = ['p_category' => 4,'status' => 'A'];
		$data['breakfastEssential']=$this->app_model->select_all('item_product',$where);
		view_page('breakfast',$data);
	}

	public function invoice(){
		$this->load->view('common/invoice');
	}
}
