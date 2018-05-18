<?=$head?>

<link href="<?=base_url()?>/assets/css/investigacion_css.css" rel="stylesheet">


<section id="seccion_investigacion"> 	
	
	<section id="seccion_investigacion"> 	
		<div class="container">
			<div class="row div_row">
				<div class="col-md-12 col-xs-12 " > 
					<img class="img-fluid rounded img_header img-rounded" src="<?=base_url()?>assets/img/headers/header_investigacion.png"> 
				</div>
			</div>
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " > 
					 
					<div class="row"  >
				 

							 	<div class="col-md-4 col-xs-12">
							 		<img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/investigacion/<?=$investigacion['imagen']?>">
							 	</div>
							 	<div class="col-md-8 col-xs-12">
									<span style="font-weight: bold; font-size: 16px"><?=$investigacion['titulo']?></span> <br>
							 		<span><?=$investigacion['autores']?></span> <br>
							 		<span><?=$investigacion['referencia']?></span> <br>
							 		<span><?=$investigacion['resumen']?></span> 
							 		<span><?=$investigacion['actividades']?></span>

							 		<?php if($investigacion['archivo_investigacion']): ?>

							 			<a target="_blank" class="btn btn-xs btn-success" href="<?=base_url()?>/assets/documentos/investigaciones/<?php echo $investigacion["archivo_investigacion"];?>" >  

							 			Ver investigación

							 			</a>

								 		<?php endif; ?>


							 	</div>
 
					</div>
				</div>

				<div class="col-md-4 col-xs-12 "> 
					<?=formulario_contacto()?>
				</div>
			
			</div>
		</div>
	</section>

</section>

<?=$footer?>
