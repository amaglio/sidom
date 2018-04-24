<?=$head?>

<link href="<?=base_url()?>/assets/css/educacion_css.css" rel="stylesheet">

<section id="seccion_educacion"> 	
	
	<section id="seccion_educacion"> 	
		<div class="container">
			<div class="row div_row">
				 <img class="img-fluid rounded img-thumbnail" id="img_educacion" src="<?=base_url()?>assets/img/educacion.jpeg">
			</div>
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " > 
					<div class="row div_row" >
						<div class="col-md-12 col-xs-12">
							<div> 
								<form id="form_buscar_cursos" name="form_buscar_cursos" class="form-inline" method="post" action="<?=site_url('curso/buscar_cursos')?>">

									<div class="form-group col-lg-5" >
		 
										<select class="form-control  " id="id_tema" name="id_tema">

											<option selected value="" hidden>Tema</option>
											<? foreach ($educacion_tema as $row_tema): ?>
											    
											    <option value="<?=$row_tema['id_educacion_tema']?>"><?=$row_tema['descripcion']?></option> 

											<?	endforeach; ?>
										</select>
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
					<div class="row div_row"  >

						<div class="col-md-12 col-xs-12">

						<?php foreach ($educaciones as $row ): ?>

							<div class="row div_row">

								<div class="col-md-12 col-xs-12">

					 				<div class="row">

							    		<span class="col-md-12 col-xs-12" >
							    			<h4><?php echo $row["nombre"];?></h4>
							    		</span>

							    	</div>

							    	<div class="row">

							    		<span class="col-md-4 col-xs-12" >
							    			<label>Cursada</label>
							    		</span> 
							    		<span class="col-md-8 col-xs-12" >
							    			<?php echo $row["cursada"];?>
							    		</span>

							    	</div>

							    	<div class="row">

							    		<span class="col-md-4 col-xs-12" >
							    			<label>Certificacion</label>
							    		</span> 
							    		<span class="col-md-8 col-xs-12" >
							    			<?php echo $row["certificacion"];?>
							    		</span>

							    	</div>

							    	<div class="row">
							    		<span class="col-md-12 col-xs-12" >
							    			<label>Contenido central</label>
							    		</span> 
							    		<span class="col-md-12 col-xs-12" >
							    			<?php echo $row["contenidos_centrales"];?>
							    		</span>
						    		</div>

						    		<div class="row">
							    		<span class="col-md-12 col-xs-12" >
							    			<label>Docentes</label>
							    		</span> 
							    		<span class="col-md-12 col-xs-12" >
							    			<?php echo $row["docentes"];?>
							    		</span>
							    	</div>

							    	<div class="row">
							    		<span class="col-md-12 col-xs-12" >
							    			<input type="submit" class="btn btn-xs" value="Ver programa">   
							    		</span>
						    		</div>

						   		</div>

						   	</div>

						<?php endforeach ?>

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
