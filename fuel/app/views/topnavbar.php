<?php
    foreach ($modulesarray as $module => $propertiesarray):
?>
<li class="<?php echo $propertiesarray['liclass'] ?>"><a href="<?php echo Uri::create($module); ?>"><i class="<?php echo $propertiesarray['iclass'] ?>"></i>  <?php echo $propertiesarray['showname'] ?></a></li>

<?php endforeach; ?>