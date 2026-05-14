<?php
/**
 * Annie Cakes & Gift Theme Functions
 *
 * @package AnnieCakes
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'ANNIE_CAKES_VERSION', '1.0.0' );
define( 'ANNIE_CAKES_DIR', get_template_directory() );
define( 'ANNIE_CAKES_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function annie_cakes_setup() {
    load_theme_textdomain( 'annie-cakes', ANNIE_CAKES_DIR . '/languages' );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    add_image_size( 'annie-hero', 1920, 800, true );
    add_image_size( 'annie-product-card', 400, 400, true );
    add_image_size( 'annie-gallery', 600, 600, true );
    add_image_size( 'annie-blog-thumb', 800, 500, true );

    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'annie-cakes' ),
        'footer'    => esc_html__( 'Footer Menu', 'annie-cakes' ),
        'mobile'    => esc_html__( 'Mobile Menu', 'annie-cakes' ),
    ) );
}
add_action( 'after_setup_theme', 'annie_cakes_setup' );

/**
 * Content Width
 */
function annie_cakes_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'annie_cakes_content_width', 1200 );
}
add_action( 'after_setup_theme', 'annie_cakes_content_width', 0 );

/**
 * Register Widget Areas
 */
function annie_cakes_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Shop Sidebar', 'annie-cakes' ),
        'id'            => 'shop-sidebar',
        'description'   => esc_html__( 'Sidebar for shop pages.', 'annie-cakes' ),
        'before_widget' => '<div id="%1$s" class="ac-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="ac-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'annie-cakes' ),
        'id'            => 'blog-sidebar',
        'description'   => esc_html__( 'Sidebar for blog pages.', 'annie-cakes' ),
        'before_widget' => '<div id="%1$s" class="ac-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="ac-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'annie-cakes' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="ac-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ac-footer-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'annie-cakes' ),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="ac-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ac-footer-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 3', 'annie-cakes' ),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="ac-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ac-footer-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 4', 'annie-cakes' ),
        'id'            => 'footer-4',
        'before_widget' => '<div id="%1$s" class="ac-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="ac-footer-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'annie_cakes_widgets_init' );

/**
 * Enqueue Styles & Scripts
 */
function annie_cakes_scripts() {
    // Google Fonts
    wp_enqueue_style( 'annie-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&family=Poppins:wght@300;400;500;600;700&display=swap', array(), null );

    // Font Awesome
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

    // AOS Animate on Scroll
    wp_enqueue_style( 'aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4' );

    // Swiper Slider
    wp_enqueue_style( 'swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css', array(), '11.0.5' );

    // Theme Styles
    wp_enqueue_style( 'annie-main', ANNIE_CAKES_URI . '/assets/css/main.css', array(), ANNIE_CAKES_VERSION );
    wp_enqueue_style( 'annie-woocommerce', ANNIE_CAKES_URI . '/assets/css/woocommerce.css', array(), ANNIE_CAKES_VERSION );
    wp_enqueue_style( 'annie-responsive', ANNIE_CAKES_URI . '/assets/css/responsive.css', array(), ANNIE_CAKES_VERSION );
    wp_enqueue_style( 'annie-cakes-style', get_stylesheet_uri(), array(), ANNIE_CAKES_VERSION );

    // AOS JS
    wp_enqueue_script( 'aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array(), '2.3.4', true );

    // Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array(), '11.0.5', true );

    // Theme Scripts
    wp_enqueue_script( 'annie-main', ANNIE_CAKES_URI . '/assets/js/main.js', array( 'jquery', 'aos-js', 'swiper-js' ), ANNIE_CAKES_VERSION, true );

    wp_localize_script( 'annie-main', 'annieCakes', array(
        'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
        'nonce'      => wp_create_nonce( 'annie_cakes_nonce' ),
        'cartUrl'    => function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : '',
        'checkoutUrl'=> function_exists( 'wc_get_checkout_url' ) ? wc_get_checkout_url() : '',
        'currency'   => function_exists( 'get_woocommerce_currency_symbol' ) ? get_woocommerce_currency_symbol() : '$',
        'i18n'       => array(
            'addedToCart'  => esc_html__( 'Added to cart!', 'annie-cakes' ),
            'addedToWish'  => esc_html__( 'Added to wishlist!', 'annie-cakes' ),
            'removedWish'  => esc_html__( 'Removed from wishlist.', 'annie-cakes' ),
            'quickView'    => esc_html__( 'Quick View', 'annie-cakes' ),
            'loading'      => esc_html__( 'Loading...', 'annie-cakes' ),
        ),
    ) );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'annie_cakes_scripts' );

/**
 * Include theme modules
 */
require_once ANNIE_CAKES_DIR . '/inc/customizer.php';
require_once ANNIE_CAKES_DIR . '/inc/template-tags.php';
require_once ANNIE_CAKES_DIR . '/inc/custom-post-types.php';
require_once ANNIE_CAKES_DIR . '/inc/woocommerce-functions.php';
require_once ANNIE_CAKES_DIR . '/inc/ajax-handlers.php';
require_once ANNIE_CAKES_DIR . '/inc/wishlist.php';
require_once ANNIE_CAKES_DIR . '/inc/order-tracking.php';
require_once ANNIE_CAKES_DIR . '/inc/custom-orders.php';
require_once ANNIE_CAKES_DIR . '/inc/loyalty-system.php';
require_once ANNIE_CAKES_DIR . '/inc/demo-content.php';

/**
 * Admin Enqueue
 */
function annie_cakes_admin_scripts() {
    wp_enqueue_style( 'annie-admin', ANNIE_CAKES_URI . '/assets/css/admin.css', array(), ANNIE_CAKES_VERSION );
    wp_enqueue_script( 'annie-admin', ANNIE_CAKES_URI . '/assets/js/admin.js', array( 'jquery' ), ANNIE_CAKES_VERSION, true );
    wp_localize_script( 'annie-admin', 'annieCakesAdmin', array(
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'annie_cakes_admin_nonce' ),
    ) );
}
add_action( 'admin_enqueue_scripts', 'annie_cakes_admin_scripts' );

/**
 * AJAX Cart Fragments
 */
function annie_cakes_cart_count_fragment( $fragments ) {
    ob_start();
    ?>
    <span class="ac-cart-count"><?php echo esc_html( WC()->cart->get_cart_contents_count() ); ?></span>
    <?php
    $fragments['span.ac-cart-count'] = ob_get_clean();
    return $fragments;
}
if ( class_exists( 'WooCommerce' ) ) {
    add_filter( 'woocommerce_add_to_cart_fragments', 'annie_cakes_cart_count_fragment' );
}

/**
 * Body Classes
 */
function annie_cakes_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'ac-home';
    }
    if ( class_exists( 'WooCommerce' ) ) {
        if ( is_shop() || is_product_category() || is_product_tag() ) {
            $classes[] = 'ac-shop-page';
        }
        if ( is_product() ) {
            $classes[] = 'ac-product-page';
        }
    }
    return $classes;
}
add_filter( 'body_class', 'annie_cakes_body_classes' );

/**
 * Excerpt Length
 */
function annie_cakes_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'annie_cakes_excerpt_length' );

function annie_cakes_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'annie_cakes_excerpt_more' );
