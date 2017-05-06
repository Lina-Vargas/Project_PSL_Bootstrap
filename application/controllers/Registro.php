<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

public function registrarUsuario()
	{
		$datos = array('titulo' => "Registro");
		$this->load->view('Vista_basica/header', $datos);
		$this->load->view('Registro');
		$this->load->view('Vista_basica/footer');
	}
	
}	