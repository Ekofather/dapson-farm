<?php
/**
 * AJAX Handlers
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * AJAX Add to Cart
 */
function annie_cakes_ajax_add_to_cart() {
    check_ajax_referer( 'annie_cakes_nonce', 'nonce' );

    $product_id = isset( $_POST['product_id'] ) ? absint( $_POST['product_id'] ) : 0;
    $quantity   = isset( $_POST['quantity'] ) ? absint( $_POST['quantity'] ) : 1;

    if ( ! $product_id ) {
        wp_send_json_error( array( 'message' => __( 'Invalid product.', 'annie-cakes' ) ) );
    }

    $added = WC()->cart->add_to_cart( $product_id, $quantity );

    if ( $added ) {
        $count    = WC()->cart->get_cart_contents_count();
        $subtotal = WC()->cart->get_cart_subtotal();
        wp_send_json_success( array(
            'message'  => __( 'Added to cart!', 'annie-cakes' ),
            'count'    => $count,
            'subtotal' => $subtotal,
        ) );
    } else {
        wp_send_json_error( array( 'message' => __( 'Could not add to cart.', 'annie-cakes' ) ) );
    }
}
add_action( 'wp_ajax_annie_add_to_cart', 'annie_cakes_ajax_add_to_cart' );
add_action( 'wp_ajax_nopriv_annie_add_to_cart', 'annie_cakes_ajax_add_to_cart' );

/**
 * AJAX Quick View
 */
function annie_cakes_ajax_quick_view() {
    check_ajax_referer( 'annie_cakes_nonce', 'nonce' );

    $product_id = isset( $_POST['product_id'] ) ? absint( $_POST['product_id'] ) : 0;
    if ( ! $product_id ) {
        wp_send_json_error();
    }

    $product = wc_get_product( $product_id );
    if ( ! $product ) {
        wp_send_json_error();
    }

    ob_start();
    ?>
    <div class="ac-quick-view-grid">
        <div class="ac-quick-view-images">
            <?php echo wp_kses_post( $product->get_image( 'large' ) ); ?>
        </div>
        <div class="ac-quick-view-info">
            <h2><?php echo esc_html( $product->get_name() ); ?></h2>
            <div class="ac-product-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
            <div class="ac-product-rating">
                <?php echo wp_kses_post( wc_get_rating_html( $product->get_average_rating(), $product->get_review_count() ) ); ?>
                <span>(<?php echo esc_html( $product->get_review_count() ); ?> <?php esc_html_e( 'reviews', 'annie-cakes' ); ?>)</span>
            </div>
            <div class="ac-quick-view-desc">
                <?php echo wp_kses_post( wpautop( $product->get_short_description() ) ); ?>
            </div>
            <?php if ( $product->is_in_stock() ) : ?>
                <div class="ac-quick-view-actions">
                    <div class="ac-qty-wrap">
                        <button class="ac-qty-btn ac-qty-minus">-</button>
                        <input type="number" class="ac-qty-input" value="1" min="1" max="<?php echo esc_attr( $product->get_stock_quantity() ?: 99 ); ?>">
                        <button class="ac-qty-btn ac-qty-plus">+</button>
                    </div>
                    <button class="ac-btn ac-btn-primary ac-ajax-add-to-cart" data-product-id="<?php echo esc_attr( $product_id ); ?>">
                        <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Add to Cart', 'annie-cakes' ); ?>
                    </button>
                </div>
            <?php else : ?>
                <p class="ac-out-of-stock"><?php esc_html_e( 'Out of Stock', 'annie-cakes' ); ?></p>
            <?php endif; ?>
            <a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="ac-btn ac-btn-outline">
                <?php esc_html_e( 'View Full Details', 'annie-cakes' ); ?> <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
    <?php
    $html = ob_get_clean();
    wp_send_json_success( array( 'html' => $html ) );
}
add_action( 'wp_ajax_annie_quick_view', 'annie_cakes_ajax_quick_view' );
add_action( 'wp_ajax_nopriv_annie_quick_view', 'annie_cakes_ajax_quick_view' );

/**
 * AJAX Live Search
 */
function annie_cakes_ajax_live_search() {
    check_ajax_referer( 'annie_cakes_nonce', 'nonce' );

    $query = isset( $_POST['query'] ) ? sanitize_text_field( wp_unslash( $_POST['query'] ) ) : '';
    if ( strlen( $query ) < 2 ) {
        wp_send_json_success( array( 'html' => '' ) );
    }

    $products = new WP_Query( array(
        'post_type'      => 'product',
        'posts_per_page' => 6,
        's'              => $query,
    ) );

    ob_start();
    if ( $products->have_posts() ) {
        while ( $products->have_posts() ) {
            $products->the_post();
            $product = wc_get_product( get_the_ID() );
            ?>
            <a href="<?php the_permalink(); ?>" class="ac-search-result-item">
                <div class="ac-search-result-img"><?php echo wp_kses_post( $product->get_image( 'thumbnail' ) ); ?></div>
                <div class="ac-search-result-info">
                    <h4><?php the_title(); ?></h4>
                    <span class="ac-search-result-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
                </div>
            </a>
            <?php
        }
        wp_reset_postdata();
    } else {
        echo '<p class="ac-search-no-results">' . esc_html__( 'No products found.', 'annie-cakes' ) . '</p>';
    }
    $html = ob_get_clean();

    wp_send_json_success( array( 'html' => $html ) );
}
add_action( 'wp_ajax_annie_live_search', 'annie_cakes_ajax_live_search' );
add_action( 'wp_ajax_nopriv_annie_live_search', 'annie_cakes_ajax_live_search' );

/**
 * AJAX Contact Form
 */
function annie_cakes_ajax_contact() {
    check_ajax_referer( 'annie_contact', 'contact_nonce' );

    $name    = isset( $_POST['name'] ) ? sanitize_text_field( wp_unslash( $_POST['name'] ) ) : '';
    $email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $phone   = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
    $subject = isset( $_POST['subject'] ) ? sanitize_text_field( wp_unslash( $_POST['subject'] ) ) : '';
    $message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

    if ( ! $name || ! $email || ! $message ) {
        wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'annie-cakes' ) ) );
    }

    $to      = get_option( 'admin_email' );
    $headers = array( 'Content-Type: text/html; charset=UTF-8', 'Reply-To: ' . $name . ' <' . $email . '>' );
    $body    = sprintf(
        '<h2>New Contact Form Submission</h2><p><strong>Name:</strong> %s</p><p><strong>Email:</strong> %s</p><p><strong>Phone:</strong> %s</p><p><strong>Subject:</strong> %s</p><p><strong>Message:</strong></p><p>%s</p>',
        esc_html( $name ),
        esc_html( $email ),
        esc_html( $phone ),
        esc_html( $subject ),
        nl2br( esc_html( $message ) )
    );

    $sent = wp_mail( $to, 'Contact Form: ' . $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => __( 'Message sent successfully! We\'ll get back to you soon.', 'annie-cakes' ) ) );
    } else {
        wp_send_json_error( array( 'message' => __( 'Failed to send message. Please try again or contact us directly.', 'annie-cakes' ) ) );
    }
}
add_action( 'wp_ajax_annie_contact', 'annie_cakes_ajax_contact' );
add_action( 'wp_ajax_nopriv_annie_contact', 'annie_cakes_ajax_contact' );

/**
 * AJAX Newsletter
 */
function annie_cakes_ajax_newsletter() {
    check_ajax_referer( 'annie_newsletter', 'newsletter_nonce' );

    $email = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    if ( ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'annie-cakes' ) ) );
    }

    $subscribers = get_option( 'annie_newsletter_subscribers', array() );
    if ( in_array( $email, $subscribers, true ) ) {
        wp_send_json_error( array( 'message' => __( 'You\'re already subscribed!', 'annie-cakes' ) ) );
    }

    $subscribers[] = $email;
    update_option( 'annie_newsletter_subscribers', $subscribers );

    wp_send_json_success( array( 'message' => __( 'Thank you for subscribing! Sweet surprises await.', 'annie-cakes' ) ) );
}
add_action( 'wp_ajax_annie_newsletter', 'annie_cakes_ajax_newsletter' );
add_action( 'wp_ajax_nopriv_annie_newsletter', 'annie_cakes_ajax_newsletter' );

/**
 * AJAX Order Tracking
 */
function annie_cakes_ajax_track_order() {
    check_ajax_referer( 'annie_tracking', 'tracking_nonce' );

    $tracking_id = isset( $_POST['tracking_id'] ) ? sanitize_text_field( wp_unslash( $_POST['tracking_id'] ) ) : '';
    $contact     = isset( $_POST['tracking_contact'] ) ? sanitize_text_field( wp_unslash( $_POST['tracking_contact'] ) ) : '';

    if ( ! $tracking_id || ! $contact ) {
        wp_send_json_error( array( 'message' => __( 'Please fill in all fields.', 'annie-cakes' ) ) );
    }

    $order_id = absint( str_replace( array( 'AC-', 'ac-', '#' ), '', $tracking_id ) );
    $order    = wc_get_order( $order_id );

    if ( ! $order ) {
        wp_send_json_error( array( 'message' => __( 'Order not found. Please check your order ID.', 'annie-cakes' ) ) );
    }

    $order_email = $order->get_billing_email();
    $order_phone = $order->get_billing_phone();

    if ( strtolower( $contact ) !== strtolower( $order_email ) && $contact !== $order_phone ) {
        wp_send_json_error( array( 'message' => __( 'Contact information does not match our records.', 'annie-cakes' ) ) );
    }

    $status_map = array(
        'pending'      => 'pending',
        'processing'   => 'processing',
        'baking'       => 'baking',
        'out-delivery' => 'out_for_delivery',
        'completed'    => 'delivered',
        'on-hold'      => 'pending',
    );

    $current_status = $order->get_status();
    $mapped_status  = isset( $status_map[ $current_status ] ) ? $status_map[ $current_status ] : 'pending';

    wp_send_json_success( array(
        'order_id' => 'AC-' . $order_id,
        'status'   => $mapped_status,
        'date'     => $order->get_date_created()->date( 'M d, Y' ),
        'eta'      => wp_date( 'M d, Y', strtotime( $order->get_date_created()->date( 'Y-m-d' ) . ' +3 days' ) ),
    ) );
}
add_action( 'wp_ajax_annie_track_order', 'annie_cakes_ajax_track_order' );
add_action( 'wp_ajax_nopriv_annie_track_order', 'annie_cakes_ajax_track_order' );
