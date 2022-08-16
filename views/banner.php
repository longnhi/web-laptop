<?php
$banner = new Banner();
$databanner = $banner->all();
?>
<div id="demo" class="container-fluid my-3 carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <?php 
        for($i = 0; $i< count($databanner);$i++)
        {
            if($i==0){
                echo '<li class="active" data-target="#demo" data-slide-to="'.$i.'"></li>';
            }else{
                echo '<li data-target="#demo" data-slide-to="'.$i.'"></li>';
            }
        }
    ?>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
  <?php 
        for($i = 0; $i< count($databanner);$i++)
        {
            if($i==0)
            {?>
                <div class="carousel-item active">
                <img src="<?php echo IMG_BANNER.$databanner[$i]['hinhanh'] ?>" alt="" width="100%" height="300">
                </div>
            <?php } else { ?>
                <div class="carousel-item">
                <img src="<?php echo IMG_BANNER.$databanner[$i]['hinhanh'] ?>" alt="" width="100%" height="300">
                </div>
        <?php }}
    ?>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>