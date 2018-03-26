<?=$head?>

    <section id="contenedor-central" class="container" style="border: 1px solid red;"> 
       
       <!-- Slide and text -->
       <div class="row-fluid">

       		<div class="col-md-7 col-xs-12 " style="background-color: red "> 
       			
                  
                              
   
           
                        
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

       		<div class="col-md-5 col-xs-12" style="background-color: blue "> 
       			Texto
       		</div>

       </div>

       <!-- Investigacion y novedades -->
       <div class="row-fluid">

       		<div class="col-md-6 col-xs-12 " style="background-color: yellow "> 
       			Investigacion
       		</div>

       		<div class="col-md-6 col-xs-12" style="background-color: green "> 
       			novedades
       		</div>

       </div>

       <!-- Educacion -->
       <div class="row-fluid">

       		<div class="col-md-12 col-xs-12 " style="background-color: pink "> 
       			Educacion
       		</div>

       </div>

       <!-- Logos -->
       <div class="row-fluid">

       		<div class="col-md-12 col-xs-12 " style="background-color: grey "> 
       			Logos
       		</div>

       </div>

    </section>

    <script type="text/javascript">

      $('.carousel').carousel();
    </script>

<?=$footer?>
