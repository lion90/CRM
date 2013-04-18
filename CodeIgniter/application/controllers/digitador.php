<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Digitador extends CI_Controller {

	public function __construct()
   {
      parent::__construct();
      $this->load->model('crm_model');
   }	
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=3) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('digitador/index');
		$this->load->view('templates/footer');
	}
		public function ing_encuesta(){
		$this->load->model("encuesta","en"); 
		 $data['query1'] = $this->en->colegio();
		 $data['query2'] = $this->en->tecnicos();
		 $data['query3'] = $this->en->carreras();
		 $data['query4'] = $this->en->universidades();

		$this->load->view('digitador/ingreso_encuesta', $data);
	}
		public function ing_openhouse(){
		$this->load->view('templates/header');
		$this->load->view('digitador/ingreso_openhouse');
	}
		public function dato_encuesta(){

			$this->load->model("encuesta","en"); 
			 
			$fecha=$this->input->post('fecha',true);

			$query1 =  $this->en->buscar_colegio($this->input->post('colegio',true));
			foreach ($query1->result() as $fila)
			{    
			    $col=$fila->INSTITUTION_ID;
	 	    }  

			$query2 =  $this->en->buscar_tecnico($this->input->post('tecnico',true));
			foreach ($query2->result() as $fila)
			{    
			    $tec=$fila->VALUE_CODE;
	 	    }  

			$nombre=$this->input->post('nombre',true);
			$email=$this->input->post('email',true);
			$direccion=$this->input->post('direccion',true);
			$nompapa=$this->input->post('nombrefamilia',true);
			$tel=$this->input->post('tel',true);
			$trabajo=$this->input->post('trabajo',true);


			$query3 =  $this->en->buscar_carrera($this->input->post('carrera1',true));
			foreach ($query3->result() as $fila)
			{    
			    $car1=$fila->CAREER_ID;
	 	    }  



			$query4 =  $this->en->buscar_carrera($this->input->post('carrera2',true));
			foreach ($query4->result() as $fila)
			{    
			    $car2=$fila->CAREER_ID;
	 	    }  


			$query5 =  $this->en->buscar_colegio($this->input->post('universidad1',true));
			foreach ($query5->result() as $fila)
			{    
			    $uni1=$fila->INSTITUTION_ID;
	 	    }  


			$query6 =  $this->en->buscar_colegio($this->input->post('universidad2',true));
			foreach ($query6->result() as $fila)
			{    
			    $uni2=$fila->INSTITUTION_ID;
	 	    }  
	    	$query7=$this->en->ingresar_cliente($col,$nombre,$email,$direccion,$nompapa,$tel,$tec);
	    	
		    redirect("index.php/3");
	}

			public function confirmar_openhouse(){
		$this->load->view('templates/header');
		$this->load->view('digitador/confirmar_openhouse');
	}
	public function update_datos(){
		$this->load->view('templates/header');
		$this->load->view('digitador/update_datos');
	}
	public function insert_datos(){
		$this->load->view('templates/header');
		$this->load->view('digitador/insert_datos');
	}
}
?>