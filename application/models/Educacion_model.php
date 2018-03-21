<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educacion_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
 

  function get_educacion()
  {
 	
  	$sql =  "	SELECT *
	    			  FROM  educacion e,
                    educacion_modalidad em
              WHERE e.id_educacion_modalidad = em.id_educacion_modalidad " ;

  	$query = $this->db->query( $sql );

    return $query->result_array();	
  }
 

}

/* End of file  */
/* Location: ./application/models/ */