<?php

    class Order_replace extends MY_Controller{

    	public function __construct(){

            parent:: __construct();

        }

        

        

        public function index(){

			 $filters = [
			            'order' => ['created_at', 'desc'],

			          
			        ];

			        $where = [
			        	'status' => 'D'			            

			        ];

        $orders = $this->appmodel->select_all('item_orders', $where, $filters);



        $data = [

        	'orders' =>$orders

        ];

			$this->load->view('replace-order/list', $data);

		}

		

		

		public function view_order($id){

		    $where = [

		        'order_id'    => $id   

		    ];

		    

		    $item = $this->appmodel->select_all("item_orders", $where);

		    $data = [

		    	'orders'   				=> $item  

		    ];		 

		    $this->load->view('order/view_order', $data);

		}



		public function delete($id){

			$where = [

				"id"	=> $this->uri->segment(3)

			];

			$isDelete = $this->appmodel->delete_one("customers", $where);

			if($isDelete){

				$this->session->set_flashdata('success', 'user successfully deleted');

			}

			redirect(site_url('user'));

		}



    }