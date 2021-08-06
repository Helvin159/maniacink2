<?php 
  get_header();
  ?>
  <!--Hero-->
  <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active itemOne" style="background:url(<?php echo get_theme_file_uri('assets/img/3.jpg'); ?>); background-size:cover; background-position:center;height:30vh; width:100vw;">
          <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemTwo" style="background:url(<?php echo get_theme_file_uri('assets/img/2.jpg');?>); background-size:cover; background-position:center;height:30vh; width:100vw;">
        <!-- <img class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/11.jpg')?>); background-size:cover; background-position:center;height:30vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>				
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/1.jpg');?>); background-size:cover; background-position:center;height:30vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
        </div>
      </div>


  <div class="container-fluid">
    <div class="container p-5">
      <h1 class="sedgewick display-1"><?php the_title()?></h1>
        <div class="aboutContent"> 
          <?php 
        
        the_content()
        
        ?>
      
      </div>
    </div>
  </div>

  <!-- Categories -->
  <?php 
    require_once('includes/other-categories.php'); 
  ?>
<?php
  get_footer();
?>