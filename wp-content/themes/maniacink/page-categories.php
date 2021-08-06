<?php 
get_header();
?>
<div class="container-fluid py-5">
  <div class="container py-5 d-sm-block d-md-block d-lg-none d-xl-none " style="max-height:550px;background:linear-gradient(0deg, rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url(assets/portraits/bruja.PNG); background-size:cover; background-position:center;">
      <div class="container py-5 text-center">
        <h1 class="display-1 sedgewick py-3">My Tattoo Gallery</h1>
        </div>
    </div>
  <div class="row py-5">

    <div class="col-md-4">
      <div class="container py-5">
      <div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/portraits/queen.png')?>);background-size:cover;background-position:center center;border-radius:5px; box-shadow:1px 1px 4px rgba(0,0,0,0.5);">

        </div>
          <hr class="w-75">
          <a href="<?php echo site_url('portraits')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Portraits <i class="fas fa-external-link-alt"></i></a>
      </div>
      <div class="container py-5">
      <div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/small_tattoo/5.jpg')?>);background-size:cover;background-position:center center; border-radius:5px; box-shadow:1px 1px 4px rgba(0,0,0,0.5);">

        </div>
        <hr class="w-75">
        <a href="<?php echo site_url('small-tats')?>" class="display-4 sedgewick " style="text-decoration:none; color:#000000;">Small Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
    </div>

    <div class="col-md-4 py-5 d-none d-sm-none d-md-none d-lg-block d-xl-block" style="background:linear-gradient(0deg, rgba(255,255,255,0.7), rgba(255,255,255,0.7)), url(<?php echo get_theme_file_uri('assets/portraits/bruja.PNG')?>); background-size:cover; background-position:center;">
      <div class="container my-5 py-5 text-center">
        <h1 class="display-1 sedgewick py-5 my-5">My Tattoo Gallery</h1>
        </div>
        <div class="container my-5 text-left">
          <h5 class=" sedgewick">Art by: Ink Maniac</h5>
        </div>        
    </div>

    <div class="col-md-4">
      <div class="container py-5">
      <div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/coverups/2_3-1.jpg');?>);background-size:cover;background-position:center center;border-radius:5px; box-shadow:1px 1px 4px rgba(0,0,0,0.5);">
        </div>
          <hr class="w-75">
        <a href="<?php echo site_url('cover-ups')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Cover-Ups <i class="fas fa-external-link-alt"></i></a>
      </div>
      <div class="container py-5">
        <div class="container" style="max-height:300px;min-height:275px;background-image:url(<?php echo get_theme_file_uri('assets/tattoos/13.jpg')?>);background-size:cover;background-position:center center;border-radius:5px; box-shadow:1px 1px 4px rgba(0,0,0,0.5);">
        </div>
        <hr class="w-75">
        <a href="<?php echo site_url('large-tats')?>" class="display-4 sedgewick" style="text-decoration:none; color:#000000;">Large Tats <i class="fas fa-external-link-alt"></i></a>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
?>