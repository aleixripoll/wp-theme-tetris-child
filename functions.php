<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
 
    // loaded from scripts.php in parent theme
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    //wp_enqueue_style( 'wpex-responsive', get_template_directory_uri() . '/css/responsive.css');
    //wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css');

    // child styles
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'style' ), wp_get_theme()->get('Version'));
    wp_enqueue_style( 'child-responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array( 'wpex-responsive' ));
}

// fontawesome
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
}

?>
