<?php

function we_admin_init() {
    include('enqueue.php');

    add_action('admin_enqueue_scripts', 'we_admin_enqueue');
    add_action('admin_post_we_save_options', 'we_save_options');
}