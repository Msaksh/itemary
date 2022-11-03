<?php
class Testimonial extends MY_Controller{
	public function __construct(){
		parent:: __construct();
	}

	public function index(){

		$filters = ['order'	=> ['id','desc']
	]; $url = ''; $where = [];

	$items = $this->appmodel->select_all("item_testimonial", $where, $filters);

	$data = [
		'items'	=> $items
	];
			// print_r($items); die;
	$this->load->view('testimonial/list', $data);
}

public function create(){

	$post_data = $this->input->post();
	if($post_data){
		$designation = (!empty($post_data['designation']))?$post_data['designation']:$this->common->formatUrl($post_data['name']);				

		$config = [
			'upload_path'   => './assets/images/testimonial/',
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
			'designation'		=> $designation,
			"name"     			=> $post_data['name'],
			"details"     		=> $post_data['description'],			
			"status"   	    	=> (isset($post_data['PUBLISH']))?'A':'D',
			'image'        		=> $image,
			'created_at'		=> date('Y-m-d h:i')
		);
		$isInsert = $this->appmodel->insert_one('item_testimonial', $insert_data);
		if($isInsert){
			$this->session->set_flashdata('success', 'Testimonial successfully created');
		}else{
			$this->session->set_flashdata('error', 'something went wrong');
		}
		redirect(base_url("testimonial"));
	}  

	$categories = $this->appmodel->select_all("item_testimonial", []);
	$data = [
		'categories'			=> $categories
	];
	$this->load->view('testimonial/create', $data);
}


public function edit($id){
	$where = [
		'id'    => $id   
	];

	$post_data = $this->input->post();
	if($post_data){
		$designation = (!empty($post_data['designation']))?$post_data['designation']:$this->common->formatUrl($post_data['name']);				

		$insert_data = [
			'designation'	=> $designation,
			"name"     		=> $post_data['name'],
			"details"     	=> $post_data['description'],
			"status"   	    => (isset($post_data['PUBLISH']))?'A':'D',
		];

		$config = [
			'upload_path'   => './assets/images/testimonial/',
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

		$isInsert = $this->appmodel->update('item_testimonial', $where, $insert_data);
		if($isInsert){
			$this->session->set_flashdata('success', 'Testimonial successfully updated');
		}else{
			$this->session->set_flashdata('error', 'something went wrong');
		}
		redirect(site_url("testimonial"));
	}

	$item = $this->appmodel->select_one("item_testimonial", $where);
	$categories = $this->appmodel->select_all("item_testimonial", []);
	$data = [
		'categories'			=> $categories,
		'item'   				=> $item  
	];
	$this->load->view('testimonial/edit', $data);
}

public function delete($id){
	$where = [
		"id"	=> $this->uri->segment(3)
	];
	$isDelete = $this->appmodel->delete_one("item_testimonial", $where);
	if($isDelete){
		$this->session->set_flashdata('success', 'Testimonial successfully deleted');
	}
	redirect(site_url('testimonial'));
}

public function enable(){
	$post_data = $this->input->post();

	$where = [
		"id"  => $post_data['id']
	];

	$insert_data = [
		"status"	=> $post_data['status']
	];
	$isInsert = $this->appmodel->update('item_testimonial', $where, $insert_data);

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
		"feature"	=> $post_data['status']
	];
	$isInsert = $this->appmodel->update('item_testimonial', $where, $insert_data);

	if($isInsert){
		$json = true;
	}else{
		$json = false;
	}


	echo json_encode($json);
}

}