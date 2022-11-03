<?php
    class Banner extends MY_Controller{
    	public function __construct(){
            parent:: __construct();
        }
        
        public function index(){

        	$get = $this->input->get();
		    $filters = []; $url = ''; $where = [];

		    //orders
		    if(isset($get['status_sort'])){
		    	$filters['order'] = ['status', 'A'];
		    }

		    //filters
		    if(isset($get['search']) && !empty($get['search'])){
		    	$url .= '&search='.$get['search'];
		    	$filters['like'] = "(title LIKE '%".$get['search']."%' OR details LIKE '%".$get['search']."%')";
		    }

		    if(isset($get['page']) && !empty($get['page'])){
		    	$url .= '&page='.$get['page'];
		    	$where['page'] = $get['page'];
		    }

		    if(isset($get['status']) && !empty($get['status'])){
		    	$url .= '&status='.$get['status'];
		    	$where['status'] = $get['status']=='active'?'A':'D';
		    }

		    if($url){
		    	$url = '?'.ltrim($url, '&');
		    }

		    //pagination
        	$this->load->library('pagination');
		    $config['base_url'] = site_url('banner'.$url);
		    $config['total_rows'] = $this->appmodel->num_rows("item_banner", $where, $filters);
		    $config['per_page'] = 10;
    		$config['page_query_string'] = TRUE;
    		$config['full_tag_open'] = '<div class="pagination">';
            $config['full_tag_close'] = '</div>';
             
            $config['first_link'] = 'First';
            $config['first_tag_open'] = '<span class="firstlink">';
            $config['first_tag_close'] = '</span>';
             
            $config['last_link'] = 'Last';
            $config['last_tag_open'] = '<span class="lastlink">';
            $config['last_tag_close'] = '</span>';
             
            $config['next_link'] = 'Next';
            $config['next_tag_open'] = '<span class="nextlink">';
            $config['next_tag_close'] = '</span>';
 
            $config['prev_link'] = 'Previous';
            $config['prev_tag_open'] = '<span class="prevlink">';
            $config['prev_tag_close'] = '</span>';
 
            $config['cur_tag_open'] = '<span class="curlink">';
            $config['cur_tag_close'] = '</span>';
 
            $config['num_tag_open'] = '<span class="numlink">';
            $config['num_tag_close'] = '</span>';

		    $page = (isset($get['per_page'])) ? $get['per_page'] : 0;
		    $this->pagination->initialize($config);
		    
		    $filters['limit'] = [$page, $config["per_page"]];
		    $items = $this->appmodel->select_all("item_banner", $where, $filters);

		    $data = [
			  'items'	=> $items
			];
			$this->load->view('banner/list', $data);
		}

		public function create(){
		    
			$post_data = $this->input->post();
			if($post_data){

				$config = [
        			'upload_path'   => './assets/images/banner/',
        			'allowed_types' => 'jpg|png|gif|jpeg',
        			'encrypt_name'  => TRUE
        		];
        		$this->load->library('upload', $config); 
        		
        		$image = '';
        		if($this->upload->do_upload('image')){
    				$img_data = $this->upload->data();
    				$image = $img_data['file_name'];
    			}
				
				$insert_data = array(
					"name"     		=> $post_data['title'],
					'image'        		=> $image,
					"status"   	    	=> (isset($post_data['draft_save']))?'D':'A',
				);
				$isInsert = $this->appmodel->insert_one('item_banner', $insert_data);
				if($isInsert){
					$this->session->set_flashdata('success', 'banner successfully created');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("banner"));
		    } 
		    $this->load->view('banner/create', []);
		}
		
		
		public function edit($id){
		    $where = [
		        'id'    => $id   
		    ];

		    $post_data = $this->input->post();
			if($post_data){

				$insert_data = array(
					"name"     		=> $post_data['title'],
				
					"status"   	    => (isset($post_data['draft_save']))?'D':'A',
				);
				$config = [
        			'upload_path'   => './assets/images/banner/',
        			'allowed_types' => 'jpg|png|gif|jpeg',
        			'encrypt_name'  => TRUE
        		];
        		$this->load->library('upload', $config);
				if($this->upload->do_upload('image')){
    				$img_data = $this->upload->data();
    				$insert_data['image'] = $img_data['file_name'];
    			}

				$isInsert = $this->appmodel->update('item_banner', $where, $insert_data);
				if($isInsert){
					$this->session->set_flashdata('success', 'banner successfully update');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("banner"));
		    }
		    
		    $item = $this->appmodel->select_one("item_banner", $where);
		    $data = [
		    	'item'   				=> $item  
		    ];
		    $this->load->view('banner/edit', $data);
		}

		public function delete($id){
			$where = [
				"id"	=> $this->uri->segment(3)
			];
			$isDelete = $this->appmodel->delete_one("item_banner", $where);
			if($isDelete){
				$this->session->set_flashdata('success', 'banner successfully deleted');
			}
			redirect(site_url('banner'));
		}

		public function delete_all(){
			$isDelete = $this->appmodel->delete_all("item_banner");
			if($isDelete){
				$this->session->set_flashdata('success', 'All banner successfully deleted');
			}
			redirect(site_url('banner'));
		}

		public function selected_delete(){
			$post = $this->input->post();
			if($post){
				$isDelete = '';
				foreach ($post['all'] as $key => $value) {
					$where = [
						"id"	=> $value
					];
					$isDelete = $this->appmodel->delete_one("item_banner", $where);
				}
				if($isDelete){
					$this->session->set_flashdata('success', 'selected banner successfully deleted');
				}
			}
			redirect(site_url('banner'));
		}

		public function publication_update($id, $status){
			$where = [
		        'id'    => $id   
		    ];
		    $insert_data = [
				"status"   	    => $status=='A'?'D':'A',
			];
		    $isInsert = $this->appmodel->update('item_banner', $where, $insert_data);
			if($isInsert){
				$this->session->set_flashdata('success', 'banner '.($status=='A'?'unpublish':'publish').' successfully');
			}else{
				$this->session->set_flashdata('error', 'something went wrong');
			}
			redirect(site_url("banner"));

		}

		public function dublicate($id){
			$where = [
		        'id'    => $id   
		    ];
		    $dublicate = $this->appmodel->select_one("banners", $where);
		    if($dublicate){
		    	$insert = array(
					"title"     	=> $dublicate->title,
					"details"   	=> $dublicate->details,
					"page"     		=> $dublicate->page,
					"type"     		=> $dublicate->type,
					"position"     	=> $dublicate->position,
					"link"   	    => $dublicate->link,
					"status"   	    => $dublicate->status,
					"sort"   		=> $dublicate->sort,
					'image'        	=> $dublicate->image
				);
				$isDublicate = $this->appmodel->insert_one('item_banner', $insert);
				if($isDublicate){
					$this->session->set_flashdata('success', 'banner successfully dublicated');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
		    }
		    redirect(site_url("banner"));
		}

		public function export(){
			$get = $this->input->get();

			$filename = 'banner_'.date('Ymd').'.csv'; 
			header("Content-Description: File Transfer"); 
			header("Content-Disposition: attachment; filename=$filename"); 
			header("Content-Type: application/csv; ");
		   	
		   	$filters = []; $where = [];
		   	if(isset($get['search']) && !empty($get['search'])){
		    	$filters['like'] = "(title LIKE '%".$get['search']."%' OR details LIKE '%".$get['search']."%')";
		    }

		    if(isset($get['status']) && !empty($get['status'])){
		    	$where['status'] = $get['status']=='active'?'A':'D';
		    }
			$usersData = $this->appmodel->select_all('item_banner', $where, $filters);

			// file creation 
			$file = fopen('php://output','w');
			$header = array("id", "title", "image", "details", "page", "type", "position", "sort", "status"); 
			fputcsv($file, $header);
			foreach ($usersData as $key=>$value){ 
				$line = array($value->id, $value->title, $value->image, $value->details, $value->page, $value->type, $value->position, $value->sort, $value->status);
				fputcsv($file, $line); 
			}
			fclose($file); 
			exit;
		}

		public function import(){
			$post = $this->input->post();
			if($post){

				$file = $_FILES['excelsheet']['tmp_name'];
				$handle = fopen($file, "r");
				$c = 0;//
				while(($filesop = fgetcsv($handle, 1000, ",")) !== false) {
					if($c<>0){ /* SKIP THE FIRST ROW */
						$where = [
							'id'	=> $filesop[0]
						];
						$update = [
							'title'				=> $filesop[1],
							'image'				=> $filesop[2],
							'details'			=> $filesop[3],
							'page'				=> $filesop[4],
							'type'				=> $filesop[5],
							'position'			=> $filesop[6],
							'sort'				=> $filesop[7],
							'status'			=> $filesop[8]
						];
						if(!$this->appmodel->select_one('item_banner', $where)){
							$this->appmodel->insert_one('item_banner', $update);
						}else{
							$this->appmodel->update('item_banner', $where, $update);
						}
						$isInsert = true;
					}
					$c = $c + 1;
				}

				if($isInsert){
					$this->session->set_flashdata('success', 'banners successfully imported');
				}else{
					$this->session->set_flashdata('error', 'something went wrong');
				}
				redirect(site_url("banner"));
		    } 
		    $this->load->view('banner/import', []);
		}

		public function enable(){
			$post_data = $this->input->post();

			$where = [
				"id"  => $post_data['id']
			];

			$insert_data = [
				"status"	=> $post_data['status']
			];
			$isInsert = $this->appmodel->update('item_banner', $where, $insert_data);

			if($isInsert){
				$json = true;
			}else{
				$json = false;
			}


			echo json_encode($json);
		}

    }