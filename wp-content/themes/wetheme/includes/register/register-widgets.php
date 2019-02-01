<?php
function we_register_widgets() {
    register_sidebar(array(
        'name'          => __('Blog Page Sidebar', 'wetheme'),
        'id'            => 'we_blog_sidebar',
        'description'   => __('Sidebar for Blog layouts', 'wetheme'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="p-3 mb-3 bg-light rounded widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle font-italic">',
        'after_title'   => '</h2>'
        )
    );

    register_sidebar(array(
        'name'          => __('Home Page Box 1', 'wetheme'),
        'id'            => 'we_hp_box1',
        'description'   => __('Section box 1/3 for home page layout', 'wetheme'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
        )
    );

    register_sidebar(array(
        'name'          => __('Home Page Box 2', 'wetheme'),
        'id'            => 'we_hp_box2',
        'description'   => __('Section box 2/3 for home page layout', 'wetheme'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
        )
    );

    register_sidebar(array(
        'name'          => __('Home Page Box 3', 'wetheme'),
        'id'            => 'we_hp_box3',
        'description'   => __('Section box 3/3 for home page layout', 'wetheme'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>'
        )
    );
}