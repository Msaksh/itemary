<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct(){
        parent:: __construct();
        if(!$this->session->userdata('capp_admin')){
            redirect(base_url('login'));
        }
    }

    public function blank(){
        $this->load->view('blank');
    }
    
    
    public function index(){    

        $filters = [
            'order' => ['created_at', 'desc'],
            'limit' => [0, 20]
        ];
        $where = [
            
        ];
        $orders = $this->appmodel->select_all('item_orders', $where, $filters);
      
        $data = [
            'orders'        =>$orders,
                   ];     
       
        $this->load->view('index',$data);
    }
    
    public function support_seen(){
        $json = ['status'=>false];
        $post = $this->input->post();
        if($post){
            $update = [
                'seen_status'   => 'A'
            ];
            $is = $this->appmodel->update('support', ['id'=>$post['id']], $update);
            if($is){
                $json['status'] = true;
            }
        }
        
        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($json)); 
    }
}