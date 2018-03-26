    <section id="footer" class="container" style="border: 1px solid green;"> 
        footer
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