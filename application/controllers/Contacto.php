<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto  extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('Contacto_model');
	}

	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Consultas";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$datos["contacto_motivos"] =  $this->Contacto_model->get_contacto_motivos();

		$this->load->view('contacto.php',$datos);
	}

 	 
}