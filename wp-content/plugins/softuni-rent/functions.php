<?php

/**
 * Rent Enqueue
 */
function softuni_enqueue_scripts() {
	wp_enqueue_script( 'softuni-script', plugins_url( 'assets/scripts/scripts.js', __FILE__ ), array( 'jquery' ), 1.1 );
	wp_localize_script( 'softuni-script', 'my_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'softuni_enqueue_scripts' );

/**
 * Functions takes care of the like of the rent
 *
 * @return void
 */
function softuni_rent_like() {
	$rent_id = esc_attr( $_POST['rent_id'] );

	$like_number = get_post_meta( $rent_id, 'likes', true );

    if ( empty( $like_number ) ) {
        update_post_meta( $rent_id, 'likes', 1 );
    } else {
        $like_number = $like_number + 1;
        update_post_meta( $rent_id, 'likes', $like_number );
    }

    wp_die();
}
add_action( 'wp_ajax_nopriv_softuni_rent_like', 'softuni_rent_like' );
add_action( 'wp_ajax_softuni_rent_like', 'softuni_rent_like' );




/**
 * this function update rent post meta for the views count
 */

function softuni_update_rent_views_count( $post_id = 0 ) {
    if ( empty( $post_id ) ) {
        return;
    }  

    $view_count = get_post_meta( $post_id, 'views_count', true );
    
    if ( ! empty( $view_count ) ) {
        $view_count = $view_count + 1; 

        update_post_meta( $post_id, 'views_count', $view_count );
    } else {
        $view_count = 1;

        update_post_meta( $post_id, 'views_count', 1 );
    }
}