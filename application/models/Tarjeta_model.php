<?php

class Tarjeta_Model extends CI_Model
{
	public $cuenta = "";
	public $fechaExpiracion = "";
	public $digitosVerificacion = "";
	
	//constructor		
	function __construct()
	{		
		parent ::__construct();		
	}

	//Setters y getters	

	public function obtenercuenta()
    {
		return $this->cuenta;
	}
    
    public function establecercuenta($cuenta)
    {
		$this->cuenta=$cuenta;
	}
	
	public function obtenerfechaExpiracion()
    {
		return $this->fechaExpiracion;
	}
    
    public function establecerfechaExpiracion($fechaExpiracion)
    {
		$this->fechaExpiracion=$fechaExpiracion;
	}

	public function obtenerdigitosVerificacion()
    {
		return $this->digitosVerificacion;
	}
    
    public function establecerdigitosVerificacion($digitosVerificacion)
    {
		$this->digitosVerificacion=$digitosVerificacion;
	}

	


	
	public function inicializarVariables($data)  //Ingresamos los datos recibidos desde el formulario a las variables
    {       
		$this->cuenta=$data['cuenta'];
		$this->fechaExpiracion=$data['fechaExpiracion'];
		$this->digitosVerificacion=$data['digitosVerificacion'];
		
	
	public function obtenerTodo()                //Para consultas devuelve un objeto de tipo tarjeta
	{	
		$this->db->select('*');
		$this->db->from('tarjeta');
		$consulta = $this->db->get();
		return $consulta->custom_result_object('Tarjeta_Model');		
	}

	public function validar()  //Verificamos que los datos ingresados no sean vacios
    {
        $this->form_validation->set_rules('cuenta', "Número de cuenta", 'required|numeric|integer');
        $this->form_validation->set_rules('fechaExpiracion', "Fecha de expiración", 'required');
        $this->form_validation->set_rules('digitosVerificacion', "Dígitos de Verificación", 'required|numeric|integer');

      
        
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('numeric', 'El campo %s debe ser númerico');
        $this->form_validation->set_message('integer', 'El %s debe ser un número entero');
       
        return $this->form_validation->run();
    }


   
	public function insertar()   //Insertamos las variables en la Base de Datos
	{
        $this->db->set('cuenta', $this->cuenta);
        $this->db->set('fechaExpiracion', $this->fechaExpiracion);
        $this->db->set('digitosVerificacion', $this->digitosVerificacion); 
		$this->db->insert('tarjeta');        
	}
}