<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

function __construct(){
parent:: __construct();
$this->load->helper('form');
$this->load->model('Usuario');
$this->load->helper('url');
$this->load->library('form_validation');
}

public function registrarUsuario()
{
	$mensajes['mensaje'] ="";
	$datos = array('titulo' => "Registro");
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Registro',$mensajes);
	$this->load->view('Vista_basica/footer');
}


function registrardatos(){

	$datosusuario= array(
	'id' => $this->input->post('id'),
	'nombres'=> $this->input->post('nombres'),
	'apellidos' => $this->input->post('apellidos'),
	'telefono' =>$this->input->post('telefono'),
	'celular' =>$this->input->post('celular'),
	'correo' => $this->input->post('correo'),
	'direccion' =>$this->input->post('direccion'),
	'clave'=> $this->input->post('clave'));
	 
	$email=$this->input->post('correo');

	


	if($this->input->post()){
		$this->form_validation->set_rules('id','Número de documento','required|min_length[3]');
		$this->form_validation->set_rules('nombres','Nombres','required|min_length[3]');
		$this->form_validation->set_rules('apellidos','Apellidos','required|min_length[3]');
		$this->form_validation->set_rules('telefono','telefono','required|Trim');
		$this->form_validation->set_rules('celular','Celular','required|Trim');
		$this->form_validation->set_rules('correo','correo electronico','required|valid_email');
		$this->form_validation->set_rules('direccion','direccion','required|alpha_numeric_spaces');
		$this->form_validation->set_rules('clave','Clave','required');

	 	if($this->form_validation->run()==True){
	 		$Valida=$this->Usuario->revisarcorreo($email);
	 		
	 		if(!empty($Valida)){         
				$mensajes['mensaje'] ="Correo ya registrado, Ingrese uno diferente";
				$datos = array('titulo' => "Registro");
				$this->load->view('Vista_basica/header', $datos);
				$this->load->view('Registro',$mensajes);
				$this->load->view('Vista_basica/footer');
			}else{
	 	  		$this->Usuario->crearusuario($datosusuario);          
				$mensajes['mensaje'] = "Registro completado";
				$datos = array('titulo' => "Inicio  Sesión");
				$this->load->view('Vista_basica/header', $datos);
				$this->load->view('InicioSesion',$mensajes);
				$this->load->view('Vista_basica/footer');
			}
		} else {
			$mensajes['mensaje'] ="";
			$datos = array('titulo' => "Registro");
			$this->load->view('Vista_basica/header', $datos);
			$this->load->view('Registro',$mensajes);
			$this->load->view('Vista_basica/footer');
		}
	}else{
		$mensajes['mensaje'] ="";
		$datos = array('titulo' => "Registro");
		$this->load->view('Vista_basica/header', $datos);
		$this->load->view('Registro',$mensajes);
		$this->load->view('Vista_basica/footer');
	}
}
}	

?>