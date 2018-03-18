<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('Educacion_model'); 
		$this->load->model('Investigacion_model');
		$this->load->model('Novedad_model');
	}

	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Home";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$datos["educaciones"] =  $this->Educacion_model->get_educacion();
		$datos["investigaciones"] =  $this->Investigacion_model->get_investigacion();
		$datos["novedades"] =  $this->Novedad_model->get_novedad();

		$this->load->view('home.php',$datos);
	}

 	 
}