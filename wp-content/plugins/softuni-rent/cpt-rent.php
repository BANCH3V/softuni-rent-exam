<?php
/**
 * Register a custom post type called "rent".
 *
 * @see get_post_type_labels() for label keys.
 */
function softuni_rent_cpt() {
	$labels = array(
		'name'                  => _x( 'Houses', 'Post type general name', 'softuni-rent' ),
		'singular_name'         => _x( 'House', 'Post type singular name', 'softuni-rent' ),
		'menu_name'             => _x( 'Houses', 'Admin Menu text', 'softuni-rent' ),
		'name_admin_bar'        => _x( 'House', 'Add New on Toolbar', 'softuni-rent' ),
		'add_new'               => __( 'Add New', 'softuni-rent' ),
		'add_new_item'          => __( 'Add New House', 'softuni-rent' ),
		'new_item'              => __( 'New House', 'softuni-rent' ),
		'edit_item'             => __( 'Edit House', 'softuni-rent' ),
		'view_item'             => __( 'View House', 'softuni-rent' ),
		'all_items'             => __( 'All Houses', 'softuni-rent' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'rent' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' ),
        'show_in_rest'       => true
	);

	register_post_type( 'rent', $args );

}
add_action( 'init', 'softuni_rent_cpt' );



/**
 * Register a 'size' taxonomy for post type 'rent', with a rewrite to match book CPT slug.
 *
 * @see register_post_type for registering post types.
 */
function softuni_rent_size_taxonomy() {
    $labels = array(
		'name'              => _x( 'Size', 'taxonomy general name', 'softuni-rent' ),
		'singular_name'     => _x( 'Size', 'taxonomy singular name', 'softuni-rent' ),
		'search_items'      => __( 'Search Size', 'softuni-rent' ),
		'all_items'         => __( 'All Size', 'softuni-rent' ),
		'parent_item'       => __( 'Parent Size', 'softuni-rent' ),
		'parent_item_colon' => __( 'Parent Size:', 'softuni-rent' ),
		'edit_item'         => __( 'Edit Size', 'softuni-rent' ),
		'update_item'       => __( 'Update Size', 'softuni-rent' ),
		'add_new_item'      => __( 'Add New Size', 'softuni-rent' ),
		'new_item_name'     => __( 'New Size Name', 'softuni-rent' ),
		'menu_name'         => __( 'Size', 'softuni-rent' ),
	);

    $args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
        'show_in_rest'      => true
	);


    register_taxonomy( 'size', 'rent', $args );
}
add_action( 'init', 'softuni_rent_size_taxonomy' );