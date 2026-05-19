<?php
/**
 * Custom Post Types & Taxonomies
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Custom Post Types
 */
function demola_register_post_types() {

    // Testimonials
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name'               => __( 'Testimonials', 'demola-bakare' ),
            'singular_name'      => __( 'Testimonial', 'demola-bakare' ),
            'add_new_item'       => __( 'Add New Testimonial', 'demola-bakare' ),
            'edit_item'          => __( 'Edit Testimonial', 'demola-bakare' ),
            'all_items'          => __( 'All Testimonials', 'demola-bakare' ),
            'search_items'       => __( 'Search Testimonials', 'demola-bakare' ),
            'not_found'          => __( 'No testimonials found.', 'demola-bakare' ),
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true,
    ) );

    // Speaking Engagements
    register_post_type( 'engagement', array(
        'labels' => array(
            'name'               => __( 'Engagements', 'demola-bakare' ),
            'singular_name'      => __( 'Engagement', 'demola-bakare' ),
            'add_new_item'       => __( 'Add New Engagement', 'demola-bakare' ),
            'edit_item'          => __( 'Edit Engagement', 'demola-bakare' ),
            'all_items'          => __( 'All Engagements', 'demola-bakare' ),
            'search_items'       => __( 'Search Engagements', 'demola-bakare' ),
            'not_found'          => __( 'No engagements found.', 'demola-bakare' ),
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-microphone',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest' => true,
    ) );

    // Publications
    register_post_type( 'publication', array(
        'labels' => array(
            'name'               => __( 'Publications', 'demola-bakare' ),
            'singular_name'      => __( 'Publication', 'demola-bakare' ),
            'add_new_item'       => __( 'Add New Publication', 'demola-bakare' ),
            'edit_item'          => __( 'Edit Publication', 'demola-bakare' ),
            'all_items'          => __( 'All Publications', 'demola-bakare' ),
            'search_items'       => __( 'Search Publications', 'demola-bakare' ),
            'not_found'          => __( 'No publications found.', 'demola-bakare' ),
        ),
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-media-document',
        'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'show_in_rest' => true,
    ) );

    // Gallery
    register_post_type( 'gallery_item', array(
        'labels' => array(
            'name'               => __( 'Gallery', 'demola-bakare' ),
            'singular_name'      => __( 'Gallery Item', 'demola-bakare' ),
            'add_new_item'       => __( 'Add New Gallery Item', 'demola-bakare' ),
            'edit_item'          => __( 'Edit Gallery Item', 'demola-bakare' ),
            'all_items'          => __( 'All Gallery Items', 'demola-bakare' ),
            'search_items'       => __( 'Search Gallery', 'demola-bakare' ),
            'not_found'          => __( 'No gallery items found.', 'demola-bakare' ),
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-format-gallery',
        'supports'     => array( 'title', 'thumbnail', 'excerpt' ),
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'demola_register_post_types' );

/**
 * Register Custom Taxonomies
 */
function demola_register_taxonomies() {

    // Publication Types
    register_taxonomy( 'publication_type', 'publication', array(
        'labels' => array(
            'name'          => __( 'Publication Types', 'demola-bakare' ),
            'singular_name' => __( 'Publication Type', 'demola-bakare' ),
            'search_items'  => __( 'Search Types', 'demola-bakare' ),
            'all_items'     => __( 'All Types', 'demola-bakare' ),
            'edit_item'     => __( 'Edit Type', 'demola-bakare' ),
            'add_new_item'  => __( 'Add New Type', 'demola-bakare' ),
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array( 'slug' => 'publication-type' ),
    ) );

    // Gallery Categories
    register_taxonomy( 'gallery_category', 'gallery_item', array(
        'labels' => array(
            'name'          => __( 'Gallery Categories', 'demola-bakare' ),
            'singular_name' => __( 'Gallery Category', 'demola-bakare' ),
            'search_items'  => __( 'Search Categories', 'demola-bakare' ),
            'all_items'     => __( 'All Categories', 'demola-bakare' ),
            'edit_item'     => __( 'Edit Category', 'demola-bakare' ),
            'add_new_item'  => __( 'Add New Category', 'demola-bakare' ),
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array( 'slug' => 'gallery-category' ),
    ) );

    // Engagement Types
    register_taxonomy( 'engagement_type', 'engagement', array(
        'labels' => array(
            'name'          => __( 'Engagement Types', 'demola-bakare' ),
            'singular_name' => __( 'Engagement Type', 'demola-bakare' ),
            'search_items'  => __( 'Search Types', 'demola-bakare' ),
            'all_items'     => __( 'All Types', 'demola-bakare' ),
            'edit_item'     => __( 'Edit Type', 'demola-bakare' ),
            'add_new_item'  => __( 'Add New Type', 'demola-bakare' ),
        ),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array( 'slug' => 'engagement-type' ),
    ) );
}
add_action( 'init', 'demola_register_taxonomies' );

/**
 * Add Meta Boxes for CPTs
 */
function demola_add_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        __( 'Testimonial Details', 'demola-bakare' ),
        'demola_testimonial_meta_box',
        'testimonial',
        'normal',
        'high'
    );

    add_meta_box(
        'engagement_details',
        __( 'Engagement Details', 'demola-bakare' ),
        'demola_engagement_meta_box',
        'engagement',
        'normal',
        'high'
    );

    add_meta_box(
        'publication_details',
        __( 'Publication Details', 'demola-bakare' ),
        'demola_publication_meta_box',
        'publication',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'demola_add_meta_boxes' );

/**
 * Testimonial Meta Box Callback
 */
function demola_testimonial_meta_box( $post ) {
    wp_nonce_field( 'demola_testimonial_meta', 'demola_testimonial_nonce' );
    $role = get_post_meta( $post->ID, '_testimonial_role', true );
    $org  = get_post_meta( $post->ID, '_testimonial_organization', true );
    ?>
    <p>
        <label for="testimonial_role"><strong><?php esc_html_e( 'Role/Title:', 'demola-bakare' ); ?></strong></label><br>
        <input type="text" id="testimonial_role" name="testimonial_role" value="<?php echo esc_attr( $role ); ?>" style="width:100%;">
    </p>
    <p>
        <label for="testimonial_organization"><strong><?php esc_html_e( 'Organization:', 'demola-bakare' ); ?></strong></label><br>
        <input type="text" id="testimonial_organization" name="testimonial_organization" value="<?php echo esc_attr( $org ); ?>" style="width:100%;">
    </p>
    <?php
}

/**
 * Engagement Meta Box Callback
 */
function demola_engagement_meta_box( $post ) {
    wp_nonce_field( 'demola_engagement_meta', 'demola_engagement_nonce' );
    $date     = get_post_meta( $post->ID, '_engagement_date', true );
    $location = get_post_meta( $post->ID, '_engagement_location', true );
    $type     = get_post_meta( $post->ID, '_engagement_type', true );
    ?>
    <p>
        <label for="engagement_date"><strong><?php esc_html_e( 'Event Date:', 'demola-bakare' ); ?></strong></label><br>
        <input type="date" id="engagement_date" name="engagement_date" value="<?php echo esc_attr( $date ); ?>">
    </p>
    <p>
        <label for="engagement_location"><strong><?php esc_html_e( 'Location:', 'demola-bakare' ); ?></strong></label><br>
        <input type="text" id="engagement_location" name="engagement_location" value="<?php echo esc_attr( $location ); ?>" style="width:100%;">
    </p>
    <p>
        <label for="engagement_type_field"><strong><?php esc_html_e( 'Type:', 'demola-bakare' ); ?></strong></label><br>
        <select id="engagement_type_field" name="engagement_type_field">
            <option value="keynote" <?php selected( $type, 'keynote' ); ?>>Keynote Address</option>
            <option value="panel" <?php selected( $type, 'panel' ); ?>>Panel Discussion</option>
            <option value="workshop" <?php selected( $type, 'workshop' ); ?>>Workshop/Training</option>
            <option value="conference" <?php selected( $type, 'conference' ); ?>>Conference</option>
            <option value="lecture" <?php selected( $type, 'lecture' ); ?>>Guest Lecture</option>
            <option value="media" <?php selected( $type, 'media' ); ?>>Media Appearance</option>
        </select>
    </p>
    <?php
}

/**
 * Publication Meta Box Callback
 */
function demola_publication_meta_box( $post ) {
    wp_nonce_field( 'demola_publication_meta', 'demola_publication_nonce' );
    $pub_date = get_post_meta( $post->ID, '_publication_date', true );
    $pub_url  = get_post_meta( $post->ID, '_publication_url', true );
    ?>
    <p>
        <label for="publication_date"><strong><?php esc_html_e( 'Publication Date:', 'demola-bakare' ); ?></strong></label><br>
        <input type="date" id="publication_date" name="publication_date" value="<?php echo esc_attr( $pub_date ); ?>">
    </p>
    <p>
        <label for="publication_url"><strong><?php esc_html_e( 'External URL:', 'demola-bakare' ); ?></strong></label><br>
        <input type="url" id="publication_url" name="publication_url" value="<?php echo esc_attr( $pub_url ); ?>" style="width:100%;">
    </p>
    <?php
}

/**
 * Save Meta Box Data
 */
function demola_save_meta_boxes( $post_id ) {
    // Testimonial
    if ( isset( $_POST['demola_testimonial_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['demola_testimonial_nonce'] ) ), 'demola_testimonial_meta' ) ) {
        if ( isset( $_POST['testimonial_role'] ) ) {
            update_post_meta( $post_id, '_testimonial_role', sanitize_text_field( wp_unslash( $_POST['testimonial_role'] ) ) );
        }
        if ( isset( $_POST['testimonial_organization'] ) ) {
            update_post_meta( $post_id, '_testimonial_organization', sanitize_text_field( wp_unslash( $_POST['testimonial_organization'] ) ) );
        }
    }

    // Engagement
    if ( isset( $_POST['demola_engagement_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['demola_engagement_nonce'] ) ), 'demola_engagement_meta' ) ) {
        if ( isset( $_POST['engagement_date'] ) ) {
            update_post_meta( $post_id, '_engagement_date', sanitize_text_field( wp_unslash( $_POST['engagement_date'] ) ) );
        }
        if ( isset( $_POST['engagement_location'] ) ) {
            update_post_meta( $post_id, '_engagement_location', sanitize_text_field( wp_unslash( $_POST['engagement_location'] ) ) );
        }
        if ( isset( $_POST['engagement_type_field'] ) ) {
            update_post_meta( $post_id, '_engagement_type', sanitize_text_field( wp_unslash( $_POST['engagement_type_field'] ) ) );
        }
    }

    // Publication
    if ( isset( $_POST['demola_publication_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['demola_publication_nonce'] ) ), 'demola_publication_meta' ) ) {
        if ( isset( $_POST['publication_date'] ) ) {
            update_post_meta( $post_id, '_publication_date', sanitize_text_field( wp_unslash( $_POST['publication_date'] ) ) );
        }
        if ( isset( $_POST['publication_url'] ) ) {
            update_post_meta( $post_id, '_publication_url', esc_url_raw( wp_unslash( $_POST['publication_url'] ) ) );
        }
    }
}
add_action( 'save_post', 'demola_save_meta_boxes' );
