<?php
/**
 * Template Name: Order Tracking
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Track Your Order', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Order Tracking', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Enter your details to check the status of your order', 'annie-cakes' ); ?></p>
    </div>
</section>

<section class="ac-section ac-tracking-section">
    <div class="ac-container ac-container-sm">
        <div class="ac-glass-card ac-tracking-form-card" data-aos="fade-up">
            <form class="ac-tracking-form" id="ac-tracking-form">
                <?php wp_nonce_field( 'annie_tracking', 'tracking_nonce' ); ?>
                <div class="ac-form-group">
                    <label for="tracking-id"><?php esc_html_e( 'Order ID / Tracking Number', 'annie-cakes' ); ?></label>
                    <input type="text" id="tracking-id" name="tracking_id" required placeholder="<?php esc_attr_e( 'e.g., AC-12345', 'annie-cakes' ); ?>">
                </div>
                <div class="ac-form-group">
                    <label for="tracking-email"><?php esc_html_e( 'Email or Phone Number', 'annie-cakes' ); ?></label>
                    <input type="text" id="tracking-email" name="tracking_contact" required placeholder="<?php esc_attr_e( 'Email or phone used for order', 'annie-cakes' ); ?>">
                </div>
                <button type="submit" class="ac-btn ac-btn-primary ac-btn-lg ac-btn-full">
                    <i class="fas fa-search"></i> <?php esc_html_e( 'Track Order', 'annie-cakes' ); ?>
                </button>
            </form>
        </div>

        <div class="ac-tracking-result" id="ac-tracking-result" style="display: none;" data-aos="fade-up">
            <div class="ac-glass-card">
                <div class="ac-tracking-header">
                    <h3><?php esc_html_e( 'Order Status', 'annie-cakes' ); ?></h3>
                    <span class="ac-tracking-order-id"></span>
                </div>

                <div class="ac-tracking-progress">
                    <div class="ac-tracking-step" data-step="pending">
                        <div class="ac-tracking-dot"></div>
                        <div class="ac-tracking-info">
                            <h4><?php esc_html_e( 'Order Placed', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Your order has been received', 'annie-cakes' ); ?></p>
                            <span class="ac-tracking-time"></span>
                        </div>
                    </div>
                    <div class="ac-tracking-step" data-step="processing">
                        <div class="ac-tracking-dot"></div>
                        <div class="ac-tracking-info">
                            <h4><?php esc_html_e( 'Processing', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'We\'re preparing your order', 'annie-cakes' ); ?></p>
                            <span class="ac-tracking-time"></span>
                        </div>
                    </div>
                    <div class="ac-tracking-step" data-step="baking">
                        <div class="ac-tracking-dot"></div>
                        <div class="ac-tracking-info">
                            <h4><?php esc_html_e( 'Baking', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Your cake is in the oven!', 'annie-cakes' ); ?></p>
                            <span class="ac-tracking-time"></span>
                        </div>
                    </div>
                    <div class="ac-tracking-step" data-step="out_for_delivery">
                        <div class="ac-tracking-dot"></div>
                        <div class="ac-tracking-info">
                            <h4><?php esc_html_e( 'Out for Delivery', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Your order is on its way', 'annie-cakes' ); ?></p>
                            <span class="ac-tracking-time"></span>
                        </div>
                    </div>
                    <div class="ac-tracking-step" data-step="delivered">
                        <div class="ac-tracking-dot"></div>
                        <div class="ac-tracking-info">
                            <h4><?php esc_html_e( 'Delivered', 'annie-cakes' ); ?></h4>
                            <p><?php esc_html_e( 'Order delivered successfully!', 'annie-cakes' ); ?></p>
                            <span class="ac-tracking-time"></span>
                        </div>
                    </div>
                </div>

                <div class="ac-tracking-details">
                    <div class="ac-tracking-detail-row">
                        <span><?php esc_html_e( 'Estimated Delivery:', 'annie-cakes' ); ?></span>
                        <span class="ac-tracking-eta"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
