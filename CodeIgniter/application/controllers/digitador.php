<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Digitador extends CI_Controller {
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('digitador/index');
		$this->load->view('templates/footer');
	}
		public function ing_encuesta(){
		$this->load->view('digitador/ingreso_encuesta');
	}
		public function ing_openhouse(){
		$this->load->view('templates/header');
		$this->load->view('digitador/ingreso_openhouse');
	}
}