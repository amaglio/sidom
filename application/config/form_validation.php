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
                                            'rules' => 'required|trim|xss_clean'
                                        ),
                                    array(
                                            'field' => 'consulta',
                                            'label' => 'consulta',
                                            'rules' => 'trim|xss_clean'
                                        )
                                ),

 
                                
);


?>