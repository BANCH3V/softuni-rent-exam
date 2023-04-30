<?php

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