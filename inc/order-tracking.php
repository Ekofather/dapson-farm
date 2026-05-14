<?php
/**
 * Order Tracking System
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add tracking meta box to orders
 */
function annie_cakes_order_tracking_meta_box() {
    $screen = class_exists( '\Automattic\WooCommerce\Internal\DataStores\Orders\CustomOrdersTableController' )
        && wc_get_container()->get( \Automattic\WooCommerce\Internal\DataStores\Orders\CustomOrdersTableController::class )->custom_orders_table_usage_is_enabled()
        ? wc_get_page_screen_id( 'shop-order' )
        : 'shop_order';

    add_meta_box(
        'ac_order_tracking',
        __( 'Order Tracking', 'annie-cakes' ),
        'annie_cakes_order_tracking_callback',
        $screen,
        'side',
        'high'
    );
}
add_action( 'add_meta_boxes', 'annie_cakes_order_tracking_meta_box' );

function annie_cakes_order_tracking_callback( $post_or_order ) {
    $order_id = is_a( $post_or_order, 'WP_Post' ) ? $post_or_order->ID : $post_or_order->get_id();
    $order    = wc_get_order( $order_id );
    if ( ! $order ) {
        return;
    }

    wp_nonce_field( 'annie_tracking_meta', 'tracking_meta_nonce' );

    $tracking_number = $order->get_meta( '_tracking_number' );
    $tracking_notes  = $order->get_meta( '_tracking_notes' );
    ?>
    <p>
        <label><strong><?php esc_html_e( 'Tracking Number:', 'annie-cakes' ); ?></strong></label><br>
        <input type="text" name="tracking_number" value="<?php echo esc_attr( $tracking_number ); ?>" style="width: 100%;" placeholder="AC-<?php echo esc_attr( $order_id ); ?>">
    </p>
    <p>
        <label><strong><?php esc_html_e( 'Tracking Notes:', 'annie-cakes' ); ?></strong></label><br>
        <textarea name="tracking_notes" style="width: 100%;" rows="3"><?php echo esc_textarea( $tracking_notes ); ?></textarea>
    </p>
    <p class="description"><?php esc_html_e( 'Update the order status above to update the tracking progress.', 'annie-cakes' ); ?></p>
    <?php
}

/**
 * Save tracking meta
 */
function annie_cakes_save_tracking_meta( $order_id ) {
    if ( ! isset( $_POST['tracking_meta_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['tracking_meta_nonce'] ) ), 'annie_tracking_meta' ) ) {
        return;
    }

    $order = wc_get_order( $order_id );
    if ( ! $order ) {
        return;
    }

    if ( isset( $_POST['tracking_number'] ) ) {
        $order->update_meta_data( '_tracking_number', sanitize_text_field( wp_unslash( $_POST['tracking_number'] ) ) );
    }
    if ( isset( $_POST['tracking_notes'] ) ) {
        $order->update_meta_data( '_tracking_notes', sanitize_textarea_field( wp_unslash( $_POST['tracking_notes'] ) ) );
    }
    $order->save();
}
add_action( 'woocommerce_process_shop_order_meta', 'annie_cakes_save_tracking_meta' );

/**
 * Send tracking notification on status change
 */
function annie_cakes_order_status_notification( $order_id, $old_status, $new_status, $order ) {
    $status_messages = array(
        'processing'   => __( 'Your order #%s is being processed!', 'annie-cakes' ),
        'baking'       => __( 'Your order #%s is now in the oven! Your cake is being baked with love.', 'annie-cakes' ),
        'out-delivery' => __( 'Your order #%s is out for delivery! It\'s on its way to you.', 'annie-cakes' ),
        'completed'    => __( 'Your order #%s has been delivered! We hope you love it. Enjoy!', 'annie-cakes' ),
    );

    if ( isset( $status_messages[ $new_status ] ) ) {
        $message = sprintf( $status_messages[ $new_status ], $order_id );
        $to      = $order->get_billing_email();
        $subject = sprintf( __( 'Order #%s Status Update - Annie Cakes & Gift', 'annie-cakes' ), $order_id );
        $body    = '<div style="font-family: Poppins, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;">';
        $body   .= '<h1 style="color: #ff4fa3; text-align: center;">Annie Cakes & Gift</h1>';
        $body   .= '<p>' . esc_html( $message ) . '</p>';
        $body   .= '<p><a href="' . esc_url( home_url( '/order-tracking/' ) ) . '" style="background: #ff4fa3; color: white; padding: 12px 24px; text-decoration: none; border-radius: 25px; display: inline-block;">Track Your Order</a></p>';
        $body   .= '</div>';

        $headers = array( 'Content-Type: text/html; charset=UTF-8' );
        wp_mail( $to, $subject, $body, $headers );
    }
}
add_action( 'woocommerce_order_status_changed', 'annie_cakes_order_status_notification', 10, 4 );
