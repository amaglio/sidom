<?=$head?>

    <section id="contenedor-central" class="container"	> 

        <div class="row-fluid">

	        <div class="col-md-4 col-xs-12 well">
	        	<form name="form_contacto" id="form_contacto" method="post">
 
		        	<label for="nombre">Nombre</label>
		        	<input type="text" class="form-control" name="nombre" id="nombre">

	        		<label for="apellido">Apellido</label>
	        		<input type="text" class="form-control" name="apellido" id="apellido">
	 
	        		<label for="telefono">Telefono</label>
	        		<input type="text" class="form-control" name="telefono" id="telefono">
		  
		        	<label for="id_motivo">Motivo</label>

		        	<?php  $motivos = array(); ?>
              
	              	<?php   foreach ($contacto_motivos as $row):  

			                    $motivos[$row['id_contacto_motivo']] = $row['descripcion'];

			                endforeach; 
	              	?>
	              	<?php
                    		
                    		echo form_dropdown('id_motivo', $motivos,  ''  ,'class="form-control" id="id_motivo" name="id_motivo"  ' );
                   ?>

                   <label for="consulta">Consulta</label>
                   <textarea class="form-control" id="id_motivo" name="id_motivo"></textarea>

                   <input type="submit" class="btn btn-primary" name="enviar" id="enviar" value="Enviar">

	        	</form>
	        </div>	

        </div>

    </section>

<?=$footer?>
