<?php
/* Inner page Banner template */
/******************************/

	global $post;
	$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
	if($image) {
		$img_url = $image[0];  
	} else {
		$img_url = get_theme_file_uri().'/assets/images/about-banner.png';
	}
?>

<section class="custom-inner-banner inner-banner-alt" style="background-image: url(<?php echo $img_url; ?>)" alt="about-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-banner-content">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
				<div class="inner-breadcam">
					<ul>
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><span>/</span> <?php echo get_the_title(); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>