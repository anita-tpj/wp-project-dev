<?php

//Set up
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('post-formats', array('aside', 'link', 'quote', 'video', 'audio', 'image', 'gallery' ));

//Includes 
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/register/register-menus.php');
include(get_template_directory() . '/includes/register/register-widgets.php');
include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/meta-functions.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/options-page.php');
include(get_template_directory() . '/includes/admin/init.php');
include(get_template_directory() . '/process/save-options.php');
include(get_template_directory() . '/includes/shortcodes/facebook.php');
include(get_template_directory() . '/includes/theme_customizer.php');
include(get_template_directory() . '/includes/front/head.php');
require_once get_template_directory() . '/includes/libs/class-wp-bootstrap-navwalker.php'; // Register Custom Navigation Walker
require_once get_template_directory() . '/includes/libs/class-tgm-plugin-activation.php'; // Register Custom Navigation Walker
include(get_template_directory() . '/includes/register/register-plugins.php');


//Action & Filters Hooks
add_action('wp_enqueue_scripts', 'we_enqueue');
add_action('after_setup_theme', 'we_register_menus');
add_action('widgets_init', 'we_register_widgets');
add_action('after_switch_theme', 'we_activate');
add_action('admin_menu', 'we_admin_menus');
add_action('admin_init', 'we_admin_init');
add_action('customize_register', 'we_customize_register');
add_action('wp_head', 'we_head');
add_action( 'tgmpa_register', 'we_register_required_plugins' );
add_filter('excerpt_length', 'we_set_excerpt_length');
add_filter('excerpt_more', 'we_excerpt_more' );
add_filter('the_generator', 'we_remove_version');
apply_filters('the_excerpt', 'we_excerpt');

//Shortcodes
add_shortcode('we_fb', 'we_facebook_shortcode');
add_shortcode('we_i', 'we_icon_shortcode');