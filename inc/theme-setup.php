<?php
/**
 * Theme Setup - Auto-create pages and admin setup page
 *
 * @package Feyikemi_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Add admin menu for theme setup
 */
function feyikemi_admin_menu() {
    add_theme_page(
        __( 'Portfolio Setup', 'feyikemi-portfolio' ),
        __( 'Portfolio Setup', 'feyikemi-portfolio' ),
        'manage_options',
        'feyikemi-setup',
        'feyikemi_setup_page'
    );
}
add_action( 'admin_menu', 'feyikemi_admin_menu' );

/**
 * Admin setup page
 */
function feyikemi_setup_page() {
    if ( isset( $_POST['feyikemi_create_pages'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'feyikemi_setup' ) ) {
        feyikemi_create_pages();
        echo '<div class="notice notice-success"><p>' . esc_html__( 'Pages created successfully! Go to Settings > Reading to set your homepage.', 'feyikemi-portfolio' ) . '</p></div>';
    }

    if ( isset( $_POST['feyikemi_create_menu'] ) && wp_verify_nonce( $_POST['_wpnonce'], 'feyikemi_setup' ) ) {
        feyikemi_create_menu();
        echo '<div class="notice notice-success"><p>' . esc_html__( 'Navigation menu created and assigned!', 'feyikemi-portfolio' ) . '</p></div>';
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Feyikemi Portfolio - Theme Setup', 'feyikemi-portfolio' ); ?></h1>

        <div style="max-width:800px; margin-top:20px;">
            <div style="background:#fff; padding:20px 30px; border:1px solid #ddd; border-radius:8px; margin-bottom:20px;">
                <h2><?php esc_html_e( 'Step 1: Create Portfolio Pages', 'feyikemi-portfolio' ); ?></h2>
                <p><?php esc_html_e( 'This will create all the necessary pages for your portfolio with the correct page templates assigned.', 'feyikemi-portfolio' ); ?></p>
                <p><strong><?php esc_html_e( 'Pages to be created:', 'feyikemi-portfolio' ); ?></strong> <?php esc_html_e( 'About, Experience, Education, Skills, Achievements, Contact', 'feyikemi-portfolio' ); ?></p>
                <form method="post">
                    <?php wp_nonce_field( 'feyikemi_setup' ); ?>
                    <button type="submit" name="feyikemi_create_pages" class="button button-primary"><?php esc_html_e( 'Create Pages', 'feyikemi-portfolio' ); ?></button>
                </form>
            </div>

            <div style="background:#fff; padding:20px 30px; border:1px solid #ddd; border-radius:8px; margin-bottom:20px;">
                <h2><?php esc_html_e( 'Step 2: Create Navigation Menu', 'feyikemi-portfolio' ); ?></h2>
                <p><?php esc_html_e( 'This will create and assign the primary navigation menu with all portfolio pages.', 'feyikemi-portfolio' ); ?></p>
                <form method="post">
                    <?php wp_nonce_field( 'feyikemi_setup' ); ?>
                    <button type="submit" name="feyikemi_create_menu" class="button button-primary"><?php esc_html_e( 'Create Menu', 'feyikemi-portfolio' ); ?></button>
                </form>
            </div>

            <div style="background:#fff; padding:20px 30px; border:1px solid #ddd; border-radius:8px; margin-bottom:20px;">
                <h2><?php esc_html_e( 'Step 3: Set Homepage', 'feyikemi-portfolio' ); ?></h2>
                <p><?php esc_html_e( 'Go to Settings > Reading and set "Your homepage displays" to "A static page", then select the front page.', 'feyikemi-portfolio' ); ?></p>
                <a href="<?php echo admin_url( 'options-reading.php' ); ?>" class="button"><?php esc_html_e( 'Go to Reading Settings', 'feyikemi-portfolio' ); ?></a>
            </div>

            <div style="background:#fff; padding:20px 30px; border:1px solid #ddd; border-radius:8px; margin-bottom:20px;">
                <h2><?php esc_html_e( 'Step 4: Customize Content', 'feyikemi-portfolio' ); ?></h2>
                <p><?php esc_html_e( 'All portfolio content can be edited from the WordPress Customizer. Go to Appearance > Customize > Portfolio Settings.', 'feyikemi-portfolio' ); ?></p>
                <a href="<?php echo admin_url( 'customize.php' ); ?>" class="button button-primary"><?php esc_html_e( 'Open Customizer', 'feyikemi-portfolio' ); ?></a>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Create all portfolio pages
 */
function feyikemi_create_pages() {
    $pages = array(
        'about' => array(
            'title'    => __( 'About', 'feyikemi-portfolio' ),
            'template' => 'page-templates/about.php',
        ),
        'experience' => array(
            'title'    => __( 'Experience', 'feyikemi-portfolio' ),
            'template' => 'page-templates/experience.php',
        ),
        'education' => array(
            'title'    => __( 'Education', 'feyikemi-portfolio' ),
            'template' => 'page-templates/education.php',
        ),
        'skills' => array(
            'title'    => __( 'Skills', 'feyikemi-portfolio' ),
            'template' => 'page-templates/skills.php',
        ),
        'achievements' => array(
            'title'    => __( 'Achievements', 'feyikemi-portfolio' ),
            'template' => 'page-templates/achievements.php',
        ),
        'contact' => array(
            'title'    => __( 'Contact', 'feyikemi-portfolio' ),
            'template' => 'page-templates/contact.php',
        ),
    );

    foreach ( $pages as $slug => $page_data ) {
        $existing = get_page_by_path( $slug );
        if ( ! $existing ) {
            $page_id = wp_insert_post( array(
                'post_title'   => $page_data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            }
        }
    }
}

/**
 * Create navigation menu
 */
function feyikemi_create_menu() {
    $menu_name   = 'Primary Menu';
    $menu_exists = wp_get_nav_menu_object( $menu_name );

    if ( ! $menu_exists ) {
        $menu_id = wp_create_nav_menu( $menu_name );

        wp_update_nav_menu_item( $menu_id, 0, array(
            'menu-item-title'  => __( 'Home', 'feyikemi-portfolio' ),
            'menu-item-url'    => home_url( '/' ),
            'menu-item-status' => 'publish',
            'menu-item-type'   => 'custom',
        ) );

        $page_slugs = array( 'about', 'experience', 'education', 'skills', 'achievements', 'contact' );
        foreach ( $page_slugs as $slug ) {
            $page = get_page_by_path( $slug );
            if ( $page ) {
                wp_update_nav_menu_item( $menu_id, 0, array(
                    'menu-item-title'     => $page->post_title,
                    'menu-item-object'    => 'page',
                    'menu-item-object-id' => $page->ID,
                    'menu-item-type'      => 'post_type',
                    'menu-item-status'    => 'publish',
                ) );
            }
        }

        $locations = get_theme_mod( 'nav_menu_locations' );
        $locations['primary'] = $menu_id;
        $locations['footer']  = $menu_id;
        set_theme_mod( 'nav_menu_locations', $locations );
    }
}
