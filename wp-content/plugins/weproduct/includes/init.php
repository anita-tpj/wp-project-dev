<?php
function weproduct_init() {
    $labels = array(
		'name'               => __( 'Products', 'we-product' ),
		'singular_name'      => __( 'Product', 'we-product' ),
		'menu_name'          => __( 'Products', 'we-product' ),
		'name_admin_bar'     => __( 'Product', 'we-product' ),
		'add_new'            => __( 'Add New', 'we-product' ),
		'add_new_item'       => __( 'Add New Product', 'we-product' ),
		'new_item'           => __( 'New Product', 'we-product' ),
		'edit_item'          => __( 'Edit Product', 'we-product' ),
		'view_item'          => __( 'View Product', 'we-product' ),
		'all_items'          => __( 'All Products', 'we-product' ),
		'search_items'       => __( 'Search Products', 'we-product' ),
		'parent_item_colon'  => __( 'Parent Products:', 'we-product' ),
		'not_found'          => __( 'No Products found.', 'we-product' ),
		'not_found_in_trash' => __( 'No Products found in Trash.', 'we-product' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'A custom post type for products', 'we-product' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'taxonomies'         => array('category', 'post_tag')   
	);

	register_post_type( 'weproduct', $args );
}