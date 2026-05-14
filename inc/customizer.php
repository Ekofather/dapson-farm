<?php
/**
 * Theme Customizer Settings
 *
 * @package AnnieCakes
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function annie_cakes_customize_register( $wp_customize ) {
    // Annie Cakes Panel
    $wp_customize->add_panel( 'annie_cakes_panel', array(
        'title'    => __( 'Annie Cakes Settings', 'annie-cakes' ),
        'priority' => 30,
    ) );

    // General Settings
    $wp_customize->add_section( 'annie_general', array(
        'title' => __( 'General Settings', 'annie-cakes' ),
        'panel' => 'annie_cakes_panel',
    ) );

    $general_fields = array(
        'annie_phone'   => array( 'label' => __( 'Phone Number', 'annie-cakes' ), 'default' => '+234 800 000 0000' ),
        'annie_email'   => array( 'label' => __( 'Email Address', 'annie-cakes' ), 'default' => 'hello@anniecakesandgift.com' ),
        'annie_address' => array( 'label' => __( 'Address', 'annie-cakes' ), 'default' => '123 Bakery Street, Lagos, Nigeria' ),
        'annie_hours'   => array( 'label' => __( 'Working Hours', 'annie-cakes' ), 'default' => 'Mon - Sat: 8AM - 8PM' ),
        'annie_whatsapp' => array( 'label' => __( 'WhatsApp Number (without +)', 'annie-cakes' ), 'default' => '2348000000000' ),
    );

    foreach ( $general_fields as $id => $field ) {
        $wp_customize->add_setting( $id, array(
            'default'           => $field['default'],
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => $field['label'],
            'section' => 'annie_general',
            'type'    => 'text',
        ) );
    }

    // Social Media
    $wp_customize->add_section( 'annie_social', array(
        'title' => __( 'Social Media', 'annie-cakes' ),
        'panel' => 'annie_cakes_panel',
    ) );

    $social = array( 'facebook', 'instagram', 'twitter', 'tiktok', 'youtube' );
    foreach ( $social as $platform ) {
        $wp_customize->add_setting( 'annie_' . $platform, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( 'annie_' . $platform, array(
            'label'   => ucfirst( $platform ) . ' URL',
            'section' => 'annie_social',
            'type'    => 'url',
        ) );
    }

    // Hero Settings
    $wp_customize->add_section( 'annie_hero', array(
        'title' => __( 'Hero Section', 'annie-cakes' ),
        'panel' => 'annie_cakes_panel',
    ) );

    for ( $i = 1; $i <= 3; $i++ ) {
        $wp_customize->add_setting( 'annie_hero_bg_' . $i, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'annie_hero_bg_' . $i, array(
            'label'   => sprintf( __( 'Hero Slide %d Background', 'annie-cakes' ), $i ),
            'section' => 'annie_hero',
        ) ) );

        $wp_customize->add_setting( 'annie_hero_title_' . $i, array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ) );
        $wp_customize->add_control( 'annie_hero_title_' . $i, array(
            'label'   => sprintf( __( 'Hero Slide %d Title', 'annie-cakes' ), $i ),
            'section' => 'annie_hero',
            'type'    => 'text',
        ) );

        $wp_customize->add_setting( 'annie_hero_subtitle_' . $i, array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( 'annie_hero_subtitle_' . $i, array(
            'label'   => sprintf( __( 'Hero Slide %d Subtitle', 'annie-cakes' ), $i ),
            'section' => 'annie_hero',
            'type'    => 'textarea',
        ) );
    }

    // Sale Settings
    $wp_customize->add_section( 'annie_sale', array(
        'title' => __( 'Sale / Promotion', 'annie-cakes' ),
        'panel' => 'annie_cakes_panel',
    ) );

    $wp_customize->add_setting( 'annie_sale_title', array( 'default' => 'Sweet Deals Up To 40% Off!', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'annie_sale_title', array( 'label' => __( 'Sale Banner Title', 'annie-cakes' ), 'section' => 'annie_sale' ) );

    $wp_customize->add_setting( 'annie_sale_subtitle', array( 'default' => '', 'sanitize_callback' => 'sanitize_textarea_field' ) );
    $wp_customize->add_control( 'annie_sale_subtitle', array( 'label' => __( 'Sale Banner Subtitle', 'annie-cakes' ), 'section' => 'annie_sale', 'type' => 'textarea' ) );

    $wp_customize->add_setting( 'annie_sale_date', array( 'default' => '', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'annie_sale_date', array( 'label' => __( 'Sale End Date (YYYY-MM-DD)', 'annie-cakes' ), 'section' => 'annie_sale' ) );

    // Footer Settings
    $wp_customize->add_section( 'annie_footer', array(
        'title' => __( 'Footer', 'annie-cakes' ),
        'panel' => 'annie_cakes_panel',
    ) );

    $wp_customize->add_setting( 'annie_footer_about', array(
        'default'           => 'Crafting sweet memories with premium cakes and thoughtful gifts.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'annie_footer_about', array(
        'label'   => __( 'Footer About Text', 'annie-cakes' ),
        'section' => 'annie_footer',
        'type'    => 'textarea',
    ) );

    // Map Settings
    $wp_customize->add_setting( 'annie_map_embed', array( 'default' => '', 'sanitize_callback' => 'annie_cakes_sanitize_iframe' ) );
    $wp_customize->add_control( 'annie_map_embed', array( 'label' => __( 'Google Map Embed Code', 'annie-cakes' ), 'section' => 'annie_general', 'type' => 'textarea' ) );

    // Video Settings
    $wp_customize->add_setting( 'annie_video_url', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( 'annie_video_url', array( 'label' => __( 'Video URL (YouTube)', 'annie-cakes' ), 'section' => 'annie_hero', 'type' => 'url' ) );

    $wp_customize->add_setting( 'annie_video_poster', array( 'default' => '', 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'annie_video_poster', array(
        'label'   => __( 'Video Poster Image', 'annie-cakes' ),
        'section' => 'annie_hero',
    ) ) );
}
add_action( 'customize_register', 'annie_cakes_customize_register' );

function annie_cakes_sanitize_iframe( $value ) {
    return wp_kses( $value, array(
        'iframe' => array(
            'src'             => true,
            'width'           => true,
            'height'          => true,
            'style'           => true,
            'frameborder'     => true,
            'allowfullscreen' => true,
            'loading'         => true,
        ),
    ) );
}
