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
		$datos["investigacion_tipo"] =  $this->Investigacion_model->get_investigacion_tipo();

		$this->load->view('investigacion.php',$datos);
	}

	public function ver_investigacion($id_investigacion)
	{	
		$datos_head["titulo"] = "SIDOM - investigacion";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$datos["investigacion"] =  $this->Investigacion_model->get_informacion_investigacion($id_investigacion);
		$datos["investigacion_tipo"] =  $this->Investigacion_model->get_investigacion_tipo();
		
		$this->load->view('ver_investigacion.php',$datos);
	}

	public function buscar_investigacion()
	{
 		chrome_log("Investigacion/buscar_investigacion");

		if ($this->form_validation->run('buscar_investigacion') == FALSE):

			chrome_log("No paso validacion");
			$this->session->set_flashdata('mensaje', 'Error: no paso la validacion.');
			redirect('investigacion/index/','refresh');

		else:

			chrome_log("Paso validacion"); 
 			
			$datos["investigaciones"] =  $this->Investigacion_model->buscar_investigaciones($this->input->post());

			if($this->input->post('id_tipo'))
				$datos["descripcion_tipo"] =  $this->Investigacion_model->get_tipo_descripcion( $this->input->post('id_tipo') );

			$datos["investigacion_tipo"] =  $this->Investigacion_model->get_investigacion_tipo();

			$datos_head["titulo"] = "SIDOM - Educacion";
			$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
			$datos["footer"] = $this->load->view('estructura/footer', '', true);
			$this->load->view('investigacion_resultado.php',$datos); 
			 

		endif;	
	}

 	 
}