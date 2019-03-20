<?php

// https://developer.wordpress.org/reference/functions/wp_register_style/
// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
function load_stylesheets()
{
    // wp_register_style('bootstrap');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');

    // wp_register_style('stylesheet');
    wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// https://developer.wordpress.org/reference/functions/wp_register_script/
// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer);
function load_js()
{
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), 1, true);
}
add_action('wp_enqueue_scripts', 'load_js');

// custom post type function
function create_post_type() {
    // https://codex.wordpress.org/Function_Reference/register_post_type
    register_post_type('testimonies',
        // custom post type options
        array(
            'labels' => array(
                'name' => __( 'Testimonies' ),
                'singular_name' =>__( 'Testimony' )
            ),
            'public' => true
        )
    );
}
add_action( 'init', 'create_post_type' );