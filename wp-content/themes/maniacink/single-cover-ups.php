<?php 
get_header();


  while(have_posts()){
  the_post(); ?>
    <div class="container-fluid py-5">
          <div class="container pt-5 mt-5">
            <h1 style="font-family: 'Sedgwick Ave Display', cursive;" class="display-1 text-center">
            <?php the_title();?></h1>
          </div>
          <hr class="w-75 center pb-5">
          <div class="container">
            <div class="my-3">
              <div class="container text-center">
                <div class="container">
                <img src="<?php the_post_thumbnail_url('maniacMediumLandscape'); ?>" alt="" class="img-fluid">

                </div>
                <hr>
                <div class="container">
                  <h1 class="sedgewick"><?php the_title()?></h1>
                  <div class="container">
                    <p><?php the_content()?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Categories -->
<div class="container-fluid my-5">
	<div class="container">
		<h2 class="sedgewick display-3">Categories</h2>
		<hr class="w-100 pb-3">
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/portraits/queen.png')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('portraits')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Portraits <i class="fas fa-external-link-alt"></i></a>
      </div>
    </div>
    <div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/small_tattoo/5.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('small-tats')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Small Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
		<div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/coverups/2_3-1.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('cover-ups')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Cover-Ups <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
		<div class="col-md-3">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/tattoos/13.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('large-tats')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Large Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
	</div>
</div>
  
    <?php  }
  
  get_footer();
?>