<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage phamluxury
 * @since phamluxury 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php phamluxury_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="custom-header py-xl-3 py-2">
		<div class="container">
			<nav class="navbar navbar-expand-lg py-0">
				<a class="navbar-brand ms-0 py-0" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_mod('header_logo'); ?>"></a>
				<div class="navbar-header me-0">
					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
						wp_nav_menu(
							array(
								'menu'          	=> 'Header Menu',
								'depth'         	=> 3,
								'container'     	=> false,
								'menu_class'    	=> 'navbar-nav ms-auto mb-2 mb-lg-0',
								'theme_location' 	=> 'primary'
							)
						);
					?>
					<!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Luxury Cars</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Brands</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Blog</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact Us</a>
						</li>
					</ul> -->
					<div class="nav-btn inside-menu">
						<ul>
							<li><a href="<?php echo esc_url(home_url('rent-a-car')); ?>" class="custom-btn">Rent a car</a></li>
							<li><a href="mailto:<?php echo get_theme_mod('primary_email_address'); ?>"><i class="las la-envelope"></i></a></li>
							<li><a href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="nav-btn">
					<ul>
						<li><a href="<?php echo esc_url(home_url('rent-a-car')); ?>" class="custom-btn">Rent a car</a></li>
						<li><a href="mailto:<?php echo get_theme_mod('primary_email_address'); ?>"><i class="las la-envelope"></i></a></li>
						<li><a href="tel:<?php echo get_theme_mod('primary_phone_number'); ?>"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</nav>
		</div>
	</header>