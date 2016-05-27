<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gamez_Model extends CI_Model {

	public function select_all_published_cat()
	{
            $this->db->select('*');
            $this->db->from('category');
            $this->db->where('cat_status', 1);
            $obj = $this->db->get();//query
            $result=$obj->result();
            return $result;
            
        }
        
}

?>
