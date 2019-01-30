<?php
function we_save_options() {
    if(!current_user_can('edit_theme_options')) {
        wp_die(__('You are not allowed to be on this page.'));
    }

    check_admin_referer('we_option_verify');

    $opts                   = get_option('we_opts');
    $opts['twitter']        = sanitize_text_field($_POST['we_inputTweeter']);
    $opts['facebook']       = sanitize_text_field($_POST['we_inputFacebook']);
    $opts['youtube']        = sanitize_text_field($_POST['we_inputYoutube']);
    $opts['logo_type']      = absint($_POST['we_inputLogoType']);
    $opts['footer']         = $_POST['we_inputFooterText'];
    $opts['logo_img']       = esc_url_raw($_POST['we_inputLogoImg']);
    
    

    update_option('we_opts', $opts);
    wp_redirect(admin_url('admin.php?page=we_theme_opts&status=1'));
}
    