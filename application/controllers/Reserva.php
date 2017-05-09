<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {


function __construct(){
parent:: __construct();
$this->load->helper('form');
$this->load->model('Reservas');
$this->load->helper('url');
$this->load->library('form_validation');
$this->load->library("session");

}


function index($id=null){
$s=$this->session->userdata('correo');	
$datos = array('titulo' => "Inicio  Sesión");
$datosplanes['datosdelplan']=$this->Reservas->obtenerdatos($id,$s);
$this->load->view('Vista_basica/header', $datos);
		//$this->load->view('Detalle_Planes/Quince', $imagenes);
		$this->load->view('tablareserva', $datosplanes);
		$this->load->view('Vista_basica/footer');
	}


	function hola(){
		redirect('Plan');
	}
}
?>
