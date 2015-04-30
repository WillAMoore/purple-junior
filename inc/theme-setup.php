<?php

// Load scripts and stylesheets required by the theme.
function pj_enqueue_scripts() {

    wp_enqueue_script('jquery');
    wp_enqueue_script('bs-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js');
   wp_enqueue_script('angular-dependencies',  get_template_directory_uri() . '/inc/deps/angularjs-deps.js');
    wp_enqueue_style('bs-style', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fa-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');

    wp_enqueue_style('lato-font', 'http://fonts.googleapis.com/css?family=Lato:300,400&subset=latin,latin-ext');
    wp_enqueue_style('pj-style', get_template_directory_uri() . '/style.css');
 	wp_enqueue_style('pj-style', get_template_directory_uri() . '/css/angular-material.css');
}
add_action('wp_enqueue_scripts', 'pj_enqueue_scripts');

?>