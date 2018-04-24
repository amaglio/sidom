<?=$head?>
 
<section id="section_ubicacion"> 

	<section id="section_ubicacion"> 
		<div class="container">
			<div class="row div_row">
				 <div class="col-md-12 col-xs-12">
					<p> Billinghurst 1833 - Piso 10 </p>
					<p> Buenos Aires - Argentina </p>
					<p> +5411 4821-2105 </p>
					<p> informes@fundacionsidom.org </p>
				 </div>
			</div>
			<div class="row div_row">
				 <div class="col-md-12 col-xs-12">
				 <iframe style="width: -webkit-fill-available !important;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.206443832652!2d-58.625904767323895!3d-34.699972580434725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc6e9955ec8af%3A0x363f0fc2c4ecf799!2sBillinghurst+1833%2C+B1755DSC+Rafael+Castillo%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1524535428571" width="auto" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
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
