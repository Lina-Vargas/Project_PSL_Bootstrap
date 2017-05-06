<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planes extends CI_Controller {

public function Quince()
	{
		$datos = array('titulo' => "Quinceaños");
		$imagenes = array('img1' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Quince/Quince_tadicional', 'img2' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Quince/Quince_tematico', 'img3' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Quince/solo_Salon' );
		$this->load->view('Vista_basica/header', $datos);
		$this->load->view('Detalle_Planes/Quince', $imagenes);
		$this->load->view('Vista_basica/footer');
	}
	
}	