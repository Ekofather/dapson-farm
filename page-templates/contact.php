<?php
/**
 * Template Name: Contact
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-hero-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_contact_page_subtitle', 'Let\'s Connect' ) ); ?></span>
            <h1 class="page-hero-title"><?php echo esc_html( get_theme_mod( 'feyikemi_contact_page_title', 'Contact Me' ) ); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php esc_html_e( 'Contact', 'feyikemi-portfolio' ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section contact-full-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info-column" data-aos="fade-right">
                <span class="section-subtitle"><?php esc_html_e( 'Get in Touch', 'feyikemi-portfolio' ); ?></span>
                <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_contact_info_title', 'Let\'s Work Together' ) ); ?></h2>
                <p class="contact-intro"><?php echo esc_html( get_theme_mod( 'feyikemi_contact_intro', 'I am open to collaborations, speaking engagements, consultancy opportunities, and anti-corruption advocacy partnerships. Feel free to reach out through any of the channels below.' ) ); ?></p>

                <div class="contact-details">
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-detail-content">
                            <h4><?php esc_html_e( 'Location', 'feyikemi-portfolio' ); ?></h4>
                            <p><?php echo esc_html( get_theme_mod( 'feyikemi_address', 'Osogbo, Osun State, Nigeria' ) ); ?></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-detail-content">
                            <h4><?php esc_html_e( 'Email', 'feyikemi-portfolio' ); ?></h4>
                            <p><a href="mailto:<?php echo esc_attr( get_theme_mod( 'feyikemi_email_address', 'okebukolamary@gmail.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'feyikemi_email_address', 'okebukolamary@gmail.com' ) ); ?></a></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-detail-content">
                            <h4><?php esc_html_e( 'Phone', 'feyikemi-portfolio' ); ?></h4>
                            <p><a href="tel:<?php echo esc_attr( get_theme_mod( 'feyikemi_phone', '+2347030114288' ) ); ?>"><?php echo esc_html( get_theme_mod( 'feyikemi_phone', '+2347030114288' ) ); ?></a></p>
                        </div>
                    </div>
                    <div class="contact-detail-item">
                        <div class="contact-detail-icon"><i class="fab fa-linkedin-in"></i></div>
                        <div class="contact-detail-content">
                            <h4><?php esc_html_e( 'LinkedIn', 'feyikemi-portfolio' ); ?></h4>
                            <p><a href="<?php echo esc_url( get_theme_mod( 'feyikemi_linkedin_url', 'https://www.linkedin.com/in/okebukola-o-255747252' ) ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'Connect on LinkedIn', 'feyikemi-portfolio' ); ?></a></p>
                        </div>
                    </div>
                </div>

                <div class="contact-social">
                    <?php if ( get_theme_mod( 'feyikemi_linkedin_url' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_linkedin_url' ) ); ?>" target="_blank" rel="noopener" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'feyikemi_twitter_url' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_twitter_url' ) ); ?>" target="_blank" rel="noopener" class="social-link"><i class="fab fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'feyikemi_facebook_url' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_facebook_url' ) ); ?>" target="_blank" rel="noopener" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-column" data-aos="fade-left">
                <div class="contact-form-card">
                    <h3><?php echo esc_html( get_theme_mod( 'feyikemi_contact_form_title', 'Send a Message' ) ); ?></h3>
                    <form id="contact-form" class="contact-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="contact-name"><?php esc_html_e( 'Full Name', 'feyikemi-portfolio' ); ?> *</label>
                                <input type="text" id="contact-name" name="name" required placeholder="<?php esc_attr_e( 'Your full name', 'feyikemi-portfolio' ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="contact-email"><?php esc_html_e( 'Email Address', 'feyikemi-portfolio' ); ?> *</label>
                                <input type="email" id="contact-email" name="email" required placeholder="<?php esc_attr_e( 'your@email.com', 'feyikemi-portfolio' ); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="contact-subject"><?php esc_html_e( 'Subject', 'feyikemi-portfolio' ); ?></label>
                            <input type="text" id="contact-subject" name="subject" placeholder="<?php esc_attr_e( 'What is this about?', 'feyikemi-portfolio' ); ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact-message"><?php esc_html_e( 'Message', 'feyikemi-portfolio' ); ?> *</label>
                            <textarea id="contact-message" name="message" rows="6" required placeholder="<?php esc_attr_e( 'Your message...', 'feyikemi-portfolio' ); ?>"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-full">
                            <span class="btn-text"><?php esc_html_e( 'Send Message', 'feyikemi-portfolio' ); ?></span>
                            <span class="btn-loading"><i class="fas fa-spinner fa-spin"></i> <?php esc_html_e( 'Sending...', 'feyikemi-portfolio' ); ?></span>
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <div class="form-message"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
