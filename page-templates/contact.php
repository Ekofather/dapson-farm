<?php
/**
 * Template Name: Contact
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Get In Touch', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Contact Us', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'We\'d love to hear from you!', 'annie-cakes' ); ?></p>
    </div>
</section>

<section class="ac-section ac-contact-section">
    <div class="ac-container">
        <div class="ac-contact-grid">
            <div class="ac-contact-info" data-aos="fade-right">
                <h2><?php esc_html_e( 'Let\'s Talk', 'annie-cakes' ); ?></h2>
                <p><?php esc_html_e( 'Have a question, want to place an order, or just want to say hello? We\'re here for you!', 'annie-cakes' ); ?></p>

                <div class="ac-contact-details">
                    <div class="ac-contact-item">
                        <div class="ac-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4><?php esc_html_e( 'Visit Us', 'annie-cakes' ); ?></h4>
                            <p><?php echo esc_html( get_theme_mod( 'annie_address', '123 Bakery Street, Lagos, Nigeria' ) ); ?></p>
                        </div>
                    </div>
                    <div class="ac-contact-item">
                        <div class="ac-contact-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <h4><?php esc_html_e( 'Call Us', 'annie-cakes' ); ?></h4>
                            <p><a href="tel:<?php echo esc_attr( get_theme_mod( 'annie_phone', '+2348000000000' ) ); ?>"><?php echo esc_html( get_theme_mod( 'annie_phone', '+234 800 000 0000' ) ); ?></a></p>
                        </div>
                    </div>
                    <div class="ac-contact-item">
                        <div class="ac-contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <h4><?php esc_html_e( 'Email Us', 'annie-cakes' ); ?></h4>
                            <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'annie_email', 'hello@anniecakesandgift.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'annie_email', 'hello@anniecakesandgift.com' ) ); ?></a></p>
                        </div>
                    </div>
                    <div class="ac-contact-item">
                        <div class="ac-contact-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h4><?php esc_html_e( 'Working Hours', 'annie-cakes' ); ?></h4>
                            <p><?php echo esc_html( get_theme_mod( 'annie_hours', 'Mon - Sat: 8AM - 8PM' ) ); ?></p>
                        </div>
                    </div>
                </div>

                <div class="ac-contact-social">
                    <h4><?php esc_html_e( 'Follow Us', 'annie-cakes' ); ?></h4>
                    <div class="ac-social-links">
                        <?php if ( get_theme_mod( 'annie_facebook' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_facebook' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'annie_instagram' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_instagram' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'annie_twitter' ) ) : ?>
                            <a href="<?php echo esc_url( get_theme_mod( 'annie_twitter' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <div class="ac-contact-form-wrap" data-aos="fade-left">
                <form class="ac-contact-form" id="ac-contact-form">
                    <?php wp_nonce_field( 'annie_contact', 'contact_nonce' ); ?>
                    <div class="ac-form-row">
                        <div class="ac-form-group">
                            <label for="contact-name"><?php esc_html_e( 'Full Name', 'annie-cakes' ); ?></label>
                            <input type="text" id="contact-name" name="name" required placeholder="<?php esc_attr_e( 'Your name', 'annie-cakes' ); ?>">
                        </div>
                        <div class="ac-form-group">
                            <label for="contact-email"><?php esc_html_e( 'Email Address', 'annie-cakes' ); ?></label>
                            <input type="email" id="contact-email" name="email" required placeholder="<?php esc_attr_e( 'your@email.com', 'annie-cakes' ); ?>">
                        </div>
                    </div>
                    <div class="ac-form-row">
                        <div class="ac-form-group">
                            <label for="contact-phone"><?php esc_html_e( 'Phone Number', 'annie-cakes' ); ?></label>
                            <input type="tel" id="contact-phone" name="phone" placeholder="<?php esc_attr_e( '+234 ...', 'annie-cakes' ); ?>">
                        </div>
                        <div class="ac-form-group">
                            <label for="contact-subject"><?php esc_html_e( 'Subject', 'annie-cakes' ); ?></label>
                            <select id="contact-subject" name="subject">
                                <option value=""><?php esc_html_e( 'Select a subject', 'annie-cakes' ); ?></option>
                                <option value="general"><?php esc_html_e( 'General Inquiry', 'annie-cakes' ); ?></option>
                                <option value="order"><?php esc_html_e( 'Order Question', 'annie-cakes' ); ?></option>
                                <option value="custom"><?php esc_html_e( 'Custom Order', 'annie-cakes' ); ?></option>
                                <option value="complaint"><?php esc_html_e( 'Feedback / Complaint', 'annie-cakes' ); ?></option>
                                <option value="partnership"><?php esc_html_e( 'Partnership', 'annie-cakes' ); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="ac-form-group">
                        <label for="contact-message"><?php esc_html_e( 'Message', 'annie-cakes' ); ?></label>
                        <textarea id="contact-message" name="message" rows="5" required placeholder="<?php esc_attr_e( 'Tell us how we can help...', 'annie-cakes' ); ?>"></textarea>
                    </div>
                    <button type="submit" class="ac-btn ac-btn-primary ac-btn-lg ac-btn-full">
                        <i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Send Message', 'annie-cakes' ); ?>
                    </button>
                </form>
            </div>
        </div>

        <?php if ( get_theme_mod( 'annie_map_embed' ) ) : ?>
            <div class="ac-map" data-aos="fade-up">
                <?php echo wp_kses( get_theme_mod( 'annie_map_embed' ), array( 'iframe' => array( 'src' => true, 'width' => true, 'height' => true, 'style' => true, 'frameborder' => true, 'allowfullscreen' => true, 'loading' => true ) ) ); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
get_footer();
