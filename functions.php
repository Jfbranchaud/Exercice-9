<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'animation',
        get_stylesheet_directory_uri() . '/js/animation.js',
        array(),
        filemtime( get_stylesheet_directory() . '/js/animation.js' )
    );

}

function extraire_cours( $query ) {
    if ($query->is_category('cours'))
    {
       $query->set( 'posts_per_page', -1 );
       $query->set( 'orderby', 'title' );
       $query->set( 'order', 'asc' );
    }
 }
 add_action( 'pre_get_posts', 'extraire_cours' );
?>