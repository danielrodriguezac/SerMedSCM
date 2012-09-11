<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./index.html">Bootstrap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
            <form class="navbar-form pull-right" action="parapito.com">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="well">
              <ul class="nav nav-list">
                <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
                <li class="nav-header">List header</li>
                <li><a href="#"><i class="icon-book"></i> Library</a></li>
                <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="i"></i> Misc</a></li>
              </ul>
          </div>
        </div>
        <div class="span10">
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