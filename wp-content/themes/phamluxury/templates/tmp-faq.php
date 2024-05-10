<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: FAQ
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

<section class="faq-inner custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="faq-inner-content">
					<div class="custom-heading">
						<?php the_content(); ?>
					</div>
					<div class="accordion accordion-flush" id="accordionFlushExample">
						<?php
							$i = 1;
							$faq_query = new WP_Query(
								array(
									'showposts' => -1,
									'post_type' => 'faq',
									'order' => 'ASC',
								)
							);
							while ( $faq_query->have_posts() ): $faq_query->the_post();
							?>
							<div class="accordion-item">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $i; ?>">
										<?php echo get_the_title(); ?>
									</button>
								</h2>
								<div id="flush-collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
									<div class="accordion-body">
										<?php the_content(); ?>
									</div>
								</div>
							</div>
							<?php
							$i++;
							endwhile;
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();