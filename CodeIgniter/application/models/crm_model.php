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
      $query = $this->db->get_where('usuario', array('nick' => $nick,'password' => $password));
      return $query->row_array();
   }
}
?>