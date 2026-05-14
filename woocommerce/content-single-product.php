<?php
/**
 * Single Product Content
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $product;
?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'ac-single-product', $product ); ?>>

    <div class="ac-single-product-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 50px; align-items: start;">
        <div class="ac-single-product-images">
            <?php
            do_action( 'woocommerce_before_single_product_summary' );
            ?>
        </div>

        <div class="ac-single-product-info summary entry-summary">
            <?php
            do_action( 'woocommerce_single_product_summary' );
            ?>

            <div class="ac-product-meta-extra" style="margin-top: 20px; padding-top: 15px; border-top: 1px solid var(--ac-border);">
                <?php if ( $product->get_sku() ) : ?>
                    <p style="font-size: 0.9rem; color: var(--ac-text-muted); margin-bottom: 5px;">
                        <strong><?php esc_html_e( 'SKU:', 'annie-cakes' ); ?></strong> <?php echo esc_html( $product->get_sku() ); ?>
                    </p>
                <?php endif; ?>
                <p style="font-size: 0.9rem; color: var(--ac-text-muted); margin-bottom: 5px;">
                    <strong><?php esc_html_e( 'Category:', 'annie-cakes' ); ?></strong> <?php echo wp_kses_post( wc_get_product_category_list( $product->get_id() ) ); ?>
                </p>
                <?php if ( $product->get_tag_ids() ) : ?>
                    <p style="font-size: 0.9rem; color: var(--ac-text-muted);">
                        <strong><?php esc_html_e( 'Tags:', 'annie-cakes' ); ?></strong> <?php echo wp_kses_post( wc_get_product_tag_list( $product->get_id() ) ); ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php do_action( 'woocommerce_after_single_product_summary' ); ?>

</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
