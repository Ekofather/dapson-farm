<?php
/**
 * Template Name: Education
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-hero-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_edu_page_subtitle', 'Academic Background' ) ); ?></span>
            <h1 class="page-hero-title"><?php echo esc_html( get_theme_mod( 'feyikemi_edu_page_title', 'Education' ) ); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php esc_html_e( 'Education', 'feyikemi-portfolio' ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Education Timeline -->
<section class="section education-timeline-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'Learning Path', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_edu_section_title', 'Academic Qualifications' ) ); ?></h2>
        </div>

        <div class="education-timeline">
            <!-- MSc -->
            <div class="edu-timeline-item" data-aos="fade-up">
                <div class="edu-timeline-marker">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="edu-timeline-content">
                    <div class="edu-year-badge"><?php echo esc_html( get_theme_mod( 'feyikemi_edu1_year', '2025' ) ); ?></div>
                    <h3><?php echo esc_html( get_theme_mod( 'feyikemi_edu1_degree', 'Master of Science (M.Sc), Peace and Conflict Studies' ) ); ?></h3>
                    <span class="edu-institution"><i class="fas fa-university"></i> <?php echo esc_html( get_theme_mod( 'feyikemi_edu1_institution', 'Global Affairs and Sustainable Development Institute, Osun State University, Osogbo' ) ); ?></span>
                    <p class="edu-thesis"><strong><?php esc_html_e( 'Thesis:', 'feyikemi-portfolio' ); ?></strong> <?php echo esc_html( get_theme_mod( 'feyikemi_edu1_thesis', 'Assessment on Food Security and Resilience Building in Osogbo Metropolis, Osun State' ) ); ?></p>
                </div>
            </div>

            <!-- BA -->
            <div class="edu-timeline-item" data-aos="fade-up" data-aos-delay="150">
                <div class="edu-timeline-marker">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="edu-timeline-content">
                    <div class="edu-year-badge"><?php echo esc_html( get_theme_mod( 'feyikemi_edu2_year', '2018' ) ); ?></div>
                    <h3><?php echo esc_html( get_theme_mod( 'feyikemi_edu2_degree', 'Bachelor of Arts (B.A), Linguistics and Communication Studies' ) ); ?></h3>
                    <span class="edu-institution"><i class="fas fa-university"></i> <?php echo esc_html( get_theme_mod( 'feyikemi_edu2_institution', 'Osun State University, Osogbo' ) ); ?></span>
                    <span class="edu-grade"><i class="fas fa-medal"></i> <?php echo esc_html( get_theme_mod( 'feyikemi_edu2_grade', 'Second Class Upper Division' ) ); ?></span>
                </div>
            </div>

            <!-- WAEC -->
            <div class="edu-timeline-item" data-aos="fade-up" data-aos-delay="300">
                <div class="edu-timeline-marker">
                    <i class="fas fa-school"></i>
                </div>
                <div class="edu-timeline-content">
                    <div class="edu-year-badge"><?php echo esc_html( get_theme_mod( 'feyikemi_edu3_year', '2013' ) ); ?></div>
                    <h3><?php echo esc_html( get_theme_mod( 'feyikemi_edu3_degree', 'West African Senior School Certificate (WAEC)' ) ); ?></h3>
                    <span class="edu-institution"><i class="fas fa-school"></i> <?php echo esc_html( get_theme_mod( 'feyikemi_edu3_institution', 'Olatundun Model College, Osun State, Nigeria' ) ); ?></span>
                </div>
            </div>

            <!-- Primary -->
            <div class="edu-timeline-item" data-aos="fade-up" data-aos-delay="450">
                <div class="edu-timeline-marker">
                    <i class="fas fa-book-reader"></i>
                </div>
                <div class="edu-timeline-content">
                    <div class="edu-year-badge"><?php echo esc_html( get_theme_mod( 'feyikemi_edu4_year', '2007' ) ); ?></div>
                    <h3><?php echo esc_html( get_theme_mod( 'feyikemi_edu4_degree', 'Primary School Leaving Certificate' ) ); ?></h3>
                    <span class="edu-institution"><i class="fas fa-school"></i> <?php echo esc_html( get_theme_mod( 'feyikemi_edu4_institution', 'Olatundun International College, Osun State, Nigeria' ) ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
