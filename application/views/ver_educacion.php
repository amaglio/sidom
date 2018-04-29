<?=$head?>

<link href="<?=base_url()?>/assets/css/educacion_css.css" rel="stylesheet">

<section id="seccion_educacion"> 	
	
	<section id="seccion_educacion"> 	
		<div class="container">
			<div class="row div_row">
				 <img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/educacion.jpeg">
			</div>
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " > 
					 
					<div class="row div_row"  >

						<div class="col-md-12 col-xs-12">
 
							<div class="row div_row">

								<div class="col-md-12 col-xs-12">

					 				<div class="row">

							    		<span class="col-md-12 col-xs-12" >
 
							    				<h4><?php echo $educacion["nombre"];?></h4>
 
							    		</span>

							    	</div>

							    	<div class="row">

							    		
							    		<span class="col-md-12 col-xs-12" >
							    			<?php echo $educacion["cursada"];?>
							    		</span>

							    	</div>

							    	<div class="row">

							    		
							    		<span class="col-md-12 col-xs-12" >
							    			<?php echo $educacion["certificacion"];?>
							    		</span>

							    	</div>

							    	<div class="row">
							    	 
							    		<span class="col-md-12 col-xs-12" >
							    			<?php echo $educacion["contenidos_centrales"];?>
							    		</span>
						    		</div>

						    		<div class="row">
						 
							    		<span class="col-md-12 col-xs-12" >
							    			<?php echo $educacion["docentes"];?>
							    		</span>
							    	</div>

							    	<div class="row">
							    		<span class="col-md-12 col-xs-12" >
							    			<input type="submit" class="btn btn-xs" value="Ver programa">   
							    		</span>
						    		</div>

						   		</div>

						   	</div>
 

						</div>

					</div>

				</div>

				<div class="col-md-4 col-xs-12 "  > 
					<?=formulario_contacto()?>
				</div>
			
			</div>
		</div>
	</section>

</section>
 
<?=$footer?>
