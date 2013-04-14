<?php
class CRM_read_model extends CI_Model
{
   public function __construct()
   {
      parent::__construct();
      $this->load->database();
   }

/*PARA REPORTES DE ENCUESTAS*/
   public function como_se_enteraron_encuesta()
   {  $query = $this->db->query("SELECT COUNT(*) TOTAL, 
      (SELECT COUNT(IEM_RADIO) FROM IEM_SURVEY T2 WHERE IEM_RADIO='X') RADIO, 
      (SELECT COUNT(IEM_PRENSA) FROM IEM_SURVEY T3 WHERE IEM_PRENSA='X') PRENSA, 
      (SELECT COUNT(IEM_VALLAS) FROM IEM_SURVEY T4 WHERE IEM_VALLAS='X') VALLAS_PUBLICITARIAS, 
      (SELECT COUNT(IEM_VIS_COL) FROM IEM_SURVEY T5 WHERE IEM_VIS_COL='X') VISITA, 
      (SELECT COUNT(IEM_TV) FROM IEM_SURVEY T6 WHERE IEM_TV='X') TV, 
      (SELECT COUNT(IEM_OTRAS) FROM IEM_SURVEY T7 WHERE IEM_OTRAS='X') OTRAS 
      FROM IEM_SURVEY T1");
      return $query->row_array();
   }

   public function conteo_opcion_carreras()
   {
      $query = $this->db->query(" SELECT T1.CAREER_NAME CARRERAS,
       (SELECT COUNT(T6.IEM_OPTION) FROM IEM_CAREERS T6 WHERE T6.CAREER_ID=T1.CAREER_ID) TOTAL_OPCIONES,
       (SELECT COUNT(T5.IEM_OPTION) FROM IEM_CAREERS T5 WHERE T5.CAREER_ID=T1.CAREER_ID AND T5.IEM_OPTION=1) OPCION1,
       (SELECT COUNT(T6.IEM_OPTION) FROM IEM_CAREERS T6 WHERE T6.CAREER_ID=T1.CAREER_ID AND T6.IEM_OPTION=2) OPCION2
FROM CAREERS T1 
INNER JOIN IEM_CAREERS T2 ON  T1.CAREER_ID=T2.CAREER_ID
INNER JOIN IEM_SURVEY T3 ON T2.IEM_SURVEY_ID=T3.IEM_SURVEY_ID
INNER JOIN CUSTOMERS T4 ON T3.CUSTOMER_ID=T4.CUSTOMER_ID
GROUP BY CARRERAS ORDER BY TOTAL_OPCIONES ASC");
      return $query->result_array();
   }

   public function conteo_opcion_universidades()
   {
      $query = $this->db->query(" SELECT T1.INSTITUTION_NAME UNIVERSIDAD,
       (SELECT COUNT(T5.OPCION) FROM IEM_INSTITUTES T5 WHERE T5.INSTITUTION_ID=T2.INSTITUTION_ID) TOTAL_OPCIONES,
       (SELECT COUNT(T5.OPCION) FROM IEM_INSTITUTES T5 WHERE T5.INSTITUTION_ID=T2.INSTITUTION_ID AND T5.OPCION = 1) OPCION1,
       (SELECT COUNT(T5.OPCION) FROM IEM_INSTITUTES T5 WHERE T5.INSTITUTION_ID=T2.INSTITUTION_ID AND T5.OPCION = 2) OPCION2
FROM INSTITUTIONS T1
INNER JOIN IEM_INSTITUTES T2 ON T1.INSTITUTION_ID=T2.INSTITUTION_ID
INNER JOIN IEM_SURVEY T3 ON T3.IEM_SURVEY_ID=T2.IEM_SURVEY_ID
INNER JOIN CUSTOMERS T4 ON T3.CUSTOMER_ID=T4.CUSTOMER_ID
GROUP BY UNIVERSIDAD ORDER BY TOTAL_OPCIONES ASC");
      return $query->result_array();

   }
/*PARA REPORTES DE OPEN HOUSE*/
   public function como_se_enteraron_open_house()
   {
      $query = $this->db->query(" SELECT COUNT(*) TOTAL,
         (SELECT COUNT(OH_RADIO) FROM OPEN_HOUSE_SURVEY WHERE OH_RADIO='X') RADIO,
         (SELECT COUNT(OH_TV) FROM OPEN_HOUSE_SURVEY WHERE OH_TV='X') TV, 
         (SELECT COUNT(OH_PRESS) FROM OPEN_HOUSE_SURVEY WHERE OH_PRESS='X') PRENSA, 
         (SELECT COUNT(OH_BILLBOARD) FROM OPEN_HOUSE_SURVEY WHERE OH_BILLBOARD='X') CARTELERA  
         FROM OPEN_HOUSE_SURVEY ");
      return $query->row_array();
   }

   public function comparacion_clientes_openhouse_paquete_matricula()
   {
      $query = $this->db->query(" SELECT COUNT(T1.CUSTOMER_ID) CONTEO_ESTUDIANTES, 
       (SELECT COUNT(T3.OPEN_HOUSE_STATUS) FROM CUSTOMERS T3 
        INNER JOIN OPEN_HOUSE_SURVEY T4 ON T3.CUSTOMER_ID=T4.CUSTOMER_ID
        WHERE T3.OPEN_HOUSE_STATUS='X' AND T3.PACKAGE_STATUS = 'X' 
        AND T3.CUSTOMER_STATE = 'T' AND T4.TIPO_CONTACTO='O') OPENHOUSE_Y_PAQUETE,
       
       (SELECT COUNT(T5.OPEN_HOUSE_STATUS) FROM CUSTOMERS T5 
        INNER JOIN OPEN_HOUSE_SURVEY T6 ON T5.CUSTOMER_ID=T6.CUSTOMER_ID
        WHERE T5.OPEN_HOUSE_STATUS='X' AND T5.PACKAGE_STATUS = 'X' 
        AND T5.REGISTRATION_STATUS='X' AND T5.CUSTOMER_STATE = 'T') PAQUETE_Y_MATRICULA
       
        FROM CUSTOMERS T1 
        INNER JOIN OPEN_HOUSE_SURVEY T2 ON T1.CUSTOMER_ID=T2.CUSTOMER_ID
        WHERE T1.CUSTOMER_STATE = 'T'");
        return $query->row_array();

   }



  

}
?>