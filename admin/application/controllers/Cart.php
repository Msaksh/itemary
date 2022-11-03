<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
 
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('customer')){
            redirect(base_url('../contact'));
        }
    }

    public function blank(){
        $this->load->view('blank');
    }
    
    
    public function index(){   

        $where =[
            'id' => $id =$this->session->userdata('customer')
        ];
        $data['list'] =$this->appmodel->select_one('item_customer',$where);    
        $this->load->view('my-cart/cart1',$data);       
        
    }

    public function myaccount(){
      $where =[
        'id' => $id =$this->session->userdata('customer')
    ];

    $data=$this->appmodel->select_one('customer',$where); 

    $where =[
        'phone' => $data->phone
    ];

    $address=$this->appmodel->select_one('phone',$where);  

    $where =[
        'customer_id' => $id =$this->session->userdata('customer')
    ];

    $order=$this->appmodel->select_all('peyment_status',$where);              

    $data =[
        'list' => $data,
        'add' => $address,
        'order' => $order
    ];

    $this->load->view('my-cart/my-account1',$data);
}

public function updateCartItem(){
    $update = 0;
    $rowid = $this->input->get('rowid');
    $qty = $this->input->get('qty');
    if(!empty($rowid) && !empty($qty)){
        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );
        $update = $this->cart->update($data);
    }               
    echo $update ? 'ok':'err';

}
public function delete($id){            
    $data = array(
       'rowid' => $id,
       'qty'   => 0
   );   

    $test=$this->cart->update($data); 
    redirect('cart');
}

public function customer_upate(){
    $post_data =$this->input->post();
    $where=[
        'id' => $this->session->userdata('customer')
    ];
    $data=[
        'name' => $post_data['name'],
        'email' => $post_data['email'],
        'phone' => $post_data['phone'],
        'address' => $post_data['address'],
        'password' => $post_data['password'],   
                   

    ];
   
    $check = $this->appmodel->update('customer',$where,$data); 
    if($check){
        $this->session->set_flashdata('sms','');
    }
    $data['list']= $this->appmodel->select_one('customer',$where,$data);           
    redirect(base_url('cart/myaccount'));
}    


}