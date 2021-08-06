<?php 
get_header();

?>
        <!-- Tattoo Page Template -->
        <div class="container-fluid py-5">
          <div class="container pt-5 mt-5">
            <h1 style="font-family: 'Sedgwick Ave Display', cursive;" class="display-1 portrait-heading">Portraits</h1>
          </div>
          <hr class="w-75 center pb-5">
          <div class="row">
            <?php 


              $showCustomPostType = new WP_Query(array(
                'paged' => get_query_var('paged', 1),
                'posts_per_page' => 9,
                'post_type' => 'portraits',
              ));

              while ($showCustomPostType->have_posts()){
                $showCustomPostType->the_post(); ?>
                
                  <div class="col-md-4 my-3">
                    <div class="container text-center">
                      <div class="container">
                      <img src="<?php the_post_thumbnail_url('maniacSmallLandscape'); ?>" alt="" class="img-fluid">
                      </div>
                    <hr>
                    <div class="container">
                      <h1><a class="sedgewick display-4 sedgewickLink" href="<?php the_permalink()?>"><?php the_title()?></a></h1>
                    </div>
                  </div>
                  </div>
              <?php }
            ?>
            <div class="container text-center p-5">
                  <?php 
                    $showCustomPostType->the_post();
                    $base = 99999;
                    echo paginate_links(array(
                      'total' => $showCustomPostType->max_num_pages,
                      'base' => str_replace($base, '%#%', esc_url(get_pagenum_link($base))),
                      'format' => '?paged=%#%',
                      'current' => max(1, get_query_var('paged')),
                    ));
                  
                  wp_reset_postdata();
                  ?>
                </div> 
          </div>
        </div>

        <!-- Categories -->
<div class="container-fluid">
	<div class="container">
		<h2 class="sedgewick display-3">Other Categories</h2>
		<hr class="w-100 pb-3">
	</div>
	<div class="row">
    <div class="col-md-4">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/small_tattoo/5.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('small-tats')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Small Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
		<div class="col-md-4">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/coverups/2_3-1.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('cover-ups')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Cover-Ups <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
		<div class="col-md-4">
			<div class="container py-5">
				<div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/tattoos/13.jpg')?>);background-size:cover;background-position:center center;"></div>
        <hr class="w-75">
        <a href="<?php echo site_url('large-tats')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Large Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
		</div>
	</div>
</div>

      <?php
  get_footer();
?>