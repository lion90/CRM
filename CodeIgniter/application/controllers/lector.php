<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lector extends CI_Controller {
	
	 function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));   
	}
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
            $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=2) redirect("index.php/".$data['USER_TYPE_ID']."");
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
	public function emails_facultad()
	{
		$this->load->model("crm_read_model");
		$data["facultades"]=$this->crm_read_model->listado_facultad();
		/*$this->load->view('templates/header2');*/
		$this->load->view("lector/emails_facultad",$data);
	}
	public function emails_carrera()
	{
		$this->load->model("crm_read_model");
		$data["facultades"]=$this->crm_read_model->listado_facultad();
		$this->load->view("lector/emails_carreras",$data);
	}
	public function emails_etapa()
	{
		/*$this->load->view('templates/header2');*/
		$this->load->view("lector/emails_etapa");
	}

	public function get_emails_facultad($facultad)
	{	$cont=0;$cont2=0;
		$this->load->model("crm_read_model");
		$data=$this->crm_read_model->get_emails_facultad($facultad);
		
		foreach ($data as $datos) {
			if($datos["CORREO"]!=" "){
			$cont=$cont+1;		
		}
		}
		
		$datos['destinatarios']=$cont;
		$this->load->view("lector/conteo_emails",$datos);
	}

		public function get_emails_etapa($etapa)
	{	$cont=0;$cont2=0;
		$this->load->model("crm_read_model");
		$data=$this->crm_read_model->get_emails_etapa($etapa);
		
		foreach ($data as $datos) {
			if($datos["CORREO"]!=" "){
			$cont=$cont+1;		
		}
		}
		
		$datos['destinatarios']=$cont;
		$this->load->view("lector/conteo_emails",$datos);
	}

	public function send_facultad()
	{	
		$config['upload_path'] = './uploads_mails/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000KB';
		$config['max_width']  = '2560';
		$config['max_height']  = '1200';
		$this->load->library('upload', $config);
		$this->upload->do_upload();		
		//////////////////////////////////////////////////////
		$tamano_archivo = $_FILES['userfile']['size'];
		$nombre_archivo = $_FILES['userfile']['name'];
		$asunto=$this->input->post('asunto');
		$mensaje=$this->input->post('msj');
		$facultad=$this->input->post('facultades');
		$this->load->model("crm_read_model");
		$data=$this->crm_read_model->get_emails_facultad($facultad);
		 if($tamano_archivo>0)
               	{
               		$this->email->attach('./uploads_mails/'.$nombre_archivo);
           		}  
		foreach ($data as $datos) {
			if($datos["CORREO"]!=" "){
			   $this->email->clear();
			   $this->email->from("jADEv@company.com");
               $this->email->to($datos["CORREO"]);
               $this->email->subject($asunto);
               $this->email->message($mensaje);        
               $this->email->send();
			   $this->email->clear();
		}
		}
		
		redirect("index.php/2");

	}

	public function send_etapa(){

		$config['upload_path'] = './uploads_mails/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '10000KB';
		$config['max_width']  = '2560';
		$config['max_height']  = '1200';
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		//////////////////////////////////////////////////////
		$tamano_archivo = $_FILES['userfile']['size'];
		$nombre_archivo = $_FILES['userfile']['name'];
		$asunto=$this->input->post('asunto');
		$mensaje=$this->input->post('msj');
		$etapa=$this->input->post('etapa');	
		$this->load->model("crm_read_model");
		$data=$this->crm_read_model->get_emails_etapa($etapa);
		if($tamano_archivo>0)
               	{
               		$this->email->attach('./uploads_mails/'.$nombre_archivo);
           		}  
			foreach ($data as $datos) {
			if($datos["CORREO"]!=" "){
			   $this->email->clear();
			   $this->email->from("jADEv@company.com");
               $this->email->to($datos["CORREO"]);
               $this->email->subject($asunto);
               $this->email->message($mensaje);      
               $this->email->send();
			
		}

		}
		redirect("index.php/2");
}


}
