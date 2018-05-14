    <section id="footer"  style="color: white"> 
        
        
        <section id="sub_footer" style="background-color: #002550 ; padding: 20px 0px;">
           <div class="container">
            <div class="row " >
               
                  <div class="col-md-4 col-xs-12 "> 

                        <p>Billinghurst 1833 - Piso 10, Buenos Aires - Argentina</p>
                        <p>+5411 4821-2105</p>
                        <p>informes@fundacionsidom.org</p>

                  </div>
                   <div class="col-md-4 col-xs-12 " > 
                        <ul class="item-footer">
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Home">Home</a></li>
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/La_fundacion">La Fundación</a></li>
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Educacion">Educación</a></li>
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Investigacion">Investigación</a></li>
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Novedad">Novedades</a></li>  
                        </ul>
                  </div>
                   <div class="col-md-4 col-xs-12 " > 
                        <ul class="item-footer">

                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Proyecto">Diseño de Proyectos</a></li> 
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Informacion_gestion">Información para la Gestión</a></li>
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Marco_legal">Marco legal</a></li>
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Convenio">Convenios</a></li>
                            <li><i class="fab fa-pushed"></i>  <a class="link_footer" href="<?=base_url()?>index.php/Contacto">Consultas</a></li>
                          </ul>
                  </div>
                
            </div>
          </div>
        </section> 

        

        <section id="sub_footer" style="background-color: #01152b; padding-top: 20px; padding-bottom: 20px; text-align: center ">
          <div class="container">
            <div class="row" >
                
                  <div class="col-md-12 col-xs-12 " > 
                    

                    ©2018 Fundación SIDOM

                    </div>
                  
                
            </div>
          </div>
        </section>
     
    </section>

  	</body>
  	
    <!-- Jquery validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js" ></script>


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
                }/*,
                submitHandler: function (form) 
                {
                    var values = jq_va('#form_contacto').serialize();

                    //alert(values);

                    jq_va.ajax({
                      url: CI_ROOT+'index.php/contacto/enviar_email',
                      async: true,
                      data: values,
                      type: 'POST' ,
                      dataType: 'JSON',
                      success: function(data)
                      {   

                          if(data.error == false)
                          {
                              alert("Se cambio el estado exitosamente");
                              //location.reload();
                          }
                          else
                          {
                              alert("No se cambio el estado exitosamente");
                          }
                        },
                        error: function(x, status, error){
                          alert("No se ejecuto el cambio, intente mas tarde.");
                      } 

                    });  



                }*/

            });    
    }); 
    
    jq_va(function(){

            jq_va('#form_buscar_cursos').validate({

                rules :{

                      id_tema : {
                          require_from_group: [1, ".phone-group"]
                      },
                      id_modalidad : {
                          require_from_group: [1, ".phone-group"]
                      }
                },
                messages : {

                      id_tema : {
                        require_from_group: "Debe seleccionar al menos un filtro"
                      },
                      id_modalidad : {
                        require_from_group: "Debe seleccionar al menos un filtro"
                      }
                } 

            });    
    }); 

    jq_va(function(){

            jq_va('#form_buscar_investigacion').validate({

                rules :{

 
                      id_tipo : {
                          required : true
                      }
                },
                messages : {

 
                      id_tipo : {
                        required: "Debe seleccionar un tipo"
                      }
                } 

            });    
    });
    
    jq_va(document).ready(function(){
      jq_va('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
});

	</script>

</html>