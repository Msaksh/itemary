<?php

class Product extends MY_Controller{

	public function __construct(){

		parent:: __construct();

	}        

	

	public function index(){



		$filters = ['order' => ['created_at', 'desc']]; $url = ''; $where = [];



		$items = $this->appmodel->select_all("item_product", $where, $filters);



		$data = [

			'items'	=> $items

		];

		$this->load->view('product/list', $data);

	}



	public function create(){

		

		$post_data = $this->input->post();

		if($post_data){				



			$config = [

				'upload_path'   => './assets/images/product/',

				'allowed_types' => 'jpg|png|gif|jpeg',

				'encrypt_name'  => TRUE

			];

			$this->load->library('upload', $config); 

			

			$image = '';

			if($this->upload->do_upload('image')){

				$img_data = $this->upload->data();

				$image = $img_data['file_name'];

			}



			$banner_image = '';

			if($this->upload->do_upload('banner_image')){

				$img_data = $this->upload->data();

				$banner_image = $img_data['file_name'];

			}



			

			$insert_data = array(

				

				"name"     		=> $post_data['title'],	

				'unit_id'		=> $post_data['unit_id'],	
				'p_category'	=> $post_data['p_category'],
				'qty'			=> $post_data['qty'],			

				"details"   	=> $post_data['details'],

				"price"   		=> $post_data['price'],		

				"status"   	    => (isset($post_data['PUBLISH']))?'A':'D',

				'image'        	=> $image,

				'image'    		=> $banner_image,

				'created_at'	=> date('Y-m-d h:i')

			);

			$isInsert = $this->appmodel->insert_one('item_product', $insert_data);

			if($isInsert){

				$this->session->set_flashdata('success', 'post successfully created');

			}else{

				$this->session->set_flashdata('error', 'something went wrong');

			}

			redirect(site_url("product"));

		} 
		$data['categories'] = $this->appmodel->select_all("item_product_category",[]);

		$data['unit'] = $this->appmodel->select_all("item_units_category",[]);  

		

		$this->load->view('product/create',$data);

	}	

	

	public function edit($id){



		$where = [

			'id'    => $id   

		];

		$post_data = $this->input->post();

		if($post_data){

			if($this->appmodel->select_one("item_product",$where )){

				

			}

			$insert_data = [

				"name"     		=> $post_data['title'],
				'p_category'	=> $post_data['p_category'],
				'qty'			=> $post_data['qty'],

				'unit_id'		=> $post_data['unit_id'],					

				"details"   	=> $post_data['details'],				

				"price"   		=> $post_data['price'],								

				"status"   	    => (isset($post_data['PUBLISH']))?'A':'D',

			];

			$config = [

				'upload_path'   => './assets/images/product/',

				'allowed_types' => 'jpg|png|gif|jpeg',

				'encrypt_name'  => TRUE

			];

			$this->load->library('upload', $config);



			if($this->upload->do_upload('image')){

				$img_data = $this->upload->data();

				$insert_data['image'] = $img_data['file_name'];

			}elseif(!$post_data['imageExiest']){

				$insert_data['image'] = '';

			}



			$isInsert = $this->appmodel->update('item_product', $where, $insert_data);

			if($isInsert){

				$this->session->set_flashdata('success', 'Product successfully updated');

			}else{

				$this->session->set_flashdata('error', 'something went wrong');

			}

			redirect(site_url("product"));

		}

		

		$item = $this->appmodel->select_one("item_product", $where);
		$categories = $this->appmodel->select_all("item_product_category",[]);

	    $unit = $this->appmodel->select_all("item_units_category",[]);

		$data = [

		    	'unit'			=> $unit,
		    	'categories'	=> $categories,
				'item'   		=> $item  

		];

		$this->load->view('product/edit', $data);

	}



	public function delete($id){

		$where = [

			"id"	=> $this->uri->segment(3)

		];

		$isDelete = $this->appmodel->delete_one("item_product", $where);

		if($isDelete){

			$this->session->set_flashdata('success', 'product successfully deleted');

		}

		redirect(site_url('product'));

	}



	public function enable(){

		$post_data = $this->input->post();



		$where = [

			"id"  => $post_data['id']

		];



		$insert_data = [

			"status"	=> $post_data['status']

		];

		$isInsert = $this->appmodel->update('item_product', $where, $insert_data);



		if($isInsert){

			$json = true;

		}else{

			$json = false;

		}





		echo json_encode($json);

	}



}