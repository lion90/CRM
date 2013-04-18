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
		$this->load->helper('url');
		$this->load->library('session');
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=1) redirect("index.php/".$data['USER_TYPE_ID']."");
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
        
        if ($this->input->post('escuchado1',true)==false)
        {
            $cd='';
        }
        else
        {
            $cd=$this->input->post('escuchado1',true);
        }
        if ($this->input->post('escuchado2',true)==false)
        {
            $fc='';
        }
        else
        {
            $fc=$this->input->post('escuchado2',true);
        }
        if ($this->input->post('escuchado3',true)==false)
        {
            $te='';
        }
        else
        {
            $te=$this->input->post('escuchado3',true);
        }
        if ($this->input->post('escuchado4',true)==false)
        {
            $ac='';
        }
        else
        {
            $ac=$this->input->post('escuchado4',true);
        }
        if ($this->input->post('escuchado5',true)==false)
        {
            $ci='';
        }
        else
        {
            $ci=$this->input->post('escuchado5',true);
        }
        if ($this->input->post('escuchado6',true)==false)
        {
            $lda='';
        }
        else
        {
            $lda=$this->input->post('escuchado6',true);
        }
        if ($this->input->post('escuchado7',true)==false)
        {
            $ot='';
        }
        else
        {
            $ot=$this->input->post('escuchado7',true);
        }
        if ($this->input->post('escuchado8',true)==false)
        {
            $na='';
        }
        else
        {
            $na=$this->input->post('escuchado8',true);
        }
        if ($this->input->post('group1',true)==false)
        {
            $ex='';
        }
        else
        {
            $ex=$this->input->post('group1',true);
        }
        if ($this->input->post('group2',true)==false)
        {
            $mb='';
        }
        else
        {
            $mb=$this->input->post('group2',true);
        }
        if ($this->input->post('group3',true)==false)
        {
            $bu='';
        }
        else
        {
            $bu=$this->input->post('group3',true);
        }
        if ($this->input->post('group4',true)==false)
        {
            $ma='';
        }
        else
        {
            $ma=$this->input->post('group4',true);
        }
        if ($this->input->post('publici1',true)==false)
        {
            $ra='';
        }
        else
        {
            $ra=$this->input->post('publici1',true);
        }
        if ($this->input->post('publici2',true)==false)
        {
            $va='';
        }
        else
        {
            $va=$this->input->post('publici2',true);
        }
        if ($this->input->post('publici3',true)==false)
        {
            $pr='';
        }
        else
        {
            $pr=$this->input->post('publici3',true);
        }
        if ($this->input->post('publici4',true)==false)
        {
            $vc='';
        }
        else
        {
            $vc=$this->input->post('publici4',true);
        }
        if ($this->input->post('publici5',true)==false)
        {
            $tv='';
        }
        else
        {
            $tv=$this->input->post('publici6',true);
        }
        if ($this->input->post('publici1',true)==false)
        {
            $ot2='';
        }
        else
        {
            $ot2=$this->input->post('publici6',true);
        }




        $fecha=$this->input->post('fecha',true);

        $cliente = $this->en->ingresar_cliente($col,$nombre,$email,$direccion,$nompapa,$tel,$tec);
        foreach ($cliente->result() as $fila)
        {    
            $idcliente=$fila->CUSTOMER_ID;
        }
        $vi='';
        $encues = $this->en->ingresar_encuesta($idcliente,$fecha,$cd,$te,$ci,$fc,$ac,$lda,$na,$ot,$vi,$ot2,$ex,$mb,$bu,$ma,$ra,$pr,$tv,$va,$vc);
        foreach ($encues->result() as $fila)
        {    
            $idencues=$fila->IEM_SURVEY_ID;
        }
        $this->en->ingresar_uni($uni1,$idencues,"1");
        $this->en->ingresar_uni($uni2,$idencues,"2");
        $this->en->ingresar_carre($idencues,$car1,"1");
        $this->en->ingresar_carre($idencues,$car2,"2");

        redirect("index.php/3");
	}

			public function confirmar_openhouse(){
				$this->load->helper('url');
		$this->load->library('session');
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=1) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('digitador/confirmar_openhouse');
	}
	public function update_datos(){
		$this->load->helper('url');
		$this->load->library('session');
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=1) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('digitador/update_datos');
	}
	public function insert_datos(){
		$this->load->helper('url');
		$this->load->library('session');
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=1) redirect("index.php/".$data['USER_TYPE_ID']."");
		$this->load->view('templates/header');
		$this->load->view('digitador/insert_datos');
	}
}
?>