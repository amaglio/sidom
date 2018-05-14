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

				<div class="col-md-8 col-xs-12 "  > 
					 
						<?php foreach ($novedades as $row ): 

								$id_novedad = $row['id_novedad'];

						?>

							<div class="row row_listado">
 								
 								<div class="col-md-3 col-xs-12">
 									<img class="img-thumbnail" src="<?=base_url()?>assets/img/novedad/<?=$row['foto_novedad']?>"> 			
							 	</div>

							 	<div class="col-md-9 col-xs-12">

							 		<a class="item_nombre hvr-overline-from-center" href='<?=site_url("novedad/ver_novedad/$id_novedad")?>'>
							 			 <?=$row['titulo']?>
							 		</a><br> 
							 		<span><?=$row['sintesis']?></span> 
							 	</div>

						   	</div>

						<?php endforeach ?>
				 
				</div>

				<div class="col-md-4 col-xs-12 " > 
					<?=formulario_contacto()?>
				</div>
			
			</div>
		</div>
	</section>

</section>

<?=$footer?>
