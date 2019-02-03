<?php
function weproduct_init() {
    $labels = array(
		'name'               => __( 'Products', 'weproduct' ),
		'singular_name'      => __( 'Product', 'weproduct' ),
		'menu_name'          => __( 'Products', 'weproduct' ),
		'name_admin_bar'     => __( 'Product', 'weproduct' ),
		'add_new'            => __( 'Add New', 'weproduct' ),
		'add_new_item'       => __( 'Add New Product', 'weproduct' ),
		'new_item'           => __( 'New Product', 'weproduct' ),
		'edit_item'          => __( 'Edit Product', 'weproduct' ),
		'view_item'          => __( 'View Product', 'weproduct' ),
		'all_items'          => __( 'All Products', 'weproduct' ),
		'search_items'       => __( 'Search Products', 'weproduct' ),
		'parent_item_colon'  => __( 'Parent Products:', 'weproduct' ),
		'not_found'          => __( 'No Products found.', 'weproduct' ),
		'not_found_in_trash' => __( 'No Products found in Trash.', 'weproduct' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'A custom post type for products', 'weproduct' ),
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