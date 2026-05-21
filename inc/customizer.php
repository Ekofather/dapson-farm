<?php
/**
 * Theme Customizer Settings
 * All content is editable from Appearance > Customize
 *
 * @package Feyikemi_Portfolio
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function feyikemi_customize_register( $wp_customize ) {

    // ─── Panel: Portfolio Settings ───
    $wp_customize->add_panel( 'feyikemi_panel', array(
        'title'    => __( 'Portfolio Settings', 'feyikemi-portfolio' ),
        'priority' => 30,
    ) );

    // ─── Section: General Settings ───
    $wp_customize->add_section( 'feyikemi_general', array(
        'title' => __( 'General Settings', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $general_settings = array(
        'feyikemi_nav_name'         => array( 'Navigation Name', 'Feyikemi' ),
        'feyikemi_preloader_text'   => array( 'Preloader Text', 'Loading...' ),
        'feyikemi_primary_color'    => array( 'Primary Color', '#1a365d' ),
        'feyikemi_accent_color'     => array( 'Accent Color', '#c9a84c' ),
    );

    foreach ( $general_settings as $id => $data ) {
        $wp_customize->add_setting( $id, array(
            'default'           => $data[1],
            'sanitize_callback' => strpos( $id, 'color' ) !== false ? 'sanitize_hex_color' : 'sanitize_text_field',
            'transport'         => 'refresh',
        ) );

        if ( strpos( $id, 'color' ) !== false ) {
            $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $id, array(
                'label'   => $data[0],
                'section' => 'feyikemi_general',
            ) ) );
        } else {
            $wp_customize->add_control( $id, array(
                'label'   => $data[0],
                'section' => 'feyikemi_general',
                'type'    => 'text',
            ) );
        }
    }

    // ─── Section: Hero Settings ───
    $wp_customize->add_section( 'feyikemi_hero', array(
        'title' => __( 'Hero Section', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $hero_settings = array(
        'feyikemi_hero_greeting'      => array( 'Greeting Text', 'Hello, I\'m', 'text' ),
        'feyikemi_hero_name'          => array( 'Full Name', 'Okebukola Oluwafeyikemi Mary', 'text' ),
        'feyikemi_hero_typing_prefix' => array( 'Typing Prefix', 'I am a', 'text' ),
        'feyikemi_hero_role_1'        => array( 'Role 1 (Typing)', 'Anti-Corruption Specialist', 'text' ),
        'feyikemi_hero_role_2'        => array( 'Role 2 (Typing)', 'Governance Expert', 'text' ),
        'feyikemi_hero_role_3'        => array( 'Role 3 (Typing)', 'Public Integrity Educator', 'text' ),
        'feyikemi_hero_role_4'        => array( 'Role 4 (Typing)', 'ACTU Desk Officer', 'text' ),
        'feyikemi_hero_summary'       => array( 'Hero Summary', 'Dynamic, versatile, and results-oriented professional with over 4 years of experience in public enlightenment, education, investigation support, and oversight within ICPC.', 'textarea' ),
        'feyikemi_hero_btn1_text'     => array( 'Button 1 Text', 'Learn More', 'text' ),
        'feyikemi_hero_btn1_url'      => array( 'Button 1 URL', '#about', 'url' ),
        'feyikemi_hero_btn2_text'     => array( 'Button 2 Text', 'Get in Touch', 'text' ),
        'feyikemi_hero_btn2_url'      => array( 'Button 2 URL', '#contact', 'url' ),
    );

    foreach ( $hero_settings as $id => $data ) {
        $sanitize = $data[2] === 'url' ? 'esc_url_raw' : ( $data[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field' );
        $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => $sanitize ) );
        $wp_customize->add_control( $id, array(
            'label'   => $data[0],
            'section' => 'feyikemi_hero',
            'type'    => $data[2] === 'textarea' ? 'textarea' : 'text',
        ) );
    }

    // Hero background image
    $wp_customize->add_setting( 'feyikemi_hero_bg_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feyikemi_hero_bg_image', array(
        'label'   => __( 'Hero Background Image', 'feyikemi-portfolio' ),
        'section' => 'feyikemi_hero',
    ) ) );

    // ─── Section: Stats ───
    $wp_customize->add_section( 'feyikemi_stats', array(
        'title' => __( 'Hero Statistics', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    for ( $i = 1; $i <= 3; $i++ ) {
        $defaults = array(
            1 => array( '4', '+', 'Years Experience' ),
            2 => array( '20000', '+', 'Youths Engaged' ),
            3 => array( '70', '+', 'Anti-Corruption Clubs' ),
        );
        foreach ( array(
            "feyikemi_stat_{$i}_number" => array( "Stat {$i} Number", $defaults[ $i ][0] ),
            "feyikemi_stat_{$i}_suffix" => array( "Stat {$i} Suffix", $defaults[ $i ][1] ),
            "feyikemi_stat_{$i}_label"  => array( "Stat {$i} Label", $defaults[ $i ][2] ),
        ) as $id => $data ) {
            $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => 'sanitize_text_field' ) );
            $wp_customize->add_control( $id, array( 'label' => $data[0], 'section' => 'feyikemi_stats', 'type' => 'text' ) );
        }
    }

    // ─── Section: About ───
    $wp_customize->add_section( 'feyikemi_about', array(
        'title' => __( 'About Section', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $wp_customize->add_setting( 'feyikemi_about_image', array( 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feyikemi_about_image', array(
        'label'   => __( 'About Photo', 'feyikemi-portfolio' ),
        'section' => 'feyikemi_about',
    ) ) );

    $about_settings = array(
        'feyikemi_about_subtitle'     => array( 'About Subtitle', 'About Me', 'text' ),
        'feyikemi_about_title'        => array( 'About Title', 'Anti-Corruption & Governance Specialist', 'text' ),
        'feyikemi_about_preview_text' => array( 'About Preview Text', 'Dynamic, versatile, and results-oriented Anti-Corruption and Governance Specialist with over 4 years of professional experience in public enlightenment, education, investigation support, and oversight within the Independent Corrupt Practices and Other Related Offences Commission (ICPC), the foremost anti-corruption agency in Nigeria.', 'textarea' ),
        'feyikemi_about_full_title'   => array( 'About Page Title', 'Dedicated to Anti-Corruption & Good Governance', 'text' ),
        'feyikemi_about_para_1'       => array( 'About Paragraph 1', 'Dynamic, versatile, and results-oriented Anti-Corruption and Governance Specialist with over 4 years of professional experience in public enlightenment, education, investigation support, and oversight within the Independent Corrupt Practices and Other Related Offences Commission (ICPC), the foremost anti-corruption agency in Nigeria.', 'textarea' ),
        'feyikemi_about_para_2'       => array( 'About Paragraph 2', 'Expertise in delivering high-impact integrity and civic education lectures, contributing to national anti-corruption assignments, monitoring large-scale public programs, and acting as a dedicated Anti-Corruption and Transparency Unit (ACTU) Desk Officer.', 'textarea' ),
        'feyikemi_about_para_3'       => array( 'About Paragraph 3', 'Demonstrated ability to influence organizational compliance and promote ethical conduct through awareness initiatives, policy guidance, and task force participation. Academic background includes a Master of Science in Peace and Conflict Studies, with a thesis focus on food security and resilience building.', 'textarea' ),
        'feyikemi_current_role'       => array( 'Current Role', 'Deputy Superintendent, ICPC', 'text' ),
        'feyikemi_languages'          => array( 'Languages', 'English (Fluent), Yoruba (Native)', 'text' ),
    );

    foreach ( $about_settings as $id => $data ) {
        $sanitize = $data[2] === 'textarea' ? 'sanitize_textarea_field' : 'sanitize_text_field';
        $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => $sanitize ) );
        $wp_customize->add_control( $id, array(
            'label'   => $data[0],
            'section' => 'feyikemi_about',
            'type'    => $data[2] === 'textarea' ? 'textarea' : 'text',
        ) );
    }

    // ─── Section: Contact Info ───
    $wp_customize->add_section( 'feyikemi_contact', array(
        'title' => __( 'Contact Information', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $contact_settings = array(
        'feyikemi_address'        => array( 'Address', 'Osogbo, Osun State, Nigeria' ),
        'feyikemi_email_address'  => array( 'Email Address', 'okebukolamary@gmail.com' ),
        'feyikemi_phone'          => array( 'Phone Number', '+2347030114288' ),
        'feyikemi_contact_email'  => array( 'Contact Form Recipient Email', '' ),
        'feyikemi_contact_intro'  => array( 'Contact Page Intro Text', 'I am open to collaborations, speaking engagements, consultancy opportunities, and anti-corruption advocacy partnerships.' ),
    );

    foreach ( $contact_settings as $id => $data ) {
        $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $id, array( 'label' => $data[0], 'section' => 'feyikemi_contact', 'type' => 'text' ) );
    }

    // ─── Section: Social Links ───
    $wp_customize->add_section( 'feyikemi_social', array(
        'title' => __( 'Social Media Links', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $social_settings = array(
        'feyikemi_linkedin_url'  => array( 'LinkedIn URL', 'https://www.linkedin.com/in/okebukola-o-255747252' ),
        'feyikemi_twitter_url'   => array( 'Twitter/X URL', '' ),
        'feyikemi_facebook_url'  => array( 'Facebook URL', '' ),
        'feyikemi_instagram_url' => array( 'Instagram URL', '' ),
    );

    foreach ( $social_settings as $id => $data ) {
        $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => 'esc_url_raw' ) );
        $wp_customize->add_control( $id, array( 'label' => $data[0], 'section' => 'feyikemi_social', 'type' => 'url' ) );
    }

    // ─── Section: Expertise Cards ───
    $wp_customize->add_section( 'feyikemi_expertise', array(
        'title' => __( 'Expertise Section', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $wp_customize->add_setting( 'feyikemi_expertise_subtitle', array( 'default' => 'What I Do', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'feyikemi_expertise_subtitle', array( 'label' => 'Section Subtitle', 'section' => 'feyikemi_expertise' ) );
    $wp_customize->add_setting( 'feyikemi_expertise_title', array( 'default' => 'Areas of Expertise', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'feyikemi_expertise_title', array( 'label' => 'Section Title', 'section' => 'feyikemi_expertise' ) );

    for ( $i = 1; $i <= 6; $i++ ) {
        foreach ( array(
            "feyikemi_expertise_{$i}_icon"  => "Expertise {$i} Icon (FA class)",
            "feyikemi_expertise_{$i}_title" => "Expertise {$i} Title",
            "feyikemi_expertise_{$i}_desc"  => "Expertise {$i} Description",
        ) as $id => $label ) {
            $wp_customize->add_setting( $id, array( 'sanitize_callback' => 'sanitize_text_field' ) );
            $wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'feyikemi_expertise', 'type' => strpos( $id, 'desc' ) !== false ? 'textarea' : 'text' ) );
        }
    }

    // ─── Section: Experience Timeline ───
    $wp_customize->add_section( 'feyikemi_experience', array(
        'title' => __( 'Experience Timeline', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    for ( $i = 1; $i <= 3; $i++ ) {
        foreach ( array(
            "feyikemi_timeline_{$i}_date" => "Entry {$i} Date",
            "feyikemi_timeline_{$i}_role" => "Entry {$i} Role",
            "feyikemi_timeline_{$i}_org"  => "Entry {$i} Organization",
            "feyikemi_timeline_{$i}_desc" => "Entry {$i} Description",
        ) as $id => $label ) {
            $wp_customize->add_setting( $id, array( 'sanitize_callback' => 'sanitize_text_field' ) );
            $wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'feyikemi_experience', 'type' => strpos( $id, 'desc' ) !== false ? 'textarea' : 'text' ) );
        }
    }

    // ─── Section: Skills ───
    $wp_customize->add_section( 'feyikemi_skills', array(
        'title' => __( 'Skills', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    for ( $i = 1; $i <= 8; $i++ ) {
        foreach ( array(
            "feyikemi_skill_{$i}_name"  => "Skill {$i} Name",
            "feyikemi_skill_{$i}_level" => "Skill {$i} Level (%)",
            "feyikemi_skill_{$i}_icon"  => "Skill {$i} Icon (FA class)",
        ) as $id => $label ) {
            $sanitize = strpos( $id, 'level' ) !== false ? 'absint' : 'sanitize_text_field';
            $wp_customize->add_setting( $id, array( 'sanitize_callback' => $sanitize ) );
            $wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'feyikemi_skills', 'type' => strpos( $id, 'level' ) !== false ? 'number' : 'text' ) );
        }
    }

    // ─── Section: Achievements ───
    $wp_customize->add_section( 'feyikemi_achievements', array(
        'title' => __( 'Achievements', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    for ( $i = 1; $i <= 4; $i++ ) {
        foreach ( array(
            "feyikemi_achievement_{$i}_icon"            => "Achievement {$i} Icon",
            "feyikemi_achievement_{$i}_text"             => "Achievement {$i} Short Text",
            "feyikemi_achievement_full_{$i}_title"       => "Achievement {$i} Full Title",
            "feyikemi_achievement_full_{$i}_text"        => "Achievement {$i} Full Description",
            "feyikemi_achievement_full_{$i}_stat"        => "Achievement {$i} Stat Number",
            "feyikemi_achievement_full_{$i}_stat_label"  => "Achievement {$i} Stat Label",
        ) as $id => $label ) {
            $wp_customize->add_setting( $id, array( 'sanitize_callback' => 'sanitize_text_field' ) );
            $wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'feyikemi_achievements', 'type' => strpos( $id, 'text' ) !== false && strpos( $id, 'Full' ) !== false ? 'textarea' : 'text' ) );
        }
    }

    // ─── Section: Training & Professional Development ───
    $wp_customize->add_section( 'feyikemi_training', array(
        'title' => __( 'Training & Professional Development', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $wp_customize->add_setting( 'feyikemi_training_title', array( 'default' => 'Training & Professional Development', 'sanitize_callback' => 'sanitize_text_field' ) );
    $wp_customize->add_control( 'feyikemi_training_title', array( 'label' => 'Section Title', 'section' => 'feyikemi_training', 'type' => 'text' ) );

    $wp_customize->add_setting( 'feyikemi_training_count', array( 'default' => 2, 'sanitize_callback' => 'absint' ) );
    $wp_customize->add_control( 'feyikemi_training_count', array(
        'label'       => 'Number of Training Items (1-6)',
        'section'     => 'feyikemi_training',
        'type'        => 'number',
        'input_attrs' => array( 'min' => 1, 'max' => 6 ),
    ) );

    for ( $i = 1; $i <= 6; $i++ ) {
        $defaults = array(
            1 => array( 'ICPC ACTU Desk Officer Workshops', 'In-house workshops and stakeholder training sessions in collaboration with RoLAC (Rule of Law International) focused on transparency, accountability, and anti-corruption best practices.', '2025' ),
            2 => array( 'Anti-Corruption & Governance Seminars', 'Public speaking, civic education programs, and specialized seminars on anti-corruption advocacy and good governance.', 'Ongoing' ),
            3 => array( '', '', '' ),
            4 => array( '', '', '' ),
            5 => array( '', '', '' ),
            6 => array( '', '', '' ),
        );
        foreach ( array(
            "feyikemi_training_{$i}_title" => array( "Training {$i} Title", $defaults[ $i ][0] ),
            "feyikemi_training_{$i}_desc"  => array( "Training {$i} Description", $defaults[ $i ][1] ),
            "feyikemi_training_{$i}_year"  => array( "Training {$i} Year", $defaults[ $i ][2] ),
        ) as $id => $data ) {
            $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => 'sanitize_text_field' ) );
            $wp_customize->add_control( $id, array(
                'label'   => $data[0],
                'section' => 'feyikemi_training',
                'type'    => strpos( $id, 'desc' ) !== false ? 'textarea' : 'text',
            ) );
        }
    }

    // ─── Section: Footer ───
    $wp_customize->add_section( 'feyikemi_footer', array(
        'title' => __( 'Footer Settings', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $footer_settings = array(
        'feyikemi_footer_name'      => array( 'Footer Name', 'Okebukola Oluwafeyikemi Mary' ),
        'feyikemi_footer_desc'      => array( 'Footer Description', 'Anti-Corruption & Governance Specialist dedicated to promoting integrity, transparency, and accountability in public service.' ),
        'feyikemi_footer_copyright' => array( 'Copyright Text', 'Okebukola Oluwafeyikemi Mary. All Rights Reserved.' ),
    );

    foreach ( $footer_settings as $id => $data ) {
        $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => 'sanitize_text_field' ) );
        $wp_customize->add_control( $id, array( 'label' => $data[0], 'section' => 'feyikemi_footer', 'type' => strpos( $id, 'desc' ) !== false ? 'textarea' : 'text' ) );
    }

    // ─── Section: CTA ───
    $wp_customize->add_section( 'feyikemi_cta', array(
        'title' => __( 'Call to Action Section', 'feyikemi-portfolio' ),
        'panel' => 'feyikemi_panel',
    ) );

    $cta_settings = array(
        'feyikemi_cta_title'    => array( 'CTA Title', 'Interested in Working Together?' ),
        'feyikemi_cta_text'     => array( 'CTA Text', 'I am open to collaborations, speaking engagements, consultancy opportunities, and anti-corruption advocacy partnerships.' ),
        'feyikemi_cta_btn_text' => array( 'CTA Button Text', 'Contact Me' ),
        'feyikemi_cta_btn_url'  => array( 'CTA Button URL', '#contact' ),
    );

    foreach ( $cta_settings as $id => $data ) {
        $sanitize = strpos( $id, 'url' ) !== false ? 'esc_url_raw' : 'sanitize_text_field';
        $wp_customize->add_setting( $id, array( 'default' => $data[1], 'sanitize_callback' => $sanitize ) );
        $wp_customize->add_control( $id, array( 'label' => $data[0], 'section' => 'feyikemi_cta', 'type' => strpos( $id, 'text' ) !== false && $id !== 'feyikemi_cta_btn_text' ? 'textarea' : 'text' ) );
    }
}
add_action( 'customize_register', 'feyikemi_customize_register' );

/**
 * Output custom colors
 */
function feyikemi_customizer_css() {
    $primary = get_theme_mod( 'feyikemi_primary_color', '#1a365d' );
    $accent  = get_theme_mod( 'feyikemi_accent_color', '#c9a84c' );
    ?>
    <style>
        :root {
            --primary-color: <?php echo esc_attr( $primary ); ?>;
            --accent-color: <?php echo esc_attr( $accent ); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'feyikemi_customizer_css' );
