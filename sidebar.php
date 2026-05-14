<?php
/**
 * Default Sidebar
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( is_active_sidebar( 'blog-sidebar' ) ) {
    dynamic_sidebar( 'blog-sidebar' );
}
