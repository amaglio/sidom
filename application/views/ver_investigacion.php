<?=$head?>

<link href="<?=base_url()?>/assets/css/investigacion_css.css" rel="stylesheet">


<section id="seccion_investigacion"> 	
	
	<section id="seccion_investigacion"> 	
		<div class="container">
			<div class="row div_row">
				<img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/investigacion.jpg">
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

							 		<a href='<?=site_url("investigacion/ver_investigacion/$id_investigacion")?>'><span><?=$investigacion['titulo']?></span></a> <br>
							 		<span><?=$investigacion['autores']?></span> <br>
							 		<span><?=$investigacion['resumen']?></span>
							 		<span><?=$investigacion['fecha']?></span>
							 		<span><?=$investigacion['actividades']?></span>
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
