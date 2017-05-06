<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sesion extends CI_Controller {

public function iniciarSesion()
	{
		$datos = array('titulo' => "Inicio  Sesión");
		$this->load->view('Vista_basica/header', $datos);
		$this->load->view('InicioSesion');
		$this->load->view('Vista_basica/footer');
	}

}	