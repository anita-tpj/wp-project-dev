<?php

function we_admin_enqueue() {
    if(!isset($_GET['page']) || $_GET['page'] != "we_theme_opts") :
        return;
    endif;

    wp_register_style('we_bootstrap', get_template_directory_uri() . '/src/sass/_vendor/_bootstrap/bootstrap.css', '4.2.1');
    wp_enqueue_style('we_bootstrap');
    wp_enqueue_media();
    wp_register_script('we_options', get_template_directory_uri() . '/src/scripts/options.js', array(), false, true);
    wp_enqueue_script('we_options');
}