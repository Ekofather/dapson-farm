<?php
/**
 * Wishlist System
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Get wishlist for current user/session
 */
function annie_cakes_get_wishlist() {
    if ( is_user_logged_in() ) {
        $wishlist = get_user_meta( get_current_user_id(), '_annie_wishlist', true );
    } else {
        $wishlist = isset( $_COOKIE['annie_wishlist'] ) ? json_decode( sanitize_text_field( wp_unslash( $_COOKIE['annie_wishlist'] ) ), true ) : array();
    }
    return is_array( $wishlist ) ? $wishlist : array();
}

/**
 * Get wishlist count
 */
function annie_cakes_get_wishlist_count() {
    return count( annie_cakes_get_wishlist() );
}

/**
 * Check if product is in wishlist
 */
function annie_cakes_is_in_wishlist( $product_id ) {
    $wishlist = annie_cakes_get_wishlist();
    return in_array( $product_id, $wishlist, true );
}

/**
 * AJAX Toggle Wishlist
 */
function annie_cakes_ajax_toggle_wishlist() {
    check_ajax_referer( 'annie_cakes_nonce', 'nonce' );

    $product_id = isset( $_POST['product_id'] ) ? absint( $_POST['product_id'] ) : 0;
    if ( ! $product_id ) {
        wp_send_json_error();
    }

    $wishlist = annie_cakes_get_wishlist();
    $key      = array_search( $product_id, $wishlist, true );

    if ( false !== $key ) {
        unset( $wishlist[ $key ] );
        $wishlist = array_values( $wishlist );
        $action   = 'removed';
        $message  = __( 'Removed from wishlist.', 'annie-cakes' );
    } else {
        $wishlist[] = $product_id;
        $action     = 'added';
        $message    = __( 'Added to wishlist!', 'annie-cakes' );
    }

    if ( is_user_logged_in() ) {
        update_user_meta( get_current_user_id(), '_annie_wishlist', $wishlist );
    }

    $cookie_value = wp_json_encode( $wishlist );
    setcookie( 'annie_wishlist', $cookie_value, time() + ( 30 * DAY_IN_SECONDS ), COOKIEPATH, COOKIE_DOMAIN, is_ssl(), true );

    wp_send_json_success( array(
        'action'  => $action,
        'count'   => count( $wishlist ),
        'message' => $message,
    ) );
}
add_action( 'wp_ajax_annie_toggle_wishlist', 'annie_cakes_ajax_toggle_wishlist' );
add_action( 'wp_ajax_nopriv_annie_toggle_wishlist', 'annie_cakes_ajax_toggle_wishlist' );

/**
 * Sync cookie wishlist to user meta on login
 */
function annie_cakes_sync_wishlist_on_login( $user_login, $user ) {
    if ( isset( $_COOKIE['annie_wishlist'] ) ) {
        $cookie_wishlist = json_decode( sanitize_text_field( wp_unslash( $_COOKIE['annie_wishlist'] ) ), true );
        if ( is_array( $cookie_wishlist ) && ! empty( $cookie_wishlist ) ) {
            $user_wishlist = get_user_meta( $user->ID, '_annie_wishlist', true );
            if ( ! is_array( $user_wishlist ) ) {
                $user_wishlist = array();
            }
            $merged = array_unique( array_merge( $user_wishlist, $cookie_wishlist ) );
            update_user_meta( $user->ID, '_annie_wishlist', $merged );
        }
    }
}
add_action( 'wp_login', 'annie_cakes_sync_wishlist_on_login', 10, 2 );
