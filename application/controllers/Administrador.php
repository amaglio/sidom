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
			$crud->required_fields('nombre', 'id_tipo_educacion');
			$crud->columns('nombre','descripcion', 'id_tipo_educacion', 'nombre', 'cursada', 'certificacion' , 'contenidos_centrales', 'docentes' , 'archivo_programa'  );

			$crud->display_as('id_tipo_educacion','Tipo de educacion');

			$crud->set_relation('id_tipo_educacion','tipo_educacion','descripcion');
 			
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
			$crud->set_relation('id_tipo_investigacion','tipo_investigacion','descripcion');

			$crud->set_subject('Investigación');
			$crud->required_fields('titulo', 'id_tipo_investigacion');
			$crud->columns('id_investigacion','titulo','sito_publico', 'fecha', 'abstract',  'Autores' );

			$crud->display_as('id_tipo_investigacion','Tipo de investigación');

 
			//$crud->callback_column('id_investigacion',array($this,'add_field_traer_autores'));

			//$crud->add_action('Editar Autores', '', 'Administrador/editar_autores');
 
			$crud->callback_column('Autores',array($this,'add_field_traer_autores'));
 
			//$crud->callback_column('Autores',array($this,'add_field_traer_autores'));
 
			//$crud->unset_fields('id_investigacion');
			
			//$crud->add_action('Editar Autores', '', 'ABM autores');
 

 			//$crud->set_field_upload('archivo_programa','assets/documentos/investigaciones');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function investigacion_autores()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('investigacion_autor');
			$crud->set_relation('id_investigacion','investigacion','titulo');

			$crud->set_subject('Investigación');
			$crud->required_fields('nombre', 'apellido');
			$crud->columns('id_investigacion','nombre', 'apellido', 'foto' );

			$crud->display_as('id_investigacion','Investigacion'); 
 			
 			$crud->set_field_upload('foto','assets/img/autores');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function productos()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('producto');
			$crud->set_subject('Producto');
			$crud->required_fields('nombre', 'id_tipo_producto');
			$crud->columns('nombre','descripcion', 'id_tipo_producto', 'foto', 'precio' );

			$crud->display_as('id_tipo_producto','Tipo de producto');

			$crud->set_relation('id_tipo_producto','tipo_producto','descripcion');

			$crud->set_field_upload('foto','assets/img/productos');

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
