<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Administrador_model'); 
		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('administrador.php',(array)$output);
	}
 

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}


	public function educacion()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('educacion');
			$crud->set_subject('Educacion');
			$crud->required_fields('nombre', 'id_educacion_modalidad', 'id_educacion_tema');
			$crud->columns('nombre', 'id_educacion_modalidad', 'id_educacion_tema', 'nombre', 'certificacion' , 'contenidos_centrales', 'docentes' , 'archivo_programa'  );

			$crud->display_as('id_educacion_modalidad','Modalidad');
			$crud->display_as('id_educacion_tema','Tema');

			$crud->set_relation('id_educacion_modalidad','educacion_modalidad','descripcion');
			$crud->set_relation('id_educacion_tema','educacion_tema','descripcion');
 			
 			$crud->set_field_upload('archivo_programa','assets/documentos/programas');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function investigacion()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('investigacion');
			$crud->set_subject('Investigacion');
			$crud->required_fields('titulo', 'id_investigacion_tipo');
			$crud->columns('id_investigacion','titulo','id_investigacion_tipo','resumen', 'fecha', 'imagen',  'autores' );

			$crud->set_relation('id_investigacion_tipo','investigacion_tipo','descripcion');

			$crud->display_as('id_investigacion_tipo','Tipo de investigación'); 

			$crud->set_field_upload('imagen','assets/img/investigacion');
 

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function novedad()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('novedad');
			$crud->set_subject('Novedad');
			$crud->required_fields('titulo');
			$crud->columns('titulo','sintesis','detalle','mudltimedia_embebed' );
 			
 			$crud->callback_column('mudltimedia_embebed',array($this,'add_field_callback_1'));

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function add_field_callback_1($value, $row)
	{
		return $value.'';
	}

	/*
	public function investigacion_autores()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('investigacion_autor');
			$crud->set_relation('id_investigacion','investigacion','titulo');

			$crud->set_subject('Autores');
			$crud->required_fields('nombre', 'apellido');
			$crud->columns('id_investigacion','nombre', 'apellido', 'foto' );

			$crud->display_as('id_investigacion','Investigacion'); 
 			
 			$crud->set_field_upload('foto','assets/img/autores');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}*/

	public function contacto()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('contacto');
			$crud->set_subject('Contacto');
			$crud->required_fields('nombre', 'apellido', 'email');
			$crud->columns('nombre','apellido', 'email', 'telefono', 'consulta', 'url_referer' );
			$crud->unset_add();
			$crud->unset_delete();
			$crud->unset_edit();
			$output = $crud->render();
			
			

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	/*
	function add_field_traer_autores($value, $row)
	{	

		$autores = $this->Administrador_model->traer_autores_investigacion($value);

		$var_autores = '';

		foreach ($autores as $row) 
		{
			$var_autores .= $row['nombre']." <br>";
		}

		return $var_autores;
	}*/

	function add_field_traer_autores	($value, $row)
	{	

		$autores = $this->Administrador_model->traer_autores_investigacion($row->id_investigacion);

		$var_autores = '';

		foreach ($autores as $row) 
		{
			$var_autores .= $row['nombre']." <br>";
		}

		return $var_autores;

	 
	}
	/*
	function add_field_traer_autores($value, $row)
	{
		 echo "valor".$value;
	}*/


}
