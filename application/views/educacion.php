<?=$head?>

<section id="seccion_educacion"> 	
	
	<section id="seccion_educacion"> 	
		<div class="container">
			<div class="row div_row">
				Imagen
			</div>
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " style="background-color: blue "> 
					<div class="row" style="background-color: grey ">
						<div class="col-md-12 col-xs-12">
							Filtro
						</div>
					</div>
					<div class="row" style="background-color: red ">
						<?php foreach ($educaciones as $row ): ?>

							<div class="col-md-12 col-xs-12">

				 				<div class="row">

						    		<span class="col-md-12 col-xs-12" >
						    			<?php echo $row["nombre"];?>
						    		</span>

						    	</div>

						    	<div class="row">

						    		<span class="col-md-4 col-xs-12" >
						    			<label>Cursada</label>
						    		</span> 
						    		<span class="col-md-8 col-xs-12" >
						    			<?php echo $row["cursada"];?>
						    		</span>

						    	</div>

						    	<div class="row">

						    		<span class="col-md-4 col-xs-12" >
						    			<label>Certificacion</label>
						    		</span> 
						    		<span class="col-md-8 col-xs-12" >
						    			<?php echo $row["certificacion"];?>
						    		</span>

						    	</div>

						    	<div class="row">
						    		<span class="col-md-12 col-xs-12" >
						    			<label>Contenido central</label>
						    		</span> 
						    		<span class="col-md-12 col-xs-12" >
						    			<?php echo $row["contenidos_centrales"];?>
						    		</span>
					    		</div>

					    		<div class="row">
						    		<span class="col-md-12 col-xs-12" >
						    			<label>Docentes</label>
						    		</span> 
						    		<span class="col-md-12 col-xs-12" >
						    			<?php echo $row["docentes"];?>
						    		</span>
						    	</div>

						    	<div class="row">
						    		<span class="col-md-12 col-xs-12" >
						    			<input type="submit" class="btn btn-xs" value="Ver programa">   
						    		</span>
					    		</div>

					   		</div>

						<?php endforeach ?>
					</div>
				</div>

				<div class="col-md-4 col-xs-12 " style="background-color: green "> 
					Formulario
				</div>
			
			</div>
		</div>
	</section>

</section>
 
<?=$footer?>
