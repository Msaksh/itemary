<?php
class Profile extends Ci_controller{
    public function index(){
        $data['prfl'] = $this->mymodel->select_one('*', array('id'=>$this->session->userdata('capp_admin')), 'vapp_admin');
        if($data['prfl']){
            $this->load->view('profile', $data);
        }

    }   

    public function update(){
        $error = array('success'=>false, 'message' => array());
        $formdata = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p>', '</p>');
        $this->form_validation->set_rules('name', 'name', 'required');
        if($this->form_validation->run()){
            if(empty($_FILES['image']['name'])){
                $formdata['image'] = $formdata['dp_img'];
            }else{
                $config = array(
                    'upload_path' => './assets/images/profile/',
                    'allowed_types' => 'jpg|jpeg|png|gif'
                );
                $this->load->library('upload', $config);
                if($this->upload->do_upload('image')){
                    $imgdata = $this->upload->data();
                    $formdata['image'] = $imgdata['file_name'];


                }
            }
            $data = array(
                'image_link' => $formdata['image'],
                'name' => $formdata['name']
            );

            $sql = $this->mymodel->update('vapp_admin', array('id'=>$this->session->userdata('capp_admin')), $data);
            if($sql){
                $error['success'] = true;
            }else{
                $error['message']['userid'] = '<p>Invalid user id. Please try again!</p>'; 
            }
        }else{
            foreach($_POST as $key=>$value){
                $error['message'][$key] = form_error($key);
            }
        }
        echo json_encode($error);
    }

    public function changepassword(){
        $error = array('success'=>false, 'message' => array());
        $formdata = $this->input->post();
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p>', '</p>');
        $this->form_validation->set_rules('old_pass', 'Old password', 'required|callback_oldpass');
        $this->form_validation->set_rules('new_pass', 'new password', 'required|min_length[7]');
        $this->form_validation->set_rules('conf_pass', 'confirm password', 'required|matches[new_pass]');
        if($this->form_validation->run()){
            $data = array(
                'password' => $formdata['conf_pass']
            );
            $sql = $this->mymodel->update('vapp_admin', array('id'=>$this->session->userdata('capp_admin')), $data);
            if($sql){
                $error['alert'] = '<div class="alert alert-success text-center"><h1><i class="fa fa-check"></i></h1><p>Your password has been successfully changed</p></div>';
                $error['success'] = true;
            }else{
                $error['message']['userid'] = '<p>Invalid user id. Please try again!</p>'; 
            }
        }else{
            foreach($_POST as $key=>$value){
                $error['message'][$key] = form_error($key);
            }
        }
        echo json_encode($error);
    }

    public function oldpass($old_pass){
        $data = $this->mymodel->select_one('password', array('id'=>$this->session->userdata('capp_admin')), 'admin');
        if($data->password !== $old_pass){
            $this->form_validation->set_message('oldpass', 'Old password not matched');
            return false;
        }else{ return true;}                
    }

    public function logout(){
        session_destroy();
        redirect(base_url('login'));
    }

    public function change_password(){
        $post = $this->input->post();
        if($post){
            $W = [
                'password'  => $post['old_password'],
                'id'        => $this->session->userdata('capp_admin')
            ];
            if(!$this->appmodel->select_one('vapp_admin', $W)){
                $this->session->set_flashdata('error', 'Old password invalid');
                redirect(base_url('change-password'));
            }

            $update = [
                'password'  => $post['new_password']
            ];
            if($this->appmodel->update('vapp_admin', $W, $update)){
             $this->session->set_flashdata('success', 'Password successfully updated'); 
         }else{
            $this->session->set_flashdata('error', 'samething went wrong');   
        }
        redirect(base_url('change-password'));

    }
    $this->load->view('change-password');
}

public function __construct(){
    parent:: __construct();
    if(!$this->session->userdata('capp_admin')){
        redirect(base_url('login'));
    }
}

}
?>