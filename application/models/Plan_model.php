<?php

class Plan_Model extends CI_Model
{
	public $nombre = "";
	public $descripcion = "";
	public $precio = "";
	
	//constructor		
	function __construct()
	{		
		parent ::__construct();		
	}

	//Setters y getters
	public function obtenernombre()
    {
		return $this->nombre;
	}
    
    public function establecernombre($nombre)
    {
		$this->nombre=$nombre;
	}
	
	public function obtenerdescripcion()
    {
		return $this->descripcion;
	}
    
    public function establecerdescripcion($descripcion)
    {
		$this->descripcion=$descripcion;
	}

	public function obtenerPrecio()
    {
		return $this->precio;
	}
    
    public function establecerPrecio($precio)
    {
		$this->precio=$precio;
	}

	


	
	public function inicializarVariables($data)  //Ingresamos los datos recibidos desde el formulario a las variables
    {       
		$this->nombre=$data['nombre'];
		$this->descripcion=$data['descripcion'];
		$this->precio=$data['precio'];
		
	
	public function obtenerTodo()               //Para consultas devuelve un objeto de tipo plan
	{	
		$this->db->select('*');
		$this->db->from('plan');
		$consulta = $this->db->get();
		return $consulta->custom_result_object('Plan_Model');		
	}

	public function validar()                   //Verificamos que los datos ingresados no sean vacios
    {
        $this->form_validation->set_rules('nombre', "Nombre del plan", 'required');
        $this->form_validation->set_rules('descripcion', "Descripción", 'required');
        $this->form_validation->set_rules('precio', "Precio", 'required|numeric|integer');

      
        
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('numeric', 'El campo %s debe ser númerico');
        $this->form_validation->set_message('integer', 'El %s debe ser un número entero');
       
        return $this->form_validation->run();
    }


   
	public function insertar()   //Insertamos las variables en la Base de Datos
	{
        $this->db->set('nombre', $this->nombre);
        $this->db->set('descripcion', $this->descripcion);
        $this->db->set('precio', $this->precio); 
		$this->db->insert('plan');        
	}
}