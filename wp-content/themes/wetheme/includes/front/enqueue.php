<?php
function we_enqueue() {
    wp_register_style('we_bootstrap', get_template_directory_uri() . '/src/sass/_vendor/_bootstrap/bootstrap.css');
    
    wp_enqueue_style('we_bootstrap');
    wp_enqueue_style('wetheme-style', get_stylesheet_uri());

}