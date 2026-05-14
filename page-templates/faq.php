<?php
/**
 * Template Name: FAQ
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Help Centre', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Frequently Asked Questions', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Everything you need to know about ordering, delivery, custom cakes, and more.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'FAQ', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<section class="ac-section">
    <div class="ac-container" style="max-width:900px;">
        <!-- Ordering -->
        <div data-aos="fade-up">
            <h2 style="margin-bottom:20px;font-size:1.3rem;"><i class="fas fa-shopping-bag" style="color:var(--ac-gold);margin-right:8px;"></i> <?php esc_html_e( 'Ordering', 'annie-cakes' ); ?></h2>
            <?php
            $ordering_faqs = array(
                array( 'q' => 'How do I place an order?', 'a' => 'You can order directly through our website by adding items to your cart and checking out. For custom cakes, use our Custom Order form or contact us via WhatsApp. We accept orders 24/7 and our team will confirm your order within 2 hours during business hours.' ),
                array( 'q' => 'What is the minimum order amount?', 'a' => 'There is no minimum order for our standard products. For custom cakes, our starting price is ₦25,000 for a 6-inch round cake. Gift hampers start from ₦15,000. Corporate orders of 50+ items receive a 10% discount.' ),
                array( 'q' => 'How far in advance should I order a custom cake?', 'a' => 'We recommend ordering at least 3-5 days in advance for custom cakes. For elaborate multi-tier wedding cakes, please give us 2-3 weeks notice. Rush orders (24-48 hours) are available for an additional 30% surcharge, subject to availability.' ),
                array( 'q' => 'Can I modify or cancel my order?', 'a' => 'You can modify or cancel your order up to 24 hours before the scheduled delivery/pickup date. For custom cakes, modifications may be limited once production has started. Please contact us immediately via WhatsApp or phone if you need changes.' ),
            );
            foreach ( $ordering_faqs as $faq ) : ?>
            <div class="ac-faq-item">
                <div class="ac-faq-question">
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="ac-faq-answer">
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Delivery -->
        <div style="margin-top:40px;" data-aos="fade-up">
            <h2 style="margin-bottom:20px;font-size:1.3rem;"><i class="fas fa-truck" style="color:var(--ac-gold);margin-right:8px;"></i> <?php esc_html_e( 'Delivery & Shipping', 'annie-cakes' ); ?></h2>
            <?php
            $delivery_faqs = array(
                array( 'q' => 'Do you deliver outside Lagos?', 'a' => 'Yes! We deliver nationwide across all 36 states and FCT. Lagos deliveries are same-day when ordered before 12pm. Nationwide shipping takes 2-3 business days for non-perishable items (gift hampers, cookies). Perishable cakes are available for same-day delivery within Lagos and select cities.' ),
                array( 'q' => 'How much does delivery cost?', 'a' => 'Delivery within Lagos Mainland starts from ₦3,000, Lagos Island from ₦4,000, and Lekki/Ajah from ₦5,000. Nationwide shipping starts from ₦5,000-₦15,000 depending on location and item weight. Free delivery is available on orders above ₦100,000 within Lagos.' ),
                array( 'q' => 'Can I track my order?', 'a' => 'Absolutely! Once your order is confirmed, you\'ll receive a tracking ID via SMS and email. Visit our Order Tracking page to see real-time status updates. You\'ll be notified at every stage: order confirmed, baking in progress, quality check, out for delivery, and delivered.' ),
                array( 'q' => 'What if my cake arrives damaged?', 'a' => 'We take extreme care in packaging and delivery. In the rare event that your cake arrives damaged, please take photos immediately and contact us within 1 hour of delivery. We will either send a replacement or provide a full refund. Your satisfaction is guaranteed.' ),
            );
            foreach ( $delivery_faqs as $faq ) : ?>
            <div class="ac-faq-item">
                <div class="ac-faq-question">
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="ac-faq-answer">
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Custom Cakes -->
        <div style="margin-top:40px;" data-aos="fade-up">
            <h2 style="margin-bottom:20px;font-size:1.3rem;"><i class="fas fa-birthday-cake" style="color:var(--ac-gold);margin-right:8px;"></i> <?php esc_html_e( 'Custom Cakes', 'annie-cakes' ); ?></h2>
            <?php
            $custom_faqs = array(
                array( 'q' => 'What flavours do you offer?', 'a' => 'We offer over 15 flavours including: Chocolate, Red Velvet, Vanilla, Strawberry, Lemon, Carrot, Coffee, Coconut, Marble, Fruit Cake, Banana, Cookies & Cream, Caramel, Butterscotch, and Pineapple. We can also create custom flavour combinations upon request.' ),
                array( 'q' => 'Can you recreate a cake from a photo?', 'a' => 'Yes! Send us your inspiration photo via our Custom Order form or WhatsApp, and our cake artists will recreate it with our signature attention to detail. We\'ll discuss any modifications and provide a quote within 2 hours.' ),
                array( 'q' => 'Do you cater for dietary restrictions?', 'a' => 'We offer eggless cakes and can accommodate certain dietary needs. Please inform us of any allergies or dietary requirements when placing your order. We handle each allergy-sensitive order with dedicated equipment to prevent cross-contamination.' ),
                array( 'q' => 'What cake sizes are available?', 'a' => 'Our standard sizes are: 6-inch (serves 8-10), 8-inch (serves 12-15), 10-inch (serves 20-25), 12-inch (serves 30-40), and 14-inch (serves 50-60). Multi-tier cakes can go up to 5 tiers. We also offer sheet cakes, number cakes, and letter cakes.' ),
            );
            foreach ( $custom_faqs as $faq ) : ?>
            <div class="ac-faq-item">
                <div class="ac-faq-question">
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="ac-faq-answer">
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Payment -->
        <div style="margin-top:40px;" data-aos="fade-up">
            <h2 style="margin-bottom:20px;font-size:1.3rem;"><i class="fas fa-credit-card" style="color:var(--ac-gold);margin-right:8px;"></i> <?php esc_html_e( 'Payment & Refunds', 'annie-cakes' ); ?></h2>
            <?php
            $payment_faqs = array(
                array( 'q' => 'What payment methods do you accept?', 'a' => 'We accept Paystack (cards, bank transfer, USSD), Flutterwave, direct bank transfer, and cash on delivery (Lagos only). All online payments are secured with SSL encryption. For corporate orders, we also accept invoice-based payments with NET 7 terms.' ),
                array( 'q' => 'Do you require full payment upfront?', 'a' => 'For standard orders, full payment is required at checkout. For custom cakes above ₦50,000, we accept a 60% deposit at order placement and the remaining 40% before delivery. Wedding cakes require a 50% non-refundable deposit.' ),
                array( 'q' => 'What is your refund policy?', 'a' => 'If you cancel more than 24 hours before delivery, you\'ll receive a full refund. Cancellations within 24 hours receive a 70% refund. Custom cakes that are already in production are non-refundable. Refunds are processed within 3-5 business days.' ),
            );
            foreach ( $payment_faqs as $faq ) : ?>
            <div class="ac-faq-item">
                <div class="ac-faq-question">
                    <span><?php echo esc_html( $faq['q'] ); ?></span>
                    <i class="fas fa-chevron-down"></i>
                </div>
                <div class="ac-faq-answer">
                    <p><?php echo esc_html( $faq['a'] ); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Still have questions CTA -->
<section class="ac-section" style="background:var(--ac-bg-alt);">
    <div class="ac-container" style="text-align:center;" data-aos="fade-up">
        <h2><?php esc_html_e( 'Still Have Questions?', 'annie-cakes' ); ?></h2>
        <p style="max-width:600px;margin:15px auto 30px;color:var(--ac-text-light);"><?php esc_html_e( 'Our friendly team is here to help. Reach out to us via WhatsApp, phone, or email and we\'ll get back to you within minutes.', 'annie-cakes' ); ?></p>
        <div style="display:flex;gap:15px;justify-content:center;flex-wrap:wrap;">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                <i class="fas fa-envelope"></i> <?php esc_html_e( 'Contact Us', 'annie-cakes' ); ?>
            </a>
            <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>" target="_blank" rel="noopener" class="ac-btn ac-btn-outline ac-btn-lg">
                <i class="fab fa-whatsapp"></i> <?php esc_html_e( 'WhatsApp Us', 'annie-cakes' ); ?>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
