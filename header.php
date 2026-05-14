<?php
/**
 * Theme Header
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Preloader -->
<div id="ac-preloader" class="ac-preloader">
    <div class="ac-preloader-inner">
        <div class="ac-preloader-cake">
            <i class="fas fa-birthday-cake"></i>
        </div>
        <p><?php esc_html_e( 'Annie Cakes & Gift', 'annie-cakes' ); ?></p>
    </div>
</div>

<!-- Top Bar -->
<div class="ac-topbar">
    <div class="ac-container">
        <div class="ac-topbar-inner">
            <div class="ac-topbar-left">
                <span><i class="fas fa-envelope"></i> <?php echo esc_html( get_theme_mod( 'annie_email', 'hello@anniecakesandgift.com' ) ); ?></span>
                <span><i class="fas fa-phone"></i> <?php echo esc_html( get_theme_mod( 'annie_phone', '+234 800 000 0000' ) ); ?></span>
            </div>
            <div class="ac-topbar-right">
                <div class="ac-topbar-social">
                    <?php if ( get_theme_mod( 'annie_facebook' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'annie_facebook' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'annie_instagram' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'annie_instagram' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'annie_twitter' ) ) : ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'annie_twitter' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if ( get_theme_mod( 'annie_whatsapp' ) ) : ?>
                        <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp' ) ); ?>" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i></a>
                    <?php endif; ?>
                </div>
                <div class="ac-topbar-actions">
                    <button id="ac-dark-mode-toggle" class="ac-dark-toggle" aria-label="<?php esc_attr_e( 'Toggle dark mode', 'annie-cakes' ); ?>">
                        <i class="fas fa-moon"></i>
                        <i class="fas fa-sun"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Header -->
<header id="ac-header" class="ac-header">
    <div class="ac-container">
        <div class="ac-header-inner">
            <!-- Logo -->
            <div class="ac-logo">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ac-logo-text">
                        <span class="ac-logo-main"><?php bloginfo( 'name' ); ?></span>
                        <span class="ac-logo-tagline"><?php bloginfo( 'description' ); ?></span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Navigation -->
            <nav class="ac-nav" id="ac-main-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'annie-cakes' ); ?>">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'ac-nav-menu',
                    'container'      => false,
                    'fallback_cb'    => 'annie_cakes_fallback_menu',
                    'depth'          => 3,
                ) );
                ?>
            </nav>

            <!-- Header Actions -->
            <div class="ac-header-actions">
                <!-- Search -->
                <div class="ac-header-search">
                    <button class="ac-search-toggle" aria-label="<?php esc_attr_e( 'Search', 'annie-cakes' ); ?>">
                        <i class="fas fa-search"></i>
                    </button>
                    <div class="ac-search-overlay">
                        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="ac-search-form">
                            <input type="search" name="s" placeholder="<?php esc_attr_e( 'Search cakes, gifts...', 'annie-cakes' ); ?>" autocomplete="off">
                            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                                <input type="hidden" name="post_type" value="product">
                            <?php endif; ?>
                            <button type="submit"><i class="fas fa-search"></i></button>
                            <button type="button" class="ac-search-close"><i class="fas fa-times"></i></button>
                        </form>
                        <div class="ac-search-results"></div>
                    </div>
                </div>

                <!-- Wishlist -->
                <a href="<?php echo esc_url( get_permalink( get_option( 'annie_wishlist_page' ) ) ); ?>" class="ac-header-icon ac-wishlist-icon" aria-label="<?php esc_attr_e( 'Wishlist', 'annie-cakes' ); ?>">
                    <i class="fas fa-heart"></i>
                    <span class="ac-wishlist-count"><?php echo esc_html( annie_cakes_get_wishlist_count() ); ?></span>
                </a>

                <!-- Account -->
                <a href="<?php echo esc_url( function_exists( 'wc_get_account_endpoint_url' ) ? wc_get_page_permalink( 'myaccount' ) : wp_login_url() ); ?>" class="ac-header-icon" aria-label="<?php esc_attr_e( 'Account', 'annie-cakes' ); ?>">
                    <i class="fas fa-user"></i>
                </a>

                <!-- Cart -->
                <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                    <div class="ac-header-cart">
                        <button class="ac-cart-toggle ac-header-icon" aria-label="<?php esc_attr_e( 'Cart', 'annie-cakes' ); ?>">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="ac-cart-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Mobile Toggle -->
                <button class="ac-mobile-toggle" id="ac-mobile-toggle" aria-label="<?php esc_attr_e( 'Menu', 'annie-cakes' ); ?>">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="ac-mobile-menu" id="ac-mobile-menu">
    <div class="ac-mobile-menu-header">
        <div class="ac-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="ac-logo-text">
                <span class="ac-logo-main"><?php bloginfo( 'name' ); ?></span>
            </a>
        </div>
        <button class="ac-mobile-close" id="ac-mobile-close" aria-label="<?php esc_attr_e( 'Close menu', 'annie-cakes' ); ?>">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="ac-mobile-menu-body">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'mobile',
            'menu_class'     => 'ac-mobile-nav',
            'container'      => false,
            'fallback_cb'    => 'annie_cakes_fallback_menu',
            'depth'          => 2,
        ) );
        ?>
    </div>
    <div class="ac-mobile-menu-footer">
        <a href="tel:<?php echo esc_attr( get_theme_mod( 'annie_phone', '+2348000000000' ) ); ?>" class="ac-mobile-cta">
            <i class="fas fa-phone"></i> <?php esc_html_e( 'Call Us', 'annie-cakes' ); ?>
        </a>
        <a href="https://wa.me/<?php echo esc_attr( get_theme_mod( 'annie_whatsapp', '2348000000000' ) ); ?>" class="ac-mobile-cta ac-mobile-cta-wa" target="_blank" rel="noopener">
            <i class="fab fa-whatsapp"></i> <?php esc_html_e( 'WhatsApp', 'annie-cakes' ); ?>
        </a>
    </div>
</div>
<div class="ac-mobile-overlay" id="ac-mobile-overlay"></div>

<!-- Sticky Cart Sidebar -->
<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<div class="ac-cart-sidebar" id="ac-cart-sidebar">
    <div class="ac-cart-sidebar-header">
        <h3><i class="fas fa-shopping-bag"></i> <?php esc_html_e( 'Your Cart', 'annie-cakes' ); ?></h3>
        <button class="ac-cart-sidebar-close" id="ac-cart-sidebar-close"><i class="fas fa-times"></i></button>
    </div>
    <div class="ac-cart-sidebar-body">
        <?php if ( WC()->cart->is_empty() ) : ?>
            <div class="ac-cart-empty">
                <i class="fas fa-shopping-bag"></i>
                <p><?php esc_html_e( 'Your cart is empty', 'annie-cakes' ); ?></p>
                <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="ac-btn ac-btn-primary"><?php esc_html_e( 'Start Shopping', 'annie-cakes' ); ?></a>
            </div>
        <?php else : ?>
            <div class="ac-cart-items">
                <?php
                foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                    $product = $cart_item['data'];
                    ?>
                    <div class="ac-cart-item" data-key="<?php echo esc_attr( $cart_item_key ); ?>">
                        <div class="ac-cart-item-img">
                            <?php echo wp_kses_post( $product->get_image( 'thumbnail' ) ); ?>
                        </div>
                        <div class="ac-cart-item-info">
                            <h4><?php echo esc_html( $product->get_name() ); ?></h4>
                            <span class="ac-cart-item-price"><?php echo wp_kses_post( WC()->cart->get_product_price( $product ) ); ?> x <?php echo esc_html( $cart_item['quantity'] ); ?></span>
                        </div>
                        <button class="ac-cart-item-remove" data-key="<?php echo esc_attr( $cart_item_key ); ?>"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="ac-cart-sidebar-footer">
                <div class="ac-cart-subtotal">
                    <span><?php esc_html_e( 'Subtotal:', 'annie-cakes' ); ?></span>
                    <span><?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?></span>
                </div>
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="ac-btn ac-btn-outline"><?php esc_html_e( 'View Cart', 'annie-cakes' ); ?></a>
                <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="ac-btn ac-btn-primary"><?php esc_html_e( 'Checkout', 'annie-cakes' ); ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="ac-cart-overlay" id="ac-cart-overlay"></div>
<?php endif; ?>

<main id="ac-main" class="ac-main">
