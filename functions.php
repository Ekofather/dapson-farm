<?php
/**
 * Feyikemi Portfolio Theme Functions
 *
 * @package Feyikemi_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'FEYIKEMI_VERSION', '1.0.0' );
define( 'FEYIKEMI_DIR', get_template_directory() );
define( 'FEYIKEMI_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function feyikemi_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 250,
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

    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'feyikemi-portfolio' ),
        'footer'  => esc_html__( 'Footer Menu', 'feyikemi-portfolio' ),
    ) );

    add_image_size( 'feyikemi-hero', 1920, 1080, true );
    add_image_size( 'feyikemi-about', 600, 700, true );
}
add_action( 'after_setup_theme', 'feyikemi_setup' );

/**
 * Enqueue Scripts and Styles
 */
function feyikemi_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'feyikemi-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap',
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
    wp_enqueue_style( 'feyikemi-main', FEYIKEMI_URI . '/assets/css/main.css', array(), FEYIKEMI_VERSION );
    wp_enqueue_style( 'feyikemi-responsive', FEYIKEMI_URI . '/assets/css/responsive.css', array( 'feyikemi-main' ), FEYIKEMI_VERSION );
    wp_enqueue_style( 'feyikemi-style', get_stylesheet_uri(), array(), FEYIKEMI_VERSION );

    // AOS JS
    wp_enqueue_script(
        'aos-js',
        'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js',
        array(),
        '2.3.4',
        true
    );

    // Theme Scripts
    wp_enqueue_script( 'feyikemi-main', FEYIKEMI_URI . '/assets/js/main.js', array( 'jquery', 'aos-js' ), FEYIKEMI_VERSION, true );

    // Contact form AJAX
    wp_localize_script( 'feyikemi-main', 'feyikemiAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce'   => wp_create_nonce( 'feyikemi_contact_nonce' ),
    ) );
}
add_action( 'wp_enqueue_scripts', 'feyikemi_scripts' );

/**
 * Include additional files
 */
require_once FEYIKEMI_DIR . '/inc/customizer.php';
require_once FEYIKEMI_DIR . '/inc/template-tags.php';
require_once FEYIKEMI_DIR . '/inc/theme-setup.php';

/**
 * Contact Form AJAX Handler
 */
function feyikemi_contact_form_handler() {
    check_ajax_referer( 'feyikemi_contact_nonce', 'nonce' );

    $name    = sanitize_text_field( $_POST['name'] ?? '' );
    $email   = sanitize_email( $_POST['email'] ?? '' );
    $subject = sanitize_text_field( $_POST['subject'] ?? '' );
    $message = sanitize_textarea_field( $_POST['message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $message ) ) {
        wp_send_json_error( array( 'message' => 'Please fill in all required fields.' ) );
    }

    $to      = get_theme_mod( 'feyikemi_contact_email', get_option( 'admin_email' ) );
    $subject = ! empty( $subject ) ? $subject : 'New Contact Form Message from ' . $name;
    $body    = sprintf(
        "Name: %s\nEmail: %s\nSubject: %s\n\nMessage:\n%s",
        $name,
        $email,
        $subject,
        $message
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail( $to, $subject, $body, $headers );

    if ( $sent ) {
        wp_send_json_success( array( 'message' => 'Your message has been sent successfully!' ) );
    } else {
        wp_send_json_error( array( 'message' => 'Failed to send message. Please try again.' ) );
    }
}
add_action( 'wp_ajax_feyikemi_contact', 'feyikemi_contact_form_handler' );
add_action( 'wp_ajax_nopriv_feyikemi_contact', 'feyikemi_contact_form_handler' );

/**
 * Custom excerpt length
 */
function feyikemi_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'feyikemi_excerpt_length' );

/**
 * Widgets
 */
function feyikemi_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 1', 'feyikemi-portfolio' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget 2', 'feyikemi-portfolio' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'feyikemi-portfolio' ),
        'id'            => 'blog-sidebar',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'feyikemi_widgets_init' );
