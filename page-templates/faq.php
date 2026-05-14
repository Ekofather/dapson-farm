<?php
/**
 * Template Name: FAQ
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Help Center', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Frequently Asked Questions', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Find answers to common questions about our products and services', 'annie-cakes' ); ?></p>
    </div>
</section>

<section class="ac-section ac-faq-section">
    <div class="ac-container ac-container-sm">
        <?php
        $faq_categories = array(
            'ordering'  => array(
                'title' => __( 'Ordering & Payment', 'annie-cakes' ),
                'icon'  => 'fa-shopping-cart',
                'faqs'  => array(
                    array( 'q' => __( 'How do I place an order?', 'annie-cakes' ), 'a' => __( 'You can place an order directly through our website by browsing our shop, adding items to your cart, and proceeding to checkout. You can also contact us via WhatsApp or phone to place an order.', 'annie-cakes' ) ),
                    array( 'q' => __( 'What payment methods do you accept?', 'annie-cakes' ), 'a' => __( 'We accept payments via Flutterwave, Paystack, bank transfer, and cash on delivery. All online payments are processed securely.', 'annie-cakes' ) ),
                    array( 'q' => __( 'Can I cancel or modify my order?', 'annie-cakes' ), 'a' => __( 'Orders can be modified or cancelled within 2 hours of placing them. Custom cake orders can be modified up to 48 hours before the delivery date. Please contact us immediately if you need changes.', 'annie-cakes' ) ),
                ),
            ),
            'delivery'  => array(
                'title' => __( 'Delivery & Pickup', 'annie-cakes' ),
                'icon'  => 'fa-truck',
                'faqs'  => array(
                    array( 'q' => __( 'Do you deliver?', 'annie-cakes' ), 'a' => __( 'Yes! We offer delivery within Lagos and surrounding areas. Same-day delivery is available for orders placed before 10 AM. Delivery fees vary based on location.', 'annie-cakes' ) ),
                    array( 'q' => __( 'How do I track my order?', 'annie-cakes' ), 'a' => __( 'Once your order is dispatched, you\'ll receive a tracking ID via email and SMS. You can track your order status on our Order Tracking page.', 'annie-cakes' ) ),
                    array( 'q' => __( 'Can I pick up my order?', 'annie-cakes' ), 'a' => __( 'Absolutely! You can choose the pickup option during checkout and collect your order from our bakery at the scheduled time.', 'annie-cakes' ) ),
                ),
            ),
            'custom'    => array(
                'title' => __( 'Custom Orders', 'annie-cakes' ),
                'icon'  => 'fa-birthday-cake',
                'faqs'  => array(
                    array( 'q' => __( 'How far in advance should I order a custom cake?', 'annie-cakes' ), 'a' => __( 'We recommend placing custom cake orders at least 3-5 days in advance. For wedding cakes and elaborate designs, we suggest 2-4 weeks notice.', 'annie-cakes' ) ),
                    array( 'q' => __( 'Can I send a picture of the cake design I want?', 'annie-cakes' ), 'a' => __( 'Yes! You can upload inspiration images through our Custom Order form or send them via WhatsApp. Our team will work with you to bring your vision to life.', 'annie-cakes' ) ),
                    array( 'q' => __( 'Do you offer tasting sessions?', 'annie-cakes' ), 'a' => __( 'Yes, we offer complimentary tasting sessions for wedding cake orders and large events. Please schedule in advance.', 'annie-cakes' ) ),
                ),
            ),
            'products'  => array(
                'title' => __( 'Products & Quality', 'annie-cakes' ),
                'icon'  => 'fa-award',
                'faqs'  => array(
                    array( 'q' => __( 'Are your cakes fresh?', 'annie-cakes' ), 'a' => __( 'All our cakes are freshly baked to order. We never use frozen cakes or artificial preservatives. Each cake is made with premium, natural ingredients.', 'annie-cakes' ) ),
                    array( 'q' => __( 'Do you cater for dietary requirements?', 'annie-cakes' ), 'a' => __( 'We can accommodate various dietary needs including gluten-free, sugar-free, and eggless options. Please specify your requirements when ordering.', 'annie-cakes' ) ),
                    array( 'q' => __( 'How should I store my cake?', 'annie-cakes' ), 'a' => __( 'For best freshness, store your cake in a cool place away from direct sunlight. Refrigerate cream and fondant cakes, and bring to room temperature 30 minutes before serving.', 'annie-cakes' ) ),
                ),
            ),
        );

        foreach ( $faq_categories as $key => $category ) :
            ?>
            <div class="ac-faq-category" data-aos="fade-up">
                <h2 class="ac-faq-category-title">
                    <i class="fas <?php echo esc_attr( $category['icon'] ); ?>"></i>
                    <?php echo esc_html( $category['title'] ); ?>
                </h2>
                <div class="ac-faq-list">
                    <?php foreach ( $category['faqs'] as $faq ) : ?>
                        <div class="ac-faq-item">
                            <button class="ac-faq-question">
                                <span><?php echo esc_html( $faq['q'] ); ?></span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                            <div class="ac-faq-answer">
                                <p><?php echo esc_html( $faq['a'] ); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="ac-faq-cta" data-aos="fade-up">
            <h3><?php esc_html_e( 'Still have questions?', 'annie-cakes' ); ?></h3>
            <p><?php esc_html_e( 'Can\'t find the answer you\'re looking for? Reach out to our friendly team.', 'annie-cakes' ); ?></p>
            <div class="ac-faq-cta-buttons">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ac-btn ac-btn-primary"><?php esc_html_e( 'Contact Us', 'annie-cakes' ); ?></a>
                <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>" class="ac-btn ac-btn-outline" target="_blank" rel="noopener">
                    <i class="fab fa-whatsapp"></i> <?php esc_html_e( 'WhatsApp Us', 'annie-cakes' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
