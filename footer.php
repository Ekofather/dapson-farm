<?php
/**
 * Footer Template
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
</main>

<!-- Footer -->
<footer class="site-footer">
    <!-- Footer CTA -->
    <div class="footer-cta">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Advance Integrity in Governance?</h2>
                <p>Partner with Demola Bakare, FSI for consultancy, training, speaking engagements, or institutional collaboration.</p>
                <div class="cta-actions">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>" class="btn btn-gold">Start a Conversation</a>
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ?: '#' ); ?>" class="btn btn-outline-light">View Services</a>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">
                <!-- About Column -->
                <div class="footer-col footer-about">
                    <div class="footer-logo">
                        <span class="logo-name">Demola Bakare</span>
                        <span class="logo-title">FSI</span>
                    </div>
                    <p class="footer-desc"><?php echo esc_html( get_theme_mod( 'demola_footer_about', 'Anti-Corruption Advocate, Governance Strategist, Ethics Trainer & Pioneer Officer of ICPC Nigeria. Over 25 years championing transparency, accountability, and ethical leadership.' ) ); ?></p>
                    <div class="footer-social">
                        <?php
                        $footer_socials = array(
                            'twitter'  => array( 'url' => get_theme_mod( 'demola_twitter', '#' ), 'icon' => 'fa-x-twitter' ),
                            'linkedin' => array( 'url' => get_theme_mod( 'demola_linkedin', '#' ), 'icon' => 'fa-linkedin-in' ),
                            'facebook' => array( 'url' => get_theme_mod( 'demola_facebook', '#' ), 'icon' => 'fa-facebook-f' ),
                            'youtube'  => array( 'url' => get_theme_mod( 'demola_youtube', '#' ), 'icon' => 'fa-youtube' ),
                        );
                        foreach ( $footer_socials as $platform => $data ) :
                            if ( $data['url'] && '#' !== $data['url'] ) :
                        ?>
                            <a href="<?php echo esc_url( $data['url'] ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( ucfirst( $platform ) ); ?>">
                                <i class="fab <?php echo esc_attr( $data['icon'] ); ?>"></i>
                            </a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-links',
                        'container'      => false,
                        'depth'          => 1,
                        'fallback_cb'    => 'demola_footer_fallback_menu',
                    ) );
                    ?>
                </div>

                <!-- MRI-ELG -->
                <div class="footer-col">
                    <h4>MRI-ELG</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'mri-elg' ) ) ?: '#' ); ?>">About the Initiative</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ?: '#' ); ?>">Programs & Services</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'media' ) ) ?: '#' ); ?>">Research & Publications</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'speaking' ) ) ?: '#' ); ?>">Events & Engagements</a></li>
                        <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>">Partner With Us</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div class="footer-col">
                    <h4>Stay Informed</h4>
                    <p>Subscribe to receive insights on governance, ethics, and institutional reform.</p>
                    <form class="newsletter-form" id="footer-newsletter">
                        <?php wp_nonce_field( 'demola_nonce', 'newsletter_nonce' ); ?>
                        <div class="newsletter-input-group">
                            <input type="email" name="email" placeholder="Your email address" required aria-label="Email address">
                            <button type="submit" class="btn btn-gold" aria-label="Subscribe">
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                        <div class="newsletter-response"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-content">
                <p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> Demola Bakare, FSI. All rights reserved.</p>
                <p class="footer-tagline">Advancing Integrity, Accountability and Development-Minded Citizenship</p>
            </div>
        </div>
    </div>
</footer>

<!-- Back to Top -->
<button id="back-to-top" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>

<?php
/**
 * Footer fallback menu
 */
function demola_footer_fallback_menu() {
    $links = array(
        'about'    => 'About',
        'mri-elg'  => 'MRI-ELG',
        'services' => 'Services',
        'speaking' => 'Speaking',
        'media'    => 'Media',
        'blog'     => 'Insights',
        'contact'  => 'Contact',
    );
    echo '<ul class="footer-links">';
    foreach ( $links as $slug => $label ) {
        printf( '<li><a href="%s">%s</a></li>', esc_url( home_url( '/' . $slug . '/' ) ), esc_html( $label ) );
    }
    echo '</ul>';
}
