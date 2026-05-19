<?php
/**
 * Template Name: About
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-hero-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_about_hero_subtitle', 'Get to Know Me' ) ); ?></span>
            <h1 class="page-hero-title"><?php echo esc_html( get_theme_mod( 'feyikemi_about_hero_title', 'About Me' ) ); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php esc_html_e( 'About', 'feyikemi-portfolio' ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- About Full Section -->
<section class="section about-full-section">
    <div class="container">
        <div class="about-full-grid">
            <div class="about-full-image" data-aos="fade-right">
                <?php
                $about_image = get_theme_mod( 'feyikemi_about_image' );
                if ( $about_image ) :
                ?>
                    <img src="<?php echo esc_url( $about_image ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'feyikemi_hero_name', 'Okebukola Oluwafeyikemi Mary' ) ); ?>" loading="lazy">
                <?php else : ?>
                    <div class="about-image-placeholder large">
                        <i class="fas fa-user"></i>
                    </div>
                <?php endif; ?>
                <div class="about-image-badge">
                    <span class="badge-number"><?php echo esc_html( get_theme_mod( 'feyikemi_stat_1_number', '4' ) ); ?>+</span>
                    <span class="badge-text"><?php esc_html_e( 'Years Experience', 'feyikemi-portfolio' ); ?></span>
                </div>
            </div>
            <div class="about-full-content" data-aos="fade-left">
                <span class="section-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_about_subtitle', 'About Me' ) ); ?></span>
                <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_about_full_title', 'Dedicated to Anti-Corruption & Good Governance' ) ); ?></h2>
                <div class="about-text">
                    <p><?php echo wp_kses_post( get_theme_mod( 'feyikemi_about_para_1', 'Dynamic, versatile, and results-oriented Anti-Corruption and Governance Specialist with over 4 years of professional experience in public enlightenment, education, investigation support, and oversight within the Independent Corrupt Practices and Other Related Offences Commission (ICPC), the foremost anti-corruption agency in Nigeria.' ) ); ?></p>
                    <p><?php echo wp_kses_post( get_theme_mod( 'feyikemi_about_para_2', 'Expertise in delivering high-impact integrity and civic education lectures, contributing to national anti-corruption assignments, monitoring large-scale public programs, and acting as a dedicated Anti-Corruption and Transparency Unit (ACTU) Desk Officer.' ) ); ?></p>
                    <p><?php echo wp_kses_post( get_theme_mod( 'feyikemi_about_para_3', 'Demonstrated ability to influence organizational compliance and promote ethical conduct through awareness initiatives, policy guidance, and task force participation. Academic background includes a Master of Science in Peace and Conflict Studies, with a thesis focus on food security and resilience building.' ) ); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Personal Info Section -->
<section class="section personal-info-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'Personal Details', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php esc_html_e( 'At a Glance', 'feyikemi-portfolio' ); ?></h2>
        </div>
        <div class="personal-info-grid" data-aos="fade-up">
            <div class="info-item">
                <span class="info-label"><i class="fas fa-user"></i> <?php esc_html_e( 'Full Name', 'feyikemi-portfolio' ); ?></span>
                <span class="info-value"><?php echo esc_html( get_theme_mod( 'feyikemi_hero_name', 'Okebukola Oluwafeyikemi Mary' ) ); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label"><i class="fas fa-briefcase"></i> <?php esc_html_e( 'Current Position', 'feyikemi-portfolio' ); ?></span>
                <span class="info-value"><?php echo esc_html( get_theme_mod( 'feyikemi_current_role', 'Deputy Superintendent, ICPC' ) ); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label"><i class="fas fa-map-marker-alt"></i> <?php esc_html_e( 'Location', 'feyikemi-portfolio' ); ?></span>
                <span class="info-value"><?php echo esc_html( get_theme_mod( 'feyikemi_address', 'Osogbo, Osun State, Nigeria' ) ); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label"><i class="fas fa-envelope"></i> <?php esc_html_e( 'Email', 'feyikemi-portfolio' ); ?></span>
                <span class="info-value"><?php echo esc_html( get_theme_mod( 'feyikemi_email_address', 'okebukolamary@gmail.com' ) ); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label"><i class="fas fa-phone"></i> <?php esc_html_e( 'Phone', 'feyikemi-portfolio' ); ?></span>
                <span class="info-value"><?php echo esc_html( get_theme_mod( 'feyikemi_phone', '+2347030114288' ) ); ?></span>
            </div>
            <div class="info-item">
                <span class="info-label"><i class="fas fa-language"></i> <?php esc_html_e( 'Languages', 'feyikemi-portfolio' ); ?></span>
                <span class="info-value"><?php echo esc_html( get_theme_mod( 'feyikemi_languages', 'English (Fluent), Yoruba (Native)' ) ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Professional Development -->
<section class="section training-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'Growth', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_training_title', 'Training & Professional Development' ) ); ?></h2>
        </div>
        <div class="training-grid">
            <?php for ( $i = 1; $i <= 2; $i++ ) :
                $defaults = array(
                    1 => array( 'ICPC ACTU Desk Officer Workshops', 'In-house workshops and stakeholder training sessions in collaboration with RoLAC (Rule of Law International) focused on transparency, accountability, and anti-corruption best practices.', '2025' ),
                    2 => array( 'Anti-Corruption & Governance Seminars', 'Public speaking, civic education programs, and specialized seminars on anti-corruption advocacy and good governance.', 'Ongoing' ),
                );
                $title = get_theme_mod( "feyikemi_training_{$i}_title", $defaults[ $i ][0] );
                $desc  = get_theme_mod( "feyikemi_training_{$i}_desc", $defaults[ $i ][1] );
                $year  = get_theme_mod( "feyikemi_training_{$i}_year", $defaults[ $i ][2] );
            ?>
            <div class="training-card" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 150; ?>">
                <div class="training-icon"><i class="fas fa-certificate"></i></div>
                <h3><?php echo esc_html( $title ); ?></h3>
                <p><?php echo esc_html( $desc ); ?></p>
                <span class="training-year"><?php echo esc_html( $year ); ?></span>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
