<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

	get_header();

	get_template_part( 'template-parts/header/blog-inner-banner' );
?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="blog-details-section custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="blog-details-content">
					<div class="blog-details-img">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>">
					</div>
					<span><i class="fa fa-calendar main-color"></i> <?php echo get_the_date(); ?></span>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endwhile; ?>

<?php
	get_footer();
