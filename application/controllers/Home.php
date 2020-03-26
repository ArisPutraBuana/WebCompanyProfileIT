<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['post']=$this->m_tulisan->get_post_home();
		$this->load->view('v_home',$x);
	}
}