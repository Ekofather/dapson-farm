<?php
/**
 * Demo Content Import
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add admin menu for demo import
 */
function demola_add_admin_menu() {
    add_theme_page(
        __( 'Demola Bakare Setup', 'demola-bakare' ),
        __( 'Theme Setup', 'demola-bakare' ),
        'manage_options',
        'demola-setup',
        'demola_setup_page'
    );
}
add_action( 'admin_menu', 'demola_add_admin_menu' );

/**
 * Setup page callback
 */
function demola_setup_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Demola Bakare FSI — Theme Setup', 'demola-bakare' ); ?></h1>
        <p><?php esc_html_e( 'Use the buttons below to set up your website with demo content.', 'demola-bakare' ); ?></p>

        <div class="demola-setup-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:20px;margin-top:20px;">
            <!-- Create Pages -->
            <div class="card" style="padding:20px;">
                <h2><?php esc_html_e( 'Create Pages', 'demola-bakare' ); ?></h2>
                <p><?php esc_html_e( 'Creates all required pages with the correct templates assigned.', 'demola-bakare' ); ?></p>
                <form method="post" action="">
                    <?php wp_nonce_field( 'demola_create_pages', 'demola_pages_nonce' ); ?>
                    <button type="submit" name="demola_create_pages" class="button button-primary">
                        <?php esc_html_e( 'Create Pages', 'demola-bakare' ); ?>
                    </button>
                </form>
            </div>

            <!-- Create Menus -->
            <div class="card" style="padding:20px;">
                <h2><?php esc_html_e( 'Create Menus', 'demola-bakare' ); ?></h2>
                <p><?php esc_html_e( 'Sets up the primary and footer navigation menus.', 'demola-bakare' ); ?></p>
                <form method="post" action="">
                    <?php wp_nonce_field( 'demola_create_menus', 'demola_menus_nonce' ); ?>
                    <button type="submit" name="demola_create_menus" class="button button-primary">
                        <?php esc_html_e( 'Create Menus', 'demola-bakare' ); ?>
                    </button>
                </form>
            </div>

            <!-- Set Homepage -->
            <div class="card" style="padding:20px;">
                <h2><?php esc_html_e( 'Set Homepage', 'demola-bakare' ); ?></h2>
                <p><?php esc_html_e( 'Sets the front page to display the homepage template.', 'demola-bakare' ); ?></p>
                <form method="post" action="">
                    <?php wp_nonce_field( 'demola_set_homepage', 'demola_homepage_nonce' ); ?>
                    <button type="submit" name="demola_set_homepage" class="button button-primary">
                        <?php esc_html_e( 'Set Homepage', 'demola-bakare' ); ?>
                    </button>
                </form>
            </div>
        </div>

        <?php
        // Handle form submissions
        if ( isset( $_POST['demola_create_pages'] ) && check_admin_referer( 'demola_create_pages', 'demola_pages_nonce' ) ) {
            demola_create_pages();
            echo '<div class="notice notice-success"><p>' . esc_html__( 'Pages created successfully!', 'demola-bakare' ) . '</p></div>';
        }

        if ( isset( $_POST['demola_create_menus'] ) && check_admin_referer( 'demola_create_menus', 'demola_menus_nonce' ) ) {
            demola_create_menus();
            echo '<div class="notice notice-success"><p>' . esc_html__( 'Menus created successfully!', 'demola-bakare' ) . '</p></div>';
        }

        if ( isset( $_POST['demola_set_homepage'] ) && check_admin_referer( 'demola_set_homepage', 'demola_homepage_nonce' ) ) {
            demola_set_homepage();
            echo '<div class="notice notice-success"><p>' . esc_html__( 'Homepage set successfully!', 'demola-bakare' ) . '</p></div>';
        }
        ?>
    </div>
    <?php
}

/**
 * Create all required pages
 */
function demola_create_pages() {
    $pages = array(
        array(
            'title'    => 'Home',
            'slug'     => 'home',
            'template' => '',
        ),
        array(
            'title'    => 'About',
            'slug'     => 'about',
            'template' => 'page-templates/about.php',
        ),
        array(
            'title'    => 'MRI-ELG',
            'slug'     => 'mri-elg',
            'template' => 'page-templates/mri-elg.php',
        ),
        array(
            'title'    => 'Services',
            'slug'     => 'services',
            'template' => 'page-templates/services.php',
        ),
        array(
            'title'    => 'Speaking & Engagements',
            'slug'     => 'speaking',
            'template' => 'page-templates/speaking.php',
        ),
        array(
            'title'    => 'Media & Publications',
            'slug'     => 'media',
            'template' => 'page-templates/media.php',
        ),
        array(
            'title'    => 'Gallery',
            'slug'     => 'gallery',
            'template' => 'page-templates/gallery.php',
        ),
        array(
            'title'    => 'Insights',
            'slug'     => 'blog',
            'template' => '',
        ),
        array(
            'title'    => 'Contact',
            'slug'     => 'contact',
            'template' => 'page-templates/contact.php',
        ),
    );

    foreach ( $pages as $page ) {
        $existing = get_page_by_path( $page['slug'] );
        if ( ! $existing ) {
            $page_id = wp_insert_post( array(
                'post_title'   => $page['title'],
                'post_name'    => $page['slug'],
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ) );

            if ( $page_id && $page['template'] ) {
                update_post_meta( $page_id, '_wp_page_template', $page['template'] );
            }
        }
    }
}

/**
 * Create navigation menus
 */
function demola_create_menus() {
    $menu_name = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object( $menu_name );

    if ( ! $menu_exists ) {
        $menu_id = wp_create_nav_menu( $menu_name );

        $pages = array( 'Home', 'About', 'MRI-ELG', 'Services', 'Speaking & Engagements', 'Media & Publications', 'Gallery', 'Insights', 'Contact' );
        $slugs = array( 'home', 'about', 'mri-elg', 'services', 'speaking', 'media', 'gallery', 'blog', 'contact' );

        foreach ( $pages as $i => $title ) {
            $page = get_page_by_path( $slugs[ $i ] );
            if ( $page ) {
                wp_update_nav_menu_item( $menu_id, 0, array(
                    'menu-item-title'     => $title,
                    'menu-item-object-id' => $page->ID,
                    'menu-item-object'    => 'page',
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                    'menu-item-position'  => $i + 1,
                ) );
            }
        }

        $locations = get_theme_mod( 'nav_menu_locations', array() );
        $locations['primary'] = $menu_id;
        $locations['footer']  = $menu_id;
        set_theme_mod( 'nav_menu_locations', $locations );
    }
}

/**
 * Set homepage
 */
function demola_set_homepage() {
    $home = get_page_by_path( 'home' );
    $blog = get_page_by_path( 'blog' );

    if ( $home ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home->ID );
    }
    if ( $blog ) {
        update_option( 'page_for_posts', $blog->ID );
    }
}
