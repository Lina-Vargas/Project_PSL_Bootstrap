<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class Planes extends CI_Model{

function __construct(){
 parent:: __construct();
  $this->load->database();
}




function obtenerdatosplan(){

$this->load->database();
$query = $this->db->get('plan');
return $query->result();
}

}
?>