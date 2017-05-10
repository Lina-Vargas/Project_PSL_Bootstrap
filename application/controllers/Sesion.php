<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller {


function __construct(){
parent:: __construct();
$this->load->helper('form');
$this->load->model('Usuario');
$this->load->helper('url');
$this->load->library('form_validation');
$this->load->library("session");

}

public function iniciarSesion()
{
	$mensajes['mensaje'] ="";
	$datos = array('titulo' => "Inicio  Sesión");
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('InicioSesion',$mensajes);
	$this->load->view('Vista_basica/footer');
}

function revisardatos(){

    $password=$this->input->post('clave');
    $email=$this->input->post('correo');

	if($this->input->post()){
	 		
		$this->form_validation->set_rules('correo','Correo electrónico/','required|valid_email');
		$this->form_validation->set_rules('clave','Clave','required');
	    
		if($this->form_validation->run()==True){
			$Valida=$this->Usuario->revisarcorreo($email);

			$Validas=$this->Usuario->revisarclave($password);
		 	  
		 	if(empty($Valida)){
				$mensajes['mensaje'] = "No esta registrado, por favor registrarse,antes revisar el Correo electrónico ingresado";
				$datos = array('titulo' => "Inicio  Sesión");
				$this->load->view('Vista_basica/header', $datos);
				$this->load->view('InicioSesion',$mensajes);
				$this->load->view('Vista_basica/footer');
	      	} else{
		      	if (empty($Validas)){
					$mensajes['mensaje'] = "No esta registrado, por favor registrarse,antes revisar la contraseña ingresada";
					$datos = array('titulo' => "Inicio  Sesión");
					$this->load->view('Vista_basica/header', $datos);
					$this->load->view('InicioSesion',$mensajes);
					$this->load->view('Vista_basica/footer');
		      	}else{
					$usuario_data = array(
					'correo' => $email,
					'clave'=>$password,    
					'logueado' => TRUE
					);
					$this->session->set_userdata($usuario_data);
					redirect('plan');
	        	}
 			}

		} else {
			$mensajes['mensaje'] ="";
			$datos = array('titulo' => "Inicio  Sesión");
			$this->load->view('Vista_basica/header', $datos);
			$this->load->view('InicioSesion',$mensajes);
			$this->load->view('Vista_basica/footer');
		}
	}else{
		$mensajes['mensaje'] ="";
		$datos = array('titulo' => "Inicio  Sesión");
		$this->load->view('Vista_basica/header', $datos);
		$this->load->view('InicioSesion',$mensajes);
		$this->load->view('Vista_basica/footer');
	}
}

public function cerrar_sesion() {
	$usuario_data = array(
	 'logueado' => FALSE
	);
	$this->session->set_userdata($usuario_data);
	redirect('Sesion/iniciarSesion');
	}
}

?>	