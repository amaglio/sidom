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
						<div class="col-md-12 col-xs-12">

							<div class="col-md-12 col-xs-12">
								<div> 
									<form id="form_buscar_cursos" name="form_buscar_cursos" class="form-inline" method="post" action="<?=site_url('curso/buscar_cursos')?>">

										<div class="form-group col-lg-5" >
			  								<input class="form-control" type="text" name="anio" id="anio" placeholder="Año">
										</div>
										<div class="form-group col-lg-5"> 
											<select class="form-control  " id="id_modalidad" name="id_modalidad">

												<option selected value="" hidden>Modalidad</option>
												<? foreach ($educacion_modalidad as $row_modalidad): ?>
												    
												    <option value="<?=$row_modalidad['id_educacion_modalidad']?>"><?=$row_modalidad['descripcion']?></option> 

												<?	endforeach; ?>
											</select>
										</div>
										<div class="form-group col-lg-2">
											<button type="submit" class="btn btn-block btn-primary  "><i class="fa fa-search" style="color:white !important;"></i>Buscar</button>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
					<div class="row"  >
						<?php foreach ($investigaciones as $row ): ?>

							<div class="row  ">

							 	<div class="col-md-4 col-xs-12">
							 		<img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/investigacion/<?=$row['imagen']?>">
							 	</div>
							 	<div class="col-md-8 col-xs-12">

							 		<span><?=$row['titulo']?></span>
							 		<span><?=$row['autores']?></span>
							 		<span><?=$row['referencia']?></span>

							 	</div>

						   	</div>

						<?php endforeach ?>
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
