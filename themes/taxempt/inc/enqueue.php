<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
    /**
	 * Load theme's JavaScript sources.
	 */
    function understrap_scripts() {
        // Get the theme data.

        $the_theme = wp_get_theme();

        wp_deregister_script( 'jquery');
        wp_register_script('jquery_new', (get_stylesheet_directory_uri() . '/js/jquery-3.3.1.min.js'),array(), '3.3.1', true);
        wp_enqueue_script('jquery_new'); 


        wp_enqueue_style( 'understrap-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $the_theme->get( 'Version' ) );

        wp_enqueue_script( 'fonts_js', get_template_directory_uri() . '/js/fonts.js', false, '1');

        wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), true);

        wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $the_theme->get( 'Version' ), true );
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        wp_register_script('myscript',  get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );  
        wp_enqueue_script('myscript'); 
        
    }
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


