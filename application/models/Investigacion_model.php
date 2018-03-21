<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investigacion_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
 

  function get_investigacion()
  {
 	
  	$sql =  "	SELECT *
	    			  FROM  investigacion i,
                    investigacion_tipo it
              WHERE i.id_investigacion_tipo = it.id_investigacion_tipo " ;

  	$query = $this->db->query( $sql );

    return $query->result_array();	
  }
 

}

/* End of file  */
/* Location: ./application/models/ */