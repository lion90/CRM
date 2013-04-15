<?php
class Encuesta extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
      $this->load->database();
   }

   public function colegio()
   {  
      $query = $this->db->query(' SELECT `INSTITUTION_NAME` FROM `institutions` WHERE `INSTITUTION_TYPE`="m" order by `INSTITUTION_NAME` asc ');
      return $query;
   }
   public function tecnicos()
   {
      $query = $this->db->query('SELECT  `VALUE_DESCRIPTION` FROM `all_values` where `VALUE_SET_ID`="2" ');
      return $query;
   }
   public function carreras()
   {
      $query = $this->db->query('SELECT  `CAREER_NAME` FROM  careers   ');
      return $query; 
   }
   public function universidades()
   {
       $query = $this->db->query('SELECT  `INSTITUTION_NAME` FROM `institutions` WHERE `INSTITUTION_TYPE`="S" order by `INSTITUTION_NAME` asc');
      return $query;
   }
   public function ingresar_cliente($q1,$q2,$q3,$q4,$q5,$q6,$q7)
   {
      $query = $this->db->query('INSERT INTO `customers`(`CUSTOMER_ID`, `INSTITUTION_ID`, `NAMES`, `SURNAME`, `CUSTOMER_EMAIL`, `SURVEY_STATUS`, `OPEN_HOUSE_STATUS`, `PACKAGE_STATUS`, `REGISTRATION_STATUS`, `CUSTOMER_ADDRESS_LINE1`, `CUSTOMER_CITI`, `CUSTOMER_STATE`, `PARENT_NAME`, `PARENT_EMAIL`, `PARENT_PHONE`, `GENDER`, `HIGH_SCHOOL_DIPLOMA`, `PARENT_ADDRESS_LINE1`) VALUES ("","'.$q1.'","'.$q2.'","","'.$q3.'","","","","","'.$q4.'","","","'.$q5.'","", "'.$q6.'","","'.$q7.'","")');
      return 1;
   }
   public function buscar_colegio($q1)
   {
      $query = $this->db->query('SELECT `INSTITUTION_ID` FROM `institutions` WHERE `INSTITUTION_NAME`="'.$q1.'"');
      return $query;
   }
    public function buscar_tecnico($q1)
   {
      $query = $this->db->query('SELECT `VALUE_CODE` FROM `all_values` where `VALUE_DESCRIPTION`="'.$q1.'"');
      return $query;
   }
    public function buscar_carrera($q1)
   {
      $query = $this->db->query('SELECT `CAREER_ID` FROM `careers` WHERE `CAREER_NAME`="'.$q1.'"');
      return $query;
   }
}
?>