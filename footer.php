</main><!-- #main-content -->

<!-- Footer -->
<footer id="site-footer" class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col footer-about">
                    <h3 class="footer-title"><?php echo esc_html( get_theme_mod( 'feyikemi_footer_name', 'Okebukola Oluwafeyikemi Mary' ) ); ?></h3>
                    <p class="footer-desc"><?php echo esc_html( get_theme_mod( 'feyikemi_footer_desc', 'Anti-Corruption & Governance Specialist dedicated to promoting integrity, transparency, and accountability in public service.' ) ); ?></p>
                    <div class="footer-social">
                        <?php if ( get_theme_mod( 'feyikemi_linkedin_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_linkedin_url' ) ); ?>" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'feyikemi_twitter_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_twitter_url' ) ); ?>" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'feyikemi_facebook_url' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_facebook_url' ) ); ?>" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'feyikemi_email_address' ) ) : ?>
                            <a href="mailto:<?php echo esc_attr( get_theme_mod( 'feyikemi_email_address' ) ); ?>" aria-label="Email"><i class="fas fa-envelope"></i></a>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="footer-col footer-links">
                    <h4 class="footer-col-title"><?php esc_html_e( 'Quick Links', 'feyikemi-portfolio' ); ?></h4>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => 'feyikemi_footer_fallback_menu',
                        'depth'          => 1,
                    ) );
                    ?>
                </div>

                <div class="footer-col footer-contact-info">
                    <h4 class="footer-col-title"><?php esc_html_e( 'Contact Info', 'feyikemi-portfolio' ); ?></h4>
                    <ul class="footer-contact-list">
                        <?php if ( get_theme_mod( 'feyikemi_address' ) ) : ?>
                            <li><i class="fas fa-map-marker-alt"></i> <?php echo esc_html( get_theme_mod( 'feyikemi_address' ) ); ?></li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'feyikemi_email_address' ) ) : ?>
                            <li><i class="fas fa-envelope"></i> <a href="mailto:<?php echo esc_attr( get_theme_mod( 'feyikemi_email_address' ) ); ?>"><?php echo esc_html( get_theme_mod( 'feyikemi_email_address' ) ); ?></a></li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'feyikemi_phone' ) ) : ?>
                            <li><i class="fas fa-phone"></i> <a href="tel:<?php echo esc_attr( get_theme_mod( 'feyikemi_phone' ) ); ?>"><?php echo esc_html( get_theme_mod( 'feyikemi_phone' ) ); ?></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php echo esc_html( get_theme_mod( 'feyikemi_footer_copyright', 'Okebukola Oluwafeyikemi Mary. All Rights Reserved.' ) ); ?></p>
        </div>
    </div>

    <!-- Back to Top -->
    <button id="back-to-top" class="back-to-top" aria-label="Back to top">
        <i class="fas fa-chevron-up"></i>
    </button>
</footer>

<?php wp_footer(); ?>
</body>
</html>
