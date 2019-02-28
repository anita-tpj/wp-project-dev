<?php
function wep_activate_plugin() {
    if(version_compare(get_bloginfo('version'), '5.0.3', '<'))  :
        wp_die(__('You must must update WordPress to use this plugin', 'we-product'));
    endif;

    wp_schedule_event(time(), 'daily', 'wep_daily_product_hook');
}