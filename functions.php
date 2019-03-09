<?php

// https://developer.wordpress.org/reference/functions/wp_register_style/
function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// https://developer.wordpress.org/reference/functions/wp_register_script/
function load_js()
{

    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), 1, true);
}
add_action('wp_enqueue_scripts', 'load_js');