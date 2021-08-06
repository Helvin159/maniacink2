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

      <!-- Section 1 -->
  <div class="container">
    <div class="row p-5 mt-5">
      <div class="col-md-4">
        <div class="container text-center py-3">
          <div class="container">
            <img src="<?php echo get_theme_file_uri('assets/img/10.jpg');?>" class="img-fluid border rounded" alt="" style="max-height:350px;min-height:350px;">
          </div>
          <hr>
          <div class="container">
            <a class="sedgewickLink largeLink" href="<?php echo site_url('about')?>">About Ink Maniac</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container text-center py-3">
          <div class="container">
            <img src="<?php echo get_theme_file_uri('assets/portraits/bruja.PNG');?>" class="img-fluid border rounded" alt="" style="max-height:350px;min-height:350px;">
            <hr>
          </div>
          
          <div class="container">
            <a class="sedgewickLink largeLink" href="<?php echo site_url('categories')?>">View Tattoo Gallery</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container text-center py-3">
          <div class="container">
            <img src="<?php echo get_theme_file_uri('assets/img/10.jpg')?>" class="img-fluid border rounded" alt="" style="max-height:350px;min-height:350px;">
          </div>
          <hr>
          <div class="container">
            <a class="sedgewickLink largeLink" href="<?php echo site_url('contact')?>">Booking A Session</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Section 2 -->
<div class="row text-center">
  <div class="col-4"><hr class="text-center my-5 w-75"></div>
  <div class="col-4 "> 
    <h1 style="font-family: 'Sedgwick Ave Display', cursive; " class="pt-4 display-2 d-none d-sm-none d-md-none d-lg-block d-xl-block">Maniac Ink</h1>
    <h1 style="font-family: 'Sedgwick Ave Display', cursive; " class="pt-4 display-4 d-sm-block d-md-block d-lg-none d-xl-none">Maniac Ink</h1>
</div>
  <div class="col-4"><hr class="text-center my-5 w-75"></div>
</div>

<div class="container-fluid">
  <div class="container">
    <div class="row p-5">
      <?php 
        $recentBlogPost = new WP_Query(array(
          'posts_per_page' => 2,
          // 'post_type' => 'blog',

        ));

        while($recentBlogPost->have_posts()){
          $recentBlogPost->the_post(); ?>
            <div class="col-md-6">
              <div class="container text-center py-3">
                <div class="container my-3 text-center">
                  <img class="img-fluid" src="<?php the_post_thumbnail_url('maniacHomeBlog')?>" alt="">
                </div>
              <h3 class="sedgewick"><?php the_title();?></h3>
              <a href="<?php the_permalink()?>" class="btn btn-md btn-dark">View Full Post</a>
            </div>
          </div>
        <?php }
      ?>
    </div>
  </div>
</div>

<?php
  get_footer();
?>