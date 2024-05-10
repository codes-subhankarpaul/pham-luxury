<?php
/**
 * Template Page.
 *
 * This is the template that displays the specific template page.
 * 
 * Template Name: Contact Us
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

<section class="contact-inner custom-pad">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="custom-heading">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-5 col-md-12">
				<div class="contact-inner-form">
					<div>
						<?php echo do_shortcode('[contact-form-7 id="1f3eba4" title="Contact Form ContactPage"]'); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="contact-inner-info">
					<h4 class="contact-inner-head">Get In Touch</h4>
					<ul>
						<li>
							<div class="contact-detail">
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
								<div class="contact-detail-wrap">
									<a href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><?php echo get_theme_mod('primary_phone_number'); ?></a>
									<a href="tel:<?php echo get_theme_mod('secondary_phone_number'); ?>"><?php echo get_theme_mod('secondary_phone_number'); ?></a>
									<p>Landline:</p>
									<a href="tel:<?php echo get_theme_mod('landline_number'); ?>"><?php echo get_theme_mod('landline_number'); ?></a>
								</div>
							</div>
						</li>
						<li>
							<a href="mailto:<?php echo get_theme_mod('primary_email_address'); ?>"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <?php echo get_theme_mod('primary_email_address'); ?></a>
						</li>
						<li>
							<a href="<?php echo get_theme_mod('office_address_direction_link'); ?>"><span><i class="fa fa-location-arrow" aria-hidden="true"></i></span> <?php echo get_theme_mod('office_address'); ?></a>
						</li>
					</ul>
					<div class="contact-inner-social">
						<ul>
							<?php if(get_theme_mod('facebook_acc_link')) { ?>
							<li>
								<a href="<?php echo get_theme_mod('facebook_acc_link'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<?php } ?>
							<?php if(get_theme_mod('instagram_acc_link')) { ?>
							<li>
								<a href="<?php echo get_theme_mod('instagram_acc_link'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
							<?php } ?>
							<?php if(get_theme_mod('youtube_acc_link')) { ?>
							<li>
								<a href="<?php echo get_theme_mod('youtube_acc_link'); ?>" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
							</li>
							<?php } ?>
							<?php if(get_theme_mod('apple_music_acc_link')) { ?>
							<li>
								<a href="<?php echo get_theme_mod('apple_music_acc_link'); ?>" target="_blank"><i class="fa fa-music" aria-hidden="true"></i></a>
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-12">
				<div class="working-hours">
					<h4 class="contact-inner-head">Operating Hours</h4>
					<?php echo get_theme_mod('operating_hours'); ?>
					<p>After Hours Via <a href="https://wa.me/<?php echo get_theme_mod('whatsapp_number'); ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i>
							Whatsapp</a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 p-0">
				<div class="map-location">
					<?php echo get_theme_mod('office_address_iframe'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	get_footer();