<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investigacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Investigacion_model');
	}

	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Investigación";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$datos["investigaciones"] =  $this->Investigacion_model->get_investigaciones();
		$datos["investigacion_tipo"] =  $this->Investigacion_model->investigacion_tipo();

		$this->load->view('investigacion.php',$datos);
	}

 	 
}