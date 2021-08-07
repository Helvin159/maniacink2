<?php 
  get_header();?>

  <!--Hero-->
  <div id="carouselExampleSlidesOnly" class="carousel slide hero" data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active itemOne" style="background:url(<?php echo get_theme_file_uri('assets/img/3.jpg'); ?>); background-size:cover; background-position:center;height:100vh; width:100vw;">
          <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemTwo" style="background:url(<?php echo get_theme_file_uri('assets/img/2.jpg');?>); background-size:cover; background-position:center;height:100vh; width:100vw;">
        <!-- <img class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/11.jpg')?>); background-size:cover; background-position:center;height:100vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>				
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/1.jpg');?>); background-size:cover; background-position:center;height:100vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
        </div>
      </div>

      <div class="container-fluid">
<?php
  get_footer();
  
?>