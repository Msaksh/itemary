<?php
    class MY_Controller extends CI_Controller{
    	public function __construct(){
            parent:: __construct();
            if(!$this->session->userdata('capp_admin')){
                redirect(base_url('login'));
            }
        }
    }