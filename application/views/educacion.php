<?=$head?>

<link href="<?=base_url()?>/assets/css/educacion_css.css" rel="stylesheet">

<section id="seccion_educacion"> 	
	
	<section id="seccion_educacion"> 	
		<div class="container">
			<div class="row div_row">
				<div class=" col-xs-12 " > 
				 	<img class="img-fluid rounded img_header img-rounded" src="<?=base_url()?>assets/img/headers/header_educacion.png">
				</div>
			</div>
			
		</div>
	</section>

	<section id="cursos_formulario"> 	
		<div class="container">

			<div class="row div_row">
				<div class=" col-xs-12 " > 
				 	Con modalidad presencial o in company, Fundación SIDOM concentra sus programas de formación y actualización profesional, a nivel local e internacional, en las áreas de cuidados domiciliarios e institucionales, servicios de gerontología, bioética, envejecimiento y salud. 
				</div>
			</div>
			<div class="row div_row">

				<div class="col-md-8 col-xs-12 " > 
					<div class="row div_row" >
						<div class="col-md-12 col-xs-12">
							<div> 
								<?=buscador_educacion()?>
							</div>
						</div>
					</div> 

						<div class="col-md-12 col-xs-12">

						<?php foreach ($educaciones as $row ): 
							$id_educacion = $row['id_educacion'];
						?>

							<div class="row div_row">

								<div class="col-md-12 col-xs-12">

					 				<div class="row">

							    		<span class="col-md-12 col-xs-12" >
							    			
							    			<a class="item_nombre" href='<?=site_url("educacion/ver_educacion/$id_educacion")?>'>
							    				 <?php echo $row["nombre"];?> 
							    			</a>
							    		</span>

							    	</div>

							    	<div class="row">

							    		<!--
							    		<span class="col-md-4 col-xs-12" >
							    			<label>Cursada</label>
							    		</span> -->
							    		<span class="col-md-8 col-xs-12" >
							    			<?php echo $row["cursada"];?>
							    		</span>

							    	</div>

							    	<div class="row">

							    		<!--
							    		<span class="col-md-4 col-xs-12" >
							    			<label>Certificacion</label>
							    		</span> -->
							    		<span class="col-md-8 col-xs-12" >
							    			<?php echo $row["certificacion"];?>
							    		</span>

							    	</div>

							    	<div class="row">
							    		  
							    		<span class="col-md-12 col-xs-12" >
							    			<?php echo $row["contenidos_centrales"];?>
							    		</span>
						    		</div>

						    		<div class="row">
							    		
							    		<span class="col-md-12 col-xs-12" >
							    			<label>Docentes</label>
							    			<?php echo $row["docentes"];?>
							    		</span>
							    	</div>

							    	<div class="row">
							    		<span class="col-md-12 col-xs-12" >
							    			<a target="_blank" class="btn btn-s btn-primary" href="<?=base_url()?>/assets/documentos/programas/<?php echo $row["archivo_programa"];?>" >  
							    				Ver programa  
							    			</a>
							    			<a target="_blank" class="btn btn-s btn-success"  href='<?=site_url("educacion/ver_educacion/$id_educacion")?>' >  
							    				Mas Informacion  
							    			</a>
							    		</span>
						    		</div>

						   		</div>

						   	</div>

						<?php endforeach ?>

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
