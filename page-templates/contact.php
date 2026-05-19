<?php
/**
 * Template Name: Contact Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-contact">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Contact</span>
            <h1>Get In <span class="gold">Touch</span></h1>
            <p>Connect with Demola Bakare, FSI, ANIPR, for ethics training, institutional governance advisory, speaking engagements, corruption risk assessments, MRI-ELG partnerships, or media inquiries.</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<!-- Contact Section -->
<section class="section section-contact">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Form -->
            <div class="contact-form-wrapper" data-aos="fade-right">
                <h2>Send a Message</h2>
                <p>Fill out the form below and we will respond within 24-48 hours.</p>
                <form class="contact-form" id="contact-form">
                    <?php wp_nonce_field( 'demola_nonce', 'contact_nonce' ); ?>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name">Full Name <span class="required">*</span></label>
                            <input type="text" id="contact-name" name="name" required placeholder="Your full name">
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email Address <span class="required">*</span></label>
                            <input type="email" id="contact-email" name="email" required placeholder="your@email.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="contact-subject">Subject</label>
                        <select id="contact-subject" name="subject">
                            <option value="">Select a subject</option>
                            <option value="Speaking Engagement">Speaking Engagement / Keynote Request</option>
                            <option value="Ethics Training">Ethics & Anti-Corruption Training</option>
                            <option value="Governance Advisory">Institutional Governance Advisory</option>
                            <option value="Corruption Risk Assessment">Corruption Risk Assessment</option>
                            <option value="ACTU Establishment">ACTU Establishment & Support</option>
                            <option value="Partnership Proposal">MRI-ELG Partnership Proposal</option>
                            <option value="Media Inquiry">Media Inquiry / Interview Request</option>
                            <option value="General Inquiry">General Inquiry</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contact-message">Message <span class="required">*</span></label>
                        <textarea id="contact-message" name="message" rows="6" required placeholder="Tell us how we can help..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-full">
                        <span>Send Message</span>
                        <i class="fas fa-paper-plane"></i>
                    </button>
                    <div class="form-response" id="contact-response"></div>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="contact-info-wrapper" data-aos="fade-left">
                <div class="contact-info-card">
                    <h3>Contact Information</h3>
                    <p>Reach out directly through any of the following channels:</p>

                    <div class="contact-info-items">
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <strong>Email</strong>
                                <a href="mailto:<?php echo esc_attr( get_theme_mod( 'demola_email', 'info@demolabakare.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'demola_email', 'info@demolabakare.com' ) ); ?></a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div>
                                <strong>Phone</strong>
                                <a href="tel:<?php echo esc_attr( get_theme_mod( 'demola_phone', '+234 XXX XXX XXXX' ) ); ?>"><?php echo esc_html( get_theme_mod( 'demola_phone', '+234 XXX XXX XXXX' ) ); ?></a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <strong>Office</strong>
                                <span><?php echo esc_html( get_theme_mod( 'demola_address', 'Abuja, Nigeria' ) ); ?></span>
                            </div>
                        </div>
                        <?php if ( get_theme_mod( 'demola_whatsapp' ) ) : ?>
                        <div class="contact-item">
                            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                            <div>
                                <strong>WhatsApp</strong>
                                <a href="https://wa.me/<?php echo esc_attr( preg_replace( '/[^0-9]/', '', get_theme_mod( 'demola_whatsapp' ) ) ); ?>" target="_blank" rel="noopener noreferrer">Send a Message</a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>

                    <div class="contact-social">
                        <h4>Follow & Connect</h4>
                        <div class="social-links">
                            <?php
                            $contact_socials = array(
                                'twitter'   => array( 'url' => get_theme_mod( 'demola_twitter' ), 'icon' => 'fab fa-x-twitter', 'label' => 'Twitter/X' ),
                                'linkedin'  => array( 'url' => get_theme_mod( 'demola_linkedin' ), 'icon' => 'fab fa-linkedin-in', 'label' => 'LinkedIn' ),
                                'facebook'  => array( 'url' => get_theme_mod( 'demola_facebook' ), 'icon' => 'fab fa-facebook-f', 'label' => 'Facebook' ),
                                'youtube'   => array( 'url' => get_theme_mod( 'demola_youtube' ), 'icon' => 'fab fa-youtube', 'label' => 'YouTube' ),
                                'instagram' => array( 'url' => get_theme_mod( 'demola_instagram' ), 'icon' => 'fab fa-instagram', 'label' => 'Instagram' ),
                            );
                            foreach ( $contact_socials as $platform => $data ) :
                                if ( $data['url'] ) :
                            ?>
                                <a href="<?php echo esc_url( $data['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="<?php echo esc_attr( $data['label'] ); ?>">
                                    <i class="<?php echo esc_attr( $data['icon'] ); ?>"></i>
                                    <span><?php echo esc_html( $data['label'] ); ?></span>
                                </a>
                            <?php
                                endif;
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="contact-map">
                    <div class="map-placeholder">
                        <i class="fas fa-map-marked-alt"></i>
                        <span>Abuja, Federal Capital Territory, Nigeria</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
