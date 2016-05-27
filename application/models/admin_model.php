<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function login_check_data($data)
	{
            $form_password=md5($data['form_password']);
            $form_email=$data['form_email'];
            $sql="select * from user where email='$form_email' and password='$form_password'";
            $obj=$this->db->query($sql);
            $result=$obj->row();
            return $result;
            /* version 1.0
            $sql="select * from user where email='$form_email' and password='$form_password'";
            $obj=$this->db->query($sql);
            $result=$obj->row();
             */
           /* version 2.0
            $this->db->select('*');
            $this->db->where('password', $form_password);
            $this->db->where('email', $form_email);
            $obj = $this->db->get('user');
            $result=$obj->row();
            */
            /* version 3.0
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where('password', $form_password);
            $this->db->where('email', $form_email);
            $obj = $this->db->get();//query
            $result=$obj->row();
            */
            
	}
       
    }
?>
