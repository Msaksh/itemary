<?php
class Service_rate_card extends MY_Controller{
	public function __construct(){
		parent:: __construct();
	}        
	
	public function index(){

		$filters = ['order' => ['created_at', 'desc']]; $url = ''; $where = [];

		$items = $this->appmodel->select_all("service_rate_card", $where, $filters);

		
		$data = [
			'items'	=> $items
		];
		$this->load->view('service-rate-card/list', $data);
	}

	public function create(){
		
		$post_data = $this->input->post();
		if($post_data){				

			$config = [
				'upload_path'   => './assets/images/rate-card/',
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
				"price"   		=> $post_data['price'],	
				"service_id"   		=> $post_data['service_id'],				
				
				"status"   	    	=> (isset($post_data['PUBLISH']))?'A':'D',
				// 'image'        		=> $image,
				'image'      => $banner_image,
				'created_at'		=> date('Y-m-d h:i')
			);
			$isInsert = $this->appmodel->insert_one('service_rate_card', $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'post successfully created');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("Service_rate_card"));
		} 
		$where =[];
		$data['categories'] = $this->appmodel->select_all("service_card_category", $where); 
		
		$this->load->view('Service-rate-card/create',$data);
	}
	
	
	public function edit($id){
		$where = [
			'id'    => $id   
		];
		$post_data = $this->input->post();


		if($post_data){			
			if($this->appmodel->select_one("service_rate_card",$where )){
			}

			$insert_data = [
				"name"     		=> $post_data['title'],					
				"price"   		=> $post_data['price'],	
				"service_id"   		=> $post_data['service_id'],				
				
				"status"   	    	=> (isset($post_data['PUBLISH']))?'A':'D',
			];
			$config = [
				'upload_path'   => './assets/images/rate-card/',
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


			$isInsert = $this->appmodel->update('service_rate_card', $where, $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'Product successfully updated');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("service_rate_card"));
		}
		
		$item = $this->appmodel->select_one("service_rate_card", $where);

		    // print_r($item);
		    // exit;
		    $categories = $this->appmodel->select_all("service_card_category",[]);
		$data = [
		    	'categories'			=> $categories,
			'item'   				=> $item  
		];
		$this->load->view('Service-rate-card/edit', $data);
	}

	public function delete($id){
		$where = [
			"id"	=> $this->uri->segment(3)
		];
		$isDelete = $this->appmodel->delete_one("service_rate_card", $where);
		if($isDelete){
			$this->session->set_flashdata('success', 'post successfully deleted');
		}
		redirect(site_url('service_rate_card'));
	}

	public function enable(){
		$post_data = $this->input->post();

		$where = [
			"id"  => $post_data['id']

		];

		$insert_data = [
			"status"	=> $post_data['status']
		];
		$isInsert = $this->appmodel->update('service_rate_card', $where, $insert_data);

		if($isInsert){
			$json = true;
		}else{
			$json = false;
		}


		echo json_encode($json);
	}


	public function featured(){
		$post_data = $this->input->post();

		$where = [
			"id"  => $post_data['id']
		];

		$insert_data = [
			"featured"	=> $post_data['status']
		];
		$isInsert = $this->appmodel->update('blogs', $where, $insert_data);

		if($isInsert){
			$json = true;
		}else{
			$json = false;
		}


		echo json_encode($json);
	}

}