<?php
/**
 * Template Name: Contact
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Get In Touch', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Contact Us', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'We\'d love to hear from you. Reach out for orders, enquiries, or just to say hello!', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'Contact', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<section class="ac-section">
    <div class="ac-container">
        <div class="ac-contact-grid">
            <!-- Contact Info Cards -->
            <div class="ac-contact-info" data-aos="fade-right">
                <div class="ac-contact-card">
                    <div class="ac-why-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h3><?php esc_html_e( 'Visit Our Store', 'annie-cakes' ); ?></h3>
                    <p><?php echo esc_html( get_theme_mod( 'annie_address', '25 Admiralty Way, Lekki Phase 1, Lagos, Nigeria' ) ); ?></p>
                    <p style="font-size:0.85rem;color:var(--ac-text-muted);"><?php esc_html_e( 'Open Mon-Sat: 8am - 8pm | Sun: 10am - 6pm', 'annie-cakes' ); ?></p>
                </div>
                <div class="ac-contact-card">
                    <div class="ac-why-icon"><i class="fas fa-phone-alt"></i></div>
                    <h3><?php esc_html_e( 'Call Us', 'annie-cakes' ); ?></h3>
                    <p><a href="tel:<?php echo esc_attr( get_theme_mod( 'annie_phone', '+2348000000000' ) ); ?>" style="color:var(--ac-gold);font-weight:600;"><?php echo esc_html( get_theme_mod( 'annie_phone', '+234 800 000 0000' ) ); ?></a></p>
                    <p style="font-size:0.85rem;color:var(--ac-text-muted);"><?php esc_html_e( 'Available Mon-Sat: 8am - 9pm', 'annie-cakes' ); ?></p>
                </div>
                <div class="ac-contact-card">
                    <div class="ac-why-icon"><i class="fas fa-envelope"></i></div>
                    <h3><?php esc_html_e( 'Email Us', 'annie-cakes' ); ?></h3>
                    <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'annie_email', 'hello@anniecakes.com' ) ); ?>" style="color:var(--ac-gold);font-weight:600;"><?php echo esc_html( get_theme_mod( 'annie_email', 'hello@anniecakes.com' ) ); ?></a></p>
                    <p style="font-size:0.85rem;color:var(--ac-text-muted);"><?php esc_html_e( 'We reply within 2 hours during business hours', 'annie-cakes' ); ?></p>
                </div>
                <div class="ac-contact-card">
                    <div class="ac-why-icon"><i class="fab fa-whatsapp"></i></div>
                    <h3><?php esc_html_e( 'WhatsApp', 'annie-cakes' ); ?></h3>
                    <p><a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>" target="_blank" rel="noopener" style="color:var(--ac-gold);font-weight:600;"><?php esc_html_e( 'Chat with us on WhatsApp', 'annie-cakes' ); ?></a></p>
                    <p style="font-size:0.85rem;color:var(--ac-text-muted);"><?php esc_html_e( 'Fastest response — usually within 5 minutes', 'annie-cakes' ); ?></p>
                </div>

                <!-- Social Links -->
                <div style="margin-top:20px;">
                    <h3 style="margin-bottom:15px;"><?php esc_html_e( 'Follow Us', 'annie-cakes' ); ?></h3>
                    <div class="ac-social-links" style="display:flex;gap:12px;">
                        <a href="<?php echo esc_url( get_theme_mod( 'annie_instagram', '#' ) ); ?>" target="_blank" rel="noopener" style="width:45px;height:45px;display:flex;align-items:center;justify-content:center;background:var(--ac-gradient);color:#fff;border-radius:50%;font-size:1.2rem;"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo esc_url( get_theme_mod( 'annie_facebook', '#' ) ); ?>" target="_blank" rel="noopener" style="width:45px;height:45px;display:flex;align-items:center;justify-content:center;background:var(--ac-gradient);color:#fff;border-radius:50%;font-size:1.2rem;"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo esc_url( get_theme_mod( 'annie_twitter', '#' ) ); ?>" target="_blank" rel="noopener" style="width:45px;height:45px;display:flex;align-items:center;justify-content:center;background:var(--ac-gradient);color:#fff;border-radius:50%;font-size:1.2rem;"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo esc_url( get_theme_mod( 'annie_tiktok', '#' ) ); ?>" target="_blank" rel="noopener" style="width:45px;height:45px;display:flex;align-items:center;justify-content:center;background:var(--ac-gradient);color:#fff;border-radius:50%;font-size:1.2rem;"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="ac-contact-form-wrap" data-aos="fade-left">
                <h2><?php esc_html_e( 'Send Us a Message', 'annie-cakes' ); ?></h2>
                <p style="color:var(--ac-text-light);margin-bottom:25px;"><?php esc_html_e( 'Have a question, feedback, or want to discuss a custom order? Fill out the form below and we\'ll get back to you shortly.', 'annie-cakes' ); ?></p>
                <form id="ac-contact-form" class="ac-contact-form">
                    <?php wp_nonce_field( 'annie_contact', 'contact_nonce' ); ?>
                    <div class="ac-form-row">
                        <div class="ac-form-group">
                            <label for="contact-name"><?php esc_html_e( 'Full Name', 'annie-cakes' ); ?> *</label>
                            <input type="text" id="contact-name" name="name" required placeholder="<?php esc_attr_e( 'Your full name', 'annie-cakes' ); ?>">
                        </div>
                        <div class="ac-form-group">
                            <label for="contact-email"><?php esc_html_e( 'Email Address', 'annie-cakes' ); ?> *</label>
                            <input type="email" id="contact-email" name="email" required placeholder="<?php esc_attr_e( 'your@email.com', 'annie-cakes' ); ?>">
                        </div>
                    </div>
                    <div class="ac-form-row">
                        <div class="ac-form-group">
                            <label for="contact-phone"><?php esc_html_e( 'Phone Number', 'annie-cakes' ); ?></label>
                            <input type="tel" id="contact-phone" name="phone" placeholder="<?php esc_attr_e( '+234 800 000 0000', 'annie-cakes' ); ?>">
                        </div>
                        <div class="ac-form-group">
                            <label for="contact-subject"><?php esc_html_e( 'Subject', 'annie-cakes' ); ?> *</label>
                            <select id="contact-subject" name="subject" required>
                                <option value=""><?php esc_html_e( 'Select a subject', 'annie-cakes' ); ?></option>
                                <option value="General Enquiry"><?php esc_html_e( 'General Enquiry', 'annie-cakes' ); ?></option>
                                <option value="Custom Cake Order"><?php esc_html_e( 'Custom Cake Order', 'annie-cakes' ); ?></option>
                                <option value="Gift Hamper Enquiry"><?php esc_html_e( 'Gift Hamper Enquiry', 'annie-cakes' ); ?></option>
                                <option value="Corporate Order"><?php esc_html_e( 'Corporate Order', 'annie-cakes' ); ?></option>
                                <option value="Delivery Issue"><?php esc_html_e( 'Delivery Issue', 'annie-cakes' ); ?></option>
                                <option value="Partnership"><?php esc_html_e( 'Partnership / Collaboration', 'annie-cakes' ); ?></option>
                                <option value="Feedback"><?php esc_html_e( 'Feedback / Complaint', 'annie-cakes' ); ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="ac-form-group">
                        <label for="contact-message"><?php esc_html_e( 'Message', 'annie-cakes' ); ?> *</label>
                        <textarea id="contact-message" name="message" rows="6" required placeholder="<?php esc_attr_e( 'Tell us how we can help you...', 'annie-cakes' ); ?>"></textarea>
                    </div>
                    <button type="submit" class="ac-btn ac-btn-primary ac-btn-lg" style="width:100%;">
                        <i class="fas fa-paper-plane"></i> <?php esc_html_e( 'Send Message', 'annie-cakes' ); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="ac-map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7!2d3.4!3d6.4!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sLekki+Phase+1!5e0!3m2!1sen!2sng!4v1" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php get_footer(); ?>
