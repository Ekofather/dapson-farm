<?php
/**
 * Theme Footer
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
</main>

<!-- Newsletter Section -->
<section class="ac-newsletter">
    <div class="ac-container">
        <div class="ac-newsletter-inner" data-aos="fade-up">
            <div class="ac-newsletter-content">
                <h2><?php esc_html_e( 'Stay Sweet!', 'annie-cakes' ); ?></h2>
                <p><?php esc_html_e( 'Subscribe for exclusive offers, new arrivals, and birthday surprises.', 'annie-cakes' ); ?></p>
            </div>
            <form class="ac-newsletter-form" id="ac-newsletter-form">
                <?php wp_nonce_field( 'annie_newsletter', 'newsletter_nonce' ); ?>
                <input type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your email address', 'annie-cakes' ); ?>" required>
                <button type="submit" class="ac-btn ac-btn-primary">
                    <span><?php esc_html_e( 'Subscribe', 'annie-cakes' ); ?></span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="ac-footer">
    <div class="ac-footer-top">
        <div class="ac-container">
            <div class="ac-footer-grid">
                <div class="ac-footer-col">
                    <div class="ac-footer-brand">
                        <?php if ( has_custom_logo() ) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <h3 class="ac-footer-logo"><?php bloginfo( 'name' ); ?></h3>
                        <?php endif; ?>
                        <p><?php echo esc_html( get_theme_mod( 'annie_footer_about', 'Crafting sweet memories with premium cakes and thoughtful gifts. Every creation is made with love and the finest ingredients.' ) ); ?></p>
                    </div>
                    <div class="ac-footer-social">
                        <?php if ( get_theme_mod( 'annie_facebook' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_facebook' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'annie_instagram' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_instagram' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'annie_twitter' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_twitter' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'annie_tiktok' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_tiktok' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-tiktok"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'annie_youtube' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_youtube' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-youtube"></i></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="ac-footer-col">
                    <h4><?php esc_html_e( 'Quick Links', 'annie-cakes' ); ?></h4>
                    <ul class="ac-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><?php esc_html_e( 'Shop', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About Us', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/gallery/' ) ); ?>"><?php esc_html_e( 'Gallery', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Contact', 'annie-cakes' ); ?></a></li>
                    </ul>
                </div>

                <div class="ac-footer-col">
                    <h4><?php esc_html_e( 'Customer Service', 'annie-cakes' ); ?></h4>
                    <ul class="ac-footer-links">
                        <li><a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"><?php esc_html_e( 'My Account', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/order-tracking/' ) ); ?>"><?php esc_html_e( 'Track Order', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/wishlist/' ) ); ?>"><?php esc_html_e( 'Wishlist', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/custom-orders/' ) ); ?>"><?php esc_html_e( 'Custom Orders', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>"><?php esc_html_e( 'FAQs', 'annie-cakes' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>"><?php esc_html_e( 'Testimonials', 'annie-cakes' ); ?></a></li>
                    </ul>
                </div>

                <div class="ac-footer-col">
                    <h4><?php esc_html_e( 'Contact Info', 'annie-cakes' ); ?></h4>
                    <ul class="ac-footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo esc_html( get_theme_mod( 'annie_address', '123 Bakery Street, Lagos, Nigeria' ) ); ?></span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <a href="tel:<?php echo esc_attr( get_theme_mod( 'annie_phone', '+2348000000000' ) ); ?>"><?php echo esc_html( get_theme_mod( 'annie_phone', '+234 800 000 0000' ) ); ?></a>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:<?php echo esc_attr( get_theme_mod( 'annie_email', 'hello@anniecakesandgift.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'annie_email', 'hello@anniecakesandgift.com' ) ); ?></a>
                        </li>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span><?php echo esc_html( get_theme_mod( 'annie_hours', 'Mon - Sat: 8AM - 8PM' ) ); ?></span>
                        </li>
                    </ul>
                    <div class="ac-footer-payment">
                        <h5><?php esc_html_e( 'We Accept', 'annie-cakes' ); ?></h5>
                        <div class="ac-payment-icons">
                            <i class="fab fa-cc-visa" title="Visa"></i>
                            <i class="fab fa-cc-mastercard" title="Mastercard"></i>
                            <i class="fas fa-money-bill-wave" title="Bank Transfer"></i>
                            <i class="fas fa-truck" title="Cash on Delivery"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ac-footer-bottom">
        <div class="ac-container">
            <div class="ac-footer-bottom-inner">
                <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All Rights Reserved.', 'annie-cakes' ); ?></p>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'ac-footer-bottom-menu',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => false,
                ) );
                ?>
            </div>
        </div>
    </div>
</footer>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>?text=<?php echo esc_attr( rawurlencode( __( 'Hello! I would like to place an order.', 'annie-cakes' ) ) ); ?>" class="ac-whatsapp-float" target="_blank" rel="noopener" aria-label="<?php esc_attr_e( 'Chat on WhatsApp', 'annie-cakes' ); ?>">
    <i class="fab fa-whatsapp"></i>
    <span class="ac-whatsapp-tooltip"><?php esc_html_e( 'Chat with us!', 'annie-cakes' ); ?></span>
</a>

<!-- Back to Top -->
<button id="ac-back-to-top" class="ac-back-to-top" aria-label="<?php esc_attr_e( 'Back to top', 'annie-cakes' ); ?>">
    <i class="fas fa-chevron-up"></i>
</button>

<!-- Quick View Modal -->
<div class="ac-modal ac-quick-view-modal" id="ac-quick-view-modal">
    <div class="ac-modal-overlay"></div>
    <div class="ac-modal-content">
        <button class="ac-modal-close"><i class="fas fa-times"></i></button>
        <div class="ac-quick-view-body"></div>
    </div>
</div>

<!-- Toast Notifications -->
<div class="ac-toast-container" id="ac-toast-container"></div>

<?php wp_footer(); ?>
</body>
</html>
