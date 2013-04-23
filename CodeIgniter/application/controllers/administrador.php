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
        $data=$this->session->all_userdata();
        if($data['USER_NAME']=='') redirect ('index.php/login');
        if($data['USER_TYPE_ID']!=1) redirect("index.php/".$data['USER_TYPE_ID']."");
        $this->load->view('templates/header');
		$this->load->view('templates/banner');
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}
	public function excel($error=array('error'=>" "))
	{
        
        $this->load->view('admin/upload_excel',$error);
          
	}

    public function archivo($data=array('error'=>" "))
    {
        $this->load->view('admin/upload_success',$data);
    }

    public function do_upload()
	{
       	$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'xlsx';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$dato;

		$this->load->library('upload', $config);
                $this->load->library('PHPExcel');
                $this->load->library('Excel2007');

		if ( !$this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

            $this->load->view('templates/header');
            $this->excel($error);
            $this->load->view('templates/footer');
		}
		else
		{
			//$data = array('upload_data' => $this->upload->data());
				$data = array('excel'=>$this->upload->data());
                        //$nom=$this->upload->data()['file_name'];
				$nom= $data['excel']['file_name'];
                $objPHPExcel=$this->excel2007->load("uploads/".$nom);
                        // Asignamos el excel activo
                $objWorksheet = $objPHPExcel->getActiveSheet();
                $objPHPExcel->setActiveSheetIndex(0);
                $i=2;
                $fech = 0;
                
                $package_in=0;
                    $customer_up=0;
                    $customer_in=0;
                    $package_up=0;
                        
                $doc = array('col1'=>$objPHPExcel->getActiveSheet()->getCell("A1")->getValue(),'col2'=>$objPHPExcel->getActiveSheet()->getCell("B1")->getValue(),'col3'=>$objPHPExcel->getActiveSheet()->getCell("C1")->getValue(),'col4'=>$objPHPExcel->getActiveSheet()->getCell("D1")->getValue(),'col5'=>$objPHPExcel->getActiveSheet()->getCell("E1")->getValue());
                        
                if($this->prueba_model->verificar_doc($doc))
                {
                            
                        while($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue() != "")
                        {
                                $nombre = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();

                                $nom = explode(" ",$nombre);

                                //$objPHPExcel->getActiveSheet()->getStyle('D1:D'.$i)->getNumberFormat()->setFormatCode('yyyy-mmm-dd');
                                 
                                $fecha = $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
                                $telefono = $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();

                                $nomb = $this->prueba_model->dividir($nom);
                               

                                $id = $this->prueba_model->ultimo_registro('customers')+ 1;

                                $package_id = $this->prueba_model->ultimo_registro('package_sales') + 1;
                               
                                $estado = "X";

                                $consulta = $this->prueba_model->verificar_customer($nomb['nombre']);
                                
                                if($consulta)
                                {

                                	$id_customer = $consulta['customer_id']; 

                                    $pack_status = $this->prueba_model->verificar_package_status($id_customer);
                                    if($pack_status)
                                    {
                                        $customer_up ="Datos ya Existentes";
                                    }
                                    else
                                    {
                                        $customer_up += $this->prueba_model->update_customer($id_customer);
                                   
                                       
                                    }

                                    //$data = array('customer_up'=>$customer_up);

                                    $con_package = $this->prueba_model->verificar_package($id_customer);

                                    if($con_package)
                                    {
                                        $package_up = "Datos ya existentes";
                                        
                                    }
                                    else
                                    {
                                        

                                    $package = array('customer_id' =>$id_customer,"sale_date" =>$fecha);

                                    $package_up += $this->prueba_model->ingresar_package($package);
                                    
                                    }
                                	
                                	//$data = array('pack_in'=>$package_up);
                                	 
                                }
                                else
                                {

                                $customer_up += $this->prueba_model->set_excel(array('names' =>$nomb['nombre'],'surname'=>$nomb['apellido'],'parent_phone' =>$telefono,'package_status' =>$estado));
                                //$data = array('customer_up'=>$customer_in);
                            
                                $packages_in = array('customer_id' =>$id,'career_id'=>NULL,"sale_date" =>$fecha);
                                $package_up += $this->prueba_model->ingresar_package($packages_in);

                                	//$data = array('pack_in'=>$package_in);
                                }

                                
                                $package_id++;
                                $data=array('customer_up'=>$customer_up,'pack_in'=>$package_up);
                        $i++;
                          
                        }
                        
                        $this->load->view('templates/header');
                        $this->archivo($data);
                }
                else
                {
                        $er = array('error'=>'Verificar Archivo de Excel');
                        $this->load->view('templates/header');
                        $this->excel($er);
                }
                        
                        
			//$this->load->view('upload_success',$data);
		}
	}



}