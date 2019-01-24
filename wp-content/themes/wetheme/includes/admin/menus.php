<?php

function we_admin_menus() {
    add_menu_page(
        'Wall-E Theme Options',
        'Theme Options',
        'edit_theme_options',
        'we_theme_opts',
        'we_theme_opts_page'
    );
}