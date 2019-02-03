<?php
function wep_filter_product_content($content) {
    if(!is_singular('weproduct')) :
        return $content;
    endif;
    global $post;

    $weproduct_data = get_post_meta($post->ID, 'weproduct_data', true);
    $weproduct_html = file_get_contents('weproduct-template.php', true);

    $weproduct_html = str_replace('NAME_PH', $weproduct_data['name'], $weproduct_html);
    $weproduct_html = str_replace('DESC_PH', $weproduct_data['description'], $weproduct_html);
    $weproduct_html = str_replace('DETAILS_PH', $weproduct_data['details'], $weproduct_html);
    $weproduct_html = str_replace('TYPE_PH', $weproduct_data['type'], $weproduct_html);
    $weproduct_html = str_replace('IMAGE_PH', $weproduct_data['image'], $weproduct_html);
    $weproduct_html = str_replace('PRICE_PH', $weproduct_data['price'], $weproduct_html);
    $weproduct_html = str_replace('SKU_PH', $weproduct_data['sku'], $weproduct_html);
    $weproduct_html = str_replace('STOCK_PH', $weproduct_data['stock'], $weproduct_html);


    $weproduct_html = str_replace('NAME_I18N', __('Product Name', 'weproduct'), $weproduct_html);
    $weproduct_html = str_replace('DESC_I18N', __('Product Description', 'weproduct'), $weproduct_html);
    $weproduct_html = str_replace('DETAILS_I18N', __('Product Details', 'weproduct'), $weproduct_html);
    $weproduct_html = str_replace('TYPE_I18N', __('Product Type', 'weproduct'), $weproduct_html);
    $weproduct_html = str_replace('IMAGE_I18N', __('Product Image', 'weproduct'), $weproduct_html);
    $weproduct_html = str_replace('PRICE_I18N', __('Product Price', 'weproduct'), $weproduct_html);
    $weproduct_html = str_replace('SKU_I18N', __('Product SKU', 'weproduct'), $weproduct_html);
    $weproduct_html = str_replace('STOCK_I18N', __('Product Stock', 'weproduct'), $weproduct_html);

    return $weproduct_html . $content;
}