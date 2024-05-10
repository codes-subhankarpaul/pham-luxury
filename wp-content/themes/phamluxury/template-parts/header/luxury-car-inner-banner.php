<?php
/* Luxury Car Inner template */
/******************************/
	
	global $post;
	$taxonomy = 'brand';
	$car_id = get_the_ID();
	$terms = get_the_terms($post->ID, 'brand');
	$term_link = get_term_link( $terms[0]->term_id, $taxonomy );
	if(get_the_post_thumbnail_url())
	{
		$banner_image = get_the_post_thumbnail_url();
	}
	else
	{
		$banner_image = get_theme_file_uri().'/assets/images/about-banner.png';
	}
?>
<section class="custom-inner-banner inner-banner-alt" style="background-image: url(<?php echo $banner_image; ?>)" alt="about-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-banner-content">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div class="inner-breadcam">
					<ul>
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><a href="<?php echo esc_url(home_url('luxury-cars')); ?>"><span>/</span> Luxury Cars</a></li>
						<li><a href="<?php echo $term_link; ?>"><span>/</span> <?php echo $terms[0]->name; ?></a></li>
						<li><span>/</span> <?php echo get_the_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>