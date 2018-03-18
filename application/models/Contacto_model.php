<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
 

  function get_contacto_motivos()
  {
 	
  	$sql =  "	SELECT *
	    		FROM   contacto_motivo " ;

  	$query = $this->db->query( $sql );

    return $query->result_array();	
  }
 

}

/* End of file  */
/* Location: ./application/models/ */