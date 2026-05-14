<?php
/**
 * Template Name: Wishlist
 *
 * @package AnnieCakes
 */

get_header();
?>

<div class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'My Favourites', 'annie-cakes' ); ?></span>
        <h1><i class="fas fa-heart" style="color:var(--ac-gold);"></i> <?php esc_html_e( 'My Wishlist', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Your saved items — ready to order when you are.', 'annie-cakes' ); ?></p>
        <div class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span class="separator">/</span>
            <span><?php esc_html_e( 'Wishlist', 'annie-cakes' ); ?></span>
        </div>
    </div>
</div>

<section class="ac-section ac-wishlist-section">
    <div class="ac-container">
        <div class="ac-wishlist-grid" id="ac-wishlist-grid">
            <?php
            $wishlist = annie_cakes_get_wishlist();
            if ( ! empty( $wishlist ) && class_exists( 'WooCommerce' ) ) :
                foreach ( $wishlist as $product_id ) :
                    $product = wc_get_product( $product_id );
                    if ( ! $product ) {
                        continue;
                    }
                    setup_postdata( $product->get_id() );
                    ?>
                    <div class="ac-wishlist-item" data-product-id="<?php echo esc_attr( $product_id ); ?>" data-aos="fade-up">
                        <div class="ac-wishlist-item-img">
                            <a href="<?php echo esc_url( $product->get_permalink() ); ?>">
                                <?php echo wp_kses_post( $product->get_image( 'annie-product-card' ) ); ?>
                            </a>
                        </div>
                        <div class="ac-wishlist-item-info">
                            <h3><a href="<?php echo esc_url( $product->get_permalink() ); ?>"><?php echo esc_html( $product->get_name() ); ?></a></h3>
                            <div class="ac-product-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></div>
                            <div class="ac-wishlist-item-actions">
                                <?php if ( $product->is_in_stock() ) : ?>
                                    <button class="ac-btn ac-btn-primary ac-btn-sm ac-ajax-add-to-cart" data-product-id="<?php echo esc_attr( $product_id ); ?>">
                                        <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Add to Cart', 'annie-cakes' ); ?>
                                    </button>
                                <?php else : ?>
                                    <span class="ac-out-of-stock"><?php esc_html_e( 'Out of Stock', 'annie-cakes' ); ?></span>
                                <?php endif; ?>
                                <button class="ac-btn ac-btn-outline ac-btn-sm ac-wishlist-remove" data-product-id="<?php echo esc_attr( $product_id ); ?>">
                                    <i class="fas fa-trash-alt"></i> <?php esc_html_e( 'Remove', 'annie-cakes' ); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            else :
                ?>
                <div class="ac-wishlist-empty" data-aos="fade-up">
                    <i class="far fa-heart" style="font-size:4rem;color:var(--ac-gold);opacity:0.4;margin-bottom:20px;"></i>
                    <h2><?php esc_html_e( 'Your Wishlist is Empty', 'annie-cakes' ); ?></h2>
                    <p style="color:var(--ac-text-light);max-width:400px;margin:10px auto 30px;"><?php esc_html_e( 'You haven\'t saved any items yet. Browse our collection of premium cakes and gifts, and tap the heart icon to add your favourites here.', 'annie-cakes' ); ?></p>
                    <a href="<?php echo esc_url( function_exists( 'wc_get_page_id' ) ? get_permalink( wc_get_page_id( 'shop' ) ) : home_url( '/shop/' ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                        <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Start Shopping', 'annie-cakes' ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Suggested Products -->
<section class="ac-section" style="background:var(--ac-bg-alt);">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <h2><?php esc_html_e( 'You Might Also Like', 'annie-cakes' ); ?></h2>
            <p><?php esc_html_e( 'Popular products our customers love.', 'annie-cakes' ); ?></p>
        </div>
        <div class="ac-products-grid">
            <?php
            if ( class_exists( 'WooCommerce' ) ) {
                $popular = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => 4,
                    'meta_key'       => 'total_sales',
                    'orderby'        => 'meta_value_num',
                    'order'          => 'DESC',
                    'post__not_in'   => $wishlist ?: array(),
                ) );
                if ( $popular->have_posts() ) {
                    while ( $popular->have_posts() ) {
                        $popular->the_post();
                        get_template_part( 'template-parts/product-card' );
                    }
                    wp_reset_postdata();
                }
            }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
