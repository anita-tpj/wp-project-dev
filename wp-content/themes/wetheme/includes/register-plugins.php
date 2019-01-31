<?php
function we_register_required_plugins() {
    $plugins = array(array(
        'name'          => 'Contact Form 7',
        'slug'          => 'contact-form-7',
        'required'      => true
    ));

    $config = array(
        'id'           => 'we_tgmpa',              // Unique ID for hashing notices for multiple instances of TGMPA.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
    );

    tgmpa($plugins, $config);
}