<?php
    class Visitor extends MY_Controller{
    	public function __construct(){
            parent:: __construct();
        }        
        
        public function index(){

		    $filters = ['order'	=> ['id','desc']
		]; $url = ''; $where = [];

		    $items = $this->appmodel->select_all("phone", $where, $filters);

		    $data = [
			  'items'	=> $items
			];
			// print_r($items); die;
			$this->load->view('site-visitors/list', $data);
		}

		
		public function delete($id){
			$where = [
				"id"	=> $this->uri->segment(3)
			];
			$isDelete = $this->appmodel->delete_one("phone", $where);
			if($isDelete){
				$this->session->set_flashdata('success', 'Visitor successfully deleted');
			}
			redirect(site_url('Visitor'));
		}	

    }