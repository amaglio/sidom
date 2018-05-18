<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Investigacion_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
 

  function get_investigaciones()
  {
 	
  	$sql =  "	SELECT  *,
                      it.descripcion as descripcion_tipo_investigacion,
                      DATE_FORMAT(i.fecha, '%d/%m/%Y') as fecha
              FROM    investigacion i,
                      investigacion_tipo it
              WHERE i.id_investigacion_tipo = it.id_investigacion_tipo  
              ORDER BY i.fecha_orden DESC " ;

  	$query = $this->db->query( $sql );

    return $query->result_array();	
  }

  function get_investigacion_home()
  {
  
    $sql =  " SELECT  *,
                        it.descripcion as descripcion_tipo_investigacion,
                         DATE_FORMAT(i.fecha, '%d/%m/%Y') as fecha
                FROM    investigacion i,
                        investigacion_tipo it
                WHERE i.id_investigacion_tipo = it.id_investigacion_tipo 
                AND   i.home = 1 
                ORDER BY i.fecha_orden DESC
                LIMIT 0,3" ;

    $query = $this->db->query( $sql );

    return $query->result_array();  
  }

  function get_informacion_educacion()
  {
  
    $sql =  " SELECT  *,
                      it.descripcion as descripcion_tipo_investigacion
              FROM    investigacion i,
                      investigacion_tipo it
              WHERE i.id_investigacion_tipo = it.id_investigacion_tipo 
              AND   i.home = 1 " ;

    $query = $this->db->query( $sql );

    return $query->result_array();  
  }

  function get_investigacion_tipo()
  {
  
    $sql =  " SELECT *
              FROM investigacion_tipo " ;

    $query = $this->db->query( $sql );

    return $query->result_array();  
  }

  /*
  function buscar_investigaciones($array)
  { 
    $modalidad = '';

    if(!empty($array['id_tipo']))
        $modalidad .= 'AND it.id_investigacion_tipo  = '.$array['id_tipo'];
 

    $resultado = $this->db->query(" SELECT  *,
                                            it.descripcion as descripcion_tipo_investigacion
                                    FROM    investigacion i,
                                            investigacion_tipo it
                                    WHERE   i.id_investigacion_tipo = it.id_investigacion_tipo  
                                            $modalidad

                                    " );

    return $resultado->result_array();
  }*/

  function buscar_investigaciones($array)
  { 
 
 

    $resultado = $this->db->query(" SELECT  *,
                                            it.descripcion as descripcion_tipo_investigacion,
                                             DATE_FORMAT(i.fecha, '%d/%m/%Y') as fecha
                                    FROM    investigacion i,
                                            investigacion_tipo it
                                    WHERE   i.id_investigacion_tipo = it.id_investigacion_tipo  
                                    AND     YEAR(i.fecha) = ?
                                    ORDER BY i.fecha_orden DESC
                                    ", array($array['anio']) );

    return $resultado->result_array();
  }

  function buscar_investigaciones_tipo($id_investigacion_tipo)
  { 
 
    $resultado = $this->db->query(" SELECT  *,
                                            it.descripcion as descripcion_tipo_investigacion,
                                             DATE_FORMAT(i.fecha, '%d/%m/%Y') as fecha
                                    FROM    investigacion i,
                                            investigacion_tipo it
                                    WHERE     i.id_investigacion_tipo = it.id_investigacion_tipo 
                                    AND       i.id_investigacion_tipo = ? 
                                    ORDER BY  i.fecha_orden DESC
                                    ", array($id_investigacion_tipo) );

    return $resultado->result_array();
  }

  function buscar_investigaciones_tipo_anio($array)
  { 
 
    $resultado = $this->db->query(" SELECT  *,
                                            it.descripcion as descripcion_tipo_investigacion,
                                             DATE_FORMAT(i.fecha, '%d/%m/%Y') as fecha
                                    FROM    investigacion i,
                                            investigacion_tipo it
                                    WHERE   i.id_investigacion_tipo = it.id_investigacion_tipo  
                                    AND     i.id_investigacion_tipo = ? 
                                    AND     YEAR(i.fecha) = ?
                                    ORDER BY i.fecha_orden DESC
                                    ", array( $array['id_tipo_investigacion'], $array['anio'] ) );

    return $resultado->result_array();
  }

  function get_informacion_investigacion($id_investigacion)
  {
  
    $sql =  " SELECT  *,
                        it.descripcion as descripcion_tipo_investigacion,
                         DATE_FORMAT(i.fecha, '%d/%m/%Y') as fecha
                FROM    investigacion i,
                        investigacion_tipo it
                WHERE i.id_investigacion_tipo = it.id_investigacion_tipo 
                AND   i.id_investigacion = ? " ;

    $query = $this->db->query( $sql , array($id_investigacion) );

    return $query->row_array();  
  }
  
  function get_tipo_descripcion($id_tipo)
  {
  
    $sql =  " SELECT descripcion
              FROM  investigacion_tipo
              WHERE id_investigacion_tipo = ? " ;

    $query = $this->db->query( $sql ,array($id_tipo) );

    return $query->row()->descripcion;  
  }

}

/* End of file  */
/* Location: ./application/models/ */