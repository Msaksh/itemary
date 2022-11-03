<?php

defined('BASEPATH') OR exit('No direct script access allowed');



function view_page($page,$data = []){

	$CI = &get_instance(); 

	$CI->load->view('common/header_links');

	$CI->load->view('common/header');

	$CI->load->view($page,$data);

	$CI->load->view('common/footer');

	$CI->load->view('common/footer_links');

}



function view_page_wf($page,$data = []){

	$CI = &get_instance(); 

	$CI->load->view('common/header_links');

	$CI->load->view('common/header');

	$CI->load->view($page,$data);

	

}

function email($order_id ,$email){
	$CI = &get_instance(); 
	$to= $email;
	$from = 'fmailtesting@gmail.com'; 
      // $order_id = '2100';
      $data['list']= array(
                  'order_id' => $order_id
            );

	$emailContent = $CI->load->view('common/invoice', $data, true);

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '60';

            $config['smtp_user']    = 'fmailtesting@gmail.com';    //Important
            $config['smtp_pass']    = 'iteynfwxmwuulayd';  //Important

            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html'; // or html
            $config['validation'] = TRUE; // bool whether to validate email or not 

            $CI->email->initialize($config);
            $CI->email->set_mailtype("html");
            $CI->email->from($from);
            $CI->email->to($from);
            $CI->email->subject('krishna');           
            $CI->email->message($emailContent); 
            $query =$CI->email->send();

            $CI->email->initialize($config);
            $CI->email->set_mailtype("html");
            $CI->email->from($from);
            $CI->email->to($to);
            $CI->email->subject('itemary.com');
            $CI->email->message('Hi'.'krishna'.'<br>'.$emailContent);


            $query = $CI->email->send();
        }

        ?>

