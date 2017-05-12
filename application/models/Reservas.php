<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class Reservas extends CI_Model{

function __construct(){

	parent::__construct();
	$this->load->database();
}

function usuario($email){
$query = $this->db->where('correo',$email);
$query = $this->db->get('usuario');
return $query->result();
}

function plan($id){
$this->load->database();
$query = $this->db->where('id',$id);
$query = $this->db->get('plan');
return $query->result();

}
function creareserva($datosreserva){

$this->db->insert('reserva',array(
	     
		'idUsuario'=>$datosreserva['idUsuario'],  
	  	'idPlan'=>$datosreserva['idPlan'],  
	  	'fecha'=>$datosreserva['fecha'],
	  	'hora'=>$datosreserva['hora']
        ));

}

function total($c){
$this->db->select('*');
$this->db->from("usuario");
$this->db->join('reserva','reserva.idUsuario = usuario.id');
$this->db->join('plan','plan.id = reserva.idPlan');
$query =$this->db->where('correo',$c);
$query =$this->db->get('');
return $query->result();


}
function revisarcorreo($a){
	$this->db->select('id');
	$this->db->from('usuario');
	$this->db->where('correo',$a);
$query = $this->db->get();
	if ($query->num_rows() > 0){
   		return $query->row();
	}
	return null; 
}

function revisarinfor($fecha){
$query = $this->db->where('fecha',$fecha);
$query = $this->db->get('reserva');
	
	return $query; 
}
function valid($fecha,$hora){
$query = $this->db->where('fecha',$fecha);
$query = $this->db->where('hora',$hora);
$query = $this->db->get('reserva');
return $query->result();
}


}
?>)