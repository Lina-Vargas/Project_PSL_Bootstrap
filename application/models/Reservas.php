<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class Reservas extends CI_Model{

function __construct(){

}

function obtenerdatos($id,$s){
	
$query = $this->db->where('id',$id);
$query = $this->db->get('plan');
return $query->result();

}




}
?>)