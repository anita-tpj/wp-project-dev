<?php 

function wep_load_textdomain() {
    $plugin_dir = 'weproduct/lang';
    load_plugins_textdomain('weproduct', false, $plugin_dir);
}