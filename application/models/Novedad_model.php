<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novedad_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}

	function get_novedades()
	{
		
		$sql =  "	SELECT *
	    			FROM  novedad n  
	    			ORDER BY n.fecha_orden DESC
	    			" ;

		$query = $this->db->query( $sql );

	return $query->result_array();	
	}
 
	function get_novedad_home()
	{
		
		$sql =  "	SELECT *
	    			FROM  novedad n   
	    			WHERE n.home = 1
	    			ORDER BY n.fecha_orden DESC
	    			LIMIT 0,3
	    			 " ;

		$query = $this->db->query( $sql );

	return $query->result_array();	
	}

	function get_informacion_novedad($id_novedad)
	{
		
		$sql =  "	SELECT *
	    			FROM  novedad n   
	    			WHERE id_novedad = ? " ;

		$query = $this->db->query( $sql, array($id_novedad) );

		return $query->row_array();	
	}
}

/* End of file  */
/* Location: ./application/models/ */