<?php
function we_customize_register($wp_customize) {
    $wp_customize -> add_setting('header_bg_color', array(
        'default'       => '#343a40',
        'transport'     => 'refresh'
    ));

    $wp_customize -> add_section('we_color_theme_section', array(
        'title'         => __('Colors', 'wetheme'),
        'priority'      => 30
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'theme_colors', array(
        'label'         => __('Header Color', 'wetheme'),
        'section'       => 'colors',
        'settings'      => 'header_bg_color'
    )));
}