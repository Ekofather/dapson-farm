<?php
/**
 * Template Name: Skills
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-hero-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_skills_page_subtitle', 'My Competencies' ) ); ?></span>
            <h1 class="page-hero-title"><?php echo esc_html( get_theme_mod( 'feyikemi_skills_page_title', 'Professional Skills' ) ); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php esc_html_e( 'Skills', 'feyikemi-portfolio' ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="section skills-full-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'Core Competencies', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_skills_section_title', 'Professional Skill Set' ) ); ?></h2>
        </div>

        <div class="skills-showcase">
            <?php
            $skills = array(
                1 => array( 'Anti-Corruption Advocacy & Public Integrity Education', 95, 'fas fa-shield-alt' ),
                2 => array( 'Investigation Support and Compliance Monitoring', 88, 'fas fa-search' ),
                3 => array( 'Policy Analysis and Governance Oversight', 85, 'fas fa-landmark' ),
                4 => array( 'Stakeholder Engagement & Interagency Collaboration', 92, 'fas fa-users' ),
                5 => array( 'Report Writing & Technical Documentation', 90, 'fas fa-file-alt' ),
                6 => array( 'Public Speaking & Curriculum Development', 93, 'fas fa-chalkboard-teacher' ),
                7 => array( 'Project Monitoring & Evaluation', 87, 'fas fa-tasks' ),
                8 => array( 'Liaison & Coordination in Multi-Agency Operations', 90, 'fas fa-handshake' ),
            );
            foreach ( $skills as $i => $skill ) :
                $name  = get_theme_mod( "feyikemi_skill_{$i}_name", $skill[0] );
                $level = get_theme_mod( "feyikemi_skill_{$i}_level", $skill[1] );
                $icon  = get_theme_mod( "feyikemi_skill_{$i}_icon", $skill[2] );
            ?>
            <div class="skill-item" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 80; ?>">
                <div class="skill-header">
                    <div class="skill-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                    <span class="skill-name"><?php echo esc_html( $name ); ?></span>
                    <span class="skill-percent"><?php echo esc_html( $level ); ?>%</span>
                </div>
                <div class="skill-bar">
                    <div class="skill-bar-fill" data-width="<?php echo esc_attr( $level ); ?>"></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Expertise Areas -->
<section class="section expertise-areas-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'Specializations', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_expertise_areas_title', 'Areas of Specialization' ) ); ?></h2>
        </div>
        <div class="expertise-cards-grid">
            <?php for ( $i = 1; $i <= 6; $i++ ) :
                $defaults = array(
                    1 => array( 'fas fa-shield-alt', 'Anti-Corruption Advocacy', 'Leading integrity education campaigns and anti-corruption awareness initiatives at national scale.' ),
                    2 => array( 'fas fa-search', 'Investigation Support', 'Contributing to investigation strategies, evidence collation, and compliance evaluation processes.' ),
                    3 => array( 'fas fa-landmark', 'Governance Oversight', 'Monitoring national programs and ensuring transparent implementation of public policies.' ),
                    4 => array( 'fas fa-users', 'Stakeholder Engagement', 'Building and maintaining partnerships across multiple agencies and organizations.' ),
                    5 => array( 'fas fa-chalkboard-teacher', 'Public Education', 'Developing and delivering impactful civic education programs for diverse audiences.' ),
                    6 => array( 'fas fa-file-alt', 'Technical Reporting', 'Producing comprehensive documentation of initiatives, campaigns, and institutional outcomes.' ),
                );
                $icon  = get_theme_mod( "feyikemi_expertise_{$i}_icon", $defaults[ $i ][0] );
                $title = get_theme_mod( "feyikemi_expertise_{$i}_title", $defaults[ $i ][1] );
                $desc  = get_theme_mod( "feyikemi_expertise_{$i}_desc", $defaults[ $i ][2] );
            ?>
            <div class="expertise-area-card" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 100; ?>">
                <div class="expertise-area-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                <h3><?php echo esc_html( $title ); ?></h3>
                <p><?php echo esc_html( $desc ); ?></p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
