<?php

$config = array(
            
    // --------------------------------- LOGUEO ADMIN ------------------------------


            'loguearse' => array(
                                    array(
                                            'field' => 'usuario',
                                            'label' => 'usuario',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'clave',
                                            'label' => 'clave',
                                            'rules' => 'required|trim|xss_clean'
                                        )
                                ),

            'enviar_email' => array(
                                    array(
                                            'field' => 'nombre',
                                            'label' => 'nombre',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'apellido',
                                            'label' => 'apellido',
                                            'rules' => 'trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'email',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'mensaje',
                                            'label' => 'mensaje',
                                            'rules' => 'required|trim|xss_clean'
                                        )
                                ),

            'procesa_contacto' => array(
                                    array(
                                            'field' => 'nombre',
                                            'label' => 'nombre',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'apellido',
                                            'label' => 'apellido',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'email',
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'telefono',
                                            'label' => 'telefono',
                                            'rules' => 'trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'id_motivo',
                                            'label' => 'id_motivo',
                                            'rules' => 'trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'consulta',
                                            'label' => 'consulta',
                                            'rules' => 'trim|xss_clean'
                                        )
                                ),

              'buscar_cursos' => array(
                                    array(
                                            'field' => 'id_tema',
                                            'label' => 'id_tema',
                                            'rules' => 'trim|xss_clean|callback_validate_either'
                                        ),
                                    array(
                                            'field' => 'id_modalidad',
                                            'label' => 'id_modalidad',
                                            'rules' => 'trim|xss_clean|callback_validate_either'
                                        ) 
                                ),

              /*
              'buscar_investigacion' => array(
                                    array(
                                            'field' => 'id_tipo',
                                            'label' => 'id_tipo',
                                            'rules' => 'trim|xss_clean|required'
                                        ) 
                                ),*/
                
                'buscar_investigacion' => array(
                                    array(
                                            'field' => 'anio',
                                            'label' => 'anio',
                                            'rules' => 'trim|xss_clean|required'
                                        ) 
                                ),

                'buscar_investigacion_tipo' => array(
                                    array(
                                            'field' => 'anio',
                                            'label' => 'anio',
                                            'rules' => 'trim|xss_clean|required'
                                        ),
                                    array(
                                            'field' => 'id_tipo_investigacion',
                                            'label' => 'id_tipo_investigacion',
                                            'rules' => 'trim|xss_clean|required'
                                        ) 
                                ),
         
                                
);


?>