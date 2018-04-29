<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Educacion_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
  
  function get_educacion_home()
  {
  
    $sql =  " SELECT *,
                      em.descripcion as descripcion_modalidad,
                      et.descripcion as descripcion_tema
              FROM  educacion e,
                    educacion_modalidad em,
                    educacion_tema et
              WHERE e.id_educacion_modalidad = em.id_educacion_modalidad
              AND e.id_educacion_tema = et.id_educacion_tema
              AND   e.home = 1" ;

    $query = $this->db->query( $sql );

    return $query->result_array();  
  }

  function get_informacion_educacion($id_educacion)
  {
  
    $sql =  " SELECT *,
                      em.descripcion as descripcion_modalidad,
                      et.descripcion as descripcion_tema
              FROM  educacion e,
                    educacion_modalidad em,
                    educacion_tema et
              WHERE e.id_educacion_modalidad = em.id_educacion_modalidad
              AND e.id_educacion_tema = et.id_educacion_tema
              AND   e.id_educacion = ?" ;

    $query = $this->db->query( $sql, array( $id_educacion )  );

    return $query->row_array();  
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

  function get_educacion_modalidad()
  {
  
    $sql =  " SELECT *
              FROM  educacion_modalidad" ;

    $query = $this->db->query( $sql );

    return $query->result_array();  
  }

  function get_educacion_tema()
  {
  
    $sql =  " SELECT *
              FROM  educacion_tema" ;

    $query = $this->db->query( $sql );

    return $query->result_array();  
  }
  
  function buscar_educacion($array)
  { 
    $tema = $modalidad = '';

    if(!empty($array['id_modalidad']))
        $modalidad .= 'AND em.id_educacion_modalidad = '.$array['id_modalidad'];

    if(!empty($array['id_tema']))
        $tema .= 'AND et.id_educacion_tema = '.$array['id_tema'];


    $resultado = $this->db->query(" SELECT  e.*, 
                                          em.descripcion as descripcion_modalidad,
                                          et.descripcion as descripcion_tema
                                    FROM  educacion e,
                                          educacion_modalidad em,
                                          educacion_tema et
                                    WHERE   e.id_educacion_modalidad = em.id_educacion_modalidad 
                                    AND     e.id_educacion_tema = et.id_educacion_tema 
                                            $modalidad
                                            $tema " );

    return $resultado->result_array();
  }

  function get_educacion_modalidad_descripcion($id_modalidad)
  {
  
    $sql =  " SELECT descripcion
              FROM  educacion_modalidad
              WHERE id_educacion_modalidad = ? " ;

    $query = $this->db->query( $sql ,array($id_modalidad) );

    return $query->row()->descripcion;  
  }

  function get_educacion_tema_descripcion($id_tema)
  {
  
    $sql =  " SELECT descripcion
              FROM  educacion_tema
              WHERE id_educacion_tema = ? " ;

    $query = $this->db->query( $sql ,array($id_tema) );

    return $query->row()->descripcion;  
  }


}

/* End of file  */
/* Location: ./application/models/ */