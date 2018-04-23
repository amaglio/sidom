<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- OsteriaX -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title><?=$titulo?></title>
   
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/favicon.ico" type="image/x-icon">
    
    <link href="<?=base_url()?>assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

    <link href="<?=base_url()?>assets/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" >

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" >

    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"  ></script>

    <script type="text/javascript" src="<?=base_url()?>assets/dist/js/bootstrap.min.js"  ></script>



    <script type="text/javascript">
            CI_ROOT = "<?=base_url()?>";
    </script>
    
    <style type="text/css">
        
        label.error
        {
            color:red;
            font-size: 11px;
        }

        .div_row
        {
            padding: 1.25rem;
            /*margin-top: 1.25rem;*/
            margin-bottom: 1.25rem;
            border: 1px solid #eee;
            /*border-left-width: .25rem;*/
            border-radius: .25rem
        }

        #logo{
          width: 170px;
        }

        .fa{
          font-size: 20px;
        }

        
        .navbar-collapse {
              float: left;
              width: 100%;
              clear: both;
        }

        #button_responsive{
              background-color: #002650;
        }

        .icon-bar{
          background-color: white;
        }

        .nav>li>a 
        {
            position: relative;
            display: block;
            padding: 10px 10px;
        }

        .navbar-header{
          padding: 10px 0px;
        }

        .nav>li>a { 
            padding: 10px 10px;
            color: #002751;
            font-weight: 600;
        }

        
        label.label_seccion{
          padding: 5px;
            background-color: #0025502e;
            width: -webkit-fill-available;
            color: black;
            margin-bottom: 10px;
            padding-left: 20px;
        }

        .img_logo{
          width: 150px;
          float: right;
          height: 70px
        }


        @media (min-width: 768px) {
            .navbar-right {
                margin-top: -60px;
            }
 

        }

        @media (max-width: 768px) {
 

            #div_redes{
              display: none !important;
              visibility: hidden;
            }


        }


/* --- FOOTER --- */
        
    #footer_link
    {
        background-color: #212529;
        color:#FFF;
    }

    #footer_redes
    {
        background-color: #131417;
        color:#FFF;
    }

    .footer_seccion
    {
        color: #947301 !important;
    }

    .footer_link_util
    {
        color: white !important;
    }

    .link_menu{
        color: #000;
        font-weight: bold;
        font-size: 14px;
    font-weight: 500;
    }

    .item-footer{
      list-style:none !important;
    }

    .fa-chevron-right{
      font-size: 12px;
    }
    
    .mr-3{
      margin-right: 2rem!important;
    }
    
    .link_footer{
      color: white;
    }

    .link_footer:hover{
      color: grey; 
      text-decoration: none;
    }
    
    </style>
 
  </head>
  <body>

    <section id="header" class="container"> 
      <div class="row">
        <header>

         
          <div class="container-fluid">

            <div class="navbar-header">

              <button id="button_responsive" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

              </button>
              
              <a class="navbar-brand" style="padding-top: 0px;padding-bottom: 0px; height: 70px;" href="#"> 
                <img class="img-responsive" id="logo" src="<?=base_url()?>assets/img/logo.jpg" >
              </a>
            
            </div>
            <div id="navbar" class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">

              <ul id="div_redes" class="nav navbar-nav navbar-right" >
                <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              <ul class="nav navbar-nav">

                <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
                <li><a href="<?=base_url()?>index.php/La_fundacion">La Fundación</a></li>
                <li><a href="<?=base_url()?>index.php/Educacion">Educación</a></li>
                <li><a href="<?=base_url()?>index.php/Investigacion">Investigación</a></li>
                <li><a href="<?=base_url()?>index.php/Novedad">Novedades</a></li> 
                <li><a href="<?=base_url()?>index.php/Proyecto">Diseño de Proyectos</a></li> 
                <li><a href="<?=base_url()?>index.php/Informacion_gestion">Información para la Gestión</a></li>
                <li><a href="<?=base_url()?>index.php/Marco_legal">Marco legal</a></li>
                <li><a href="<?=base_url()?>index.php/Convenio">Convenios</a></li>
                <li><a href="<?=base_url()?>index.php/Contacto">Consultas</a></li>
              </ul>
            
            </div><!--/.nav-collapse  -->
          </div>

          <?/*
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
              
              <div class="row" style="background-color: red; height: 80px">
                <div class="navbar-header" style="    background-color: grey;
               height: -webkit-fill-available;">
                  
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <a class="navbar-brand" style="padding-top: 0px; padding-bottom: 0px" href="#"> 

                    <img class="img-responsive" id="logo" src="<?=base_url()?>assets/img/logo.jpg" >
                  </a>

                  <span class="pull-right">
                    asdasd
                  </span>
               



                </div>

              </div>
              
               <div class="row" style="background-color: green">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
                  <li><a href="<?=base_url()?>index.php/La_fundacion">La Fundación</a></li>
                  <li><a href="<?=base_url()?>index.php/Educacion">Educación</a></li>
                  <li><a href="<?=base_url()?>index.php/Investigacion">Investigación</a></li>
                  <li><a href="<?=base_url()?>index.php/Novedad">Novedades</a></li> 
                  <li><a href="<?=base_url()?>index.php/Proyecto">Diseño de Proyectos</a></li> 
                  <li><a href="<?=base_url()?>index.php/Informacion_gestion">Información para la Gestión</a></li>
                  <li><a href="<?=base_url()?>index.php/Marco_legal">Marco legal</a></li>
                  <li><a href="<?=base_url()?>index.php/Convenio">Convenios</a></li>
                  <li><a href="<?=base_url()?>index.php/Contacto">Consultas</a></li>
                  <!--   
                  <li><a href="<?=base_url()?>index.php/Auditoria">Auditorías</a></li>
                  <li><a href="<?=base_url()?>index.php/Proteccion_legal">Protección legal</a></li>
                  <li><a href="<?=base_url()?>index.php/Convenio">Convenios</a></li>
                  <li><a href="<?=base_url()?>index.php/Contacto">Consultas</a></li>-->
                </ul>
            
              </div> 
               </div> 
            </div> 
          </nav>  
          */ ?>

        </header>
      </div>
    </section>