<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends CI_Controller {

function __construct(){
parent:: __construct();
$this->load->helper('form');
$this->load->model('Planes');
$this->load->helper('url');
$this->load->library('form_validation');
}


function index(){
	$datos = array('titulo' => "Inicio  Sesión");
	$imagenes = array('img1' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_1.JPG', 'img2' =>  'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_4.JPG', 'img3' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_8.JPG', 'img4' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/Quince_tadicional.JPG', 'img5' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/ejecutivos.JPG', 'img6' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_7.JPG', 'img7' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/decoracion_10.JPG', 'img8' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/primera_comunion.JPG', 'img9' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/bautizo.JPG', 'img10' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/baby_shower.JPG', 'img11' => 'http://localhost/Project_PSL_Bootstrap/imagenes/pag_Principal/empresariales.JPG');
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('paginaprincipal', $imagenes);
	$this->load->view('Vista_basica/footer');
}


public function Quince()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenerquince();	
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
	}
	

public function Cumple()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenercumple();		
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
}

public function Evento()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenerevento();
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
}

public function Comuni()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenercomunion();
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
}


public function Boda()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenerboda();
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
}

public function Bauti()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenerbautizo();
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
}

public function Baby()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenerbaby();
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
}

public function Fiesta()
{
	$datos = array('titulo' => "Inicio  Sesión");
	$datosplanes['datosdelplan']=$this->Planes->obtenerfiesta();
	$this->load->view('Vista_basica/header', $datos);
	$this->load->view('Detalle_Planes/Quince', $datosplanes);
	$this->load->view('Vista_basica/footer');
}
}
?>	