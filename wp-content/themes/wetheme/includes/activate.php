<?php
function we_activate() {
   if(version_compare(get_bloginfo('version'), '5.0.3', '<'))  {
       wp_die(__('You must have a minimum version of 5.0.3 to use this theme'));
   }
}