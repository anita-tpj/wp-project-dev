<?php
function we_widgets() {
    register_sidebar(array(
        'name'          => __('Blog Page Sidebar', 'wetheme'),
        'id'            => 'we_sidebar',
        'description'   => __('Sidebar for Blog layouts', 'wetheme'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="p-3 mb-3 bg-light rounded widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle font-italic">',
        'after_title'   => '</h2>'
        )
    );

}