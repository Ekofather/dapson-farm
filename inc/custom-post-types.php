<?php
/**
 * Custom Post Types & Taxonomies
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function annie_cakes_register_post_types() {
    // Testimonials
    register_post_type( 'ac_testimonial', array(
        'labels' => array(
            'name'               => __( 'Testimonials', 'annie-cakes' ),
            'singular_name'      => __( 'Testimonial', 'annie-cakes' ),
            'add_new'            => __( 'Add Testimonial', 'annie-cakes' ),
            'add_new_item'       => __( 'Add New Testimonial', 'annie-cakes' ),
            'edit_item'          => __( 'Edit Testimonial', 'annie-cakes' ),
            'all_items'          => __( 'All Testimonials', 'annie-cakes' ),
            'search_items'       => __( 'Search Testimonials', 'annie-cakes' ),
            'not_found'          => __( 'No testimonials found', 'annie-cakes' ),
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-format-quote',
        'supports'     => array( 'title', 'editor', 'thumbnail' ),
        'show_in_rest' => true,
    ) );

    // Gallery
    register_post_type( 'ac_gallery', array(
        'labels' => array(
            'name'               => __( 'Gallery', 'annie-cakes' ),
            'singular_name'      => __( 'Gallery Item', 'annie-cakes' ),
            'add_new'            => __( 'Add Gallery Item', 'annie-cakes' ),
            'add_new_item'       => __( 'Add New Gallery Item', 'annie-cakes' ),
            'edit_item'          => __( 'Edit Gallery Item', 'annie-cakes' ),
            'all_items'          => __( 'All Gallery Items', 'annie-cakes' ),
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-format-gallery',
        'supports'     => array( 'title', 'thumbnail' ),
        'show_in_rest' => true,
    ) );

    // Custom Orders
    register_post_type( 'ac_custom_order', array(
        'labels' => array(
            'name'               => __( 'Custom Orders', 'annie-cakes' ),
            'singular_name'      => __( 'Custom Order', 'annie-cakes' ),
            'all_items'          => __( 'All Custom Orders', 'annie-cakes' ),
            'edit_item'          => __( 'View Custom Order', 'annie-cakes' ),
            'search_items'       => __( 'Search Custom Orders', 'annie-cakes' ),
        ),
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-clipboard',
        'supports'            => array( 'title' ),
        'show_in_rest'        => true,
    ) );

    // Gallery Categories
    register_taxonomy( 'ac_gallery_cat', 'ac_gallery', array(
        'labels' => array(
            'name'          => __( 'Gallery Categories', 'annie-cakes' ),
            'singular_name' => __( 'Gallery Category', 'annie-cakes' ),
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
        'show_in_rest' => true,
    ) );
}
add_action( 'init', 'annie_cakes_register_post_types' );

/**
 * Testimonial Meta Box
 */
function annie_cakes_testimonial_meta_boxes() {
    add_meta_box( 'ac_testimonial_details', __( 'Testimonial Details', 'annie-cakes' ), 'annie_cakes_testimonial_meta_callback', 'ac_testimonial', 'normal' );
}
add_action( 'add_meta_boxes', 'annie_cakes_testimonial_meta_boxes' );

function annie_cakes_testimonial_meta_callback( $post ) {
    wp_nonce_field( 'annie_testimonial_meta', 'testimonial_meta_nonce' );
    $rating = get_post_meta( $post->ID, '_testimonial_rating', true ) ?: 5;
    $role   = get_post_meta( $post->ID, '_testimonial_role', true );
    ?>
    <p>
        <label for="testimonial_rating"><strong><?php esc_html_e( 'Rating (1-5):', 'annie-cakes' ); ?></strong></label><br>
        <input type="number" id="testimonial_rating" name="testimonial_rating" value="<?php echo esc_attr( $rating ); ?>" min="1" max="5" style="width: 80px;">
    </p>
    <p>
        <label for="testimonial_role"><strong><?php esc_html_e( 'Role / Title:', 'annie-cakes' ); ?></strong></label><br>
        <input type="text" id="testimonial_role" name="testimonial_role" value="<?php echo esc_attr( $role ); ?>" style="width: 100%;" placeholder="<?php esc_attr_e( 'e.g., Bride, Corporate Client', 'annie-cakes' ); ?>">
    </p>
    <?php
}

function annie_cakes_save_testimonial_meta( $post_id ) {
    if ( ! isset( $_POST['testimonial_meta_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['testimonial_meta_nonce'] ) ), 'annie_testimonial_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( isset( $_POST['testimonial_rating'] ) ) {
        update_post_meta( $post_id, '_testimonial_rating', absint( $_POST['testimonial_rating'] ) );
    }
    if ( isset( $_POST['testimonial_role'] ) ) {
        update_post_meta( $post_id, '_testimonial_role', sanitize_text_field( wp_unslash( $_POST['testimonial_role'] ) ) );
    }
}
add_action( 'save_post_ac_testimonial', 'annie_cakes_save_testimonial_meta' );
