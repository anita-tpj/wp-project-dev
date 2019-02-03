<?php

function wep_admin_enqueue() {
    global $typenow;
    if($typenow !== 'weproduct') {
        return;
    }

    wp_register_style('wep_bootstrap', plugins_url('/src/sass/_vendor/_bootstrap/compiled/bootstrap.css', WEPRODUCT_PLUGIN_URL ), '4.2.1');

    wp_enqueue_style('wep_bootstrap');

    wp_register_script('wep_bootstrap', plugins_url('/src/scripts/bootstrap.js', WEPRODUCT_PLUGIN_URL), array('jquery'), array(), '4.2.1', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('wep_bootstrap');

}