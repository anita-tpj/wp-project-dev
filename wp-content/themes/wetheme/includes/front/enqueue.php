<?php
function we_enqueue() {
    wp_register_style('we_bootstrap', get_template_directory_uri() . '/src/sass/_vendor/_bootstrap/compiled/bootstrap.css', '4.2.1');
    wp_register_style('we_bootstrap_social', get_template_directory_uri() . '/src/sass/_vendor/_bootstrap/compiled/bootstrap-social.css', '3.3.7');

  //wp_enqueue_style('we_bootstrap');
  //wp_enqueue_style('we_bootstrap_social');
    wp_enqueue_style('wetheme_style', get_stylesheet_uri());

    wp_register_script('we_fbox', get_template_directory_uri() . '/src/scripts/src/fancy-box.js', array('jquery'), true);
    wp_register_script('we_bootstrap', get_template_directory_uri() . '/src/scripts/src/bootstrap.js', array('jquery'), array(), '4.2.1', true);
    wp_register_script('we_bootstrap_bundle', get_template_directory_uri() . '/src/scripts/src/bootstrap.bundle.js', array('jquery'), array(), '4.2.1', true);
    wp_register_script('we_script', get_template_directory_uri() . '/src/scripts/src/script.js', array('jquery'), true);

    if(WP_DEBUG === true) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('we_fbox');
        wp_enqueue_script('we_bootstrap');
        //wp_enqueue_script('we_bootstrap_bundle');
        wp_enqueue_script('we_script');
    }else {
        wp_enqueue_script('jquery');
        wp_enqueue_script('we_script_min', get_template_directory_uri() . '/src/scripts/scripts.min.js', false, true);
    }

}