<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('Producto_model'); 
	}

	public function index()
	{	
		$datos_head["titulo"] = "SIDOM - Home";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$this->load->view('home.php',$datos);
	}

 	 
}