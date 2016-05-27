<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Super_Admin_Model extends CI_Model{
    public function new_cat_data($data){
        $result=$this->db->insert('category',$data);
        return $result;
    }
    public function select_all_cat(){
        $sql="select * from category";
        $obj=$this->db->query($sql);
        $result=$obj->result();
        return $result;
    }
    public function cat_status_update($cat_id){
        //select query
        $sql="select * from category where cat_id='$cat_id'";
        $obj=$this->db->query($sql);
        $result=$obj->row();
        $status=$result->cat_status;
        if ($status==1){
            $status=0;
        }
        elseif ($status==0){
            $status=1;
        }
        //update query
        $this->db->set('cat_status',$status);
        $this->db->where('cat_id',$cat_id);
        $result=$this->db->update('category');
        return $result;
    }
}
?>
