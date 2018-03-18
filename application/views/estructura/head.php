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

    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery.min.js"  ></script>

    <script type="text/javascript" src="<?=base_url()?>assets/dist/js/bootstrap.min.js"  ></script>

    <script type="text/javascript">
            CI_ROOT = "<?=base_url()?>";
    </script>
    
 
  </head>
  <body>

    <section id="header" class="container"> 
      <div class="row">
        <header>
          <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
     
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menú</a>
              </div>
           
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li><a href="<?=base_url()?>index.php/Home">Home</a></li>
                  <li><a href="<?=base_url()?>index.php/La_fundacion">La Fundación</a></li>
                  <li><a href="<?=base_url()?>index.php/Educacion">Educación</a></li>
                  <li><a href="<?=base_url()?>index.php/Investigacion">Investigación</a></li>
                  <li><a href="<?=base_url()?>index.php/Novedad">Novedades</a></li>
                  <li><a href="<?=base_url()?>index.php/Proyecto">Proyectos</a></li>  
                  <li><a href="<?=base_url()?>index.php/Auditoria">Auditorías</a></li>
                  <li><a href="<?=base_url()?>index.php/Proteccion_legal">Protección legal</a></li>
                  <li><a href="<?=base_url()?>index.php/Convenio">Convenios</a></li>
                  <li><a href="<?=base_url()?>index.php/Contacto">Consultas</a></li>
                </ul>
            
              </div> 

            </div> 
          </nav>
        </header>
      </div>
    </section>