<?php

function add_theme_scripts() {

    // CDN's

    // JQuery

    // wp_register_script( 'Jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
	// wp_enqueue_script('Jquery');

    // Vanilla js datepicker

    // wp_enqueue_style( 'datepicker_style', 'https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker.min.css' );

    // wp_register_script( 'Datepicker', 'https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker-full.min.js', null, null, true );
	// wp_enqueue_script('Datepicker');


    // Flickity carousel
    // wp_enqueue_style( 'flickity_style', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
    
    // wp_register_script( 'Flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array ( 'jquery' ), null, true );
	// wp_enqueue_script('Flickity');

    // Nice select

    // wp_register_script( 'Niceselect', get_template_directory_uri(). '/src/js/library/nice-select.js', array ( 'jquery' ), null, true );
	// wp_enqueue_script('Niceselect');

    // Tagger

    // wp_register_script( 'Tagger', get_template_directory_uri(). '/src/js/library/tagger.js', array ( 'jquery' ), null, true );
	// wp_enqueue_script('Tagger');
    

    // add base style.css file
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // add theme style
    wp_enqueue_style( 'theme_style', get_template_directory_uri(). '/dist/sass/theme.css', array(), '1.1', 'all' );

    // add theme script
    wp_enqueue_script( 'theme_script', get_template_directory_uri() . '/dist/js/theme.js', array ( 'jquery' ), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

?>