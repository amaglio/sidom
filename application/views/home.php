<?=$head?>

<link href="<?=base_url()?>/assets/css/home_css.css" rel="stylesheet">

<section id="serccion_home">

    <!-- Carrusel -->
    <section id="carrusel">  
      <div class="container">
       <div class="row div_row">

          <div class="col-md-12 col-xs-12 " > 
                        
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/foto1.jpg" alt="First slide">
                    </div>

                    <div class="item">
                    <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/foto2.jpg" alt="Second slide">
                    </div>
                  
                    <div class="item">
                    <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/foto3.jpg" alt="Third slide">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
 
          </div>
       </div>
      </div>
    </section>

    <!-- Institucional -->
    <section id="institucional">  
      <div class="container">
       <div class="row div_row">

          <div class="col-md-12 col-xs-12 "  > 
            Institucional : Nuestro compromiso y trabajo se orientan a desarrollar acciones tendientes a lograr un avance sustancial en el tratamiento de la temática del envejecimiento poblacional. A partir de la investigación, el conocimiento y la trayectoria de nuestros equipos profesionales nos proponemos asumir el desafío de dar respuestas que contribuyan a proteger la salud funcional de las personas mayores, reducir los niveles de dependencia, fomentar el autocuidado, la identidad y el mayor grado de autonomía posible dentro de una sociedad que los incluya e integre social, económica y culturalmente como sujetos plenos de derechos.
          </div>

       </div>
      </div>
    </section>

     <!-- Institucional -->
    <section id="investigacion_novedades">  
      <div class="container">
        <div class="row  ">

          <div class="col-md-6 col-xs-12 div_row"  > 
            <div class="row ">
              <div class=" col-xs-12  "  > 
                <label class="label_seccion">Investigaciones</label>
              </div>
            </div>
            <div class="row ">

                <?php foreach ($investigaciones as $row): 

                  $id_investigacion = $row['id_investigacion'];

                ?>

                      <div class="col-md-6 col-xs-12 " > 

                        <div class="row ">
                            <div class="col-md-4 col-xs-12 " > 
                              <img class="img-rounded img-thumbnail foto_investigacion" src="<?=base_url()?>assets/img/investigacion/<?=$row['imagen']?>">
                            </div>
                            <div class="col-md-8 col-xs-12 " > 
                              <a class="item_nombre" href='<?=site_url("investigacion/ver_investigacion/$id_investigacion")?>'> 
                                <?=$row['titulo']?>
                              </a>
                              <br>
                              <span><?=$row['descripcion_tipo_investigacion']?></span>
      
                                  
                            </div>
                        </div>

                       

                      </div>

                <?php endforeach;  ?>

            </div>
          </div>

  
          <div class="col-md-6 col-xs-12 div_row"  > 
              <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion">Novedades</label>
                </div>
              </div>
              <div class="row ">

                <?php foreach ($novedades as $row): 

                    $id_novedad = $row['id_novedad'];

                    ?>

                      <div class="col-md-4 col-xs-12 " >
                        <a class="item_nombre" href='<?=site_url("novedad/ver_novedad/$id_novedad")?>'>
                          <?=$row['titulo']?>            
                        </a>
                        <br>
                        <span><?=$row['sintesis']?></span> 
                      </div>

                <?php endforeach;  ?>


              </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Educacion -->
    <section id="educacion">  
      <div class="container">
        <div class="row div_row"> 
              <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion">Cursos</label>
                </div>
              </div>
              <div class="row ">

              <?php foreach ($educaciones as $row): 

                    $id_educacion = $row['id_educacion'];
              ?>

               
                    <div class="col-md-4 col-xs-12 " > 
                      <div class="form-group row">
                          <!--<label class="col-sm-3">Nombre</label>-->
                          <div class="col-sm-8">
                            <a class="item_nombre" href='<?=site_url("educacion/ver_educacion/$id_educacion")?>'>
                              <?=$row['nombre']?>
                            </a>
                          </div>
                      </div>
                      <div class="form-group row">
                          <!--<label class="col-sm-3">Tema</label>-->
                          <div class="col-sm-8">
                           <?=$row['descripcion_tema']?>
                          </div>
                      </div>
                      <div class="form-group row">
                          <!--<label class="col-sm-3">Modalidad</label>-->
                          <div class="col-sm-8">
                           <?=$row['descripcion_modalidad']?>
                          </div>
                      </div>

                    </div>

              <?php endforeach;  ?> 

              </div> 
        </div>
      </div>
    </section>

    <!-- Logos -->
    <sectio id="educacion">  
      <div class="container">
        <div class="row div_row">
              
                <div class="col-md-2 col-xs-6 "  "> 
                  <img class="img-rounded img-thumbnail thumbnail img_logo" src="<?=base_url()?>assets/img/logos/bioetica.png">
                </div>
                <div class="col-md-2 col-xs-6 "  "> 
                  <img class="img-rounded img-thumbnail thumbnail img_logo" src="<?=base_url()?>assets/img/logos/san_francisco.jpg">
                </div>
                <div class="col-md-2 col-xs-6 "  "> 
                  <img class="img-rounded img-thumbnail thumbnail img_logo" src="<?=base_url()?>assets/img/logos/tercera_edad.jpg">
                </div>
  
                <div class="col-md-2 col-xs-6 "  "> 
                  <img class="img-rounded img-thumbnail thumbnail img_logo" src="<?=base_url()?>assets/img/logos/gerentcorp.jpg"> 
                </div>
                <div class="col-md-2 col-xs-6 "  "> 
                  <img class="img-rounded img-thumbnail thumbnail img_logo" src="<?=base_url()?>assets/img/logos/muni_vicente.jpg">
                </div>
                <div class="col-md-2 col-xs-6 "  "> 
                  <img class="img-rounded img-thumbnail thumbnail img_logo" src="<?=base_url()?>assets/img/logos/sigloxxi.jpg">
                </div>
              </div>
       
      </div>
    </section> 

</section>

    <script type="text/javascript">

      $('.carousel').carousel();
    </script>

<?=$footer?>
