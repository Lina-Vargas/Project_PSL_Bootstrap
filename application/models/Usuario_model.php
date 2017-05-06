<?php

class Usuario_Model extends CI_Model
{
	public $nombres = "";
	public $apellidos = "";
 	public $telefono = "";
	public $celular = "";
	public $correo = "";
	public $direccion = "";
	public $clave = "";
	
	//constructor	
	function __construct()
	{		
		parent ::__construct();		
	}

	//Setters y getters
	public function obtenernombres()
    {
		return $this->nombres;
	}
    
    public function establecernombres($nombres)
    {
		$this->nombres=$nombre;
	}
	
	public function obtenerApellidos()
    {
		return $this->apellidos;
	}
    
    public function establecerApellidos($apellidos)
    {
		$this->apellidos=$apellidos;
	}

	public function obtenerTelefono()
    {
		return $this->telefono;
	}
    
    public function establecerTelefono($telefono)
    {
		$this->telefono=$telefono;
	}

	public function obtenerCelular()
    {
		return $this->celular;
	}
    
    public function establecerCelular($celular)
    {
		$this->celular=$celular;
	}

	public function obtenercorreo()
    {
		return $this->correo;
	}
    
    public function establecercorreo($correo)
    {
		$this->correo=$correo;
	}
	public function obtenerDireccion()
    {
		return $this->direccion;
	}
    
    public function establecerDireccion($direccion)
    {
		$this->direccion=$direccion;
	}
	public function obtenerClave()
    {
		return $this->clave;
	}
    
    public function establecerClave($pass)
    {
		$this->clave=$clave;
	}


	
	public function inicializarVariables($data)  //Ingresamos los datos recibidos desde el formulario a las variables
    {       
		$this->nombres=$data['nombres'];
		$this->apellidos=$data['apellidos'];
		$this->telefono=$data['telefono'];
		$this->celular = $data['celular'];
		$this->correo=$data['correo'];
		$this->direccion=$data['direccion'];
		$this->clave=$data['clave'];
	}
	
	public function obtenerTodo()				//Para consultas devuelve un objeto de tipo usuario
	{	
		$this->db->select('*');
		$this->db->from('usuario');
		$consulta = $this->db->get();
		return $consulta->custom_result_object('Usuario_Model');		
	}

	public function validar()  //Verificamos que los datos ingresados no sean vacios
    {
        $this->form_validation->set_rules('nombres', "Nombre completo", 'required');
        $this->form_validation->set_rules('apellidos', "Apellidos", 'required');
        $this->form_validation->set_rules('telefono', "Telefono", 'required');
        $this->form_validation->set_rules('celular', "Celular", 'required');
        $this->form_validation->set_rules('correo', "Correo Electrónico", 'required|valid_email|is_unique[usuario.correo]');
        $this->form_validation->set_rules('clave', "Cotraseña", 'required|is_unique[usuario.clave]');
        
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('numeric', 'El campo %s debe ser númerico');
        $this->form_validation->set_message('is_unique', 'La %s ya existe');
        $this->form_validation->set_message('valid_email', 'El %s no tiene un formato valido');
        $this->form_validation->set_message('integer', 'El %s debe ser un número entero');

        return $this->form_validation->run();
    }

    public function validarSesionusuario($data)
    {
    	$this->db->select('correo, clave');
        $this->db->from('usuario');
		$this->db->where('correo', $data['correo']);
		$this->db->where('clave', $data['clave']);
		$result_consulta = $this->db->get();
		$consulta=$result_consulta->result();
		return $consulta;
    }

	public function insertar()   //Insertamos las variables en la Base de Datos
	{
        $this->db->set('nombres', $this->nombres);
        $this->db->set('apellidos', $this->apellidos); 
		$this->db->set('telefono', $this->telefono);
		$this->db->set('celular', $this->celular);
        $this->db->set('correo', $this->correo);
        $this->db->set('direccion', $this->direccion);
        $this->db->set('clave', $this->clave); 
        $this->db->insert('usuario');        
	}
}