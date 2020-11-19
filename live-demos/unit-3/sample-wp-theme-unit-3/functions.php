<?php

//function my_stylesheet_enqueue() {
//    wp_enqueue_style(
//        'theme-css',
//        get_stylesheet_uri(),
//        ['bootstrap'],
//        '1.0.0',
//        'all'
//    );
//
//    wp_enqueue_style(
//        'bootstrap',
//        'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',
//        [],
//        '4.5.3',
//        'all'
//    );
//}
//add_action('wp_enqueue_scripts', 'my_stylesheet_enqueue');

// This is using a closure (anonymous function) but you could use a named function instead
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style(
        'theme-css',
        get_stylesheet_uri(),
        ['bootstrap'],
        '1.0.0',
        'all'
    );

    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',
        [],
        '4.5.3',
        'all'
    );

    wp_enqueue_script(
      "theme-scripts",
      trailingslashit(get_stylesheet_directory_uri()) . "scripts.js",
    ['jquery'],
        '1.0.1',
        true
    );
});