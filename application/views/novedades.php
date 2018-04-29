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
						<?php foreach ($novedades as $row ): 

								$id_novedad = $row['id_novedad'];

						?>

							<div class="row  ">
 
							 	<div class="col-md-12 col-xs-12">

							 		<a class="item_nombre" href='<?=site_url("novedad/ver_novedad/$id_novedad")?>'>
							 			 <?=$row['titulo']?>
							 		</a>

							 		<h3><span></span></h3>
							 		<span><?=$row['sintesis']?></span>
							 		<span><?=$row['detalle']?></span>
							 		<div> <?=$row['mudltimedia_embebed']?> </div>
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
