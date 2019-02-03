<?php
function weproduct_admin_init() {
    include('create-metaboxes.php');
    include('weproduct-options.php');
    include('enqueue.php');
    
    add_action('add_meta_boxes_weproduct', 'wep_create_metaboxes' );
    add_action('admin_enqueue_scripts', 'wep_admin_enqueue');
}
