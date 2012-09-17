<li class="dropdown">
    <a href="<?php echo $usernameurl ?>" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>  <?php echo $username ?> <b class="caret"></b></a>
    <ul class="dropdown-menu">
    <?php
        if ($is_auth)
            {
    ?>
      <li><a href="#"><i class="icon-home"></i>  Usuarios</a></li>
      <li><a href="#"><i class="icon-home"></i>  Another action</a></li>
      <li><a href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a href="<?php echo $logouturl ?>"><i class="icon-off"></i> Salir</a></li>
    <?php
            }
    ?>
    </ul>
</li>