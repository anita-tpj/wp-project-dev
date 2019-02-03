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
include('includes/init.php');
include('includes/admin/init.php');


//Hooks
register_activation_hook('__FILE__', 'wep_activate_plugin');
add_action('init', 'weproduct_init');
add_action('admin_init', 'weproduct_admin_init');


//Shortcodes