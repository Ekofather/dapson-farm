<?php
/**
 * Template Name: Hot Sales
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><i class="fas fa-fire"></i> <?php esc_html_e( 'Limited Time', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Hot Sales & Deals', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Grab these amazing deals before they\'re gone! Premium cakes and gifts at unbeatable prices.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'Hot Sales', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<!-- Countdown Banner -->
<section class="ac-section" style="background:linear-gradient(135deg,#3C1518,#5C3D2E);color:#fff;">
    <div class="ac-container" style="text-align:center;">
        <h2 style="color:#d4af37;margin-bottom:5px;" data-aos="fade-up"><?php echo esc_html( get_theme_mod( 'annie_sale_title', 'Seasonal Sale — Up to 40% Off!' ) ); ?></h2>
        <p style="color:rgba(255,255,255,0.8);margin-bottom:25px;" data-aos="fade-up"><?php esc_html_e( 'These deals won\'t last forever. Order now and save big on your favourite cakes and gifts.', 'annie-cakes' ); ?></p>
        <div class="ac-countdown" data-date="<?php echo esc_attr( get_theme_mod( 'annie_sale_end', gmdate( 'Y-m-d', strtotime( '+30 days' ) ) ) ); ?>" data-aos="fade-up">
            <div class="ac-countdown-item"><span class="number" data-days>00</span><span class="label"><?php esc_html_e( 'Days', 'annie-cakes' ); ?></span></div>
            <div class="ac-countdown-item"><span class="number" data-hours>00</span><span class="label"><?php esc_html_e( 'Hours', 'annie-cakes' ); ?></span></div>
            <div class="ac-countdown-item"><span class="number" data-minutes>00</span><span class="label"><?php esc_html_e( 'Mins', 'annie-cakes' ); ?></span></div>
            <div class="ac-countdown-item"><span class="number" data-seconds>00</span><span class="label"><?php esc_html_e( 'Secs', 'annie-cakes' ); ?></span></div>
        </div>
    </div>
</section>

<!-- Sale Products -->
<section class="ac-section">
    <div class="ac-container">
        <div class="ac-products-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $sale = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => 12,
                    'meta_query'     => array(
                        array( 'key' => '_sale_price', 'value' => 0, 'compare' => '>', 'type' => 'NUMERIC' ),
                    ),
                ) );
                if ( $sale->have_posts() ) {
                    while ( $sale->have_posts() ) {
                        $sale->the_post();
                        get_template_part( 'template-parts/product-card' );
                    }
                    wp_reset_postdata();
                }
            }
            if ( ! class_exists( 'WooCommerce' ) || empty( $sale ) || ! $sale->have_posts() ) {
                $sale_items = array(
                    array( 'name' => 'Chocolate Birthday Cake', 'orig' => '₦45,000', 'sale' => '₦32,000', 'pct' => '29%' ),
                    array( 'name' => 'Red Velvet Cake', 'orig' => '₦38,000', 'sale' => '₦25,000', 'pct' => '34%' ),
                    array( 'name' => 'Cupcake Box (12pcs)', 'orig' => '₦25,000', 'sale' => '₦18,000', 'pct' => '28%' ),
                    array( 'name' => 'Luxury Gift Hamper', 'orig' => '₦55,000', 'sale' => '₦38,000', 'pct' => '31%' ),
                    array( 'name' => 'Fruit Cake', 'orig' => '₦35,000', 'sale' => '₦22,000', 'pct' => '37%' ),
                    array( 'name' => 'Valentine Package', 'orig' => '₦60,000', 'sale' => '₦42,000', 'pct' => '30%' ),
                    array( 'name' => 'Teddy Gift Package', 'orig' => '₦40,000', 'sale' => '₦28,000', 'pct' => '30%' ),
                    array( 'name' => 'Kids Cartoon Cake', 'orig' => '₦48,000', 'sale' => '₦33,000', 'pct' => '31%' ),
                );
                foreach ( $sale_items as $si => $item ) : ?>
                <div class="ac-product-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $si % 4 ) * 80 ); ?>">
                    <div class="ac-product-image">
                        <div style="width:100%;height:100%;background:linear-gradient(135deg,#F5ECDF,#E8DDD4);display:flex;align-items:center;justify-content:center;">
                            <i class="fas fa-fire" style="font-size:3rem;color:#d4af37;opacity:0.4;"></i>
                        </div>
                        <div class="ac-product-badges"><span class="ac-badge ac-badge-sale">-<?php echo esc_html( $item['pct'] ); ?></span></div>
                    </div>
                    <div class="ac-product-info">
                        <h3><a href="#"><?php echo esc_html( $item['name'] ); ?></a></h3>
                        <div class="ac-product-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        <div class="ac-product-price">
                            <span class="original-price"><?php echo esc_html( $item['orig'] ); ?></span>
                            <span class="current-price"><?php echo esc_html( $item['sale'] ); ?></span>
                        </div>
                        <button class="ac-product-add-to-cart"><i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Add to Cart', 'annie-cakes' ); ?></button>
                    </div>
                </div>
                <?php endforeach;
            }
            ?>
        </div>
    </div>
</section>

<!-- Subscribe for deals -->
<section class="ac-section" style="background:var(--ac-bg-alt);">
    <div class="ac-container" style="text-align:center;" data-aos="fade-up">
        <h2><?php esc_html_e( 'Never Miss a Deal', 'annie-cakes' ); ?></h2>
        <p style="max-width:600px;margin:15px auto 30px;color:var(--ac-text-light);"><?php esc_html_e( 'Subscribe to our newsletter and be the first to know about flash sales, seasonal offers, and exclusive discount codes.', 'annie-cakes' ); ?></p>
        <form class="ac-newsletter-form" style="max-width:500px;margin:0 auto;display:flex;gap:10px;">
            <?php wp_nonce_field( 'annie_newsletter', 'newsletter_nonce' ); ?>
            <input type="email" name="email" placeholder="<?php esc_attr_e( 'Enter your email', 'annie-cakes' ); ?>" required style="flex:1;">
            <button type="submit" class="ac-btn ac-btn-primary"><?php esc_html_e( 'Subscribe', 'annie-cakes' ); ?></button>
        </form>
    </div>
</section>

<?php get_footer(); ?>
