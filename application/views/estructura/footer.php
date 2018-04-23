    <section id="footer"  style="color: white"> 
       
            <div class="row " style="background-color: #002550 ; padding: 20px 0px;">
                <div class="container">
                  <div class="col-md-4 col-xs-12 "> 
 
                        <p>Billinghurst 1833 - Piso 10, Buenos Aires - Argentina</p>
                        <p>+5411 4821-2105</p>
                        <p>informes@fundacionsidom.org</p>

                  </div>
                   <div class="col-md-4 col-xs-12 " > 
                        <ul class="item-footer">
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Home">Home</a></li>
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/La_fundacion">La Fundación</a></li>
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Educacion">Educación</a></li>
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Investigacion">Investigación</a></li>
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Novedad">Novedades</a></li>  
                        </ul>
                  </div>
                   <div class="col-md-4 col-xs-12 " > 
                        <ul class="item-footer">
 
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Proyecto">Diseño de Proyectos</a></li> 
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Informacion_gestion">Información para la Gestión</a></li>
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Marco_legal">Marco legal</a></li>
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Convenio">Convenios</a></li>
                            <li><i class="fa fa-chevron-right"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Contacto">Consultas</a></li>
                          </ul>
                  </div>
                </div>
            </div>
            <div class="row" style="background-color: #01152b; padding-top: 20px; padding-bottom: 20px; text-align: center ">
                <div class="container">
                  <div class="col-md-12 col-xs-12 " > 
                    ©2018 Fundación SIDOM
                  </div>
                </div>
            </div>
     
    </section>

  	</body>
  	
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.4.4.min.js"></script>
	<script language="javascript" type="text/javascript" src="<?=base_url()?>assets/js/jquery.validate.js" ></script> 


    <script>
		var jq_va = jQuery.noConflict();
	</script>
	
	<script type="text/javascript">

	 jq_va(function(){

            jq_va('#form_contacto').validate({

                rules :{

                        nombre : {
                            required : true
                        },
                        apellido : {
                            required : true
                        },
                        email : {
                            required : true,
                            email : true
                        } ,
                        id_motivo : {
                            required : true
                        }  
                },
                messages : {

                        nombre : {
                            required : "Debe ingresar su nombre"
                        },
                        apellido : {
                            required : "Debe ingresar su apellido"
                        },
                        email : {
                            required : "Debe ingresar el email",
                            email: "Debe tener el formato de email"
                        }  ,
                        id_motivo : {
                            required : "Debe seleccionar el motivo"
                        } 
                } 

            });    
    }); 

 
	</script>

</html>