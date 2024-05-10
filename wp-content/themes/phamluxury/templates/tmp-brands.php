<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Brands
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

<section class="luxury-brands-logo custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="luxury-brands-logo-head">
					<div class="custom-heading">
						<?php the_content(); ?>
					</div>
					<div class="brands-outer">
						<div id="brands-wrap" class="brands-wrap row">
							<?php
								$taxonomy = 'brand';
								$terms = get_terms([
							    'taxonomy' => $taxonomy,
							    'hide_empty' => false,
								]);

								foreach($terms as $eachTerm) {
									$term_link = get_term_link( $eachTerm, $taxonomy );
									$term_image = get_field('featured_image', $eachTerm);
							?>
							<div class="col-lg-4">
								<div class="brands-logo">
									<a href="<?php echo $term_link ?>"><img src="<?php echo $term_image; ?>"></a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();