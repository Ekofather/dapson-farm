<?php
/**
 * WooCommerce Shop/Archive Template
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<div class="ac-page-header">
    <div class="ac-container">
        <?php if ( is_search() ) : ?>
            <h1><?php printf( esc_html__( 'Search results for: "%s"', 'annie-cakes' ), get_search_query() ); ?></h1>
        <?php elseif ( is_product_category() ) : ?>
            <h1><?php single_term_title(); ?></h1>
            <?php if ( term_description() ) : ?>
                <p><?php echo wp_kses_post( term_description() ); ?></p>
            <?php endif; ?>
        <?php else : ?>
            <span class="ac-section-badge"><?php esc_html_e( 'Our Products', 'annie-cakes' ); ?></span>
            <h1><?php esc_html_e( 'Shop', 'annie-cakes' ); ?></h1>
            <p><?php esc_html_e( 'Explore our delicious cakes and premium gifts', 'annie-cakes' ); ?></p>
        <?php endif; ?>
        <?php annie_cakes_breadcrumb(); ?>
    </div>
</div>

<section class="ac-section">
    <div class="ac-container">
        <div class="ac-shop-layout" style="display: grid; grid-template-columns: 250px 1fr; gap: 40px;">

            <aside class="ac-shop-sidebar">
                <?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
                    <?php dynamic_sidebar( 'shop-sidebar' ); ?>
                <?php else : ?>
                    <div class="widget">
                        <h3 class="widget-title"><?php esc_html_e( 'Categories', 'annie-cakes' ); ?></h3>
                        <?php
                        wp_list_categories( array(
                            'taxonomy'   => 'product_cat',
                            'title_li'   => '',
                            'show_count' => true,
                        ) );
                        ?>
                    </div>
                <?php endif; ?>
            </aside>

            <div class="ac-shop-content">
                <div class="ac-shop-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
                    <?php woocommerce_result_count(); ?>
                    <?php woocommerce_catalog_ordering(); ?>
                </div>

                <?php
                if ( woocommerce_product_loop() ) :
                    echo '<div class="ac-products-grid">';
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/product', 'card' );
                    endwhile;
                    echo '</div>';

                    echo '<div class="ac-pagination">';
                    woocommerce_pagination();
                    echo '</div>';
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
