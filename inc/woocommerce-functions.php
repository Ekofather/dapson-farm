<?php
/**
 * WooCommerce Functions & Overrides
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! class_exists( 'WooCommerce' ) ) {
    return;
}

/**
 * Remove default WooCommerce wrappers
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

function annie_cakes_wc_wrapper_start() {
    echo '<section class="ac-section ac-wc-section"><div class="ac-container">';
}
add_action( 'woocommerce_before_main_content', 'annie_cakes_wc_wrapper_start' );

function annie_cakes_wc_wrapper_end() {
    echo '</div></section>';
}
add_action( 'woocommerce_after_main_content', 'annie_cakes_wc_wrapper_end' );

/**
 * Products per page
 */
function annie_cakes_products_per_page() {
    return 12;
}
add_filter( 'loop_shop_per_page', 'annie_cakes_products_per_page' );

/**
 * Product columns
 */
function annie_cakes_shop_columns() {
    return 4;
}
add_filter( 'loop_shop_columns', 'annie_cakes_shop_columns' );

/**
 * Related products
 */
function annie_cakes_related_products( $args ) {
    $args['posts_per_page'] = 4;
    $args['columns']        = 4;
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'annie_cakes_related_products' );

/**
 * Remove default product thumbnail
 */
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

/**
 * Custom product loop template
 */
function annie_cakes_custom_product_loop() {
    get_template_part( 'template-parts/product', 'card' );
}
add_action( 'woocommerce_before_shop_loop_item', 'annie_cakes_custom_product_loop' );

/**
 * Single Product: share buttons
 */
function annie_cakes_product_share() {
    global $product;
    ?>
    <div class="ac-product-share">
        <h4><?php esc_html_e( 'Share:', 'annie-cakes' ); ?></h4>
        <div class="ac-share-buttons">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" class="ac-share-fb"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/intent/tweet?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php echo esc_attr( $product->get_name() ); ?>" target="_blank" rel="noopener" class="ac-share-tw"><i class="fab fa-twitter"></i></a>
            <a href="https://wa.me/?text=<?php echo esc_url( get_permalink() ); ?>" target="_blank" rel="noopener" class="ac-share-wa"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.pinterest.com/pin/create/button/?url=<?php echo esc_url( get_permalink() ); ?>&media=<?php echo esc_url( wp_get_attachment_url( $product->get_image_id() ) ); ?>" target="_blank" rel="noopener" class="ac-share-pin"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
    <?php
}
add_action( 'woocommerce_single_product_summary', 'annie_cakes_product_share', 50 );

/**
 * Single Product: wishlist button
 */
function annie_cakes_single_wishlist_button() {
    global $product;
    $in_wishlist = annie_cakes_is_in_wishlist( $product->get_id() );
    ?>
    <button class="ac-btn ac-btn-outline ac-wishlist-btn ac-single-wishlist" data-product-id="<?php echo esc_attr( $product->get_id() ); ?>">
        <i class="<?php echo $in_wishlist ? 'fas' : 'far'; ?> fa-heart"></i>
        <span><?php echo $in_wishlist ? esc_html__( 'In Wishlist', 'annie-cakes' ) : esc_html__( 'Add to Wishlist', 'annie-cakes' ); ?></span>
    </button>
    <?php
}
add_action( 'woocommerce_single_product_summary', 'annie_cakes_single_wishlist_button', 35 );

/**
 * WooCommerce breadcrumb
 */
function annie_cakes_wc_breadcrumb_defaults( $defaults ) {
    $defaults['delimiter']   = ' <span>/</span> ';
    $defaults['wrap_before'] = '<nav class="ac-breadcrumb">';
    $defaults['wrap_after']  = '</nav>';
    return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'annie_cakes_wc_breadcrumb_defaults' );

/**
 * Add custom order statuses for bakery workflow
 */
function annie_cakes_register_order_statuses() {
    register_post_status( 'wc-baking', array(
        'label'                     => _x( 'Baking', 'Order status', 'annie-cakes' ),
        'public'                    => true,
        'show_in_admin_status_list' => true,
        'show_in_admin_all_list'    => true,
        'exclude_from_search'       => false,
        'label_count'               => _n_noop( 'Baking <span class="count">(%s)</span>', 'Baking <span class="count">(%s)</span>', 'annie-cakes' ),
    ) );

    register_post_status( 'wc-out-delivery', array(
        'label'                     => _x( 'Out for Delivery', 'Order status', 'annie-cakes' ),
        'public'                    => true,
        'show_in_admin_status_list' => true,
        'show_in_admin_all_list'    => true,
        'exclude_from_search'       => false,
        'label_count'               => _n_noop( 'Out for Delivery <span class="count">(%s)</span>', 'Out for Delivery <span class="count">(%s)</span>', 'annie-cakes' ),
    ) );
}
add_action( 'init', 'annie_cakes_register_order_statuses' );

function annie_cakes_add_order_statuses( $order_statuses ) {
    $new_statuses = array();
    foreach ( $order_statuses as $key => $status ) {
        $new_statuses[ $key ] = $status;
        if ( 'wc-processing' === $key ) {
            $new_statuses['wc-baking']       = _x( 'Baking', 'Order status', 'annie-cakes' );
            $new_statuses['wc-out-delivery'] = _x( 'Out for Delivery', 'Order status', 'annie-cakes' );
        }
    }
    return $new_statuses;
}
add_filter( 'wc_order_statuses', 'annie_cakes_add_order_statuses' );
