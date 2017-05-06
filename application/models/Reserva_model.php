<?php

class Reserva_Model extends CI_Model
{
	public $fecha = "";
	public $hora = "";
	
	//constructor		
	function __construct()
	{		
		parent ::__construct();		
	}

	//Setters y getters
	public function obtenerFecha()
    {
		return $this->fecha;
	}
    
    public function establecerFecha($fecha)
    {
		$this->fecha=$fecha;
	}
	
	public function obtenerHora()
    {
		return $this->hora;
	}
    
    public function establecerHora($hora)
    {
		$this->hora=$hora;
	}

	


	
	public function inicializarVariables($data)  //Ingresamos los datos recibidos desde el formulario a las variables
    {       
		$this->fecha=$data['fecha'];
		$this->hora=$data['hora'];
		
	
	public function obtenerTodo()               //Para consultas devuelve un objeto de tipo reserva
	{	
		$this->db->select('*');
		$this->db->from('reserva');
		$consulta = $this->db->get();
		return $consulta->custom_result_object('Reserva_Model');		
	}

	public function validar()  //Verificamos que los datos ingresados no sean vacios
    {
        $this->form_validation->set_rules('fecha', "Fecha", 'required');
        $this->form_validation->set_rules('hora', "Hora", 'required');
      
        
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
       
        return $this->form_validation->run();
    }



    public function validarUsuario($data)   //pendiente enviar correo y esperar confirmación
    {
    	$this->db->select('correo');
        $this->db->from('usuario');
		$this->db->where('correo', $data['correo']);
		$result_consulta = $this->db->get();
		$consulta=$result_consulta->result();
		return $consulta;
    }

	public function insertar()   //Insertamos las variables en la Base de Datos
	{
        $this->db->set('fecha', $this->fecha);
        $this->db->set('hora', $this->hora); 
		$this->db->insert('reserva');        
	}
}