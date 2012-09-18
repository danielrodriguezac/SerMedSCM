<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title . ' - Servicio Medico S.C.M. C.A.' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Intranet">
    <meta name="author" content="Daniel Rodriguez(danielrodriguezac@gmail.com)">

    <!-- Styles -->
    <?php echo Asset::css('bootstrap.css'); ?>
    <style>
        body 
        {
            padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
        }
    </style>
    <?php echo Asset::css('bootstrap-responsive.css'); ?>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">$title $topnavbar $userinfo $sidenavbar $maincontent -->
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
      
    <header>
        <div class="hero-unit">
            <h1><?php echo 'Módulo ' . $title ?></h1>
            <p><?php echo $motmod ?></p>
        </div>
    </header>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
            <?php echo $sidenavbar ?>
        </div>
        <div class="span10">
          <?php echo $maincontent ?>
        </div>
      </div>
      <hr>

      <footer>
        <p>Servicios de Corrugados Maracay C.A. &copy; Venezuela 2012 <small class="pull-right">Powered by <a href="http://fuelphp.com">Fuel</a> and <a href="http://twitter.github.com/bootstrap/">Bootstrap</a> Stats: {exec_time}s - {mem_usage}MB.</small></p>
      </footer>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo Asset::js('jquery-1.8.1.js'); ?>
    <?php echo Asset::js('bootstrap.js'); ?>
  </body>
</html>