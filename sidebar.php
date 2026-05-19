<?php
/**
 * Sidebar Template
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( is_active_sidebar( 'sidebar-blog' ) ) :
    dynamic_sidebar( 'sidebar-blog' );
endif;
