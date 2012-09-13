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
        .jumbotron {
            position: relative;
            padding: 40px 0;
            color: #fff;
            text-align: center;
            text-shadow: 0 1px 3px rgba(0,0,0,.4), 0 0 30px rgba(0,0,0,.075);
            background: #020031; /* Old browsers */
            background: -moz-linear-gradient(45deg,  #020031 0%, #6d3353 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left bottom, right top, color-stop(0%,#020031), color-stop(100%,#6d3353)); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(45deg,  #020031 0%,#6d3353 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(45deg,  #020031 0%,#6d3353 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(45deg,  #020031 0%,#6d3353 100%); /* IE10+ */
            background: linear-gradient(45deg,  #020031 0%,#6d3353 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#020031', endColorstr='#6d3353',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
            -webkit-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
               -moz-box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
                    box-shadow: inset 0 3px 7px rgba(0,0,0,.2), inset 0 -3px 7px rgba(0,0,0,.2);
         }
        body {
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
              <div class="pull-right">
                <?php echo $userinfo ?>
              </div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      
    <header class="jumbotron">
        <div class="container">
            <h1><?php echo 'Módulo ' . $title ?></h1>
        </div>
    </header>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <ul class="nav nav-tabs nav-stacked affix span2">
            <?php echo $sidenavbar ?>
          </ul>
        </div>
        <div class="span10">
          <?php echo $maincontent ?>
        </div>
      </div>
      <hr>

      <footer>
        <p>Servicios de Corrugados Maracay C.A. &copy; Venezuela 2012</p>
      </footer>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo Asset::js('jquery-1.8.1.js'); ?>
    <?php echo Asset::js('bootstrap.js'); ?>
  </body>
</html>