<?php
class Payment extends Ci_controller{
	public function index(){

		if(isset($_POST['cash'])){
			$post_data=$this->input->post();
			$date=$this->input->post('date');
			$time=$this->input->post('time');
			$id=$this->input->post('id');
			$p_name=$this->input->post('name');
			$p_qty=$this->input->post('qty');
			$phone=$this->input->post('phone');
			$final_time = $date.' '.$time;
			$data = $this->cart->contents();
			$order = rand(1000,9999);	
			foreach($data as $value){
				$insert = [
					'order_id' => $order,
					'customer_id' => $id,
					'payment_mode' => 'cash',
					'payment' => $this->cart->total(),
					'qty' => $value['qty'],
					'schedule' => $final_time,			 				
					'product_id' => $value['id']

				];					

				$data = $this->appmodel->insert_one('peyment_status',$insert);
				$where =[
					'id' => $id
				];			
				
				$insert = [

					'updated_at' => date('Y-m-d H:i:s')
				];
				$data = $this->appmodel->update('customer',$where ,$insert);
				if($data){
					$this->session->set_flashdata('order', '');
					$this->session->set_userdata('customer', $id);
				}
				
			}
			$where =['id' => $id];

			$customer_email=$this->appmodel->select_one('customer',$where);
				$name=$customer_email->name;				
				$email=$customer_email->email;
				$cash="Cash Payment";

				email($email,$name,$p_name,$p_qty,$final_time,$phone,$cash);
				
			$this->cart->destroy();			 			
			redirect(base_url('my-account'));	

		}
		else if(isset($_POST['online'])){

			$post_data=$this->input->post();
			$date=$this->input->post('date');
			$time=$this->input->post('time');	
			$final_time = $date.' '.$time;

			$id=$this->input->post('id');
			$where =[
				
			];
			$data['list'] =[
				'price' => $post_data['price'],
 			// 'name' => $post_data['name']
			];			
			
			$this->load->view('payment/pay',$data);
		}
	}

	public function payment_proccess(){
		$cart= $this->cart->contents();

		$order_id = rand(1000,9999);

		foreach ($cart as $value) {
			$where = [ 
				'customer_id' => $_POST['customer_id'],
				't_id' => $_POST['razorpay_payment_id'],
				'payment' => $_POST['totalAmount'],
				'product_id' => $value['id'],
				'order_id' => $order_id,
				'payment_mode' => 'online',
				'qty' => '2',
				'schedule' => $_POST['schedule'],
			];

			$this->appmodel->insert_one('peyment_status',$where);
		}
		$where =['id' => $_POST['customer_id']];

			   $customer_email=$this->appmodel->select_one('customer',$where);
			   $final_time = $_POST['schedule'];
				$name=$_POST['name'];				
				$email=$customer_email->email;
				$cash=$_POST['totalAmount'];
				$p_name='';
				$p_qty='2';
				$phone='';
				email($email,$name,$p_name,$p_qty,$final_time,$phone,$cash);
				
		$arr = array('msg' => 'Payment successfully credited', 'status' => true);  

		echo json_encode($arr);
	}
	public function payment_success(){
		$this->load->view('my-cart/success');
	}

}     