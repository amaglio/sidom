<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Novedad_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}


	function get_novedad()
	{
		
		$sql =  "	SELECT *
	    			  FROM  novedad n   " ;

		$query = $this->db->query( $sql );

	return $query->result_array();	
	}
 
	function get_novedad_home()
	{
		
		$sql =  "	SELECT *
	    			FROM  novedad n   
	    			WHERE n.home = 1" ;

		$query = $this->db->query( $sql );

	return $query->result_array();	
	}
}

/* End of file  */
/* Location: ./application/models/ */