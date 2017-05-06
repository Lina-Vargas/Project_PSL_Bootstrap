<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function Index()
	{
		$datos = array('titulo' => "Zafiro");
		$imagenes = array('img1' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_1.JPG', 'img2' =>  'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_4.JPG', 'img3' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_8.JPG', 'img4' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/Quince_tadicional.JPG', 'img5' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/ejecutivos.JPG', 'img6' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_7.JPG', 'img7' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_10.JPG', 'img8' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/primera_comunion.JPG', 'img9' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/bautizo.JPG', 'img10' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/baby_shower.JPG', 'img11' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/empresariales.JPG');
		//$data['encabezado'] = "Menú";
		$this->load->view('Vista_basica/header', $datos);
		$this->load->view('Principal', $imagenes);
		$this->load->view('Vista_basica/footer');
	}
}
