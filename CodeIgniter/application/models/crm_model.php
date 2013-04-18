<?php
class CRM_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
      $this->load->database();
   }

   public function comprobar_usuario($nick, $pass)
   {  $password=md5($pass);
      $query = $this->db->get_where('users', array('USER_NAME' => $nick,'PASSWORD' => $password));
      return $query->row_array();
   }

   public function nombreautocomplete()
   {
      $query=$this->db->query(
         "
         SELECT NAMES,SURNAME,INSTITUTIONS.INSTITUTION_NAME FROM CUSTOMERS,INSTITUTIONS WHERE CUSTOMERS.INSTITUTION_ID = INSTITUTIONS.INSTITUTION_ID
         "
         );
      return $query->result_array();
   }
   public function institucionesautocomplete(){
      $query=$this->db->query(
         "
         SELECT INSTITUTION_NAME FROM INSTITUTIONS WHERE INSTITUTION_TYPE='M'
         "
         );
      return $query->result_array();  
   }
   public function mediosautocomplete(){
      $query=$this->db->query(
         "
         SELECT VALUE_DESCRIPTION FROM ALL_VALUES WHERE VALUE_SET_ID=4         
         "
         );
      return $query->result_array();  
   }

   public function confirmar_datos($nombre){
      $query=$this->db->query(
         "
         SELECT CUSTOMER_ID,NAMES,SURNAME,INSTITUTIONS.INSTITUTION_NAME, PARENT_PHONE, CUSTOMER_EMAIL FROM CUSTOMERS,INSTITUTIONS WHERE NAMES='".$nombre."' AND INSTITUTIONS.INSTITUTION_ID=CUSTOMERS.INSTITUTION_ID
         "
         );
      if($query->num_rows()>0)
      return $query->row_array();
      else
         return $query="";
   }
   public function insert_open($names,$surname,$institution,$phone,$email,$medio){
            $qr=$this->db->query(
               "
               select institution_id from institutions where institution_name='".$institution."'
               "
               );
            if($qr->num_rows()<1)
            {
               $this->db->query("
                  insert into institutions (institution_name,acronym,institution_type)
                  values('".$institution."', '','M')
                  ");

               $qr=$this->db->query(
               "
               select institution_id from institutions where institution_name='".$institution."'
               "
               );
            }
            $qr= $qr->row_array();

            $this->db->query("
                  insert into customers (institution_id,names,surname,customer_email,open_house_status,parent_phone)
                  values(".$qr['institution_id'].",'".$names."', '".$surname."', '".$email."','x',".$phone.")
               ");
            $qr3=$this->db->query("
                  select customer_id from customers where names='".$names."' and surname='".$surname."' and customer_email='".$email."'
               ");

            $qr3=$qr3->row_array();
            
                        switch ($medio) {
               case 1://radio
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_radio, tipo_contacto)
                  values(".$qr3['customer_id'].",6003,'x','V')
               ");
                  break;
               case 2://prensa
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_press, tipo_contacto)
                  values(".$qr3['customer_id'].",6003,'x','V')
               ");
                  break;
               case 3://tv
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_tv, tipo_contacto)
                  values(".$qr3['customer_id'].",6003,'x','V')
               ");
                  break;
               case 4://visita
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, institutions_visits, tipo_contacto)
                  values(".$qr3['customer_id'].",6003,'x','V')
               ");
                  break;
               case 5://web
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_billboard, tipo_contacto)
                  values(".$qr3['customer_id'].",6003,'x','V')
               ");
                  break;
               case 6://facebook
                 $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_billboard, tipo_contacto)
                  values(".$qr3['customer_id'].",6003,'x','V')
               ");
                 
               }
            
            return $this->db->affected_rows();


         }
public function update_open($id,$names,$surname,$institution,$phone,$email,$medio){
            $qr=$this->db->query(
               "
               select institution_id from institutions where institution_name='".$institution."'
               "
               );
            if($qr->num_rows()<1)
            {
               $this->db->query("
                  insert into institutions (institution_name,acronym,institution_type)
                  values('".$institution."', '','M')
                  ");

               $qr=$this->db->query(
               "
               select institution_id from institutions where institution_name='".$institution."'
               "
               );
            }
            $qr= $qr->row_array();

            $this->db->query("
                  update customers set institution_id=".$qr['institution_id'].", names='".$names."', surname='".$surname."', customer_email='".$email."', open_house_status='x', parent_phone=".$phone."
                  where customer_id=".$id."
               ");
                      
               switch ($medio) {
               case 1://radio
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_radio, tipo_contacto)
                  values(".$id.",6003,'x','V')
               ");
                  break;
               case 2://prensa
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_press, tipo_contacto)
                  values(".$id.",6003,'x','V')
               ");
                  break;
               case 3://tv
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_tv, tipo_contacto)
                  values(".$id.",6003,'x','V')
               ");
                  break;
               case 4://visita
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, institutions_visits, tipo_contacto)
                  values(".$id.",6003,'x','V')
               ");
                  break;
               case 5://web
                  $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_billboard, tipo_contacto)
                  values(".$id.",6003,'x','V')
               ");
                  break;
               case 6://facebook
                 $this->db->query("
                  insert into open_house_survey(customer_id, open_house_id, oh_billboard, tipo_contacto)
                  values(".$id.",6003,'x','V')
               ");
                 
               }
            
            return $this->db->affected_rows();


         }
}
?>