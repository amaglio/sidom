<?=$head?>

 
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
  

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
                     <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/sidom_home_1.png" alt="First slide">
                    </div>

                    <div class="item">
                    <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/sidom_home_2.png" alt="Second slide">
                    </div>
                  
                    <div class="item">
                    <img class="d-block w-100 imagen_slider" src="<?=base_url()?>assets/img/slider/sidom_home_3.png" alt="Third slide">
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
       <div class="row div_row" style=" color: #002852">

          <div class="col-md-12 col-xs-12 " > 
            Nuestro compromiso y trabajo se orientan a desarrollar acciones tendientes a lograr un avance sustancial en el tratamiento de la temática del envejecimiento poblacional. A partir de la investigación, el conocimiento y la trayectoria de nuestros equipos profesionales, nos proponemos asumir el desafío de dar respuestas que contribuyan a proteger la salud funcional de las personas mayores, reducir los niveles de dependencia, fomentar el autocuidado, la identidad y el mayor grado de autonomía posible dentro de una sociedad que los incluya e integre social, económica y culturalmente como sujetos plenos de derechos.
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
                <label class="label_seccion"><span>I</span><span>nvestigaciones</span></label>
              </div>
            </div>
           

                <?php foreach ($investigaciones as $row): 

                  $id_investigacion = $row['id_investigacion'];

                ?>
                    <div class="row ">
                      <div class="col-md-12 col-xs-12 " > 

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
                    </div>
                <?php endforeach;  ?>

      
          </div>

  
          <div class="col-md-6 col-xs-12 div_row"  > 
              <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion">NOVEDADES</label>
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
                  <label class="label_seccion">CURSOS</label>
                </div>
              </div>
              <div class="row ">

              <?php foreach ($educaciones as $row): 

                    $id_educacion = $row['id_educacion'];
              ?>
                    <div class="col-md-4 col-xs-12 " > 
                      <p>
                        <a class="item_nombre" href='<?=site_url("educacion/ver_educacion/$id_educacion")?>'>
                              <?=$row['nombre']?>
                        </a>
                      </p>
                      <p>
                           <?=$row['descripcion_tema']?>
                      </p>
                       <p>
                           <?=$row['descripcion_modalidad']?>
                      </p>
                    </div>
                   

              <?php endforeach;  ?> 

              </div> 
        </div>
      </div>
    </section>

    <!-- Logos 
    <sectio id="logos">  
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
    </section> -->

    <section id="logos">  

      <div class="container">
        <div class="row div_row">
            <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion">CONVENIOS</label>
                </div>
              </div>

            <section class="customer-logos slider">
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOBIOETICAR.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSBUENOSAIRES.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSGC.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSIDOM.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSSANFRANCISCO.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSSIGLO21.jpg"></div>
              <div class="slide"><img class="img_convenio" src="<?=base_url()?>assets/img/convenios/CONVENIOSVICENTELOPEZ.jpg"></div> 
            </section>
        </div>
      </div>
    </section>

  

</section>

    <script type="text/javascript">
    /*
      $('.carousel').carousel();*/
    </script>

<?=$footer?>
