<?php 

function wep_load_textdomain() {
    $plugin_dir = 'weproduct/lang';
    load_plugin_textdomain('weproduct', false, $plugin_dir);
}