<?php 

function nava_theme_scripts() {
    wp_enqueue_style( 'nava_style', get_stylesheet_uri() );
    wp_enqueue_script( 'nava_script', get_template_directory_uri().'/script.js', array(), true);
}

add_action( 'wp_enqueue_scripts', 'nava_theme_scripts' );

register_nav_menus( array(
    'primary' => 'Primary Menu'
) );

?>