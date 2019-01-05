<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    // parent-style is the same $handle used in the parent theme when it registers its stylesheet
    $parent_style = 'tetris-style';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    // loaded from scripts.php in parent theme
    wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/css/prettyPhoto.css');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style, 'prettyPhoto' ),
        wp_get_theme()->get('Version')
    );
}

// fontawesome
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
 
    wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css' );
 
}
?>
