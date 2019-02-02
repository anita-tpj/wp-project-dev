<?php
function wep_create_metaboxes() {
    add_meta_box(
        'wep_option_mb',
        __('Product Options', 'we-product'),
        'wep_options_mb',
        'weproduct',
        'normal',
        'high'
    );
}