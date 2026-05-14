<?php
/**
 * Template Name: Hot Sales
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header ac-page-header-sale">
    <div class="ac-container">
        <span class="ac-badge-hot"><i class="fas fa-fire"></i> <?php esc_html_e( 'Hot Sales', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Sweet Deals & Discounts', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Limited time offers on our most loved products', 'annie-cakes' ); ?></p>
        <div class="ac-countdown ac-countdown-light" id="ac-sale-countdown" data-date="<?php echo esc_attr( get_theme_mod( 'annie_sale_date', gmdate( 'Y-m-d', strtotime( '+30 days' ) ) ) ); ?>">
            <div class="ac-countdown-item"><span class="ac-countdown-num ac-days">00</span><span class="ac-countdown-label"><?php esc_html_e( 'Days', 'annie-cakes' ); ?></span></div>
            <div class="ac-countdown-item"><span class="ac-countdown-num ac-hours">00</span><span class="ac-countdown-label"><?php esc_html_e( 'Hours', 'annie-cakes' ); ?></span></div>
            <div class="ac-countdown-item"><span class="ac-countdown-num ac-minutes">00</span><span class="ac-countdown-label"><?php esc_html_e( 'Minutes', 'annie-cakes' ); ?></span></div>
            <div class="ac-countdown-item"><span class="ac-countdown-num ac-seconds">00</span><span class="ac-countdown-label"><?php esc_html_e( 'Seconds', 'annie-cakes' ); ?></span></div>
        </div>
    </div>
</section>

<section class="ac-section">
    <div class="ac-container">
        <div class="ac-products-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $sale_products = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'meta_query'     => array(
                        'relation' => 'OR',
                        array(
                            'key'     => '_sale_price',
                            'value'   => 0,
                            'compare' => '>',
                            'type'    => 'NUMERIC',
                        ),
                        array(
                            'key'     => '_min_variation_sale_price',
                            'value'   => 0,
                            'compare' => '>',
                            'type'    => 'NUMERIC',
                        ),
                    ),
                ) );

                if ( $sale_products->have_posts() ) {
                    while ( $sale_products->have_posts() ) {
                        $sale_products->the_post();
                        get_template_part( 'template-parts/product', 'card' );
                    }
                    wp_reset_postdata();
                } else {
                    ?>
                    <div class="ac-no-posts">
                        <i class="fas fa-tags"></i>
                        <h2><?php esc_html_e( 'No Sales Right Now', 'annie-cakes' ); ?></h2>
                        <p><?php esc_html_e( 'Check back soon for amazing deals!', 'annie-cakes' ); ?></p>
                        <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="ac-btn ac-btn-primary"><?php esc_html_e( 'Shop All Products', 'annie-cakes' ); ?></a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
