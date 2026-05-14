<?php
/**
 * Custom Order System
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * AJAX Handle Custom Order Submission
 */
function annie_cakes_ajax_custom_order() {
    check_ajax_referer( 'annie_custom_order', 'custom_order_nonce' );

    $name     = isset( $_POST['customer_name'] ) ? sanitize_text_field( wp_unslash( $_POST['customer_name'] ) ) : '';
    $email    = isset( $_POST['customer_email'] ) ? sanitize_email( wp_unslash( $_POST['customer_email'] ) ) : '';
    $phone    = isset( $_POST['customer_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['customer_phone'] ) ) : '';
    $type     = isset( $_POST['order_type'] ) ? sanitize_text_field( wp_unslash( $_POST['order_type'] ) ) : '';
    $size     = isset( $_POST['cake_size'] ) ? sanitize_text_field( wp_unslash( $_POST['cake_size'] ) ) : '';
    $flavour  = isset( $_POST['flavour'] ) ? sanitize_text_field( wp_unslash( $_POST['flavour'] ) ) : '';
    $colour   = isset( $_POST['colour_theme'] ) ? sanitize_text_field( wp_unslash( $_POST['colour_theme'] ) ) : '';
    $delivery = isset( $_POST['delivery_option'] ) ? sanitize_text_field( wp_unslash( $_POST['delivery_option'] ) ) : '';
    $date     = isset( $_POST['delivery_date'] ) ? sanitize_text_field( wp_unslash( $_POST['delivery_date'] ) ) : '';
    $address  = isset( $_POST['delivery_address'] ) ? sanitize_textarea_field( wp_unslash( $_POST['delivery_address'] ) ) : '';
    $notes    = isset( $_POST['special_notes'] ) ? sanitize_textarea_field( wp_unslash( $_POST['special_notes'] ) ) : '';
    $budget   = isset( $_POST['budget'] ) ? sanitize_text_field( wp_unslash( $_POST['budget'] ) ) : '';

    if ( ! $name || ! $email || ! $phone || ! $type ) {
        wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'annie-cakes' ) ) );
    }

    $post_id = wp_insert_post( array(
        'post_type'   => 'ac_custom_order',
        'post_title'  => sprintf( '%s - %s (%s)', $name, str_replace( '_', ' ', $type ), $date ),
        'post_status' => 'publish',
    ) );

    if ( is_wp_error( $post_id ) ) {
        wp_send_json_error( array( 'message' => __( 'Error submitting order. Please try again.', 'annie-cakes' ) ) );
    }

    $meta = array(
        '_co_name'     => $name,
        '_co_email'    => $email,
        '_co_phone'    => $phone,
        '_co_type'     => $type,
        '_co_size'     => $size,
        '_co_flavour'  => $flavour,
        '_co_colour'   => $colour,
        '_co_delivery' => $delivery,
        '_co_date'     => $date,
        '_co_address'  => $address,
        '_co_notes'    => $notes,
        '_co_budget'   => $budget,
        '_co_status'   => 'pending',
    );

    foreach ( $meta as $key => $value ) {
        update_post_meta( $post_id, $key, $value );
    }

    // Handle file upload
    if ( ! empty( $_FILES['inspiration_image']['name'] ) ) {
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/media.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        $attachment_id = media_handle_upload( 'inspiration_image', $post_id );
        if ( ! is_wp_error( $attachment_id ) ) {
            update_post_meta( $post_id, '_co_image', $attachment_id );
            set_post_thumbnail( $post_id, $attachment_id );
        }
    }

    // Send admin notification
    $admin_email = get_option( 'admin_email' );
    $subject     = sprintf( __( 'New Custom Order Request: %s', 'annie-cakes' ), str_replace( '_', ' ', $type ) );
    $body        = sprintf(
        '<h2>New Custom Order Request</h2>
        <p><strong>Customer:</strong> %s</p>
        <p><strong>Email:</strong> %s</p>
        <p><strong>Phone:</strong> %s</p>
        <p><strong>Order Type:</strong> %s</p>
        <p><strong>Size:</strong> %s</p>
        <p><strong>Flavour:</strong> %s</p>
        <p><strong>Colour/Theme:</strong> %s</p>
        <p><strong>Delivery:</strong> %s</p>
        <p><strong>Date:</strong> %s</p>
        <p><strong>Budget:</strong> %s</p>
        <p><strong>Notes:</strong> %s</p>
        <p><a href="%s">View in Dashboard</a></p>',
        esc_html( $name ),
        esc_html( $email ),
        esc_html( $phone ),
        esc_html( str_replace( '_', ' ', $type ) ),
        esc_html( $size ),
        esc_html( $flavour ),
        esc_html( $colour ),
        esc_html( $delivery ),
        esc_html( $date ),
        esc_html( $budget ),
        nl2br( esc_html( $notes ) ),
        esc_url( admin_url( 'post.php?post=' . $post_id . '&action=edit' ) )
    );

    wp_mail( $admin_email, $subject, $body, array( 'Content-Type: text/html; charset=UTF-8' ) );

    wp_send_json_success( array(
        'message'  => __( 'Your custom order request has been submitted! We\'ll get back to you within 2 hours with a quote.', 'annie-cakes' ),
        'order_id' => $post_id,
    ) );
}
add_action( 'wp_ajax_annie_custom_order', 'annie_cakes_ajax_custom_order' );
add_action( 'wp_ajax_nopriv_annie_custom_order', 'annie_cakes_ajax_custom_order' );

/**
 * Custom Order Admin Columns
 */
function annie_cakes_custom_order_columns( $columns ) {
    $columns = array(
        'cb'       => '<input type="checkbox" />',
        'title'    => __( 'Order', 'annie-cakes' ),
        'customer' => __( 'Customer', 'annie-cakes' ),
        'type'     => __( 'Type', 'annie-cakes' ),
        'date_req' => __( 'Required Date', 'annie-cakes' ),
        'status'   => __( 'Status', 'annie-cakes' ),
        'date'     => __( 'Submitted', 'annie-cakes' ),
    );
    return $columns;
}
add_filter( 'manage_ac_custom_order_posts_columns', 'annie_cakes_custom_order_columns' );

function annie_cakes_custom_order_column_data( $column, $post_id ) {
    switch ( $column ) {
        case 'customer':
            echo esc_html( get_post_meta( $post_id, '_co_name', true ) );
            break;
        case 'type':
            echo esc_html( ucwords( str_replace( '_', ' ', get_post_meta( $post_id, '_co_type', true ) ) ) );
            break;
        case 'date_req':
            echo esc_html( get_post_meta( $post_id, '_co_date', true ) );
            break;
        case 'status':
            $status = get_post_meta( $post_id, '_co_status', true ) ?: 'pending';
            $labels = array(
                'pending'  => '<span class="ac-status ac-status-pending">Pending</span>',
                'quoted'   => '<span class="ac-status ac-status-quoted">Quoted</span>',
                'accepted' => '<span class="ac-status ac-status-accepted">Accepted</span>',
                'declined' => '<span class="ac-status ac-status-declined">Declined</span>',
            );
            echo wp_kses_post( $labels[ $status ] ?? $labels['pending'] );
            break;
    }
}
add_action( 'manage_ac_custom_order_posts_custom_column', 'annie_cakes_custom_order_column_data', 10, 2 );

/**
 * Custom Order Meta Box in Admin
 */
function annie_cakes_custom_order_meta_boxes() {
    add_meta_box( 'ac_custom_order_details', __( 'Order Details', 'annie-cakes' ), 'annie_cakes_custom_order_details_callback', 'ac_custom_order', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'annie_cakes_custom_order_meta_boxes' );

function annie_cakes_custom_order_details_callback( $post ) {
    $fields = array(
        '_co_name'     => __( 'Customer Name', 'annie-cakes' ),
        '_co_email'    => __( 'Email', 'annie-cakes' ),
        '_co_phone'    => __( 'Phone', 'annie-cakes' ),
        '_co_type'     => __( 'Order Type', 'annie-cakes' ),
        '_co_size'     => __( 'Cake Size', 'annie-cakes' ),
        '_co_flavour'  => __( 'Flavour', 'annie-cakes' ),
        '_co_colour'   => __( 'Colour/Theme', 'annie-cakes' ),
        '_co_delivery' => __( 'Delivery Option', 'annie-cakes' ),
        '_co_date'     => __( 'Required Date', 'annie-cakes' ),
        '_co_address'  => __( 'Delivery Address', 'annie-cakes' ),
        '_co_budget'   => __( 'Budget', 'annie-cakes' ),
        '_co_notes'    => __( 'Special Notes', 'annie-cakes' ),
    );

    echo '<table class="form-table">';
    foreach ( $fields as $key => $label ) {
        $value = get_post_meta( $post->ID, $key, true );
        echo '<tr><th>' . esc_html( $label ) . '</th><td>' . esc_html( $value ) . '</td></tr>';
    }

    $image_id = get_post_meta( $post->ID, '_co_image', true );
    if ( $image_id ) {
        echo '<tr><th>' . esc_html__( 'Inspiration Image', 'annie-cakes' ) . '</th><td>' . wp_get_attachment_image( $image_id, 'medium' ) . '</td></tr>';
    }

    $status = get_post_meta( $post->ID, '_co_status', true ) ?: 'pending';
    echo '<tr><th>' . esc_html__( 'Status', 'annie-cakes' ) . '</th><td>';
    echo '<select name="co_status">';
    $statuses = array( 'pending' => 'Pending', 'quoted' => 'Quoted', 'accepted' => 'Accepted', 'declined' => 'Declined' );
    foreach ( $statuses as $val => $lbl ) {
        printf( '<option value="%s" %s>%s</option>', esc_attr( $val ), selected( $status, $val, false ), esc_html( $lbl ) );
    }
    echo '</select></td></tr>';
    echo '</table>';
}

function annie_cakes_save_custom_order_meta( $post_id ) {
    if ( isset( $_POST['co_status'] ) ) {
        update_post_meta( $post_id, '_co_status', sanitize_text_field( wp_unslash( $_POST['co_status'] ) ) );
    }
}
add_action( 'save_post_ac_custom_order', 'annie_cakes_save_custom_order_meta' );
