<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Services
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

	get_header();

	get_template_part( 'template-parts/header/innerpage-banner' );
?>

<section class="service-inner-section custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
				$i = 1;
				$services_query = new WP_Query(
					array(
						'showposts' => -1,
						'post_type' => 'service',
						'order' => 'ASC',
					)
				);
				while ( $services_query->have_posts() ): $services_query->the_post();
				?>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="service-img-box">
						<a href="<?php echo get_the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
							<div class="service-img-box-text">
								<h3><?php echo get_the_title(); ?></h3>
								<span><i class="las la-arrow-right"></i></span>
							</div>
						</a>
					</div>
				</div>
				<?php
				endwhile;
				wp_reset_query();
			?>
		</div>
	</div>
</section>

<?php
	get_footer();