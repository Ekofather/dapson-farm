<?php
/**
 * Template Name: Order Tracking
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Track Your Order', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Order Tracking', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Enter your tracking ID or order details to see real-time status updates.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'Order Tracking', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<section class="ac-section">
    <div class="ac-container" style="max-width:700px;">
        <!-- Tracking Form -->
        <div class="ac-tracking-form-wrap" data-aos="fade-up">
            <form id="ac-tracking-form" class="ac-tracking-form">
                <?php wp_nonce_field( 'annie_tracking', 'tracking_nonce' ); ?>
                <div class="ac-form-group">
                    <label for="tracking-id"><?php esc_html_e( 'Tracking ID / Order Number', 'annie-cakes' ); ?> *</label>
                    <input type="text" id="tracking-id" name="tracking_id" required placeholder="<?php esc_attr_e( 'e.g. AC-20240101-1234', 'annie-cakes' ); ?>">
                </div>
                <div class="ac-form-row">
                    <div class="ac-form-group">
                        <label for="tracking-email"><?php esc_html_e( 'Email Address', 'annie-cakes' ); ?></label>
                        <input type="email" id="tracking-email" name="email" placeholder="<?php esc_attr_e( 'your@email.com', 'annie-cakes' ); ?>">
                    </div>
                    <div class="ac-form-group">
                        <label for="tracking-phone"><?php esc_html_e( 'Phone Number', 'annie-cakes' ); ?></label>
                        <input type="tel" id="tracking-phone" name="phone" placeholder="<?php esc_attr_e( '+234 800 000 0000', 'annie-cakes' ); ?>">
                    </div>
                </div>
                <button type="submit" class="ac-btn ac-btn-primary ac-btn-lg" style="width:100%;">
                    <i class="fas fa-search"></i> <?php esc_html_e( 'Track Order', 'annie-cakes' ); ?>
                </button>
            </form>
        </div>

        <!-- Tracking Result -->
        <div class="ac-tracking-result" style="display:none;margin-top:40px;" data-aos="fade-up">
            <div style="text-align:center;margin-bottom:30px;">
                <h2 style="margin-bottom:5px;"><?php esc_html_e( 'Order Status', 'annie-cakes' ); ?></h2>
                <p style="color:var(--ac-text-light);"><?php esc_html_e( 'Order:', 'annie-cakes' ); ?> <strong class="ac-tracking-order-id">—</strong></p>
                <p style="color:var(--ac-text-light);"><?php esc_html_e( 'Estimated Delivery:', 'annie-cakes' ); ?> <strong class="ac-tracking-eta">—</strong></p>
            </div>
            <div class="ac-tracking-timeline">
                <div class="ac-tracking-step" data-step="0">
                    <div class="ac-tracking-step-icon"><i class="fas fa-receipt"></i></div>
                    <div class="ac-tracking-step-info">
                        <h4><?php esc_html_e( 'Order Confirmed', 'annie-cakes' ); ?></h4>
                        <p><?php esc_html_e( 'Your order has been received and confirmed. Payment verified.', 'annie-cakes' ); ?></p>
                    </div>
                </div>
                <div class="ac-tracking-step" data-step="1">
                    <div class="ac-tracking-step-icon"><i class="fas fa-cogs"></i></div>
                    <div class="ac-tracking-step-info">
                        <h4><?php esc_html_e( 'Processing', 'annie-cakes' ); ?></h4>
                        <p><?php esc_html_e( 'Our team is preparing your order. Ingredients gathered and ready.', 'annie-cakes' ); ?></p>
                    </div>
                </div>
                <div class="ac-tracking-step" data-step="2">
                    <div class="ac-tracking-step-icon"><i class="fas fa-birthday-cake"></i></div>
                    <div class="ac-tracking-step-info">
                        <h4><?php esc_html_e( 'Baking / Preparing', 'annie-cakes' ); ?></h4>
                        <p><?php esc_html_e( 'Your cake is being baked, decorated, and quality checked by our artisans.', 'annie-cakes' ); ?></p>
                    </div>
                </div>
                <div class="ac-tracking-step" data-step="3">
                    <div class="ac-tracking-step-icon"><i class="fas fa-truck"></i></div>
                    <div class="ac-tracking-step-info">
                        <h4><?php esc_html_e( 'Out for Delivery', 'annie-cakes' ); ?></h4>
                        <p><?php esc_html_e( 'Your order is on its way! Our delivery partner is en route to your location.', 'annie-cakes' ); ?></p>
                    </div>
                </div>
                <div class="ac-tracking-step" data-step="4">
                    <div class="ac-tracking-step-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="ac-tracking-step-info">
                        <h4><?php esc_html_e( 'Delivered', 'annie-cakes' ); ?></h4>
                        <p><?php esc_html_e( 'Your order has been successfully delivered. Enjoy your cake!', 'annie-cakes' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Info Section -->
<section class="ac-section" style="background:var(--ac-bg-alt);">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <h2><?php esc_html_e( 'How Our Tracking Works', 'annie-cakes' ); ?></h2>
        </div>
        <div class="ac-why-grid">
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-why-icon"><i class="fas fa-sms"></i></div>
                <h3><?php esc_html_e( 'SMS Updates', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Receive automatic SMS notifications at every stage of your order — from confirmation to delivery. Stay informed without checking the website.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-why-icon"><i class="fas fa-envelope"></i></div>
                <h3><?php esc_html_e( 'Email Notifications', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Detailed email updates with photos of your cake at the quality check stage. Know exactly what\'s coming before it arrives at your door.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-why-card" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-why-icon"><i class="fab fa-whatsapp"></i></div>
                <h3><?php esc_html_e( 'WhatsApp Support', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Questions about your order? Chat directly with our support team on WhatsApp for instant updates and assistance. We respond within 5 minutes.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
