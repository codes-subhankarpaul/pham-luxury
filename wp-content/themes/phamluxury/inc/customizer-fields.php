<?php


/* Custom Fields in Customizer */
function add_custom_fields($wp_customize) {

/*===================
	Header Logo
=====================*/
	$wp_customize->add_setting( 'header_logo', array(
        'default' => get_theme_file_uri('assets/images/logo.webp'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo_control', array(
	        'label' => 'Header Logo',
	        'priority' => 5,
	        'section' => 'title_tagline',
	        'settings' => 'header_logo',
	        'button_labels' => array(
                'select' => 'Select Logo',
                'remove' => 'Remove Logo',
                'change' => 'Change Logo',
                )
    		)
		)
	);

/*===================
	Footer Logo
=====================*/
	$wp_customize->add_setting( 'footer_logo', array(
        'default' => get_theme_file_uri('assets/images/logo.webp'), // Add Default Image URL 
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_control', array(
	        'label' => 'Footer Logo',
	        'priority' => 5,
	        'section' => 'title_tagline',
	        'settings' => 'footer_logo',
	        'button_labels' => array(
                'select' => 'Select Logo',
                'remove' => 'Remove Logo',
                'change' => 'Change Logo',
                )
    		)
		)
	);

/*====================
	Primary Phone Number
=====================*/
	$wp_customize->add_setting( 'primary_phone_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'primary_phone_number', array(
		'label' => 'Primary Phone Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	Secondary Phone Number
=====================*/
	$wp_customize->add_setting( 'secondary_phone_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'secondary_phone_number', array(
		'label' => 'Secondary Phone Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	Landline Number
=====================*/
	$wp_customize->add_setting( 'landline_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'landline_number', array(
		'label' => 'Landline Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	WhatsApp Number
=====================*/
	$wp_customize->add_setting( 'whatsapp_number', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'whatsapp_number', array(
		'label' => 'WhatsApp Number',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
	Primary Email Address
=====================*/
	$wp_customize->add_setting( 'primary_email_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'primary_email_address', array(
		'label' => 'Email Address',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*====================
    Office Address
====================*/
	$wp_customize->add_setting( 'office_address', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'office_address', array(
		'label' => 'Office Address',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*=================================
    Office Address Direction Link
==================================*/
	$wp_customize->add_setting( 'office_address_direction_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'office_address_direction_link', array(
		'label' => 'Office Address Direction Link',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*=========================
    Office Address iFrame
===========================*/
	$wp_customize->add_setting( 'office_address_iframe', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'office_address_iframe', array(
		'label' => 'Office Address iFrame',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*==================
	Footer Text
===================*/
	$wp_customize->add_setting( 'footer_text', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'footer_text', array(
		'label' => 'Footer Text',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*==================
	Operating Hours
===================*/
	$wp_customize->add_setting( 'operating_hours', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'operating_hours', array(
		'label' => 'Operating Hours',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );

/*=========================
	Facebook Account Link
==========================*/
	$wp_customize->add_setting( 'facebook_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'facebook_acc_link', array(
		'label' => 'Facebook Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*==========================
	Instagram Account Link
===========================*/
	$wp_customize->add_setting( 'instagram_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'instagram_acc_link', array(
		'label' => 'Instagram Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*==========================
	Youtube Account Link
===========================*/
	$wp_customize->add_setting( 'youtube_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'youtube_acc_link', array(
		'label' => 'Youtube Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*===========================
	Apple Music Account Link
============================*/
	$wp_customize->add_setting( 'apple_music_acc_link', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'apple_music_acc_link', array(
		'label' => 'Apple Music Account Link',
		'section' => 'title_tagline',
		'type' => 'text'
	) );

/*===================
	Catalogue
=====================*/
	$wp_customize->add_setting( 'catalogue', array(
        'sanitize_callback' => 'esc_url_raw'
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'catalogue_control', array(
	        'label' => 'Catalogue (File)',
	        'section' => 'title_tagline',
	        'settings' => 'catalogue',
	        'button_labels' => array(
                'select' => 'Select Catalogue',
                'remove' => 'Remove Catalogue',
                'change' => 'Change Catalogue',
                )
    		)
		)
	);

/*==================
	CopyRight Text
===================*/
	$wp_customize->add_setting( 'copyright_text', array(
		'default' => '',
		'capability' => 'edit_theme_options'
	) );

	$wp_customize->add_control( 'copyright_text', array(
		'label' => 'Copyright Text',
		'section' => 'title_tagline',
		'type' => 'textarea'
	) );
}
add_action('customize_register', 'add_custom_fields');