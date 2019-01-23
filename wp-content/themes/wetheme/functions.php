<?php

//Set up


//Includes 
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/front/setup.php');

//Action & Filters Hooks
add_action('wp_enqueue_scripts', 'we_enqueue');
add_action('after_setup_theme', 'we_setup_theme');


//Shortcodes