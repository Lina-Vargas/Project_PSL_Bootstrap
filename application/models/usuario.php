<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class Usuario extends CI_Model{

function __construct(){
 parent:: __construct();
  $this->load->database();
}

function revisarcorreo($email){
$query = $this->db->where('correo',$email);
$query = $this->db->get('usuario');
return $query->result();

}


function revisarclave($password){
$queryy = $this->db->where('clave',$password);
$queryy = $this->db->get('usuario');
return $queryy->result();


}


function revisarid($documento){
$queryyy = $this->db->where('id',$documento);
$queryyy = $this->db->get('usuario');
return $queryyy->result();


}

function crearusuario($datosusuario){

$this->db->insert('usuario',array(
		'id'=>$datosusuario['id'],  
	  	'nombres'=>$datosusuario['nombres'],  
	  	'apellidos'=>$datosusuario['apellidos'],
	  	'telefono'=>$datosusuario['telefono'],
        'celular'=>$datosusuario['celular'],
	  	'correo'=>$datosusuario['correo'],  
        'direccion'=>$datosusuario['direccion'],  
        'clave'=>$datosusuario['clave'] ));


}

}
?>