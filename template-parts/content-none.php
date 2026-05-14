<?php
/**
 * No Content Template Part
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div class="ac-no-content">
    <div class="ac-no-content-icon">
        <i class="fas fa-search"></i>
    </div>
    <h2><?php esc_html_e( 'Nothing Found', 'annie-cakes' ); ?></h2>
    <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'annie-cakes' ); ?></p>
    <?php get_search_form(); ?>
</div>
