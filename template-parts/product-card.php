<?php
/**
 * Product Card Template Part
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
    return;
}

$product_id = $product->get_id();
?>
<div class="ac-product-card" data-aos="fade-up" data-product-id="<?php echo esc_attr( $product_id ); ?>">
    <div class="ac-product-card-img">
        <a href="<?php echo esc_url( get_permalink( $product_id ) ); ?>">
            <?php echo wp_kses_post( $product->get_image( 'annie-product-card' ) ); ?>
            <?php if ( $product->get_gallery_image_ids() ) : ?>
                <?php
                $gallery_ids = $product->get_gallery_image_ids();
                echo wp_get_attachment_image( $gallery_ids[0], 'annie-product-card', false, array( 'class' => 'ac-product-hover-img' ) );
                ?>
            <?php endif; ?>
        </a>

        <?php if ( $product->is_on_sale() ) : ?>
            <span class="ac-badge ac-badge-sale"><?php esc_html_e( 'Sale!', 'annie-cakes' ); ?></span>
        <?php endif; ?>

        <?php if ( $product->is_featured() ) : ?>
            <span class="ac-badge ac-badge-hot"><?php esc_html_e( 'Hot', 'annie-cakes' ); ?></span>
        <?php endif; ?>

        <?php
        $days_old = ( time() - strtotime( $product->get_date_created() ) ) / DAY_IN_SECONDS;
        if ( $days_old < 30 ) :
            ?>
            <span class="ac-badge ac-badge-new"><?php esc_html_e( 'New', 'annie-cakes' ); ?></span>
        <?php endif; ?>

        <div class="ac-product-actions">
            <button class="ac-product-action ac-wishlist-btn" data-product-id="<?php echo esc_attr( $product_id ); ?>" title="<?php esc_attr_e( 'Add to Wishlist', 'annie-cakes' ); ?>">
                <i class="<?php echo annie_cakes_is_in_wishlist( $product_id ) ? 'fas' : 'far'; ?> fa-heart"></i>
            </button>
            <button class="ac-product-action ac-quick-view-btn" data-product-id="<?php echo esc_attr( $product_id ); ?>" title="<?php esc_attr_e( 'Quick View', 'annie-cakes' ); ?>">
                <i class="fas fa-eye"></i>
            </button>
            <a href="<?php echo esc_url( $product->get_permalink() ); ?>" class="ac-product-action" title="<?php esc_attr_e( 'View Details', 'annie-cakes' ); ?>">
                <i class="fas fa-link"></i>
            </a>
        </div>
    </div>

    <div class="ac-product-card-body">
        <?php
        $cats = wc_get_product_category_list( $product_id, ', ' );
        if ( $cats ) {
            echo '<span class="ac-product-cat">' . wp_kses_post( $cats ) . '</span>';
        }
        ?>
        <h3 class="ac-product-title">
            <a href="<?php echo esc_url( get_permalink( $product_id ) ); ?>"><?php echo esc_html( $product->get_name() ); ?></a>
        </h3>

        <div class="ac-product-rating">
            <?php
            $rating = $product->get_average_rating();
            $count  = $product->get_review_count();
            echo wp_kses_post( wc_get_rating_html( $rating, $count ) );
            ?>
            <span class="ac-review-count">(<?php echo esc_html( $count ); ?>)</span>
        </div>

        <div class="ac-product-price">
            <?php echo wp_kses_post( $product->get_price_html() ); ?>
        </div>

        <div class="ac-product-card-footer">
            <?php if ( $product->is_in_stock() ) : ?>
                <button class="ac-btn ac-btn-primary ac-btn-sm ac-ajax-add-to-cart"
                        data-product-id="<?php echo esc_attr( $product_id ); ?>"
                        data-product-name="<?php echo esc_attr( $product->get_name() ); ?>">
                    <i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Add to Cart', 'annie-cakes' ); ?>
                </button>
            <?php else : ?>
                <span class="ac-out-of-stock"><?php esc_html_e( 'Out of Stock', 'annie-cakes' ); ?></span>
            <?php endif; ?>
        </div>
    </div>
</div>
