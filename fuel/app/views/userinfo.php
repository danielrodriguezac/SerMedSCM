<li class="dropdown">
    <a href="<?php echo $usernameurl ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>  <?php echo $username ?> <b class="caret"></b></a>
    <ul class="dropdown-menu">
    <?php
        if ($isauth)
            {
    ?>
      <li><a href="<?php echo $abouturl ?>"><i class="icon-globe"></i>  Acerca de...</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo $logouturl ?>"><i class="icon-off"></i> Salir</a></li>
    <?php
            }else
            {
    ?>
      <li><a href="<?php echo $usernameurl ?>"><i class="icon-user"></i>  Ingresar</a></li>
    <?php
            }
    ?>
    </ul>
</li>