<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lector extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
        $data=$this->session->all_userdata('username');
        if($data['username']=='') redirect ('index.php/login');
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('lector/index');
		$this->load->view('templates/footer');
	}
}