<?php 
class Prueba extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
        function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
                $this->load->model('prueba_model');
	}
	function index()
	{
		$this->load->view('upload_form', array('error' => ' ' ));
	}
    

    function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|xlsx';
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

			$this->load->view('upload_form', $error);
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
                       // $excel = '';
                        
                $doc = array('col1'=>$objPHPExcel->getActiveSheet()->getCell("A1")->getValue(),'col2'=>$objPHPExcel->getActiveSheet()->getCell("B1")->getValue(),'col3'=>$objPHPExcel->getActiveSheet()->getCell("C1")->getValue(),'col4'=>$objPHPExcel->getActiveSheet()->getCell("D1")->getValue(),'col5'=>$objPHPExcel->getActiveSheet()->getCell("E1")->getValue());
                        
                if($this->prueba_model->verificar_doc($doc))
                {
                            //$data = array('error'=>0);
                        while($objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue() != "")
                        {	
                                $nombre = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();

                                $nom = explode(" ",$nombre);

                                //$objPHPExcel->getActiveSheet()->getStyle('D1:D'.$i)->getNumberFormat()->setFormatCode('yyyy-mmm-dd');
                                 
                                $fecha =utf8_encode($objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue());
                                $telefono = $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();

                                $nomb = $this->prueba_model->dividir($nom);
                               

                              $data =array('datoss'=>array('Nombre' =>$nomb['nombre'],'Apellido'=>$nomb['apellido'], 'fecha'=>$fecha,'telefono'=>$telefono));

                                $id = $this->prueba_model->ultimo_registro('customers')+ 1;

                                $package_id = $this->prueba_model->ultimo_registro('package_sales') + 1;
                               
                                $estado = "X";

                                $consulta = $this->prueba_model->verificar_customer($nomb['nombre']);
                                if($consulta)
                                {

                                	$id_customer = $consulta['customer_id'];

                                    $this->prueba_model->update_customer($id_customer);

                                    $con_package = $this->prueba_model->verificar_package($id_customer);
                                    if($con_package)
                                    {
                                        $data =array('info' =>"Datos ya existentes");
                                    }
                                    else
                                    {
                                        $package = array('survey_package_sale_id' => $package_id,'customer_id' =>$id_customer,"sale_date" =>$fecha);

                                    $res= $this->prueba_model->ingresar_package($package);
                                    
                                    $data = array('info'=>$res);
                                  
                                    
                                    }
                                	
                                	
                                	 
                                }
                                else
                                {

                                $this->prueba_model->set_excel(array('customer_id' => $id,'names' =>$nomb['nombre'],'surname'=>$nomb['apellido'],'parent_phone' =>$telefono,'package_status' =>$estado));

                            
                                $package_in = array('survey_package_sale_id' => $package_id,'customer_id' =>$id,'career_id'=>NULL,"sale_date" =>$fecha);
                                $this->prueba_model->ingresar_package($package_in);


                                	
                                }
                                $package_id++;
                        $i++;    
                        }

                        $this->load->view('upload_success',$data);
                }
                else
                {
                            $er = array('error'=>'Verificar Archivo de Excel');
                            $this->load->view('upload_form',$er);
                }
                        
                        
			//$this->load->view('upload_success',$data);
		}
	}
}