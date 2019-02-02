<?php
function weproduct_admin_init() {
    include('create-metaboxes.php');
    include('weproduct-options.php');
    
    add_action('add_meta_boxes_weproduct', 'wep_create_metaboxes' );
}
