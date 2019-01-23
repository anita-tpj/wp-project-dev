<?php
function we_enqueue() {
    wp_register_style('we_bootstrap', get_template_directory_uri() . 'src/_vendor/_bootstrap/_bootstrap.css');
    wp_enqueue_style('we_bootstrap');
}