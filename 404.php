<?php
/**
 * 404 Template
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-404-section">
    <div class="ac-container">
        <div class="ac-404-content" data-aos="fade-up">
            <div class="ac-404-icon">
                <i class="fas fa-birthday-cake"></i>
            </div>
            <h1>404</h1>
            <h2><?php esc_html_e( 'Oops! This page got eaten!', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Looks like the page you\'re looking for has been devoured. Let\'s find you something sweet instead!', 'annie-cakes' ); ?></p>
            <div class="ac-404-actions">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                    <i class="fas fa-home"></i> <?php esc_html_e( 'Go Home', 'annie-cakes' ); ?>
                </a>
                <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="ac-btn ac-btn-outline ac-btn-lg">
                    <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Visit Shop', 'annie-cakes' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
