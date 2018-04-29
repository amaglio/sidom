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
					<div class="row div_row" >
						<form id="form_buscar_investigacion" name="form_buscar_investigacion" class="form-inline" method="post" action="<?=site_url('investigacion/buscar_investigacion')?>">
 
								<div class="col-md-6"> 
									<select class="form-control" id="id_tipo" name="id_tipo">

										<option selected value="" hidden="hidden">Seleccionar Tipo...</option>
										<? foreach ($investigacion_tipo as $row_tipo): ?>
										    
										    <option value="<?=$row_tipo['id_investigacion_tipo']?>"><?=$row_tipo['descripcion']?></option> 

										<?	endforeach; ?>
									</select>
								</div>
								<div class=" col-md-4"> 
						 
									<button type="submit" class="btn btn-block btn-primary  "><i class="fa fa-search" style="color:white !important;"></i>Buscar</button>
							 
								</div>
						</form>
					</div>
					<div class="row"  >


						<?php if(count($investigaciones) > 0): ?>
 			
				 			<div class="row div_row row_resultado" >
				 				<div class="col-lg-12" >
				 					
				 					<?php if(isset($descripcion_tipo)) echo $descripcion_tipo; ?>
				 		 
				 				</div>
				 			</div>



							<?php foreach ($investigaciones as $row ): 

								$id_investigacion = $row['id_investigacion'];
							?>

								<div class="row  ">

								 	<div class="col-md-4 col-xs-12">
								 		<img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/investigacion/<?=$row['imagen']?>">
								 	</div>
								 	<div class="col-md-8 col-xs-12">

								 		<a class="item_nombre"  href='<?=site_url("investigacion/ver_investigacion/$id_investigacion")?>'><span><?=$row['titulo']?></span></a> <br>
								 		<span><?=$row['autores']?></span> <br>
								 		<span><?=$row['resumen']?></span>
								 		<span><?=$row['fecha']?></span>
								 		<span><?=$row['actividades']?></span>
								 	</div>

							   	</div>

							<?php endforeach ?>

						<?php else: ?>

								<span style="color:red">No se han encontrado resultados </span>

						<?php endif; ?>

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
