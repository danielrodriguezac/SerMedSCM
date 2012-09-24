<ul class="nav nav-tabs nav-stacked">
<?php
    foreach ($commandarray as $command => $propertiesarray):
?>
<li class="<?php echo $propertiesarray['liclass'] ?>"><a href="<?php echo $propertiesarray['url']; ?>"><i class="<?php echo $propertiesarray['iclass'] ?>"></i>  <?php echo $propertiesarray['showname'] ?></a></li>

<?php endforeach; ?>
</ul>