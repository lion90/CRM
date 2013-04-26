<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recepcionista extends CI_Controller {
	
	public function __construct()
   {
      parent::__construct();
      $this->load->model('crm_model');
      $this->load->helper('url');
		$this->load->library('session');
   }

	public function index()
	{
		
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=4) redirect("index.php/".$data['USER_TYPE_ID']."");

		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('recepcionista/index');
		$this->load->view('templates/footer');
	}

	public function ingresar_cliente(){
		
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=4) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('recepcionista/ingresar_cliente');
	}
	public function modificar_cliente(){
		
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=4) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('recepcionista/modificar_cliente');
	}

	public function insert_datos(){
		
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=4) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('recepcionista/ingresar_cliente');
	}
	public function update_datos(){
		
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=4) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('digitador/update_datos');
	}
		
}