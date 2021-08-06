<!-- FAQ -->
<div class="container-fluid faq bg-dark p-4">
		<div class="container m-auto">
			<h3>Useful Info</h3>
			<div class="row mt-4">
				<div class="col-md-4" style="border-right: 1px solid #fff;">
				<h4>Page Links</h4>
					<ul>
						<a href="<?php echo esc_url(site_url('/home'));?>"><li>Home</li></a>
						<a href="<?php echo esc_url(site_url('/about'));?>"><li>About</li></a>
						<a href="<?php echo esc_url(site_url('/blog'));?>"><li>Blog</li></a>
						<a href="<?php echo esc_url(site_url('/large-tats'));?>"><li>Tattoos</li></a>
						<a href="<?php echo esc_url(site_url('/portraits'));?>"><li>Portraits</li></a>
						<a href="<?php echo esc_url(site_url('/cover-ups'));?>"><li>Cover-ups</li></a>
						<a href="<?php echo esc_url(site_url('/small-tats'));?>"><li>Small Tats</li></a>
					</ul>
				</div>
				<div class="col-md-4" style="border-right: 1px solid #fff;">
				<h4>FAQ</h4>
					<!-- <ul>
						<a href="subrisks.html"><li>Risks</li></a>
						<a href="subsafety.html"><li>Tattoo Safety</li></a>
						<a href="substatelaws.html"><li>NCSLS State Laws</li></a>
						<a href="subtatremoval.html"><li>Tattoo Removal</li></a>
						<a href="subthinkbeforeyouink.html"><li>Safety &amp; Regulatory Background</li></a>
					</ul> -->
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'footerLocationTwo'
						));
					?>
				</div>
				<div class="col-md-4">
					<div class="container">
					<h4>Social Media</h4>
					</div>
					<div class="container socialfaq ">
						<ul>
							<a href="https://www.instagram.com/inkmaniac03/" target="_blank"><li><i class="fab fa-instagram"></i></li></a>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--Footer-->
	<footer class="container-fluid bg-dark">
		<div class="row">
			<div class="col-md-3">
				<div class="row">
					<div class="col-sm-6 p-3 text-center">
						<a href="<?php echo esc_url(site_url())?>"><h3 class="m-auto">Maniac Ink</h3></a>
					</div>
					<div class="col-sm-3 text-center">
						<img src="<?php echo get_theme_file_uri('assets/img/logo3.png')?>">
					</div>
				</div>
			</div>
			<div class="col-lg-9">
				<ul>
					<a class="btn" href="<?php echo esc_url(site_url('/home'))?>"><li>Home</li></a>
					<a class="btn" href="<?php echo esc_url(site_url('/about'))?>"><li>About</li></a>
					<a class="btn" href="<?php echo esc_url(site_url('/contact'))?>"><li>Contact</li></a>
					<a class="btn" href="<?php echo esc_url(site_url('/portraits'))?>"><li>Portraits</li></a>
					<a class="btn" href="<?php echo esc_url(site_url('/cover-ups'))?>"><li>Cover-ups</li></a>
					<a class="btn" href="<?php echo esc_url(site_url('/small-tats'))?>"><li>Small Tattoos</li></a>
					<a class="btn" href="<?php echo esc_url(site_url('/large-tats'))?>"><li>Large Tattoos</li></a>
				</ul>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>
  </body>
</html>
