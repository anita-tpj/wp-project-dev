<?php
 function wep_submit_user_product() {
     $response = array('status' => 1);

     if(empty($_POST['name']) || $_POST['description'] || $_POST['details'] || $_POST['type'] || $_POST['category'] || $_POST['image'] || $_POST['price'] || $_POST['sku'] || $_POST['stock'] || $_POST['featured']) {
         wp_send_json($response);
     }

     $title = sanitize_text_field($_POST('title'));
     $content = wp_kses_post($_POST['description']);
     $product_data = array();
     $product_data['name'] = sanitize_text_field($_POST('name'));
     $product_data['details'] = sanitize_text_field($_POST('details'));
     $product_data['type'] = sanitize_text_field($_POST('type'));
     $product_data['category'] = sanitize_text_field($_POST('category'));
     $product_data['image'] = sanitize_text_field($_POST('image'));
     $product_data['price'] = sanitize_text_field($_POST('price'));
     $product_data['sku'] = sanitize_text_field($_POST('sku'));
     $product_data['stock'] = sanitize_text_field($_POST('stock'));
     $product_data['featured'] = sanitize_text_field($_POST('featured'));

     $post_id = wp_insert_post(array(
        'post_content' => $content,
        'post_name' => $title,
        'post_title' => $title,
        'post_status' => 'pending',
        'post_type' =>'weproduct'
     ));

     update_post_meta($post_id, 'product_data', $product_data);
     $response['status'] = 2;
     wp_send_json($response);
     
 }