<?=$head?>

<link href="<?=base_url()?>/assets/css/novedad_css.css" rel="stylesheet">

<section id="seccion_novedad"> 	
	
	<section id="seccion_novedad"> 	
		<div class="container">
			<div class="row div_row">
				<div class="col-md-12 col-xs-12 " > 
					<img class="img-fluid rounded img_header img-rounded" src="<?=base_url()?>assets/img/headers/header_novedades.png"> 
				</div>
			</div>
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " > 
					 
					<div class="row div_row"  >

						 

						<div class="col-md-12 col-xs-12">

			 				<div class="row">

					    		<span class="col-md-12 col-xs-12" >

					    				<h4><?php echo $novedad["titulo"];?></h4>

					    		</span>

					    	</div>

					    	<div class="row">

					    		
					    		<span class="col-md-12 col-xs-12" >
					    			<?php echo $novedad["sintesis"];?>
					    		</span>

					    	</div>

					    	<div class="row">

					    		
					    		<span class="col-md-12 col-xs-12" >
					    			<?php echo $novedad["detalle"];?>
					    		</span>

					    	</div>

					    	<div class="row">
					    	 
					    		<span class="col-md-12 col-xs-12" >
					    			<?php echo $novedad["mudltimedia_embebed"];?>
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
