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
          <a class="brand" href="./">SERMEDSCM</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#"><i class="icon-home"></i>  Login</a></li>
              <li><a href="#"><i class="icon-pencil"></i>  Morbilidad</a></li>
              <li><a href="#"><i class="icon-user"></i>  Personal</a></li>
              <li><a href="#"><i class="icon-signal"></i>  Estadisticas</a></li>
              <li><a href="#"><i class="icon-upload"></i>  INPSASEL</a></li>
            </ul>
            <!-- <form class="navbar-form pull-right" action="users/login" method="post">
              <input name="username" class="span2" type="text" placeholder="Email o Usuario">
              <input name="password" class="span2" type="password" placeholder="Contraseña">
              <button type="submit" class="btn">Iniciar Sesion</button>
            </form> -->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <ul class="nav nav-tabs nav-stacked affix span2">
            <li class="active"><a href="#"><i class="icon-home"></i> Home</a></li>
            <li><a href="#"><i class="icon-book"></i> Library</a></li>
            <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
            <li><a href="#"><i class="i"></i> Misc</a></li>
          </ul>
        </div>
        <div class="span10">
          <div class="progress progress-striped active">
            <div class="bar" style="width: 40%;"></div>
          </div>
          <div class="page-header">
            <h1>SER<small>vicio</small>  MED<small>ico</small> S.C.M.</h1>
          </div>
          <h2 id="headings">Headings</h2>
          <p>PLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
          <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
          <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
          <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
          <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

          <blockquote class="pull-right">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <small>Someone famous <cite title="Source Title">Source Title</cite></small>
          </blockquote>

          <dl class="dl-horizontal">
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            <dt>Felis euismod semper eget lacinia</dt>
            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
          </dl>

          <div class="input-prepend input-append">
            <span class="add-on">$</span><input class="span2" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
          </div>
          <form class="form-search">
            <div class="input-append">
              <input type="text" class="span6 search-query">
              <button type="submit" class="btn">Search</button>
            </div>

            <div class="input-prepend">
              <button type="submit" class="btn">Search</button>
              <input type="text" class="span6 search-query">
            </div>
          </form>
          <form>
            <div class="controls">
              <input class="input-mini" type="text" placeholder=".input-mini">
              <input class="input-small" type="text" placeholder=".input-small">
              <input class="input-medium" type="text" placeholder=".input-medium">
              <input class="input-large" type="text" placeholder=".input-large">
              <input class="input-xlarge" type="text" placeholder=".input-xlarge">
              <input class="input-xxlarge" type="text" placeholder=".input-xxlarge">
            </div>
          </form>

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn">Default</button></td>
                <td><code>btn</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">Primary</button></td>
                <td><code>btn btn-primary</code></td>
                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-info">Info</button></td>
                <td><code>btn btn-info</code></td>
                <td>Used as an alternative to the default styles</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-success">Success</button></td>
                <td><code>btn btn-success</code></td>
                <td>Indicates a successful or positive action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-warning">Warning</button></td>
                <td><code>btn btn-warning</code></td>
                <td>Indicates caution should be taken with this action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-danger">Danger</button></td>
                <td><code>btn btn-danger</code></td>
                <td>Indicates a dangerous or potentially negative action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                <td><code>btn btn-inverse</code></td>
                <td>Alternate dark gray button, not tied to a semantic action or use</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-link">Link</button></td>
                <td><code>btn btn-link</code></td>
                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
              </tr>
            </tbody>
          </table>
          <div class="pagination pagination-centered">
            <ul>
              <li><a href="#">Prev</a></li>
              <li class="disabled"><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>

          <h3>Labels</h3>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Labels</th>
                <th>Markup</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <span class="label">Default</span>
                </td>
                <td>
                  <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-success">Success</span>
                </td>
                <td>
                  <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-warning">Warning</span>
                </td>
                <td>
                  <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-important">Important</span>
                </td>
                <td>
                  <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-info">Info</span>
                </td>
                <td>
                  <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  <span class="label label-inverse">Inverse</span>
                </td>
                <td>
                  <code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>
                </td>
              </tr>
            </tbody>
          </table>

          <h3>Badges</h3>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Example</th>
                <th>Markup</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Default
                </td>
                <td>
                  <span class="badge">1</span>
                </td>
                <td>
                  <code>&lt;span class="badge"&gt;1&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Success
                </td>
                <td>
                  <span class="badge badge-success">2</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-success"&gt;2&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Warning
                </td>
                <td>
                  <span class="badge badge-warning">4</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-warning"&gt;4&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Important
                </td>
                <td>
                  <span class="badge badge-important">6</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-important"&gt;6&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Info
                </td>
                <td>
                  <span class="badge badge-info">8</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-info"&gt;8&lt;/span&gt;</code>
                </td>
              </tr>
              <tr>
                <td>
                  Inverse
                </td>
                <td>
                  <span class="badge badge-inverse">10</span>
                </td>
                <td>
                  <code>&lt;span class="badge badge-inverse"&gt;10&lt;/span&gt;</code>
                </td>
              </tr>
            </tbody>
          </table>

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
                <td> 
                  <div class="btn-group">
                    <a class="btn btn-primary btn-mini" href="#"><i class="icon-user icon-white"></i> User</a>
                    <a class="btn btn-primary btn-mini dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
                      <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
                      <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="i"></i> Make admin</a></li>
                    </ul>
                  </div>
                </td>
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