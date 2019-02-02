<?php
/*
Plugin Name: WE Products Catalog
Description: WordPress plugin that allows user to create products, services, portfolios...
Version: 1.0.0
Author: Wall-E@New
Author URI: http://tanita.webege.com
Text Domain: we-product-catalog
*/

if(!function_exists('add_action')) :
    echo 'Not allowed!';
endif;

//Setup


//Includes
include('includes/activate.php');


//Hooks
register_activation_hook('__FILE__', 'wepc_activate_plugin');


//Shortcodes

