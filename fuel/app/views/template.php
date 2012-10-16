<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title . ' - Servicio Medico S.C.M. C.A.' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Intranet">
    <meta name="author" content="Daniel Rodriguez(danielrodriguezac@gmail.com)">

    <!-- Styles -->
    <?php echo Asset::css('bootstrap.css'); ?>
    <?php echo Asset::css('base.css'); ?>
    <?php echo Asset::css('bootstrap-responsive.css'); ?>
    <?php echo Asset::css('datepicker.css'); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./">SERMEDSCM</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php echo $topnavbar ?>
            </ul>
            <ul class="nav pull-right">
              <?php echo $userinfo ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<!--    <header class="hero-unit visible-desktop">
            <h1><?php echo 'Módulo ' . $title ?></h1>
            <p><?php echo $motmod ?></p>
    </header>-->
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
            <?php echo $sidenavbar ?>
        </div>
        <div class="span10">
<!--            <div class="page-header">
                <h1><?php echo $title ?></h1>
            </div>-->
          <?php echo $maincontent ?>
        </div>
      </div>
    </div> <!-- /container -->
    
    <hr>
    <footer>
        <p>Servicios de Corrugados Maracay C.A. &copy; Venezuela 2012 <small class="pull-right">Powered by <a href="http://fuelphp.com">Fuel</a> and <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> Stats: {exec_time}s - {mem_usage}MB.</small></p>
    </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo Asset::js('jquery-1.8.1.js'); ?>
    <?php echo Asset::js('bootstrap.js'); ?>
    <?php echo Asset::js('bootstrap-datepicker.js'); ?>
    <?php echo Asset::js('locales/bootstrap-datepicker.es.js'); ?>
    <?php
        $segments = Uri::segments();
        $filename = 'script.';
        foreach ($segments as $segment)
        {
            $filename .= $segment.'.';
        }
        $filename .= 'js';
        $pito = Asset::find_file($filename, 'js','pages/');;
        if (Asset::find_file($filename, 'js','pages/')) {
            $location = 'pages/'.$filename; 
            echo Asset::js($location);
        }
        ?>
  </body>
</html>