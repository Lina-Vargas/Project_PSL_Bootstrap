<?php

class Pago_Model extends CI_Model
{
	public $fecha = "";
	public $hora = "";
	public $medioDePago = "";
	
	//constructor	
	function __construct()
	{		
		parent ::__construct();		
	}

	//Setters y getters

	public function obtenerfecha()
    {
		return $this->fecha;
	}
    
    public function establecerfecha($fecha)
    {
		$this->fecha=$fecha;
	}
	
	public function obtenerhora()
    {
		return $this->hora;
	}
    
    public function establecerhora($hora)
    {
		$this->hora=$hora;
	}

	public function obtenermedioDePago()
    {
		return $this->medioDePago;
	}
    
    public function establecermedioDePago($medioDePago)
    {
		$this->medioDePago=$medioDePago;
	}

	


	public function inicializarVariables($data)  //Ingresamos los datos recibidos desde el formulario a las variables
    {       
		$this->fecha=$data['fecha'];
		$this->hora=$data['hora'];
		$this->medioDePago=$data['medioDePago'];
		
	
	public function obtenerTodo()                //Para consultas devuelve un objeto de tipo pago
	{	
		$this->db->select('*');
		$this->db->from('pago');
		$consulta = $this->db->get();
		return $consulta->custom_result_object('Pago_Model');		
	}

	public function validar()  //Verificamos que los datos ingresados no sean vacios
    {
        $this->form_validation->set_rules('fecha', "Fecha", 'required');
        $this->form_validation->set_rules('hora', "Hora", 'required');
        $this->form_validation->set_rules('medioDePago', "Medio de pago", 'required');

      
        
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
       
       
        return $this->form_validation->run();
    }


   
	public function insertar()   //Insertamos las variables en la Base de Datos
	{
        $this->db->set('fecha', $this->fecha);
        $this->db->set('hora', $this->hora);
        $this->db->set('medioDePago', $this->medioDePago); 
		$this->db->insert('pago');        
	}
}