<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_ci extends CI_Controller {
 	public Function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Persona');
	}
	
	public function index()
	{
		$datos['personas'] =  $this->Persona->seleccionar_todo();
		$this->load->view('crud', $datos);
	}

	public function agregar()
	{
		$persona['nombre'] = $this->input->post('nombre');
		$persona['ap'] = $this->input->post('ap');
		$persona['am'] = $this->input->post('am');
		$persona['fn'] = $this->input->post('fn');
		$persona['genero'] = $this->input->post('genero');
		$this->Persona->agregar($persona);
		redirect("crud_ci");
		
	}

	public function eliminar($id)
	{
		$this->Persona->eliminar($id);
		redirect("crud_ci");
	}

	public function editar($id)
	{
		$persona['nombre'] = $this->input->post('nombre');
		$persona['ap'] = $this->input->post('ap');
		$persona['am'] = $this->input->post('am');
		$persona['fn'] = $this->input->post('fn');
		$persona['genero'] = $this->input->post('genero');
		$this->Persona->actualizar($persona, $id);
		redirect("crud_ci");
	}
}
