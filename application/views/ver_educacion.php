<?=$head?>

<link href="<?=base_url()?>/assets/css/educacion_css.css" rel="stylesheet">

<section id="seccion_educacion"> 	
	
	<section id="seccion_educacion"> 	
		<div class="container">
			<div class="row div_row">
				<div class=" col-xs-12 " > 
				 	<img class="img-fluid rounded img_header img-rounded" src="<?=base_url()?>assets/img/headers/header_educacion.png">
				</div>
			</div>
			
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " >  
 
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
								    		<a target="_blank" class="btn btn-xs btn-primary" href="<?=base_url()?>/assets/documentos/programas/<?php echo $educacion["archivo_programa"];?>" >  
								    				Ver programa  
								    		</a>
								    	</span> 
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
