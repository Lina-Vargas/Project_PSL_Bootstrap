<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva extends CI_Controller {


function __construct(){
parent:: __construct();
$this->load->helper('form');
$this->load->model('Reservas');
$this->load->helper('url');
$this->load->library('form_validation');
$this->load->library('session');
}


function index($id=null){
$email=$this->session->userdata('correo');	
$usua['usuario']=$this->Reservas->usuario($email);
$datosplanes['datosdelplan']=$this->Reservas->plan($id);

$datos = array('titulo' => "Inicio  Sesión");
$this->load->view('Vista_basica/header', $datos);
		//$this->load->view('Detalle_Planes/Quince', $imagenes);
        $this->load->view('tablareservas', $usua);          
		$this->load->view('tablareserva', $datosplanes);
		$this->load->view('Vista_basica/footer');
	
	}


function reservar($id=null){
$datos = array('titulo' => "Inicio  Sesión");
$this->load->view('Vista_basica/header', $datos);
$this->load->view('confirmareserva',$id);
$this->load->view('Vista_basica/footer');

}
function confirmar(){

$a=$this->session->userdata('correo');	

$c=$this->Reservas->revisarcorreo($a);



$datosreserva= array(
	 
	 'idUsuario' => $c->id, 
	 'idPlan'=> $this->input->post('idPlan'),
	 'fecha' => $this->input->post('fecha'),
	 'hora' =>$this->input->post('hora')
	 );
      $fecha =$this->input->post('fecha');
	 $hora = $this->input->post('hora');

     $this->Reservas->creareserva($datosreserva);
     
          echo "Registro completado";
          Redirect('Reserva/total');
          
}
function total(){
	      $a=$this->session->userdata('correo');
	      $datosplanes['usu']= $this->Reservas->total($a);
          $datos = array('titulo' => "Inicio  Sesión");
          $this->load->view('Vista_basica/header', $datos);
          $this->load->view('totalreserva', $datosplanes);
          $this->load->view('Vista_basica/footer');
}

}
?>
