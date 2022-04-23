<?php 

function nava_theme_scripts() {
    wp_enqueue_style( 'nava_style', get_stylesheet_uri() );
    wp_enqueue_script( 'nava_script', get_template_directory_uri().'/script.js', array(), true);
}

function nava_theme_sidebars() {
    register_sidebar( array (
        'id'            => 'page-sidebar',
        'name'          => 'Page Sidebar',
        'description'   => 'A short description of the sidebar.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>'
    ) );
}

add_action( 'wp_enqueue_scripts', 'nava_theme_scripts' );
register_nav_menus( array(
    'primary' => 'Primary Menu'
) );
add_theme_support('widgets');
add_action('widgets_init', 'nava_theme_sidebars');
?>