<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novedad extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Novedad_model'); 
	}

	/*
	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Novedades";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);
		$datos["novedades"] =  $this->Novedad_model->get_novedades();
		$this->load->view('novedades.php',$datos);
	}*/

	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Novedades";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);
		$datos["novedades"] =  $this->Novedad_model->get_novedad_home();
		$datos["titulo"] =  "Últimas novedades"; 
		$this->load->view('novedades.php',$datos);
	}

	public function ver_novedad($id_novedad)
	{	
		$datos_head["titulo"] = "SIDOM - Ver novedad";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$datos["novedad"] =  $this->Novedad_model->get_informacion_novedad($id_novedad); 

		$this->load->view('ver_novedad.php',$datos);
	}

	public function mas_novedades()
	{	
		$datos_head["titulo"] = "SIDOM - Mas novedades";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);
		$datos["novedades"] =  $this->Novedad_model->get_novedades(); 
		$datos["titulo"] =  "Todas las novedades"; 
		$this->load->view('novedades.php',$datos);
	}

 	 
}