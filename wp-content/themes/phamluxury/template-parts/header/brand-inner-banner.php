<?php
/* Brand Inner template */
/******************************/

	$taxonomy = 'brand';
	$object = get_queried_object();
	if(get_field('banner_image', $object))
	{
		$banner_image = get_field('banner_image', $object);
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
					<h1><?php echo $object->name; ?></h1>
				</div>
				<div class="inner-breadcam">
					<ul>
						<li><a href="<?php echo site_url(); ?>">Home</a></li>
						<li><span>/</span> Brands</li>
						<li><span>/</span> <?php echo $object->name; ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>