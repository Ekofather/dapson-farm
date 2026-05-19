<?php
/**
 * No Content Template Part
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

<div class="no-posts">
    <i class="fas fa-search"></i>
    <?php if ( is_search() ) : ?>
        <h2><?php esc_html_e( 'No Results Found', 'demola-bakare' ); ?></h2>
        <p><?php esc_html_e( 'Sorry, nothing matched your search terms. Please try different keywords.', 'demola-bakare' ); ?></p>
    <?php else : ?>
        <h2><?php esc_html_e( 'Nothing Found', 'demola-bakare' ); ?></h2>
        <p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'demola-bakare' ); ?></p>
    <?php endif; ?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Return Home', 'demola-bakare' ); ?></a>
</div>
