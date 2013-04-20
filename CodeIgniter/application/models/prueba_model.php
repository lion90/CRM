<?php

class Prueba_model extends CI_Model {

	public function __construct()
	{
		//$this->load->database();
	}
        public function set_excel($data)
        {
        
        $this->db->insert('customers',$data);
        return $this->affected_rows();
        }


        public function verificar_customer($nombre)
        {
        	
        	$this->db->select('customer_id','names');
                $this->db->where('names',$nombre);
        	$query = $this->db->get('customers'); 
        	return $query->row_array();



        }

         public function verificar_id_customer($id)
        {
                
                $this->db->select('customer_id');
                $this->db->where('customer_id',$id);
                $query = $this->db->get('customers'); 
                return $query->row_array();



        }

        public function verificar_package($customer_id)
        {
                
                //$this->db->select('customer_id','names');
                $this->db->where('customer_id',$customer_id);
                $query = $this->db->get('package_sales'); 
                return $query->row_array();

        }

        public function update_customer($id)
        {
            $this->db->where('customer_id',$id);
            $this->db->update('customers',array('package_status'=>'X'));


        }

        public function ultimo_registro($tabla)
        {
                return $this->db->count_all($tabla);
        }

        public function ingresar_package($data)
        {
            $query= $this->db->insert('package_sales',$data);
            return $this->db->affected_rows($query);

        }

        public function obtener_customer($nombre)
        {
                $this->db->select('customer_id');
                $this->db->where('names',$nombre);
                $query = $this->db->get('customers');
                return $query->row_array();

        }

        public function verificar_doc($doc)
        {
                $header = array('col1'=>'Descripción artículo','col2'=>'Nombre de cliente','col3'=>'Monto del documento','col4'=>'Fecha de factura','col5'=>'numero de telefono');
                $flag = FALSE;
                if($header == $doc)
                {
                        $flag = TRUE;
                        
                }
                else
                {
                        $flag = FALSE;
                        
                }
                return $flag;

        }

        public function dividir($nombre)
        {
                $indice = count($nombre);
                $cadena = "";
                if($indice ==2)
                {
                        $cadena = array('nombre'=>$nombre[0],'apellido'=>$nombre[1]);
                }
                else if($indice == 3)
                {
                        $cadena = array('nombre'=>$nombre[0]." ".$nombre[1],'apellido'=>$nombre[2]);

                }
                else if($indice == 4)
                {
                        $cadena = array('nombre'=>$nombre[0]." ".$nombre[1],'apellido'=>$nombre[2]." ".$nombre[3]);
                }
                else
                {
                        $cadena = array('nombre'=>$nombre[0]." ".$nombre[1],'apellido'=>$nombre[2]." ".$nombre[3]." ".$nombre[4]);
                }
                return $cadena;
        }
}
?>
