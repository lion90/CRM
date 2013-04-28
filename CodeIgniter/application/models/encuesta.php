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
      $query = $this->db->query('SELECT  CAREER_NAME FROM  careers   ');
      return $query; 
   }
   public function universidades()
   {
       $query = $this->db->query('SELECT  `INSTITUTION_NAME` FROM `institutions` WHERE `INSTITUTION_TYPE`="S" order by `INSTITUTION_NAME` asc');
      return $query;
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
   public function ingresar_cliente($q1,$q2,$q3,$q4,$q5,$q6,$q7)
   {
      $this->db->query('INSERT INTO `customers`(`CUSTOMER_ID`, `INSTITUTION_ID`, `NAMES`, `SURNAME`, `CUSTOMER_EMAIL`, `SURVEY_STATUS`, `OPEN_HOUSE_STATUS`, `PACKAGE_STATUS`, `REGISTRATION_STATUS`, `CUSTOMER_ADDRESS_LINE1`, `CUSTOMER_CITI`, `CUSTOMER_STATE`, `PARENT_NAME`, `PARENT_EMAIL`, `PARENT_PHONE`, `GENDER`, `HIGH_SCHOOL_DIPLOMA`, `PARENT_ADDRESS_LINE1`) VALUES ("","'.$q1.'","'.$q2.'","","'.$q3.'","","","","","'.$q4.'","","","'.$q5.'","", "'.$q6.'","","'.$q7.'","")');
      $query = $this->db->query('SELECT `CUSTOMER_ID`  FROM `customers` WHERE `INSTITUTION_ID`="'.$q1.'" and `NAMES`="'.$q2.'" and  `CUSTOMER_EMAIL`="'.$q3.'" and  `CUSTOMER_ADDRESS_LINE1` ="'.$q4.'" and `PARENT_NAME` ="'.$q5.'" and  `PARENT_PHONE`="'.$q6.'" and `HIGH_SCHOOL_DIPLOMA`="'.$q7.'"');
      return $query;
   }
   public function ingresar_encuesta($q2,$q3,$q4,$q5,$q6,$q7,$q8,$q9,$q10,$q11,$q12,$q13,$q14,$q15,$q16,$q17,$q18,$q19,$q20,$q21,$q22)
   {
      $this->db->query('INSERT INTO `iem_survey`(`IEM_SURVEY_ID`, `CUSTOMER_ID`, `IEM_DATE`, `IEM_CD`, `IEM_TEC`, `IEM_CL`, `IEM_FC`, `IEM_ACR`, `IEM_LAB`, `IEM_V`, `IEM_OTRAS`, `IEM_VISITS_INSTITUTIONS`, `IEM_OTHERS2`, `IEM_EXEL`, `IEM_MB`, `IEM_BUENA`, `IEM_MALA`, `IEM_RADIO`, `IEM_PRENSA`, `IEM_TV`, `IEM_VALLAS`, `IEM_VIS_COL`) VALUES ("","'.$q2.'","'.$q3.'","'.$q4.'","'.$q5.'","'.$q6.'","'.$q7.'","'.$q8.'","'.$q9.'","'.$q10.'","'.$q11.'","'.$q12.'","'.$q13.'","'.$q14.'","'.$q15.'","'.$q16.'","'.$q17.'","'.$q18.'","'.$q19.'","'.$q20.'","'.$q21.'","'.$q22.'")');
      $query = $this->db->query('SELECT  `iem_survey`.`IEM_SURVEY_ID` FROM iem_survey ORDER BY  `iem_survey`.`IEM_SURVEY_ID` ASC ');
      return $query;
   }
   public function ingresar_uni($q1,$q2,$q3)
   {
      $this->db->query('INSERT INTO `iem_institutes`(`IEM_INSTITUTES_ID`, `INSTITUTION_ID`, `IEM_SURVEY_ID`, `OPCION`) VALUES ("","'.$q1.'","'.$q2.'","'.$q3.'")');
      //$query = $this->db->query('');
      //return $query;
   }
   public function ingresar_carre($q1,$q2,$q3)
   {
      $this->db->query('INSERT INTO `iem_careers`(`IEM_CAREER`, `IEM_SURVEY_ID`, `CAREER_ID`, `IEM_OPTION`) VALUES ("","'.$q1.'","'.$q2.'","'.$q3.'")');
      //$query = $this->db->query('');
      //return $query;
   }
}
?>