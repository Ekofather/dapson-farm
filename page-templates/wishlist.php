<?php
/**
 * Template Name: Wishlist
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <h1><i class="fas fa-heart"></i> <?php esc_html_e( 'My Wishlist', 'annie-cakes' ); ?></h1>
        <nav class="ac-breadcrumb">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'annie-cakes' ); ?></a>
            <span>/</span>
            <span><?php esc_html_e( 'Wishlist', 'annie-cakes' ); ?></span>
        </nav>
    </div>
</section>

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
                    <div class="ac-wishlist-item" data-product-id="<?php echo esc_attr( $product_id ); ?>">
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
                <div class="ac-wishlist-empty">
                    <i class="far fa-heart"></i>
                    <h2><?php esc_html_e( 'Your wishlist is empty', 'annie-cakes' ); ?></h2>
                    <p><?php esc_html_e( 'Browse our products and add your favourites!', 'annie-cakes' ); ?></p>
                    <a href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>" class="ac-btn ac-btn-primary ac-btn-lg">
                        <?php esc_html_e( 'Start Shopping', 'annie-cakes' ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();
