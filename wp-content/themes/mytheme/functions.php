<?php


function load_css()
{
    wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, "all");
    wp_enqueue_style('bootstrap');

    wp_register_style("main", get_template_directory_uri() . "/css/main.css", array(), false, "all");
    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", ['jquery'], false, true);
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

function set_excerpt_length()
{
    return 25;
}


function theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support('menus');
    add_theme_support(
        'custom-logo',
        array(
            'height' => 50,
            'width' => 50,
            'flex-height' => false,
        )
    );
    add_theme_support('html5', array('search-form'));



    register_nav_menus(
        array(
            'top-nav' => 'Top Menu Location',
            'footer-menu' => 'Footer Menu Location'
        )
    );

}

add_action('after_setup_theme', 'theme_setup');

set_post_thumbnail_size(100, 100, false); // 200px wide by 200px high, hard crop mode

// Add custom image sizes
add_image_size('custom-header', 1200, 400, false); // Custom header size
add_image_size('custom-thumbnail', 250, 250, true); // Custom thumbnail size

function my_excerpt_length($length)
{
    return 30;
}

add_filter('excerpt_length', 'my_excerpt_length');



