<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {
	
	     function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
   	}
	public function index()
	{
		/*$this->load->helper('url');*/
		$this->load->library('session');
        $data=$this->session->all_userdata('username');
        if($data['username']=='') redirect ('index.php/login');
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}
	public function excel()
	{
		$this->load->view('admin/upload_excel');
	}
}