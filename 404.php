<?php
/**
 * 404 page template
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<section class="section error-404-section">
    <div class="container">
        <div class="error-404-content" data-aos="fade-up">
            <span class="error-code">404</span>
            <h1><?php esc_html_e( 'Page Not Found', 'feyikemi-portfolio' ); ?></h1>
            <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'feyikemi-portfolio' ); ?></p>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><i class="fas fa-home"></i> <?php esc_html_e( 'Back to Home', 'feyikemi-portfolio' ); ?></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
