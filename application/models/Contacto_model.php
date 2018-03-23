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

  function alta_contacto($array)
  {
 	
 	$array_contacto['nombre'] = $array['nombre'];
  	$array_contacto['apellido'] = $array['apellido'];
  	$array_contacto['email'] = $array['email'];
  	$array_contacto['id_motivo'] = $array['id_motivo'];

  	if($array['telefono'])
  		$array_contacto['telefono'] = $array['telefono'];

  	if($array['consulta'])
  		$array_contacto['consulta'] = $array['consulta'];
	
	if( $this->db->insert('contacto',$array_insertar_info) )
		return true;
	else
		return false;
  
  }
 

}

/* End of file  */
/* Location: ./application/models/ */