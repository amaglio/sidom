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
				<div class="col-md-12 col-xs-12 " > 
				  	<strong>Fundación SIDOM</strong> tiene un fuerte compromiso con la <strong> investigación centrada en la mejora de condiciones de vida de los adultos mayores y servicios orientados a ellos </strong>, a nivel local e internacional. Podrán conocer los proyectos de investigación en los que se participa, así como los artículos elaborados y congresos presenciados en el marco de la agenda de producción científica que tiene nuestro equipo de profesionales.
				</div>
			</div>

			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " > 
					<div class="row div_row" >
						 <?=buscador_investigaciones()?>
					</div>
				 
						<?php foreach ($investigaciones as $row ):

							$id_investigacion = $row['id_investigacion']; ?>

							<div class="row row_listado" >

							 	<div class="col-md-4 col-xs-12">
							 		<img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/investigacion/<?=$row['imagen']?>">
							 	</div>
							 	<div class="col-md-8 col-xs-12">

							 		<a class="item_nombre hvr-overline-from-center" href='<?=site_url("investigacion/ver_investigacion/$id_investigacion")?>'>
							 			 <?=$row['titulo']?> 
							 		</a>

							 		<br>
							 		<span><?=$row['autores']?></span> <br>
							 		<span><?=$row['resumen']?></span>
							 		<span><?=$row['fecha']?></span>
							 		<span><?=$row['actividades']?></span>

							 		<?php if($row['archivo_investigacion']): ?>

							 			<a target="_blank" class="btn btn-xs btn-success" href="<?=base_url()?>/assets/documentos/investigaciones/<?php echo $row["archivo_investigacion"];?>" >  

							 			Ver investigación

							 			</a>

							 		<?php endif; ?>

							 		<span><a class="btn btn-primary btn-xs pull-right" href="">+ Información</a></span>
							 	</div>

						   	</div>

						<?php endforeach ?>
				 
				</div>

				<div class="col-md-4 col-xs-12 "> 
					<?=formulario_contacto()?>
				</div>
			
			</div>
		</div>
	</section>

</section>

<?=$footer?>
