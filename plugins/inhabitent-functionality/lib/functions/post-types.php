<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 

// Add your custom post types here...
// Register Custom Post Type
function inhabitent_products_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'inhabitent_text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'inhabitent_text_domain' ),
		'menu_name'             => __( 'Products', 'inhabitent_text_domain' ),
		'name_admin_bar'        => __( 'Products', 'inhabitent_text_domain' ),
		'archives'              => __( 'Archived Products', 'inhabitent_text_domain' ),
		'attributes'            => __( 'Product Attributes', 'inhabitent_text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'inhabitent_text_domain' ),
		'all_items'             => __( 'All Products', 'inhabitent_text_domain' ),
		'add_new_item'          => __( 'Add a Product', 'inhabitent_text_domain' ),
		'add_new'               => __( 'Add New Product', 'inhabitent_text_domain' ),
		'new_item'              => __( 'New Product', 'inhabitent_text_domain' ),
		'edit_item'             => __( 'Edit Product', 'inhabitent_text_domain' ),
		'update_item'           => __( 'Update Product', 'inhabitent_text_domain' ),
		'view_item'             => __( 'View Product', 'inhabitent_text_domain' ),
		'view_items'            => __( 'View Products', 'inhabitent_text_domain' ),
		'search_items'          => __( 'Search Product', 'inhabitent_text_domain' ),
		'not_found'             => __( 'Not found', 'inhabitent_text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent_text_domain' ),
		'featured_image'        => __( 'Main Product Image', 'inhabitent_text_domain' ),
		'set_featured_image'    => __( 'Set main product image', 'inhabitent_text_domain' ),
		'remove_featured_image' => __( 'Remove main product image', 'inhabitent_text_domain' ),
		'use_featured_image'    => __( 'Use as main product image', 'inhabitent_text_domain' ),
		'insert_into_item'      => __( 'Insert into Product', 'inhabitent_text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Product', 'inhabitent_text_domain' ),
		'items_list'            => __( 'Products list', 'inhabitent_text_domain' ),
		'items_list_navigation' => __( 'Products list navigation', 'inhabitent_text_domain' ),
		'filter_items_list'     => __( 'Filter Products list', 'inhabitent_text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'inhabitent_text_domain' ),
		'description'           => __( 'Products', 'inhabitent_text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'product_type' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'inhabitent_products_post_type', 0 );

// Register Custom Post Type
function inhabitent_adventures_post_type() {

	$labels = array(
		'name'                  => _x( 'Adventures', 'Post Type General Name', 'inhabitent_text_domain' ),
		'singular_name'         => _x( 'Adventure', 'Post Type Singular Name', 'inhabitent_text_domain' ),
		'menu_name'             => __( 'Adventures', 'inhabitent_text_domain' ),
		'name_admin_bar'        => __( 'adventures', 'inhabitent_text_domain' ),
		'archives'              => __( 'Item Archives', 'inhabitent_text_domain' ),
		'attributes'            => __( 'Item Attributes', 'inhabitent_text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'inhabitent_text_domain' ),
		'all_items'             => __( 'All Items', 'inhabitent_text_domain' ),
		'add_new_item'          => __( 'Add New Item', 'inhabitent_text_domain' ),
		'add_new'               => __( 'Add New', 'inhabitent_text_domain' ),
		'new_item'              => __( 'New Item', 'inhabitent_text_domain' ),
		'edit_item'             => __( 'Edit Item', 'inhabitent_text_domain' ),
		'update_item'           => __( 'Update Item', 'inhabitent_text_domain' ),
		'view_item'             => __( 'View Item', 'inhabitent_text_domain' ),
		'view_items'            => __( 'View Items', 'inhabitent_text_domain' ),
		'search_items'          => __( 'Search Item', 'inhabitent_text_domain' ),
		'not_found'             => __( 'Not found', 'inhabitent_text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'inhabitent_text_domain' ),
		'featured_image'        => __( 'Featured Image', 'inhabitent_text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'inhabitent_text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'inhabitent_text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'inhabitent_text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'inhabitent_text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'inhabitent_text_domain' ),
		'items_list'            => __( 'Items list', 'inhabitent_text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'inhabitent_text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'inhabitent_text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Adventure', 'inhabitent_text_domain' ),
		'description'           => __( 'Adventures', 'inhabitent_text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-nametag',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'adventures', $args );

}
add_action( 'init', 'inhabitent_adventures_post_type', 0 );