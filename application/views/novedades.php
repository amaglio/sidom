<?=$head?>

<link href="<?=base_url()?>/assets/css/novedad_css.css" rel="stylesheet">

<section id="seccion_novedad"> 	
	
	<section id="seccion_novedad"> 	
		<div class="container">
			<div class="row div_row">
				<img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/novedad.jpg">
			</div>
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 "  > 
					<div class="row" >
						<?php foreach ($novedades as $row ): ?>

							<div class="row  ">
 
							 	<div class="col-md-12 col-xs-12">

							 		<span><?=$row['titulo']?></span>
							 		<span><?=$row['sintesis']?></span>
							 		<span><?=$row['detalle']?></span>

							 	</div>

						   	</div>

						<?php endforeach ?>
					</div>
				</div>

				<div class="col-md-4 col-xs-12 " > 
					<?=formulario_contacto()?>
				</div>
			
			</div>
		</div>
	</section>

</section>

<?=$footer?>
