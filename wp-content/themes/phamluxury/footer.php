<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

?>
		<footer>
			<div class="footer-wrap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-12">
							<div class="footer-logo">
								<a href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_mod('footer_logo'); ?>"></a>
								<p><?php echo get_theme_mod('footer_text'); ?></p>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="footer-links">
								<h4 class="footer-head">Useful Links</h4>
								<?php wp_nav_menu( array( 'menu' => 'Useful Links Menu' ) ); ?>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="footer-links">
								<h4 class="footer-head">Car Brands</h4>
								<?php wp_nav_menu( array( 'menu' => 'Car Brands Menu' ) ); ?>
							</div>
						</div>
						<div class="col-lg-3 col-md-12">
							<div class="footer-links footer-contact">
								<h4 class="footer-head">Contact Us</h4>
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
									</li>
									<li>
										<a href="mailto:<?php echo get_theme_mod('primary_email_address'); ?>"><span><i class="fa fa-envelope" aria-hidden="true"></i></span> <?php echo get_theme_mod('primary_email_address'); ?></a>
									</li>
									<li>
										<a href="<?php echo get_theme_mod('office_address_direction_link'); ?>"><span><i class="fa fa-location-arrow" aria-hidden="true"></i></span> <?php echo get_theme_mod('office_address'); ?></a>
									</li>
								</ul>
								<div class="footer-link-img">
									<a href="javascript:void(0);"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/dmca.png"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-12 align-self-center">
							<div class="footer-24">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/24-7.svg">
								<p>Rental Service</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 align-self-center">
							<div class="footer-catalogue-btn">
								<a class="custom-btn" href="<?php echo get_theme_mod('catalogue'); ?>" download><span><i class="fa fa-download" aria-hidden="true"></i></span> DOWNLOAD CATALOGUE</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 align-self-center">
							<div class="footer-payment">
								<p>Payment Methods:</p>
								<ul>
									<li><a href="javascript:void(0);" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/master-card.png"></a></li>
									<li><a href="javascript:void(0);" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/visa.png"></a></li>
									<li><a href="javascript:void(0);" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/american-express.png"></a></li>
									<li><a href="javascript:void(0);" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/bitcoin.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-12 align-self-center">
							<div class="footer-terms">
								<?php wp_nav_menu( array( 'menu' => 'T&C Menu' ) ); ?>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 align-self-center">
							<div class="copyright">
								<a href="javascript:void(0);"><?php echo get_theme_mod('copyright_text'); ?></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 align-self-center">
							<div class="footer-social">
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
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
