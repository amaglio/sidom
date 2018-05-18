<?=$head?>


<link href="<?=base_url()?>/assets/css/proyecto_css.css" rel="stylesheet">

<section id="seccion_proyecto"> 	

	<section id="seccion_img_txt_form">
		<div class="container">
			<div class="row div_row">

		         <div class="col-md-8 col-xs-12 "  > 
		          	<div class="row">
		          		<div class="col-md-12 col-xs-12 " > 
		            		<img class="img-fluid rounded img_header img-rounded" src="<?=base_url()?>assets/img/headers/header_marco_legal.png"> 
		            	</div>
		            </div>
		           
		         </div>

	           	<div class="col-md-4 col-xs-12 " > 
	          		<?=formulario_contacto()?>
	          	</div>

	       </div>
      	</div> 
	</section>

 
	<section id="cursos_formulario"> 	
		<div class="container">

			<div class="row div_row" >
				<div class="col-md-12 col-xs-12">
  						DIV DE TEXTO INTRODUCTORIO
				</div>
			</div>

			<div class="row div_row" >
				<div class="col-md-4 col-xs-12">
					<a target="_blank" href="<?=base_url()?>assets/documentos/marco_legal/convencion_interamericana.pdf">
					 	<img class="img-fluid rounded img-thumbnail img_proyecto" id="img_educacion" src="<?=base_url()?>assets/img/convenios/adultos_mayores.png">
					</a>
					<strong> Convención interamericana sobre la protección de los derechos humanos de las personas mayores </strong>
				</div>
				 
 
				<div class="col-md-4 col-xs-12">
					<a target="_blank" href="<?=base_url()?>assets/documentos/marco_legal/declaracion_madrid.pdf">
					 	<img class="img-fluid rounded img-thumbnail img_proyecto" id="img_educacion" src="<?=base_url()?>assets/img/convenios/declaracion_madrid.png">
					</a>
					 <strong>Declaración política y plan de acción internacional de Madrid sobre el envejecimiento</strong>
						 
					 
				</div>
 
				<div class="col-md-4 col-xs-12">
					<a target="_blank" href="<?=base_url()?>assets/documentos/marco_legal/ley_ciudad.pdf">
					 <img class="img-fluid rounded img-thumbnail img_proyecto" id="img_educacion" src="<?=base_url()?>assets/img/convenios/ley_prevencion.jpg"> 
					</a>					
					<strong> LEY J - N° 5.420: Prevención y protección integral contra abuso y maltrato a los adultos mayores. Ciudad de Buenos Aires</strong>				 
				</div>
			</div>
		</div>
	</section>

</section>
<?=$footer?>
