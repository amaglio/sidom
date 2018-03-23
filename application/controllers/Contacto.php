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

	public function procesar_contacto()
	{	
	 	chrome_log("procesar_contacto");
	 	$datos_head["titulo"] = "SIDOM - Resultado consulta";
	
		if ($this->form_validation->run('procesa_contacto') == FALSE):
			
			chrome_log("NO PASO");
			$this->session->set_flashdata('mensaje', 'Error al validar los datos.');

		else:
		
			chrome_log("PASO");

			if ( $this->Contacto_model->alta_contacto( $this->input->post() ) ):
			
				chrome_log("CARGO LA DB");
				$this->session->set_flashdata('mensaje', 'Gracias por su Consulta ! La misma será respondida a la brevedad.');

				$resultado_email = enviar_email($this->input->post());

				

			else:

				chrome_log("NO CARGO LA DB");
				$this->session->set_flashdata('mensaje', 'Ha ocurrido un error, por favor intente mas tarde o envienos un email a: informes@fundacionsidom.org. <br> Disculpe las molestias ocasionadas.');


			endif;

		endif;

		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$this->load->view('resultado_contacto.php',$datos);
	}


 	 
}