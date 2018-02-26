<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
		
	}

	function traer_autores_investigacion($id_investigacion)
    {
   	
    	$resultado = $this->db->query("	SELECT CONCAT(ia.apellido, ', ', ia.nombre) as nombre
						    			FROM investigacion_autor ia
						    			WHERE ia.id_investigacion = '$id_investigacion' " );

    	return $resultado->result_array();
    }


}

/* End of file  */
/* Location: ./application/models/ */