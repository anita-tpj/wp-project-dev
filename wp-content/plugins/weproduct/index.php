<?php
/*
Plugin Name: WE Products
Description: WordPress plugin that allows user to create products, services, portfolios...
Version: 1.0.0
Author: Wall-E@New
Author URI: http://tanita.webege.com
Text Domain: weproduct
*/

if(!function_exists('add_action')) :
    echo 'Not allowed!';
    exit();
endif;

//Setup
define('WEPRODUCT_PLUGIN_URL',__FILE__);

//Includes
include('includes/activate.php');
include('includes/deactivate.php');
include('includes/init.php');
include('includes/admin/init.php');
include('process/save-post.php');
include('process/filter-content.php');
include(dirname(WEPRODUCT_PLUGIN_URL) . '/includes/widgets.php');
include(dirname(WEPRODUCT_PLUGIN_URL) . '/includes/widgets/daily-product.php');
include('includes/cron.php');



//Hooks
register_activation_hook(__FILE__, 'wep_activate_plugin');
register_deactivation_hook(__FILE__, 'wep_deactivate_plugin');
add_action('init', 'weproduct_init');
add_action('admin_init', 'weproduct_admin_init');
add_action('save_post_weproduct', 'wep_save_post_admin', 10, 3);
add_filter('the_content', 'wep_filter_product_content');
add_action('widgets_init', 'wep_widgets_init');
add_action('wep_daily_product_hook', 'wep_generate_daily_product');



//Shortcodes