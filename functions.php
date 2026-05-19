<?php
/**
 * Demola Bakare FSI Theme Functions
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'DEMOLA_THEME_VERSION', '1.0.0' );
define( 'DEMOLA_THEME_DIR', get_template_directory() );
define( 'DEMOLA_THEME_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function demola_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );
    add_theme_support( 'customize-selective-refresh-widgets' );
    add_theme_support( 'editor-styles' );

    add_image_size( 'demola-hero', 1920, 1080, true );
    add_image_size( 'demola-card', 600, 400, true );
    add_image_size( 'demola-portrait', 800, 1000, true );
    add_image_size( 'demola-gallery', 800, 600, true );

    register_nav_menus( array(
        'primary'   => esc_html__( 'Primary Menu', 'demola-bakare' ),
        'footer'    => esc_html__( 'Footer Menu', 'demola-bakare' ),
    ) );
}
add_action( 'after_setup_theme', 'demola_theme_setup' );

/**
 * Enqueue Scripts and Styles
 */
function demola_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'demola-google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',
        array(),
        null
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // AOS Animation Library
    wp_enqueue_style(
        'aos-css',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css',
        array(),
        '2.3.4'
    );

    // Theme Styles
    wp_enqueue_style(
        'demola-main',
        DEMOLA_THEME_URI . '/assets/css/main.css',
        array(),
        DEMOLA_THEME_VERSION
    );

    wp_enqueue_style(
        'demola-style',
        get_stylesheet_uri(),
        array( 'demola-main' ),
        DEMOLA_THEME_VERSION
    );

    // AOS Animation Library JS
    wp_enqueue_script(
        'aos-js',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js',
        array(),
        '2.3.4',
        true
    );

    // Theme JS
    wp_enqueue_script(
        'demola-main',
        DEMOLA_THEME_URI . '/assets/js/main.js',
        array( 'jquery', 'aos-js' ),
        DEMOLA_THEME_VERSION,
        true
    );

    wp_localize_script( 'demola-main', 'demolaAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'demola_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'demola_enqueue_assets' );

/**
 * Register Widget Areas
 */
function demola_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'demola-bakare' ),
        'id'            => 'sidebar-blog',
        'description'   => esc_html__( 'Sidebar for blog pages.', 'demola-bakare' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'demola-bakare' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'First footer widget area.', 'demola-bakare' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 2', 'demola-bakare' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Second footer widget area.', 'demola-bakare' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'demola_widgets_init' );

/**
 * Include theme files
 */
require_once DEMOLA_THEME_DIR . '/inc/customizer.php';
require_once DEMOLA_THEME_DIR . '/inc/custom-post-types.php';
require_once DEMOLA_THEME_DIR . '/inc/template-tags.php';
require_once DEMOLA_THEME_DIR . '/inc/demo-content.php';

/**
 * Custom excerpt length
 */
function demola_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'demola_excerpt_length' );

/**
 * Custom excerpt more
 */
function demola_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'demola_excerpt_more' );

/**
 * Add custom body classes
 */
function demola_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'front-page';
    }
    if ( is_page_template() ) {
        $classes[] = 'has-page-template';
    }
    return $classes;
}
add_filter( 'body_class', 'demola_body_classes' );

/**
 * Contact form handler
 */
function demola_handle_contact_form() {
    check_ajax_referer( 'demola_nonce', 'nonce' );

    $name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
    $email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
    $subject = sanitize_text_field( wp_unslash( $_POST['subject'] ?? '' ) );
    $message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    $to = get_option( 'admin_email' );
    $email_subject = sprintf( '[Website Contact] %s', $subject ?: 'New Message' );
    $body = sprintf(
        "Name: %s\nEmail: %s\nSubject: %s\n\nMessage:\n%s",
        $name,
        $email,
        $subject,
        $message
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        sprintf( 'Reply-To: %s <%s>', $name, $email ),
    );

    $sent = wp_mail( $to, $email_subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Thank you for your message. We will respond shortly.' ) );
    } else {
        wp_send_json_error( array( 'message' => 'There was an error sending your message. Please try again.' ) );
    }
}
add_action( 'wp_ajax_demola_contact', 'demola_handle_contact_form' );
add_action( 'wp_ajax_nopriv_demola_contact', 'demola_handle_contact_form' );

/**
 * Newsletter subscription handler
 */
function demola_handle_newsletter() {
    check_ajax_referer( 'demola_nonce', 'nonce' );

    $email = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );

    if ( empty( $email ) || ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => 'Please enter a valid email address.' ) );
    }

    $subscribers = get_option( 'demola_newsletter_subscribers', array() );
    if ( in_array( $email, $subscribers, true ) ) {
        wp_send_json_error( array( 'message' => 'This email is already subscribed.' ) );
    }

    $subscribers[] = $email;
    update_option( 'demola_newsletter_subscribers', $subscribers );

    wp_send_json_success( array( 'message' => 'Thank you for subscribing to our newsletter.' ) );
}
add_action( 'wp_ajax_demola_newsletter', 'demola_handle_newsletter' );
add_action( 'wp_ajax_nopriv_demola_newsletter', 'demola_handle_newsletter' );
