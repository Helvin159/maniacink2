<?php 
get_header(); ?>

<!--Hero-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active itemOne" style="background:url(<?php echo get_theme_file_uri('assets/img/3.jpg'); ?>); background-size:cover; background-position:center;height:75vh; width:100vw;">
          <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemTwo" style="background:url(<?php echo get_theme_file_uri('assets/img/2.jpg');?>); background-size:cover; background-position:center;height:75vh; width:100vw;">
        <!-- <img class="d-block w-100" alt="..." > -->
          </div>
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/11.jpg')?>); background-size:cover; background-position:center;height:75vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>				
          <div class="carousel-item itemThree" style="background:url(<?php echo get_theme_file_uri('assets/img/1.jpg');?>); background-size:cover; background-position:center;height:75vh; width:100vw;">
        <!-- <img src="..." class="d-block w-100" alt="..." > -->
          </div>
        </div>
      </div>

      <div class="container pt-5 pb-1" >
        <h1 style="font-family: 'Sedgwick Ave Display', cursive;" class="display-1">
        Blog</h1>
      </div>
      <hr class="w-75 text-center">
        <div class="container-fluid py-2 ">
          <?php
            while(have_posts()){
              the_post();?>
              <div class="container py-4 my-3">
                <div class="row">
                  <div class="col-lg-3">
                    <?php the_post_thumbnail('maniacSmallSquare');?>
                  </div>
                  <div class="col-lg-9">
                    <h1><a href="<?php the_permalink();?>"> <?php the_title();?> </a></h1>
                    <div class="container">
                      <p>Posted by <?php the_author_posts_link()?> on <?php the_time('F j, Y')?> in <?php echo get_the_category_list(', ')?></p>
                    </div>
                  <p><?php the_excerpt();?></p>
                  <div class="container ">
                    <a class="btn btn-sm btn-danger" href="<?php the_permalink();?>">View Full Post</a>
                  </div>
                </div>
                
              </div>
              
                
              </div>
                <?php } ?>
                <div class="container text-center p-5">
                  <?php echo paginate_links();
                  
                  wp_reset_postdata();
                  ?>
                </div> 
        </div>



<?php get_footer();
?>