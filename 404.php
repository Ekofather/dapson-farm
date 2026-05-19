<?php
/**
 * 404 Error Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<section class="section section-404">
    <div class="container">
        <div class="error-404-content" data-aos="fade-up">
            <div class="error-code">404</div>
            <h1>Page Not Found</h1>
            <p>The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
            <div class="error-actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">
                    <i class="fas fa-home"></i> Return Home
                </a>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-envelope"></i> Contact Us
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
