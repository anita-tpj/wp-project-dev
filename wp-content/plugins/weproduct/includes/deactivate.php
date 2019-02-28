<?php
function wep_deactivate_plugin() {
    wp_clear_scheduled_hook('wep_daily_product_hook');
}