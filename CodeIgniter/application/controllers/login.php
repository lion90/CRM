<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->view('templates/footer');
	}
	public function redireccion(){
		 $this->load->library("form_validation");
          $this->form_validation->set_rules("nick","Nick", "required");
          $this->form_validation->set_rules("pass","Password", "required|min_length[5]");
          if ($this->form_validation->run() == FALSE)
          {
             $this->index();
          }
          else
          {
              $this->load->model("CRM_model");
             if ($this->CRM_model->comprobar_usuario($_REQUEST['nick'], $_REQUEST['pass']))
             {  $data=$this->CRM_model->comprobar_usuario($_REQUEST['nick'], $_REQUEST['pass']);
                  $this->load->library('session');
                   $this->session->set_userdata('username', $data['USER_NAME'] );
               redirect("index.php/".$data['USER_TYPE_ID']."");
             }
             else
             {
                 $this->index();
             }
          }

	}

public function logout()
       {
           $this->load->helper('url');
           $this->load->library('session');
           $this->session->unset_userdata('username');
           $this->session->sess_destroy();
           redirect("index.php/".login);
       }

}
