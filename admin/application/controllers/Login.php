<?php

class Login extends Ci_controller{

    public function index(){

        $this->load->view('signin');

    }



    public function forget_password(){

        $this->load->view('forgot');

    }

    

    public function signin(){

        $formdata = $this->input->post();           

        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run()){

            $usr = $this->mymodel->select_one('*', ' (email="'.$formdata['user'].'" or password="'.$formdata['password'].'")', 'item_admin');            

            

            if($usr){   

                      

                     if($usr->password === $formdata['password']){



                    $this->session->set_userdata('remember_me', $this->input->post('remember_me'));

                    $this->session->set_userdata('capp_admin', $usr->id);

                    $this->session->set_userdata('profile', array('name'=>$usr->name,  'image'=>@$usr->image_link));

                    $error['success'] = true;

                    

                }else{

                    $this->session->set_flashdata('error','<div class="error">Wrong password </div>');

                }

                      redirect(base_url('home'));

                

            }else{

                $this->session->set_flashdata('error','<div class="error">Invalid user id. Please try again!</div>');

            }

        }

        redirect(site_url('/login'));

        

    }

    

    public function password(){

        $error = array('success'=>false, 'message' => array());

        $formdata = $this->input->post();

        $this->load->library('form_validation');

        $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');

        $this->form_validation->set_rules('userid', 'Email/mobile', 'required');

        if($this->form_validation->run()){

            $usr = $this->mymodel->select_one('admin_email, admin_id', 'status="A" and (admin_email="'.$formdata['userid'].'" or admin_mobile="'.$formdata['userid'].'")', 'admin');

            if($usr){

                $lnk = md5(uniqid('maanadmin_'));

                $data = array(

                    'admin_reset_link' => $lnk,

                    'admin_reset_time' => date('Y-m-d H:i:s')

                );

                $sql = $this->mymodel-> update('admin', array('admin_id'=>$usr->admin_id), $data);

                $this->send_mail($this->resetmail($lnk), $usr->admin_email, 'Password recovery mail :: Mann travel');

                $error['success'] = true;

                $error['alert'] = '<div class="m-4 alert alert-success text-center"><h1><i class="fa fa-check"></i></h1><h4>A reset link send on your email. Please check your inbox!</h4></div>';

            }else{

                $error['message']['userid'] = '<span class="form_error">Invalid user id. Please try again!</span>'; 

            }

            

        }else{

            foreach($_POST as $key=>$value){

                $error['message'][$key] = form_error($key);

            }

        }

        echo json_encode($error);

    }

    

    private function resetmail($lnk){

        $msg = '<h4>Hi User</h4>

        <p>To reset your password <a href="'.site_url('login/createpassword/?resetlink='.$lnk).'">Click here</a></p>

        <p><p>

        

        <p>Thanks</p>

        

        ';

        

        return $msg;

    }

    

    public function sendmail(){

        $this->send_mail('This is message line', 'arun.chauhan@sstinfotech.com', 'test mail form localhost');

    }

    

    private function send_mail($msg, $to, $subject){

        $config = Array(

            'protocol'  => 'sendmail',

            'smtp_crypto'  => 'tsl',

            'mailtype'  => 'html',

            'wordwrap' => TRUE,

            'charset'   => 'iso-8859-1'

        );

        $this->load->library('email', $config);

        $this->load->library('email', $config);

            $this->email->from('info@manntravel.co.uk', 'Mann travel'); // change it to yours

            $this->email->to($to);// change it to yours

            $this->email->subject($subject);

            $this->email->message($msg);

            $this->email->set_newline("\r\n");

            if($this->email->send())

            {

                return true;

            }

        }

        

        public function createpassword(){

            if(isset($_GET['resetlink'])){

                $link = $_GET['resetlink'];

            } else{ $link = 'sdjf';}

            

            $chk = $this->mymodel->select_one('admin_reset_time', array('admin_reset_link'=>$link), 'admin');

            if($chk){

                if(date('Y-m-d H:i:s', strtotime('+30 minutes', strtotime($chk->admin_reset_time))) > date('Y-m-d H:i:s')){

                    $data['failed'] = false;

                }else{

                    $data['failed'] = true;

                    $data['msg'] = 'Your link has been expired. please try again!';

                }

            }else{

                $data['failed'] = true;

                $data['msg'] = 'Invalid reset link';

            }

            

            $this->load->view('main/recoverpassword', $data);            

        }

        

        public function create_pass(){

            $error = array('success'=>false, 'message' => array());

            $formdata = $this->input->post();

            $this->load->library('form_validation');

            $this->form_validation->set_error_delimiters('<span class="form_error">', '</span>');

            $this->form_validation->set_rules('resetlnk', 'New password', 'required');

            $this->form_validation->set_rules('new_pass', 'New password', 'required|min_length[7]');

            $this->form_validation->set_rules('conf_pass', 'Confirm password', 'required|matches[new_pass]');

            if($this->form_validation->run()){

                $data = array(

                    'admin_password' => $formdata['conf_pass'],

                    'admin_reset_link' => null,

                    'admin_reset_time' => null

                );

                $sql = $this->mymodel-> update('admin', array('admin_reset_link'=>$formdata['resetlnk']), $data);

                if($sql){

                    $error['alert'] = '<div class="alert alert-success text-center"><h1><i class="fa fa-check"></i></h1><p>Your password hasbeen successfully changed</p><a href="'.site_url('login').'" class="btn btn-info">Login</a></div>';

                    $error['success'] = true;

                }else{

                    $error['message']['userid'] = '<span class="form_error">Invalid user id. Please try again!</span>'; 

                }

                

            }else{

                foreach($_POST as $key=>$value){

                    $error['message'][$key] = form_error($key);

                }

            }

            echo json_encode($error);

        }

        

        public function __construct(){

            parent:: __construct();

            if($this->session->userdata('capp_admin')){

                redirect(base_url('home'));

            }

        }

        





        public function customer_login(){

           $formdata = $this->input->post();        

           $this->form_validation->set_rules('password', 'password', 'required');

           if($this->form_validation->run()){

            $usr = $this->mymodel->select_one('*', ' (email="'.$formdata['user'].'" and password="'.$formdata['password'].'")', 'customer');       

            if($usr){

                if($usr->password === $formdata['password']){

                    $this->session->set_userdata('remember_me', $this->input->post('remember_me'));

                    $this->session->set_userdata('customer', $usr->id);

                        // $this->session->set_userdata('profile', array('name'=>$usr->name,  'image'=>$usr->image_link));

                    $error['success'] = true;

                    

                    redirect(base_url('cart'));



                    

                }else{

                    $this->session->set_flashdata('sms','email or password error');

                }

                

                

            }else{

                $this->session->set_flashdata('sms','<div class="change_pass_error" style="background-color:red;color:white;text-align:center ">Invalid user id. Please try again!</div>');

            }

        }else{

            $this->session->set_flashdata('sms','Invalid user id. Please try again!');

        }

        redirect(base_url('Customer'));



    }          



    function customer_login_pageout(){

        session_destroy();

        redirect(base_url('../'));

    }     





    public function customer_login_page(){

        $this->load->view('customer_login');

        

    }

    public function add_customer(){

        $post_data = $this->input->post();                

        $where = [                

            'phone' => $post_data['phone'],

            'email' => $post_data['email'],               

        ];



        $check = $this->appmodel->select_one('customer',$where);

        if($check){

            $this->session->set_flashdata('match','');

            redirect(base_url('Customer'));                

        }

        else{

          $where = [

            'name' => $post_data['name'],                

            'email' => $post_data['email'],

            'phone' => $post_data['phone'],

            'password' => $post_data['password'],

        ];

        $data = $this->appmodel->insert_one('customer',$where);





        if($data){

           $this->session->set_userdata('customer', $data);

           

           redirect(base_url('cart'));

       }

   }

}



public function logout(){

   session_destroy();

   redirect(base_url('../'));

}





public function change_password(){

    $email = $this->input->post('email');    

    $password =rand(100000,999999);    

    $where =[

        'email' => $this->input->post('email')

    ];

    $data= [

        'password' => $password 

    ];

    $check = $this->appmodel->update('customer',$where,$data);

    if($check){

        echo('your password send  on your email');

    }

    else{

        echo('error');

    }

}        







}

?>