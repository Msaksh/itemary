<?php

class Item_units_category extends MY_Controller{

	public function __construct(){

		parent:: __construct();

	}        

	

	public function index(){



		$filters = ['order' => ['created_at', 'desc']]; $url = ''; $where = [];



		$items = $this->appmodel->select_all("item_units_category", $where, $filters);



		$data = [

			'items'	=> $items

		];

		$this->load->view('item-units-category/list', $data);

	}



	public function create(){
		$post_data = $this->input->post();
		if($post_data){			

			$insert_data = array(				

				"name"     		=> $post_data['title'],								

				"status"   	    => (isset($post_data['PUBLISH']))?'A':'D',

				'created_at'	=> date('Y-m-d h:i')

			);

			$isInsert = $this->appmodel->insert_one('item_units_category', $insert_data);

			if($isInsert){

				$this->session->set_flashdata('success', 'post successfully created');

			}else{

				$this->session->set_flashdata('error', 'something went wrong');

			}

			redirect(site_url("Item_units_category"));

		}		

		$this->load->view('item-units-category/create');

	}	

	public function edit($id){

		$where = [

			'id'    => $id   

		];

		$post_data = $this->input->post();



		if($post_data){			

			if($this->appmodel->select_one("item_units_category",$where )){

				

			}

			$insert_data = [

				"name"     		=> $post_data['title'],								

				

				"status"   	    	=> (isset($post_data['PUBLISH']))?'A':'D',

				

			];





			$isInsert = $this->appmodel->update('item_units_category', $where, $insert_data);

			if($isInsert){

				$this->session->set_flashdata('success', 'Product successfully updated');

			}else{

				$this->session->set_flashdata('error', 'something went wrong');

			}

			redirect(site_url("item_units_category"));

		}

		

		$item = $this->appmodel->select_one("item_units_category", $where);



		    // print_r($item);

		    // exit;

		    // $categories = $this->appmodel->select_all("blog_categories", ['for_website' => '0']);

		$data = [

		    	// 'categories'			=> $categories,

			'item'   				=> $item  

		];

		$this->load->view('item-units-category/edit', $data);

	}



	public function delete($id){

		$where = [

			"id"	=> $this->uri->segment(3)

		];

		$isDelete = $this->appmodel->delete_one("item_units_category", $where);

		if($isDelete){

			$this->session->set_flashdata('success', 'post successfully deleted');

		}

		redirect(site_url('item_units_category'));

	}



	public function enable(){

		$post_data = $this->input->post();



		$where = [

			"id"  => $post_data['id']



		];



		$insert_data = [

			"status"	=> $post_data['status']

		];

		$isInsert = $this->appmodel->update('item_units_category', $where, $insert_data);



		if($isInsert){

			$json = true;

		}else{

			$json = false;

		}





		echo json_encode($json);

	}

}