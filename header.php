<?php
/**
 * Header Template
 *
 * @package DemolaBakare
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
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Preloader -->
<div id="preloader" class="preloader">
    <div class="preloader-inner">
        <div class="preloader-emblem">
            <span class="emblem-letter">DB</span>
        </div>
        <div class="preloader-bar"><div class="preloader-progress"></div></div>
    </div>
</div>

<!-- Header -->
<header id="site-header" class="site-header">
    <div class="header-top-bar">
        <div class="container">
            <div class="top-bar-content">
                <div class="top-bar-left">
                    <span><i class="fas fa-envelope"></i> <?php echo esc_html( get_theme_mod( 'demola_email', 'info@demolabakare.com' ) ); ?></span>
                    <span><i class="fas fa-phone-alt"></i> <?php echo esc_html( get_theme_mod( 'demola_phone', '+234 XXX XXX XXXX' ) ); ?></span>
                </div>
                <div class="top-bar-right">
                    <?php
                    $social_links = array(
                        'twitter'  => get_theme_mod( 'demola_twitter', '#' ),
                        'linkedin' => get_theme_mod( 'demola_linkedin', '#' ),
                        'facebook' => get_theme_mod( 'demola_facebook', '#' ),
                        'youtube'  => get_theme_mod( 'demola_youtube', '#' ),
                    );
                    foreach ( $social_links as $platform => $url ) :
                        if ( $url && '#' !== $url ) :
                    ?>
                        <a href="<?php echo esc_url( $url ); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( ucfirst( $platform ) ); ?>">
                            <i class="fab fa-<?php echo esc_attr( $platform ); ?>"></i>
                        </a>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <nav class="main-navigation" id="main-nav">
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?>">
                    <?php if ( has_custom_logo() ) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="logo-text">
                            <span class="logo-name"><?php echo esc_html( get_theme_mod( 'demola_logo_name', 'Demola Bakare' ) ); ?></span>
                            <span class="logo-title"><?php echo esc_html( get_theme_mod( 'demola_logo_subtitle', 'FSI' ) ); ?></span>
                        </div>
                    <?php endif; ?>
                </a>

                <div class="nav-menu-wrapper" id="nav-menu">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'nav-menu',
                        'container'      => false,
                        'fallback_cb'    => 'demola_fallback_menu',
                        'depth'          => 2,
                    ) );
                    ?>
                </div>

                <div class="nav-actions">
                    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#contact' ); ?>" class="btn btn-primary btn-nav">Get In Touch</a>
                    <button class="mobile-menu-toggle" id="mobile-toggle" aria-label="Toggle Menu" aria-expanded="false">
                        <span class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<main id="main-content" class="site-main">

<?php
/**
 * Fallback menu if no menu is assigned
 */
function demola_fallback_menu() {
    $pages = array(
        ''             => 'Home',
        'about'        => 'About',
        'mri-elg'      => 'MRI-ELG',
        'services'     => 'Services',
        'speaking'     => 'Speaking',
        'media'        => 'Media',
        'gallery'      => 'Gallery',
        'blog'         => 'Insights',
        'contact'      => 'Contact',
    );
    echo '<ul class="nav-menu">';
    foreach ( $pages as $slug => $label ) {
        $url = empty( $slug ) ? home_url( '/' ) : home_url( '/' . $slug . '/' );
        $active = '';
        if ( empty( $slug ) && is_front_page() ) {
            $active = ' class="current-menu-item"';
        } elseif ( ! empty( $slug ) && is_page( $slug ) ) {
            $active = ' class="current-menu-item"';
        }
        printf( '<li%s><a href="%s">%s</a></li>', $active, esc_url( $url ), esc_html( $label ) );
    }
    echo '</ul>';
}
