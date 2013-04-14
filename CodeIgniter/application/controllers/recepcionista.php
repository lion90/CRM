<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recepcionista extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=4) redirect("index.php/".$data['USER_TYPE_ID']."");

		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('recepcionista/index');
		$this->load->view('templates/footer');
	}
		
}