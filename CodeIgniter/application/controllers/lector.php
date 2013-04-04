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
	public function graph1_model()
	{
		$this->load->model("crm_read_model");
		$data=$this->crm_read_model->como_se_enteraron_encuesta();
		$this->load->view('lector/chart',$data);
		
	}

	public function graph2_model()
	{
		$this->load->model("crm_read_model");
		$this->load->view("lector/chart2");
		
	}

	public function graph3_model()
	{
		$this->load->model("crm_read_model");
		$this->load->view("lector/chart3");
		
	}
	public function graph4_model()
	{
		$this->load->model("crm_read_model");
		$data=$this->crm_read_model->comparacion_clientes_openhouse_paquete_matricula();
		$this->load->view("lector/chart4",$data);

	}
}