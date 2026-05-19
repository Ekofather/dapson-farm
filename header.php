<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Preloader -->
<div id="preloader">
    <div class="preloader-inner">
        <div class="preloader-spinner"></div>
        <span class="preloader-text"><?php echo esc_html( get_theme_mod( 'feyikemi_preloader_text', 'Loading...' ) ); ?></span>
    </div>
</div>

<!-- Navigation -->
<header id="site-header" class="site-header">
    <div class="container">
        <nav class="main-nav">
            <div class="nav-brand">
                <?php if ( has_custom_logo() ) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title-link">
                        <span class="site-title"><?php echo esc_html( get_theme_mod( 'feyikemi_nav_name', 'Feyikemi' ) ); ?></span>
                    </a>
                <?php endif; ?>
            </div>

            <button class="mobile-menu-toggle" aria-label="Toggle Menu" aria-expanded="false">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu',
                'container'      => false,
                'fallback_cb'    => 'feyikemi_fallback_menu',
            ) );
            ?>
        </nav>
    </div>
</header>

<main id="main-content" class="site-main">
