<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gamez_Controller extends CI_Controller {

	public function index()
	{
            $data['title']='Home';
            $data['content']=$this->load->view('gamez/index','',true);
            $this->load->view('gamez/master', $data);
	}
        public function games()
	{
                $data['title']='Game';
                $data['content']=$this->load->view('gamez/games','',true);
                $this->load->view('gamez/master', $data);
	}
        public function blog()
	{
            $datas['all_published_cat']=$this->gamez_model->select_all_published_cat();
            $data['title']='Blog';
            $data['content']=$this->load->view('gamez/blog',$datas, true);
            $this->load->view('gamez/master', $data);
            
            
	}
        public function features()
	{
                $data['title']='Features';
                $data['content']=$this->load->view('gamez/features','',true);
                $this->load->view('gamez/master', $data);
	}
        public function contact()
	{
                $data['title']='Contact';
                $data['content']=$this->load->view('gamez/contact','',true);
                $this->load->view('gamez/master', $data);
	}
}
