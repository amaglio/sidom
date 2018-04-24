<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Educacion_model'); 
	}

	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Educacion";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$datos["educaciones"] =  $this->Educacion_model->get_educacion();

		$datos["educacion_modalidad"] =  $this->Educacion_model->get_educacion_modalidad();
		$datos["educacion_tema"] =  $this->Educacion_model->get_educacion_tema();
		
		$this->load->view('educacion.php',$datos);
	}

 	 
}