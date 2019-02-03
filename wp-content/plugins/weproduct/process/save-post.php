<?php
function wep_save_post_admin($post_id, $post, $update) {
    if(!$update) :
        return;
    endif;

    $weproduct_data = array();
    $weproduct_data['name'] = sanitize_text_field($_POST['wepProductName']);
    $weproduct_data['description'] = sanitize_text_field($_POST['wepProductDescription']);
    $weproduct_data['details'] = sanitize_text_field($_POST['wepProductDetails']);
    $weproduct_data['type'] = sanitize_text_field($_POST['wepProductType']);
    $weproduct_data['image'] = sanitize_text_field($_POST['wepProductImage']);
    $weproduct_data['price'] = sanitize_text_field($_POST['wepProductPrice']);
    $weproduct_data['sku'] = sanitize_text_field($_POST['wepProductSKU']);
    $weproduct_data['stock'] = sanitize_text_field($_POST['wepProductStock']);
    $weproduct_data['featured'] = sanitize_text_field($_POST['wepFeaturedProduct']);

    update_post_meta($post_id, 'weproduct_data', $weproduct_data);
}