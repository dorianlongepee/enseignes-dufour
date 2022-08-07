<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage fimtheme
 * @since fimtheme 1.0
 */

 //Secure fonctions.php
 defined('ABSPATH') || exit;

 if(!function_exists('dufour_theme_support')){
    function dufour_theme_support(){

        // Generate dynamic title
        add_theme_support( 'title-tag' );

        // Woocommerce support
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );

        

        // Enable Post Thumbnails support for a theme
        add_theme_support( 'post-thumbnails' );
        add_image_size( 'custom-thumb', 350, 200, array('center', 'center') );
        add_image_size( 'single-thumb', 835, '', array('center', 'center') );

        // Valid HTML5
        add_theme_support( 
            'html5', 
            array( 
                'comment-list', 
                'comment-form', 
                'search-form',
                'gallery', 
                'caption', 
                'style', 
                'script'
            )
        );

        // Customize Selective Refresh Widgets
        add_theme_support('customize-selective-refresh');


        // Register Menu
        register_nav_menus(array(
            'menu-1' => __('Header Menu', 'themedufour'),
            'footer' => __('Footer Menu', 'themedufour'),
            'footer-2' => __('Footer Menu 2', 'themedufour'),
        ));

        //Add BS5 Walker Class
        require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';

    }
 }
 add_action('after_setup_theme', 'dufour_theme_support');

 

 // Add CSS
 function add_custom_css_js(){
    // CSS
    wp_enqueue_style( 'setup-and-reset', get_stylesheet_uri() );
    wp_enqueue_style( 'custom', get_stylesheet_directory_uri().'/assets/css/raw/style.css', false, '5', 'all');

    // JS
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '5.1.3', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true );
 }
 add_action('wp_enqueue_scripts', 'add_custom_css_js');


/***************************************
 * CUSTOM WP SETTINGS 
 ***************************************/

 // Remove front admin bar
 add_filter( 'show_admin_bar', '__return_false');

//  Custom words excerpt
function custom_excerpt_length($length){
    if(is_home()){
        return 20;
    } else {
        return 60;
    }
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/***************************************
 * CUSTOM WOOCOMMERCE SETTINGS 
 ***************************************/

 // Go to the plugin folder 'theme-customisations/custom' to see all changes to WooCommerce