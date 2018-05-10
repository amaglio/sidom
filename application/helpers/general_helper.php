<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 


// Mensaje de error de las variables flash session
if(!function_exists('mensaje_resultado'))
{
    function mensaje_resultado($mensaje)
    {
        if ($mensaje): ?>
                <div class="callout callout-success mensaje_resultado" style="padding:5px 30px 5px 15px">
                  <h5 style="font-weight: bold"><?=$mensaje?></h5>
                </div>
        <?php  endif;  
    }
}

if(!function_exists('enviar_email'))
{
    function enviar_email($array )
    {   
        $CI =& get_instance();

        $CI->load->library("email"); 


        /*
        $configuracion = array(
            'protocol' => 'smtp',
            'smtp_host' => '10.0.0.3',
            'smtp_port' => 25,
            'smtp_user' => '',
            'smtp_pass' => '',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );*/

        $configuracion = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'digipayargentina@gmail.com',
            'smtp_pass' => 'digipay2016',
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );

        //Cargamos la configuración 

        $CI->email->initialize($configuracion);
        $CI->email->from( "info@fundacionsidom.com" ,  "No reply");
        $CI->email->subject("[SIDOM] Fundación SIDOM");
        
        $mensaje_email = 'Contacto WEB <br>';

        $mensaje_email = "<strong>Nombre: </strong>".$array['nombre'].', '.$array['apellido']."<br>";
        $mensaje_email .= "<strong>Email: </strong>".$array['email']."<br>";
        $mensaje_email .= "<strong>Motivo: </strong>".$array['email']."<br>";

        if(isset($array['telefono']))
           $mensaje_email .= "<strong>Telefono: </strong>".$array['telefono']."<br>";

        if(isset($array['consulta']))
           $mensaje_email .= "<strong>Consulta: </strong>".$array['consulta']."<br>";

        $CI->email->message($mensaje_email);


        $email_to = "adrian.magliola@gmail.com";
       
        $CI->email->to($email_to);   
       
       
        if( $CI->email->send() ):

            $resultado_envio_email = TRUE ;
         
        else:
            
            $resultado_envio_email = FALSE ;
        
        endif;  
 

        return $resultado_envio_email;
    }
}

if(!function_exists('formulario_contacto'))
{
    function formulario_contacto()
    { 
        $CI =& get_instance();
        $CI->load->model('Contacto_model');
        $contacto_motivos = $CI->Contacto_model->get_contacto_motivos();

        ?>  
            <div class="form-group">
                <label>Dejanos tu consulta</label>
            </div>
            <form name="form_contacto" id="form_contacto" method="post" action="<?=base_url()?>index.php/contacto/procesar_contacto">
                    
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre *">  
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido *">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email *">
                </div>
                
                <div class="form-group">
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                </div>
                
                <div class="form-group">

                    <?php  $motivos = array(); ?>

                    <?php  $motivos[''] = "Elegir motivo"; ?>
              
                    <?php   foreach ($contacto_motivos as $row):  

                                $motivos[$row['id_contacto_motivo']] = $row['descripcion'];

                            endforeach; 
                    ?>
                    <?php
                            
                            echo form_dropdown('id_motivo', $motivos,  ''  ,'class="form-control" id="id_motivo" name="id_motivo" ' );
                   ?>
                </div>

                <div class="form-group">
                   <textarea class="form-control" id="consulta" name="consulta" placeholder="Comentario *"></textarea>
                </div>

               <input type="submit" class="btn btn-primary btn-block" name="enviar" id="enviar" value="Enviar">

            </form>

       <?
    }
} 


if(!function_exists('buscador_investigaciones'))
{
    function buscador_investigaciones()
    { 
        $CI =& get_instance();
        $CI->load->model('Investigacion_model'); 
        $investigacion_tipo =  $CI->Investigacion_model->get_investigacion_tipo();

        ?>  
             <form id="form_buscar_investigacion" name="form_buscar_investigacion" class="form-inline" method="post" action="<?=site_url('investigacion/buscar_investigacion')?>">
 
                    <div class="col-md-4"> 
                        <?/*
                        <select class="form-control" id="id_tipo" name="id_tipo">

                            <option selected value="" hidden="hidden">Seleccionar Tipo...</option>
                            <? foreach ($investigacion_tipo as $row_tipo): ?>
                                
                                <option value="<?=$row_tipo['id_investigacion_tipo']?>"><?=$row_tipo['descripcion']?></option> 

                            <?  endforeach; ?>
                        </select>*/?>
                        <input class="form-control" type="input" name="anio" id="anio" placeholder="Ingresar año">
                    </div>
                    <div class=" col-md-4"> 
             
                        <button type="submit" class="btn btn-block btn-primary  "><i class="fa fa-search" style="color:white !important;"></i> Buscar</button>
                 
                    </div>
            </form>

       <?
    }
} 

if(!function_exists('buscador_educacion'))
{
    function buscador_educacion()
    { 
        $CI =& get_instance();
        $CI->load->model('Educacion_model'); 
        $educacion_modalidad =  $CI->Educacion_model->get_educacion_modalidad();
        $educacion_tema =  $CI->Educacion_model->get_educacion_tema();

        ?>  
            <form id="form_buscar_cursos" name="form_buscar_cursos" class="form-inline" method="post" action="<?=site_url('educacion/buscar_cursos')?>">

                                    <div class="form-group col-lg-5" >
         
                                        <select class="form-control  phone-group" id="id_tema" name="id_tema">

                                            <option selected value="" hidden="hidden">Seleccionar Tema...</option>
                                            <? foreach ($educacion_tema as $row_tema): ?>
                                                
                                                <option value="<?=$row_tema['id_educacion_tema']?>"><?=$row_tema['descripcion']?></option> 

                                            <?  endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-5"> 
                                        <select class="form-control  phone-group" id="id_modalidad" name="id_modalidad">

                                            <option selected value="" hidden="hidden">Seleccionar Modalidad...</option>
                                            <? foreach ($educacion_modalidad as $row_modalidad): ?>
                                                
                                                <option value="<?=$row_modalidad['id_educacion_modalidad']?>"><?=$row_modalidad['descripcion']?></option> 

                                            <?  endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-2">
                                        <button type="submit" class="btn btn-block btn-primary  "><i class="fa fa-search" style="color:white !important;"></i>  Buscar</button>
                                    </div>
                                </form>

       <?
    }
} 

?>