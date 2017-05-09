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


function obtenercumple(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','cumpleaños');
	$query = $this->db->get();
    return $query->result();

}


function obtenerquince(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','quinceaños');
	$query = $this->db->get();
    return $query->result();

}

function obtenerevento(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','evento ejecutivo');
	$query = $this->db->get();
    return $query->result();

}

function obtenercomunion(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','primera comunión');
	$query = $this->db->get();
    return $query->result();

}

function obtenerboda(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','boda');
	$query = $this->db->get();
    return $query->result();

}
function obtenerbautizo(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','bautizo');
	$query = $this->db->get();
    return $query->result();

}
function obtenerbaby(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','baby shower');
	$query = $this->db->get();
    return $query->result();

}

function obtenerfiesta(){

	$this->db->select('*');
	$this->db->from('plan');
	$this->db->where('nombre','fiestas empresariales');
	$query = $this->db->get();
    return $query->result();

}

}
?>