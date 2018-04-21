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
                     <img class="d-block w-100" src="<?=base_url()?>assets/img/slider/hqdefault.jpg" alt="First slide">
                    </div>

                    <div class="item">
                    <img class="d-block w-100" src="<?=base_url()?>assets/img/slider/Mitte-Karten.gif" alt="Second slide">
                    </div>
                  
                    <div class="item">
                    <img class="d-block w-100" src="<?=base_url()?>assets/img/slider/imagen.png" alt="Third slide">
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

          <div class="col-md-12 col-xs-12 " style="background-color: yellow "> 
            Institucional
          </div>

       </div>
      </div>
    </section>

     <!-- Institucional -->
    <section id="investigacion_novedades">  
      <div class="container">
        <div class="row div_row">

          <div class="col-md-6 col-xs-12 " style="background-color: pink "> 
            INvestigacion
          </div>

          <div class="col-md-6 col-xs-12 " style="background-color: purple "> 
            Novedades
          </div>

        </div>
      </div>
    </section>

    <!-- Educacion -->
    <section id="educacion">  
      <div class="container">
      <div class="row div_row">
          <div class="col-md-12 col-xs-12 " style="background-color: yellow "> 
            Educacion
          </div>
       </div>
      </div>
    </section>

    <!-- Logos -->
    <section id="educacion">  
      <div class="container">
      <div class="row div_row">
           
            <div class="col-md-12 col-xs-12 " style="background-color: grey "> 
              Logos
            </div> 
       </div>
      </div>
    </section> 

</section>

    <script type="text/javascript">

      $('.carousel').carousel();
    </script>

<?=$footer?>
