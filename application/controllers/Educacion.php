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

		
		
		$this->load->view('educacion.php',$datos);
	}

	public function ver_educacion($id_educacion)
	{	
		$datos_head["titulo"] = "SIDOM - Educacion";
		$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
		$datos["footer"] = $this->load->view('estructura/footer', '', true);

		$datos["educacion"] =  $this->Educacion_model->get_informacion_educacion($id_educacion);

		$datos["educacion_modalidad"] =  $this->Educacion_model->get_educacion_modalidad();
		$datos["educacion_tema"] =  $this->Educacion_model->get_educacion_tema();
		
		$this->load->view('ver_educacion.php',$datos);
	}

	public function buscar_cursos()
	{
 		chrome_log("cursos/buscar_cursos");

		if ($this->form_validation->run('buscar_cursos') == FALSE):

			chrome_log("No paso validacion");
			$this->session->set_flashdata('mensaje', 'Error: no paso la validacion.');
			redirect('educacion/index/','refresh');

		else:

			chrome_log("Paso validacion");
			$datos['educaciones'] = $this->Educacion_model->buscar_educacion($this->input->post());
 			
			if($this->input->post('id_modalidad'))
				$datos["descripcion_modalidad"] =  $this->Educacion_model->get_educacion_modalidad_descripcion( $this->input->post('id_modalidad') );

			if($this->input->post('id_tema'))
				$datos["descripcion_tema"] =  $this->Educacion_model->get_educacion_tema_descripcion( $this->input->post('id_tema') );

			$datos["educacion_modalidad"] =  $this->Educacion_model->get_educacion_modalidad();
			$datos["educacion_tema"] =  $this->Educacion_model->get_educacion_tema();

			$datos_head["titulo"] = "SIDOM - Educacion";
			$datos["head"] = $this->load->view('estructura/head', $datos_head, true);
			$datos["footer"] = $this->load->view('estructura/footer', '', true);
			$this->load->view('educacion_resultado.php',$datos);
			 

		endif;	
	}

	function validate_either()
	{

       	if($this->input->post('id_tema') || $this->input->post('id_modalidad')  )
       	{
            return TRUE;
       	}
       	else
       	{
            $this->form_validation->set_message('validate_name', 'Seleccione al menos un filtro de busqueda');
        	return FALSE;
       }
    }
 	 
}