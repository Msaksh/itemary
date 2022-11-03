<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vegetable extends CI_Controller {
		public function index(){
		$where = ['p_category' => 2,'status' => 'A'];

			$data['vegetable']=$this->app_model->select_all('item_product',$where);

			view_page('vegetables',$data);
			
		}

		public function fruits(){
			
			$where = ['p_category' => 3,'status'=>'A'];

			$data['vegetable']=$this->app_model->select_all('item_product',$where);

			view_page('vegetables',$data);
		}
		
}