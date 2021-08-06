<?php 
  get_header();
  ?>
  <!--Hero-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active itemOne" style="background:url(<?php echo get_theme_file_uri('assets/img/3.jpg'); ?>); background-size:cover; background-position:center center;height:30vh; width:100vw;">
          <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemTwo" style="background:url(<?php echo get_theme_file_uri('assets/img/2.jpg');?>); background-size:cover; background-position:center center;height:30vh; width:100vw;">
        <!-- <img class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/1.jpg');?>); background-size:cover; background-position:center center;height:30vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
        </div>
      </div>


  <div class="container-fluid my-5">
    <div class="container mb-5">
      <h1 class="sedgewick display-1 text-center" id="contactHeader">Contact</h1>
    </div>
          <?php 
          require_once('includes/contact.php'); 
          //the_content();
          ?>
    
  </div>

  <!-- Categories -->
  <?php 
          require_once('includes/other-categories.php'); 
          //the_content();
          ?>
<?php
  get_footer();
?>