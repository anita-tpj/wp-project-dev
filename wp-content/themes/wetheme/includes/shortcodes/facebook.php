<?php
function we_facebook_shortcode($atts, $content) {
    $we_theme_opts = get_option('we_opts');
    $atts = shortcode_atts(array(
        'page'  => $we_theme_opts['facebook']
    ), $atts);

    if(!$content):
        $content='<strong><i class="fab fa-facebook-f"></i> Like us on Facebook</strong>';
    endif;

    return '<a href="http://facebook.com/'. $atts['page'] .'" class="btn btn-facebook">'. do_shortcode($content) .'
            </a>';
}

function we_icon_shortcode($atts) {
    return '<i class="fab fa-'. $atts['icon'].'"></i>';
}