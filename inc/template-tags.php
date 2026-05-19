<?php
/**
 * Template Tags & Helper Functions
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Calculate reading time for a post
 */
function demola_reading_time( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $content    = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( wp_strip_all_tags( $content ) );
    $time       = max( 1, ceil( $word_count / 250 ) );
    return $time;
}

/**
 * Get social sharing URLs
 */
function demola_get_share_urls( $post_id = null ) {
    if ( ! $post_id ) {
        $post_id = get_the_ID();
    }
    $url   = rawurlencode( get_permalink( $post_id ) );
    $title = rawurlencode( get_the_title( $post_id ) );

    return array(
        'twitter'  => 'https://twitter.com/intent/tweet?url=' . $url . '&text=' . $title,
        'linkedin' => 'https://www.linkedin.com/sharing/share-offsite/?url=' . $url,
        'facebook' => 'https://www.facebook.com/sharer/sharer.php?u=' . $url,
        'whatsapp' => 'https://wa.me/?text=' . $title . '%20' . $url,
    );
}

/**
 * Breadcrumbs
 */
function demola_breadcrumbs() {
    if ( is_front_page() ) {
        return;
    }

    echo '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    echo '<div class="container">';
    echo '<a href="' . esc_url( home_url( '/' ) ) . '">Home</a>';

    if ( is_page() ) {
        $ancestors = get_post_ancestors( get_the_ID() );
        if ( $ancestors ) {
            $ancestors = array_reverse( $ancestors );
            foreach ( $ancestors as $ancestor ) {
                echo ' <span class="sep">/</span> ';
                echo '<a href="' . esc_url( get_permalink( $ancestor ) ) . '">' . esc_html( get_the_title( $ancestor ) ) . '</a>';
            }
        }
        echo ' <span class="sep">/</span> ';
        echo '<span class="current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_single() ) {
        $categories = get_the_category();
        if ( $categories ) {
            echo ' <span class="sep">/</span> ';
            echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
        }
        echo ' <span class="sep">/</span> ';
        echo '<span class="current">' . esc_html( get_the_title() ) . '</span>';
    } elseif ( is_category() ) {
        echo ' <span class="sep">/</span> ';
        echo '<span class="current">' . esc_html( single_cat_title( '', false ) ) . '</span>';
    } elseif ( is_search() ) {
        echo ' <span class="sep">/</span> ';
        echo '<span class="current">Search Results</span>';
    } elseif ( is_404() ) {
        echo ' <span class="sep">/</span> ';
        echo '<span class="current">Page Not Found</span>';
    } elseif ( is_archive() ) {
        echo ' <span class="sep">/</span> ';
        echo '<span class="current">' . esc_html( get_the_archive_title() ) . '</span>';
    }

    echo '</div>';
    echo '</nav>';
}

/**
 * Post pagination
 */
function demola_pagination() {
    the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => '<i class="fas fa-chevron-left"></i> Previous',
        'next_text' => 'Next <i class="fas fa-chevron-right"></i>',
        'class'     => 'demola-pagination',
    ) );
}

/**
 * Posted on helper
 */
function demola_posted_on() {
    printf(
        '<span class="posted-on"><i class="far fa-calendar-alt"></i> <time datetime="%1$s">%2$s</time></span>',
        esc_attr( get_the_date( DATE_W3C ) ),
        esc_html( get_the_date() )
    );
}

/**
 * Posted by helper
 */
function demola_posted_by() {
    printf(
        '<span class="byline"><i class="far fa-user"></i> %s</span>',
        esc_html( get_the_author() )
    );
}
