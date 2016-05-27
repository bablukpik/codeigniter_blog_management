<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

        public function __construct()
	{
            parent::__construct();

            $email = $this->session->userdata('email');
            if($email != null){
               redirect('super_admin_controller','refresh');
            }
	}

	public function index()
	{
            $this->load->view('admin/login');
	}

        public function login_check()
	{
           $data['form_email']=$this->input->post('form_email',true);
           //$data['form_email']=$_POST['form_email'];
           $data['form_password']=$_POST['form_password'];
           $result=$this->admin_model->login_check_data($data);
           if($result){
               $sdata['email']=$result->email;
               $sdata['password']=$result->password;
               $this->session->set_userdata($sdata);
               redirect('super_admin_controller');
           }else{
                $sdata['exception']='Email or password invalid';
                $this->session->set_userdata($sdata);
                redirect('admin_controller','refresh');
           }
	}
    }
?>