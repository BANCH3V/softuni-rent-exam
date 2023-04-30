<?php

/**
 * This functions take care of handling the assets with enqueue
 *
 * @return void
 */
function softuni_assets() {
    wp_enqueue_style( 'softuni-rent', get_stylesheet_directory_uri() . '/assets/css/master.css', array(), filemtime( get_template_directory() . '/assets/css/master.css') );
}
add_action( 'wp_enqueue_scripts', 'softuni_assets' );


/**
 * This function adds menu to the theme
 */
function softuni_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu Name', 'softuni-rent' ),
        'footer_menu'  => __( 'Footer Menu', 'softuni-rent' ),
    ) );
}
add_action( 'after_setup_theme', 'softuni_register_nav_menu', 0 );