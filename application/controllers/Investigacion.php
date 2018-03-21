<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investigacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
	}

	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Investigación";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$this->load->view('investigacion.php',$datos);
	}

 	 
}