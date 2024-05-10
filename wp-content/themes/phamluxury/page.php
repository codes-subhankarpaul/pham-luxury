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

	get_template_part( 'template-parts/header/innerpage-banner' );
?>

<section class="booking-tc custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="booking-tc-content entry-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();
