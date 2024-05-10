<?php

/**
 * 
 * Enqueue scripts and styles.
 */

function phamluxury_scripts() {
	
	wp_enqueue_style( 'phamluxury-style', get_stylesheet_uri() );

	
	wp_enqueue_style( 'phamluxury-bootstrap-css', get_theme_file_uri('/assets/css/bootstrap.min.css'), array(), '1.0' );
	
	wp_enqueue_style( 'phamluxury-owl-carousel-css', get_theme_file_uri('/assets/css/owl.carousel.min.css'), array(), '1.0' );
	
	wp_enqueue_style( 'phamluxury-animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'phamluxury-style-css', get_theme_file_uri('/assets/css/style.css'), array(), '1.0' );
	
	wp_enqueue_style( 'phamluxury-responsive-css', get_theme_file_uri('/assets/css/responsive.css'), array(), '1.0' );
	
	//wp_enqueue_style( 'phamluxury-dashicons-css', 'https://cdn.jsdelivr.net/npm/@icon/dashicons@0.9.0-alpha.4/dashicons.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'phamluxury-fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', array(), '1.0' );

	//wp_enqueue_style( 'phamluxury-fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css', array(), '1.0' );

	wp_enqueue_style( 'phamluxury-lineawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css', array(), '1.0' );



    wp_enqueue_script( 'phamluxury-jquery-js', get_theme_file_uri('/assets/js/jquery-min.js'), array(), '1.0', true );

    wp_enqueue_script( 'phamluxury-bootstrap-bundle-js', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array(), '1.0', true );

    wp_enqueue_script( 'phamluxury-owl-carousel-js', get_theme_file_uri('/assets/js/owl.carousel.min.js'), array(), '1.0', true );

    //wp_enqueue_script( 'phamluxury-wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.0', true );
    
    //wp_enqueue_script( 'phamluxury-iconify-js', 'https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js', array(), '1.0', true );

    //wp_enqueue_script( 'phamluxury-fancybox-js', 'https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js', array(), '1.0', true );

    wp_enqueue_script( 'custom-js', get_theme_file_uri('/assets/js/custom.js'), array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'phamluxury_scripts' );