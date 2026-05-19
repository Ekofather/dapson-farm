<?php
/**
 * Theme Customizer Settings
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register Customizer Settings
 */
function demola_customize_register( $wp_customize ) {

    // ─── Panel: Theme Settings ───
    $wp_customize->add_panel( 'demola_settings', array(
        'title'    => __( 'Demola Bakare Settings', 'demola-bakare' ),
        'priority' => 30,
    ) );

    // ─── Section: General Info ───
    $wp_customize->add_section( 'demola_general', array(
        'title' => __( 'General Information', 'demola-bakare' ),
        'panel' => 'demola_settings',
    ) );

    $general_fields = array(
        'demola_email'         => array( 'Email Address', 'info@demolabakare.com' ),
        'demola_phone'         => array( 'Phone Number', '+234 XXX XXX XXXX' ),
        'demola_address'       => array( 'Office Address', 'Abuja, Nigeria' ),
        'demola_whatsapp'      => array( 'WhatsApp Number', '' ),
        'demola_logo_name'     => array( 'Logo Name Text', 'Demola Bakare' ),
        'demola_logo_subtitle' => array( 'Logo Subtitle', 'FSI' ),
    );

    foreach ( $general_fields as $id => $field ) {
        $wp_customize->add_setting( $id, array(
            'default'           => $field[1],
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => $field[0],
            'section' => 'demola_general',
            'type'    => 'text',
        ) );
    }

    // ─── Section: Social Media ───
    $wp_customize->add_section( 'demola_social', array(
        'title' => __( 'Social Media Links', 'demola-bakare' ),
        'panel' => 'demola_settings',
    ) );

    $social_fields = array(
        'demola_twitter'  => 'Twitter/X URL',
        'demola_linkedin' => 'LinkedIn URL',
        'demola_facebook' => 'Facebook URL',
        'demola_youtube'  => 'YouTube URL',
        'demola_instagram' => 'Instagram URL',
    );

    foreach ( $social_fields as $id => $label ) {
        $wp_customize->add_setting( $id, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => $label,
            'section' => 'demola_social',
            'type'    => 'url',
        ) );
    }

    // ─── Section: Hero Section ───
    $wp_customize->add_section( 'demola_hero', array(
        'title' => __( 'Hero Section', 'demola-bakare' ),
        'panel' => 'demola_settings',
    ) );

    $wp_customize->add_setting( 'demola_hero_bg', array(
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'demola_hero_bg', array(
        'label'     => __( 'Hero Background Image', 'demola-bakare' ),
        'section'   => 'demola_hero',
        'mime_type' => 'image',
    ) ) );

    $hero_text_fields = array(
        'demola_hero_subtitle' => array(
            'Hero Subtitle',
            'Pioneer Officer of ICPC Nigeria | Director, Public Enlightenment & Education | Ethics Trainer | Governance & Policy Consultant | Civic Transformation Strategist',
            'textarea',
        ),
        'demola_hero_quote' => array(
            'Hero Quote',
            'Credibility, not speed, remains the true currency of leadership. Every institution must be built on a foundation of integrity and pursued with meticulous expertise.',
            'textarea',
        ),
    );

    foreach ( $hero_text_fields as $id => $field ) {
        $wp_customize->add_setting( $id, array(
            'default'           => $field[1],
            'sanitize_callback' => 'sanitize_textarea_field',
        ) );
        $wp_customize->add_control( $id, array(
            'label'   => $field[0],
            'section' => 'demola_hero',
            'type'    => $field[2],
        ) );
    }

    // ─── Section: About ───
    $wp_customize->add_section( 'demola_about', array(
        'title' => __( 'About Section', 'demola-bakare' ),
        'panel' => 'demola_settings',
    ) );

    $wp_customize->add_setting( 'demola_about_image', array(
        'sanitize_callback' => 'absint',
    ) );
    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'demola_about_image', array(
        'label'     => __( 'About Portrait Image', 'demola-bakare' ),
        'section'   => 'demola_about',
        'mime_type' => 'image',
    ) ) );

    $wp_customize->add_setting( 'demola_about_intro', array(
        'default'           => 'Demola Bakare, FSI, is a nationally respected anti-corruption advocate, governance strategist, and ethics trainer with over 25 years of distinguished service in Nigeria\'s fight against corruption. As a pioneer officer and Director of Public Enlightenment and Education at the Independent Corrupt Practices and Other Related Offences Commission (ICPC), he has been at the forefront of shaping Nigeria\'s anti-corruption landscape.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'demola_about_intro', array(
        'label'   => 'About Introduction Text',
        'section' => 'demola_about',
        'type'    => 'textarea',
    ) );

    // ─── Section: Footer ───
    $wp_customize->add_section( 'demola_footer', array(
        'title' => __( 'Footer Settings', 'demola-bakare' ),
        'panel' => 'demola_settings',
    ) );

    $wp_customize->add_setting( 'demola_footer_about', array(
        'default'           => 'Anti-Corruption Advocate, Governance Strategist, Ethics Trainer & Pioneer Officer of ICPC Nigeria. Over 25 years championing transparency, accountability, and ethical leadership.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'demola_footer_about', array(
        'label'   => 'Footer About Text',
        'section' => 'demola_footer',
        'type'    => 'textarea',
    ) );
}
add_action( 'customize_register', 'demola_customize_register' );
