<?php
/**
 * WooCommerce Single Product Template
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="ac-page-header">
    <div class="ac-container">
        <?php woocommerce_breadcrumb(); ?>
    </div>
</div>

<section class="ac-section">
    <div class="ac-container">
        <?php
        while ( have_posts() ) :
            the_post();
            wc_get_template_part( 'content', 'single-product' );
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
