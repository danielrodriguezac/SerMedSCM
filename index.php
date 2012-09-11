<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Aplication, Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Intranet">
    <meta name="author" content="Daniel Rodriguez(danielrodriguezac@gmail.com)">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png"> -->
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
          <a class="brand" href="./index.html">SerMedSCM</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home"></i>  Login</a></li>
              <li><a href="#"><i class="icon-pencil"></i>  Morbilidad</a></li>
              <li><a href="#"><i class="icon-user"></i>  Personal</a></li>
              <li><a href="#"><i class="icon-signal"></i>  Estadisticas</a></li>
            </ul>
            <form class="navbar-form pull-right" action="users/login" method="post">
              <input name="username" class="span2" type="text" placeholder="Email o Usuario">
              <input name="password" class="span2" type="password" placeholder="Contraseña">
              <button type="submit" class="btn">Iniciar Sesion</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div >
              <ul class="nav nav-tabs nav-stacked affix span2">
                <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
                <li><a href="#"><i class="icon-book"></i> Library</a></li>
                <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                <li><a href="#"><i class="i"></i> Misc</a></li>
              </ul>
          </div>
        </div>
        <div class="span10">
          <div class="progress progress-striped active">
            <div class="bar" style="width: 40%;"></div>
          </div>
          <div class="page-header">
            <h1>Descriptor de Pagina</h1>
          </div>
          <h2 id="headings">Headings</h2>
          <p>PLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<table class="table table-striped table-bordered table-hover table-condensed">
              <caption><h1>Pito</h1></caption>
              <thead>
                <tr>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                </tr>
                <tr class="success">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td><span class="badge badge-important">6</span></td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                </tr>
                <tr class="error">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                </tr>
                <tr class="warning">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td><span class="label label-success">Success</span></td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-mini">Action</button>
                      <button class="btn dropdown-toggle btn-mini" data-toggle="dropdown">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-book"></i> Library</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                      </ul>
                     </div>
                   </td>
                </tr>
                <tr class="info">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td><span class="label label-success">Success</span></td>
                </tr>
              </tbody>
            </table>
          <div class="well well-large">
             <table class="table table-striped table-bordered table-hover table-condensed">
              <caption><h1>Pito</h1></caption>
              <thead>
                <tr>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                  <th>Table header 1</th>
                  <th>Table Header 2</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                </tr>
                <tr class="success">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td><span class="badge badge-important">6</span></td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                </tr>
                <tr class="error">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                </tr>
                <tr class="warning">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td><span class="label label-success">Success</span></td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>
                    <div class="btn-group">
                      <button class="btn btn-mini">Action</button>
                      <button class="btn dropdown-toggle btn-mini" data-toggle="dropdown">
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li><a href="#"><i class="icon-book"></i> Library</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                      </ul>
                     </div>
                   </td>
                </tr>
                <tr class="info">
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td>table content 2</td>
                  <td>table content 1</td>
                  <td><span class="label label-success">Success</span></td>
                </tr>
              </tbody>
            </table>
            <div class="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Warning!</strong> Best check yo self, you're not looking too good.
            </div>
          </div>
        </div>
      </div>
      <hr>

      <footer>
        <p>Company &copy; Venezuela 2012</p>
          <address>
            <strong>Daniel Rodriguez</strong><br>
            <a href="mailto:danielrodriguezac@gmail.com">danielrodriguezac@gmail.com</a><br>  
            <abbr title="Phone">P:</abbr> (0414) 490-96-29
        </address>
      </footer>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-1.8.1.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>