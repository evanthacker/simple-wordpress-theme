<?php
function simple_theme_setup(){
    // Feature Image Support
    add_theme_support('post-thumbnails');

    // Adding Menus Option
    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));
}

add_action('after_setup_theme', 'simple_theme_setup');


// Excerpt Length

function set_excerpt_length(){
    return 77;
}

add_filter('excerpt_length', 'set_excerpt_length');

