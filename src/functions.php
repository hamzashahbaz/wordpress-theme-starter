<?php

/**
 * Enqueue scripts and styles.
 */
function lg_scripts() {

	wp_enqueue_style( 'lg-style', get_theme_file_uri( '/dist/css/app.css' ), false );

	wp_enqueue_script( 'lg-script', get_theme_file_uri( '/dist/js/app.js' ), array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'lg_scripts' );

function my_deregister_scripts(){
	wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

add_theme_support( 'post-thumbnails' ); 

add_filter( 'wp_list_categories', function( $html ) {
    return str_replace( ' current-cat', ' active', $html );
});
