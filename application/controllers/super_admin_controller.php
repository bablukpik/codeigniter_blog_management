<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_Admin_Controller extends CI_Controller {

        public function __construct()
	{
            parent::__construct();

            $email = $this->session->userdata('email');
            if($email == null){
               redirect('admin_controller');
            }
	}

	public function index()
	{
            $this->load->view('admin/dashboard');
	}

        public function add_category()
	{
            $data['add_category']=$this->load->view('admin/add_category','',true);
            $data['add_category_title']='Add Category';
            $this->load->view('admin/dashboard',$data);
	}

        public function save_category()
	{
           $data['cat_name']        = $this->input->post('cat_name',true);
           //$data['form_email']    = $_POST['form_email'];
           $data['cat_description'] = $_POST['cat_description'];
           $data['cat_status']      = $_POST['cat_status'];
           $result=$this->super_admin_model->new_cat_data($data);
           
           if($result){
               $sdata['success']='Category Addedd Successfully';
               $this->session->set_userdata($sdata);
               redirect('super_admin_controller');
           }else{
                $sdata['exception']='Failed !! Category not added';
                $this->session->set_userdata($sdata);
                redirect('super_admin_controller','refresh');
           }
	}

        public function category_manager()
	{
            $data['all_cat']=$this->super_admin_model->select_all_cat();
            $data['category_manager_view']=$this->load->view('admin/category_manager_view',$data,true);
            $this->load->view('admin/dashboard',$data);
	}

         public function cat_status_update($cat_id)
	{
            $this->super_admin_model->cat_status_update($cat_id);
            redirect('super_admin_controller/category_manager');
	}

        public function add_post()
	{
            $data=array();
            $data['add_post']=$this->load->view('admin/add_post','',true);
            $data['add_post_title']='Add Post';
            $this->load->view('admin/dashboard',$data);
	}

         public function logout()
	{
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('password');
            $sdata['success']='Successfully Logout';
            $this->session->set_userdata($sdata);
            redirect('admin_controller','refresh');
	}

    }
?>
