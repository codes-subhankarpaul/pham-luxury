<?php
/*
 * Templates for Service inner page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 *
*/

	get_header();

	get_template_part( 'template-parts/header/service-inner-banner' );
?>

<section class="service-inner-details custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 align-self-center">
				<div class="service-inner-details-content">
					<div class="custom-heading">
						<h2><?php echo get_the_title(); ?></h2>
					</div>
					<?php
						if(get_field('primary_content')) {
							echo get_field('primary_content');
						}
					?>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="service-inner-details-img">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">
				</div>
			</div>
		</div>
		<?php if(get_field('primary_content')) { ?>
		<div class="row">
			<div class="col-12">
				<div class="service-inner-details-content-2">
					<?php echo get_field('primary_content'); ?>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</section>

<?php
	get_footer();