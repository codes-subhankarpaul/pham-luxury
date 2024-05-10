<?php
/* Service Inner Banner template */
/******************************/

	global $post;
	$image_url = get_theme_file_uri().'/assets/images/service-inner-banner.png'
?>

<section class="custom-inner-banner inner-banner-alt" style="background-image: url(<?php echo $image_url; ?>)" alt="about-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-banner-content">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div class="inner-breadcam">
					<ul>
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><span>/</span> <a href="<?php echo esc_url(home_url('services')); ?>">Services</a></li>
						<li><span>/</span> <?php echo get_the_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>