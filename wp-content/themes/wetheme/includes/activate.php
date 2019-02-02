<?php

function we_activate() {
   if(version_compare(get_bloginfo('version'), '5.0.3', '<'))  {
       wp_die(__('You must have a minimum version of 5.0.3 to use this theme', 'wetheme'));
   }
}

$theme_opts = get_option('we_opts');

if(!$theme_opts) {
    $opts               = array(
        'facebook'      => '',
        'twitter'       => '',
        'youtube'       => '',
        'logo_type'     => 1,
        'logo_img'      => '',
        'footer'        => ''
    );

    add_option('we_opts', $opts);
}
