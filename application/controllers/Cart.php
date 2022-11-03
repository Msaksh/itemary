<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class Cart extends CI_Controller {

	public function index(){
		// view_page('blog');
	}
	public function add(){

		$post_data=$this->input->post();
		$where=[
			'id'=>$post_data['id'],
		];
		$data =$this->app_model->select_one('item_product',$where);
		$price= $data->price;
		$price=$post_data['product_unit']=='g' ?$price/1000:$price; 

		$insert = array(
			'id'      => $data->id,
			'qty'     => 1,
			'image'	  => $data->image,
			'price'   => $price,
			'name'    => $data->name,
			'details' => $data->details,
			'product_unit'    =>$post_data['product_unit'],
			'product_qty'	  =>$post_data['product_qty'],
		);

		$data =$this->cart->insert($insert);		
		if($data){
			$this->session->set_flashdata('order_success', '');
		}
		else{
			$this->session->set_flashdata('error', '');
		}

		// if($data){
  //               $json['status'] = true;
  //           }
		// $this->output
  //           ->set_status_header(200)
  //           ->set_content_type('application/json')
  //           ->set_output(json_encode($json));	
  //           $this->load->view('user',$data);
        }

	public function updateCartItem(){
    $update = 0;
    $rowid = $this->input->get('rowid');
    $qty = $this->input->get('qty');
    if(!empty($rowid) && !empty($qty)){
        $data = array(
            'rowid' => $rowid,
            // 'prince' => $qty
            'product_qty'=> $qty
        );
        $update = $this->cart->update($data);
    }               
    echo $update ? '1':'0';

}

public function delete_cart_item(){	
		$id=$this->input->get('rowid');	
		// $id=$this->input->get('rowid');
		$data = array(
			'rowid' => $id,
			'qty'   => 0
		);
		$update=$this->cart->update($data);	
		echo $update ? '1':'0';
		
		$this->session->set_flashdata('success_delete','');
		// redirect('welcome');		
	}


}?>