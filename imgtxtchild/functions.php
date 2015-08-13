<?php

function load_fonts() {
        wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Merriweather:300,400,900,300italic,900italic|Bitter:700|Trocchi|Lato:100,100italic,300,300italic,400,700,700italic,900|Libre+Baskerville:400italic|Oswald:300,700|Amatic+SC:400|Lora:700');
        wp_enqueue_style( 'googleFonts');
    }

add_action('wp_print_styles', 'load_fonts');

add_filter( 'use_default_gallery_style', '__return_false' );

function custom_excerpt_length( $length ) {
	return 12;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function my_scripts_method() {
	wp_enqueue_script(
		'waypoints-sticky',
		get_stylesheet_directory_uri() . '/waypoints-sticky.min.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'waypoints',
		get_stylesheet_directory_uri() . '/waypoints.min.js',
		array( 'jquery' )
	);
	wp_enqueue_script(
		'navlogo',
		get_stylesheet_directory_uri() . '/navlogo.js',
		array( 'jquery' ),
		'1.0.0',
		true
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>