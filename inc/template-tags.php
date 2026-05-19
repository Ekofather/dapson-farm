<?php
/**
 * Template Tags and Helper Functions
 *
 * @package Feyikemi_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Fallback menu when no menu is assigned
 */
function feyikemi_fallback_menu() {
    $pages = array(
        'home'         => __( 'Home', 'feyikemi-portfolio' ),
        'about'        => __( 'About', 'feyikemi-portfolio' ),
        'experience'   => __( 'Experience', 'feyikemi-portfolio' ),
        'education'    => __( 'Education', 'feyikemi-portfolio' ),
        'skills'       => __( 'Skills', 'feyikemi-portfolio' ),
        'achievements' => __( 'Achievements', 'feyikemi-portfolio' ),
        'contact'      => __( 'Contact', 'feyikemi-portfolio' ),
    );

    echo '<ul class="nav-menu">';
    foreach ( $pages as $slug => $label ) {
        $url = $slug === 'home' ? home_url( '/' ) : home_url( '/' . $slug . '/' );
        $page = get_page_by_path( $slug );
        if ( $page ) {
            $url = get_permalink( $page->ID );
        }
        $active = '';
        if ( $slug === 'home' && is_front_page() ) {
            $active = ' class="current-menu-item"';
        } elseif ( is_page( $slug ) ) {
            $active = ' class="current-menu-item"';
        }
        printf( '<li%s><a href="%s">%s</a></li>', $active, esc_url( $url ), esc_html( $label ) );
    }
    echo '</ul>';
}

/**
 * Footer fallback menu
 */
function feyikemi_footer_fallback_menu() {
    $pages = array(
        'about'      => __( 'About', 'feyikemi-portfolio' ),
        'experience' => __( 'Experience', 'feyikemi-portfolio' ),
        'skills'     => __( 'Skills', 'feyikemi-portfolio' ),
        'contact'    => __( 'Contact', 'feyikemi-portfolio' ),
    );

    echo '<ul class="footer-menu">';
    foreach ( $pages as $slug => $label ) {
        $page = get_page_by_path( $slug );
        $url  = $page ? get_permalink( $page->ID ) : home_url( '/' . $slug . '/' );
        printf( '<li><a href="%s">%s</a></li>', esc_url( $url ), esc_html( $label ) );
    }
    echo '</ul>';
}
