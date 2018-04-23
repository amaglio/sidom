<?=$head?>
 
<section id="section_ubicacion"> 

	<section id="section_ubicacion"> 
		<div class="container">
			<div class="row div_row">
				 <div class="col-md-12 col-xs-12">
				 TEXTO
				 </div>
			</div>
			<div class="row div_row">
				 <div class="col-md-12 col-xs-12">
				 MAPA
				 </div>
			</div>
			<div class="row div_row">
				 <div class="col-md-12 col-xs-12">
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
		</div>
	</section>
    	
</section>
	
 
	

<?=$footer?>
