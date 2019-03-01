<?php

function wep_generate_daily_product() {
    global $wpdb;
    $product_id = $wpdb->get_var("SELECT `ID` FROM `". $wpdb->posts . "`
                                  WHERE post_status='publish' AND post_type='weproduct' 
                                  ORDER BY rand() LIMIT 1");
 

    set_transient('wep_daily_product', $product_id, 60*60*24);                            
}