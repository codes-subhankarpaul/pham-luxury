<?php
	/**
	 * Template Page.
	 *
	 * This is the template that displays the specific template page.
	 * 
	 * Template Name: About Us
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

<section class="about-inner-content custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="luxury-car-box-btn about-inner-btn">
					<a class="custom-btn" href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><span><i class="fa fa-phone" aria-hidden="true"></i></span>
						Call</a>
					<a class="custom-btn" href="https://wa.me/<?php echo get_theme_mod('whatsapp_number'); ?>"><span><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
						Whatsapp</a>
				</div>
			</div>
		</div>
		<!-- Mission Section Starts Here -->
		<?php $mission_section = get_field('mission_section'); ?>
		<div class="row">
			<div class="col-lg-6 col-md-12 align-self-center">
				<div class="about-mission">
					<div class="custom-heading">
						<h2><?php echo $mission_section['section_title'];  ?></h2>
					</div>
					<p><?php echo $mission_section['section_content'];  ?></p>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="about-img">
					<img src="<?php echo $mission_section['section_image_1'];  ?>">
					<img src="<?php echo $mission_section['section_image_2'];  ?>">
				</div>
			</div>
		</div>
		<!-- Luxury Cars Section Starts Here -->
		<?php $luxury_cars_section = get_field('luxury_cars_section'); ?>
		<div class="row">
			<div class="col-12">
				<div class="about-luxury-car-inner">
					<div class="custom-heading">
						<h2><?php echo $luxury_cars_section['section_title']; ?></h2>
					</div>
					<p><?php echo $luxury_cars_section['section_content']; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();