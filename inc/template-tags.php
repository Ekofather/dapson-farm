<?php
/**
 * Template Tags
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Fallback menu
 */
function annie_cakes_fallback_menu() {
    echo '<ul class="ac-nav-menu">';
    echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'annie-cakes' ) . '</a></li>';
    if ( class_exists( 'WooCommerce' ) ) {
        echo '<li><a href="' . esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ) . '">' . esc_html__( 'Shop', 'annie-cakes' ) . '</a></li>';
    }
    echo '<li><a href="' . esc_url( home_url( '/custom-orders/' ) ) . '">' . esc_html__( 'Custom Orders', 'annie-cakes' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/about-us/' ) ) . '">' . esc_html__( 'About', 'annie-cakes' ) . '</a></li>';
    echo '<li><a href="' . esc_url( home_url( '/contact/' ) ) . '">' . esc_html__( 'Contact', 'annie-cakes' ) . '</a></li>';
    echo '</ul>';
}

/**
 * Breadcrumb
 */
function annie_cakes_breadcrumb() {
    if ( is_front_page() ) {
        return;
    }

    echo '<nav class="ac-breadcrumb">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'annie-cakes' ) . '</a>';

    if ( is_category() || is_single() ) {
        echo '<span>/</span>';
        the_category( ' / ' );
        if ( is_single() ) {
            echo '<span>/</span><span>';
            the_title();
            echo '</span>';
        }
    } elseif ( is_page() ) {
        echo '<span>/</span><span>';
        the_title();
        echo '</span>';
    } elseif ( is_search() ) {
        echo '<span>/</span><span>' . esc_html__( 'Search Results', 'annie-cakes' ) . '</span>';
    } elseif ( is_archive() ) {
        echo '<span>/</span><span>';
        the_archive_title();
        echo '</span>';
    }

    echo '</nav>';
}

/**
 * Posted on
 */
function annie_cakes_posted_on() {
    $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
    printf( $time_string, esc_attr( get_the_date( DATE_W3C ) ), esc_html( get_the_date() ) );
}

/**
 * Posted by
 */
function annie_cakes_posted_by() {
    printf(
        '<span class="byline"><i class="fas fa-user"></i> %s</span>',
        '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
    );
}

/**
 * Get sale badge percentage
 */
function annie_cakes_sale_percentage( $product ) {
    if ( ! $product->is_on_sale() ) {
        return '';
    }

    if ( $product->is_type( 'simple' ) ) {
        $regular = (float) $product->get_regular_price();
        $sale    = (float) $product->get_sale_price();
        if ( $regular > 0 ) {
            return round( ( ( $regular - $sale ) / $regular ) * 100 );
        }
    }
    return '';
}
