<?php
function load_fonts() {
	wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Yellowtail');
	wp_enqueue_style( 'googleFonts');
	}
    
add_action('wp_print_styles', 'load_fonts');

add_filter('show_admin_bar', '__return_false');

add_action( 'wp_enqueue_script', 'load_jquery' );
function load_jquery() {
    wp_enqueue_script( 'jquery' );
}

function wpEnqueueScripts(){
    wp_register_script('custom-script', get_stylesheet_directory_uri() . '/scripts/parallax.min.js', array('jquery'));
    wp_enqueue_script('custom-script');

    wp_register_script('myscript', get_stylesheet_directory_uri() . '/scripts/parallaxelements.js', array('jquery'));
    wp_enqueue_script('myscript');
}    

add_action('wp_enqueue_scripts', 'wpEnqueueScripts');
add_filter( 'widget_text', 'do_shortcode');
?>