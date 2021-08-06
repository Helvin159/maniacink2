
<?php 
get_header();


  while(have_posts()){
  the_post(); ?>
    <div class="container-fluid py-5">
          <div class="container pt-5 mt-5">
            <h1 style="font-family: 'Sedgwick Ave Display', cursive;" class="display-3">
            <?php the_title();?></h1>
          </div>
          <hr class="w-75 center pb-5">
          <div class="container">
            <p><?php the_content(); ?></p>
          </div>
        </div>

        
  
    <?php  }
  require_once('includes/other-categories.php'); 
  get_footer();
?>