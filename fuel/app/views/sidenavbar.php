<ul class="nav nav-tabs nav-stacked">
<?php
    foreach ($commandarray as $command => $propertiesarray):
?>
<li class="<?php echo $propertiesarray['liclass'] ?>"><a href="<?php echo Uri::create(Uri::segment(1, 'users') . '/' . $command); ?>"><i class="<?php echo $propertiesarray['iclass'] ?>"></i>  <?php echo $propertiesarray['showname'] ?></a></li>

<?php endforeach; ?>
</ul>