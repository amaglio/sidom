<?=$head?>
 

    <section id="contenedor-central" class="container"	> 

        <div class="row-fluid">

	        <div class="col-md-4 col-xs-12 well">

	        	<form name="form_contacto" id="form_contacto" method="post" action="<?=base_url()?>index.php/contacto/procesar_contacto">
 					
 					<div class="form-group">
		        		<label for="nombre">Nombre</label>
		        		<input type="text" class="form-control" name="nombre" id="nombre">  
		        	</div>
					
					<div class="form-group">
	        			<label for="apellido">Apellido</label>
	        			<input type="text" class="form-control" name="apellido" id="apellido">
	        		</div>

	        		<div class="form-group">
	        			<label for="email">Email</label>
	        			<input type="text" class="form-control" name="email" id="email">
	        		</div>
	 				
	 				<div class="form-group">
	        			<label for="telefono">Telefono</label>
	        			<input type="text" class="form-control" name="telefono" id="telefono">
	        		</div>
		  			
		  			<div class="form-group">
			        	<label for="id_motivo">Motivo</label>

			        	<?php  $motivos = array(); ?>

			        	<?php  $motivos[''] = "Elegir motivo"; ?>
	              
		              	<?php   foreach ($contacto_motivos as $row):  

				                    $motivos[$row['id_contacto_motivo']] = $row['descripcion'];

				                endforeach; 
		              	?>
		              	<?php
	                    		
	                    		echo form_dropdown('id_motivo', $motivos,  ''  ,'class="form-control" id="id_motivo" name="id_motivo"  ' );
	                   ?>
					</div>

					<div class="form-group">
	                   <label for="consulta">Consulta</label>
    	               <textarea class="form-control" id="consulta" name="consulta"></textarea>
    	            </div>

                   <input type="submit" class="btn btn-primary" name="enviar" id="enviar" value="Enviar">

	        	</form>
	        </div>	

        </div>

    </section>
	
 
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

<?=$footer?>
