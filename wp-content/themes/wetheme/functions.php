<?php

//Set up


//Includes 
include(get_template_directory() . '/includes/front/enqueue.php');

//Action & Filters Hooks
add_action('wp_enqueue_scripts', 'we_enqueue');


//Shortcodes