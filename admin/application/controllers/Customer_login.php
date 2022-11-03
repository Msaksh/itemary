<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Customer_login extends CI_Controller {



    

    public function __construct(){

        parent:: __construct();

        if(!$this->session->userdata('customer')){

            redirect(base_url('login/customer_login_page'));

        }

    }



    public function blank(){

        $this->load->view('blank');

    }

    

    

    public function index(){



        // echo("welcome");

        $id = $_SESSION['customer'];    



        $filters = [

            'order' => ['id', 'desc'],            

        ];

        $where =[

            'id' => $id

        ];



        // $data = $this->cart->contents();   





        $data['list'] = $this->appmodel->select_one('customer', $where, $filters);

        

        $this->load->view('customer/customer',$data);

    }



}