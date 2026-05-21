<?php
/**
 * Template Name: Front Page
 * The main landing page template
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<!-- Hero Section -->
<section id="hero" class="hero-section">
    <div class="hero-particles"></div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <span class="hero-greeting"><?php echo esc_html( get_theme_mod( 'feyikemi_hero_greeting', 'Hello, I\'m' ) ); ?></span>
            <h1 class="hero-name"><?php echo esc_html( get_theme_mod( 'feyikemi_hero_name', 'Okebukola Oluwafeyikemi Mary' ) ); ?></h1>
            <div class="hero-typing-wrapper">
                <span class="hero-typing-static"><?php echo esc_html( get_theme_mod( 'feyikemi_hero_typing_prefix', 'I am a' ) ); ?> </span>
                <span class="hero-typing-text" data-strings='<?php echo esc_attr( wp_json_encode( array_filter( array(
                    get_theme_mod( 'feyikemi_hero_role_1', 'Anti-Corruption Specialist' ),
                    get_theme_mod( 'feyikemi_hero_role_2', 'Governance Expert' ),
                    get_theme_mod( 'feyikemi_hero_role_3', 'Public Integrity Educator' ),
                    get_theme_mod( 'feyikemi_hero_role_4', 'ACTU Desk Officer' ),
                ) ) ) ); ?>'></span>
                <span class="typing-cursor">|</span>
            </div>
            <p class="hero-summary"><?php echo esc_html( get_theme_mod( 'feyikemi_hero_summary', 'Dynamic, versatile, and results-oriented professional with over 4 years of experience in public enlightenment, education, investigation support, and oversight within ICPC.' ) ); ?></p>
            <div class="hero-buttons">
                <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_hero_btn1_url', '#about' ) ); ?>" class="btn btn-primary"><?php echo esc_html( get_theme_mod( 'feyikemi_hero_btn1_text', 'Learn More' ) ); ?></a>
                <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_hero_btn2_url', '#contact' ) ); ?>" class="btn btn-outline"><?php echo esc_html( get_theme_mod( 'feyikemi_hero_btn2_text', 'Get in Touch' ) ); ?></a>
            </div>
            <div class="hero-stats">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <span class="stat-number" data-count="<?php echo esc_attr( get_theme_mod( 'feyikemi_stat_1_number', '4' ) ); ?>">0</span><span class="stat-suffix"><?php echo esc_html( get_theme_mod( 'feyikemi_stat_1_suffix', '+' ) ); ?></span>
                    <span class="stat-label"><?php echo esc_html( get_theme_mod( 'feyikemi_stat_1_label', 'Years Experience' ) ); ?></span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <span class="stat-number" data-count="<?php echo esc_attr( get_theme_mod( 'feyikemi_stat_2_number', '20000' ) ); ?>">0</span><span class="stat-suffix"><?php echo esc_html( get_theme_mod( 'feyikemi_stat_2_suffix', '+' ) ); ?></span>
                    <span class="stat-label"><?php echo esc_html( get_theme_mod( 'feyikemi_stat_2_label', 'Youths Engaged' ) ); ?></span>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <span class="stat-number" data-count="<?php echo esc_attr( get_theme_mod( 'feyikemi_stat_3_number', '70' ) ); ?>">0</span><span class="stat-suffix"><?php echo esc_html( get_theme_mod( 'feyikemi_stat_3_suffix', '+' ) ); ?></span>
                    <span class="stat-label"><?php echo esc_html( get_theme_mod( 'feyikemi_stat_3_label', 'Anti-Corruption Clubs' ) ); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll-indicator">
        <a href="#about-preview" aria-label="Scroll down">
            <div class="scroll-mouse">
                <div class="scroll-wheel"></div>
            </div>
        </a>
    </div>
</section>

<!-- About Preview Section -->
<section id="about-preview" class="section about-preview-section">
    <div class="container">
        <div class="about-preview-grid">
            <div class="about-preview-image" data-aos="fade-right" data-aos-duration="800">
                <?php
                $about_image = get_theme_mod( 'feyikemi_about_image' );
                if ( $about_image ) :
                ?>
                    <img src="<?php echo esc_url( $about_image ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'feyikemi_hero_name', 'Okebukola Oluwafeyikemi Mary' ) ); ?>" loading="lazy">
                <?php else : ?>
                    <div class="about-image-placeholder">
                        <i class="fas fa-user"></i>
                    </div>
                <?php endif; ?>
                <div class="about-image-decoration"></div>
            </div>
            <div class="about-preview-content" data-aos="fade-left" data-aos-duration="800">
                <span class="section-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_about_subtitle', 'About Me' ) ); ?></span>
                <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_about_title', 'Anti-Corruption & Governance Specialist' ) ); ?></h2>
                <p class="about-preview-text"><?php echo esc_html( get_theme_mod( 'feyikemi_about_preview_text', 'Dynamic, versatile, and results-oriented Anti-Corruption and Governance Specialist with over 4 years of professional experience in public enlightenment, education, investigation support, and oversight within the Independent Corrupt Practices and Other Related Offences Commission (ICPC), the foremost anti-corruption agency in Nigeria.' ) ); ?></p>
                <div class="about-info-cards">
                    <div class="info-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <strong><?php esc_html_e( 'Location', 'feyikemi-portfolio' ); ?></strong>
                            <span><?php echo esc_html( get_theme_mod( 'feyikemi_address', 'Osogbo, Osun State, Nigeria' ) ); ?></span>
                        </div>
                    </div>
                    <div class="info-card">
                        <i class="fas fa-briefcase"></i>
                        <div>
                            <strong><?php esc_html_e( 'Current Role', 'feyikemi-portfolio' ); ?></strong>
                            <span><?php echo esc_html( get_theme_mod( 'feyikemi_current_role', 'Deputy Superintendent, ICPC' ) ); ?></span>
                        </div>
                    </div>
                </div>
                <?php
                $about_page = get_page_by_path( 'about' );
                if ( $about_page ) :
                ?>
                    <a href="<?php echo esc_url( get_permalink( $about_page->ID ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'Read More About Me', 'feyikemi-portfolio' ); ?> <i class="fas fa-arrow-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Services/Expertise Preview -->
<section id="expertise-preview" class="section expertise-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_expertise_subtitle', 'What I Do' ) ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_expertise_title', 'Areas of Expertise' ) ); ?></h2>
        </div>
        <div class="expertise-grid">
            <?php for ( $i = 1; $i <= 6; $i++ ) :
                $defaults = array(
                    1 => array( 'fas fa-shield-alt', 'Anti-Corruption Advocacy', 'Delivering high-impact integrity and civic education lectures, orienting over 15,000 corps members on ethics and national values.' ),
                    2 => array( 'fas fa-search', 'Investigation Support', 'Supporting investigations, drafting strategies, evidence collation, and reporting for compliance monitoring.' ),
                    3 => array( 'fas fa-landmark', 'Governance Oversight', 'Policy analysis, governance oversight, and monitoring of critical national programs and public policy implementation.' ),
                    4 => array( 'fas fa-users', 'Stakeholder Engagement', 'Liaison and coordination in multi-agency operations, bridging communication and compliance across organizations.' ),
                    5 => array( 'fas fa-chalkboard-teacher', 'Public Education', 'Curriculum development and public speaking for youth audiences on ethics, civic responsibility, and anti-corruption.' ),
                    6 => array( 'fas fa-file-alt', 'Technical Reporting', 'Writing comprehensive news, activity reports, and technical documents summarizing departmental initiatives and outcomes.' ),
                );
                $icon  = get_theme_mod( "feyikemi_expertise_{$i}_icon", $defaults[ $i ][0] );
                $title = get_theme_mod( "feyikemi_expertise_{$i}_title", $defaults[ $i ][1] );
                $desc  = get_theme_mod( "feyikemi_expertise_{$i}_desc", $defaults[ $i ][2] );
            ?>
            <div class="expertise-card" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 100; ?>">
                <div class="expertise-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                <h3><?php echo esc_html( $title ); ?></h3>
                <p><?php echo esc_html( $desc ); ?></p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- Experience Preview -->
<section id="experience-preview" class="section experience-preview-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_exp_subtitle', 'My Journey' ) ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_exp_title', 'Professional Experience' ) ); ?></h2>
        </div>
        <div class="timeline">
            <?php for ( $i = 1; $i <= 3; $i++ ) :
                $defaults = array(
                    1 => array( 'Dec 2021 - Present', 'Senior Officer - Public Enlightenment & Education', 'Independent Corrupt Practices and Other Related Offences Commission (ICPC)', 'Deputy Superintendent (GL 9). Deliver integrity lectures at NYSC camps, serve as ACTU Desk Officer, support investigations, and participate in national task forces.' ),
                    2 => array( '2018 - 2019', 'National Youth Service Corps (NYSC)', 'Command Day Secondary School, Nigerian Army 82 Division, Enugu', 'Completed mandatory national service contributing to community development and education.' ),
                    3 => array( 'Jan 2025', 'Promoted to Deputy Superintendent', 'ICPC - Grade Level 9', 'Recognized for exceptional performance and promoted from Assistant Superintendent (GL 8) to Deputy Superintendent (GL 9).' ),
                );
                $date  = get_theme_mod( "feyikemi_timeline_{$i}_date", $defaults[ $i ][0] );
                $role  = get_theme_mod( "feyikemi_timeline_{$i}_role", $defaults[ $i ][1] );
                $org   = get_theme_mod( "feyikemi_timeline_{$i}_org", $defaults[ $i ][2] );
                $desc  = get_theme_mod( "feyikemi_timeline_{$i}_desc", $defaults[ $i ][3] );
            ?>
            <div class="timeline-item" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 150; ?>">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <span class="timeline-date"><i class="fas fa-calendar-alt"></i> <?php echo esc_html( $date ); ?></span>
                    <h3 class="timeline-title"><?php echo esc_html( $role ); ?></h3>
                    <span class="timeline-org"><i class="fas fa-building"></i> <?php echo esc_html( $org ); ?></span>
                    <p><?php echo esc_html( $desc ); ?></p>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <?php
        $exp_page = get_page_by_path( 'experience' );
        if ( $exp_page ) :
        ?>
            <div class="section-cta" data-aos="fade-up">
                <a href="<?php echo esc_url( get_permalink( $exp_page->ID ) ); ?>" class="btn btn-primary"><?php esc_html_e( 'View Full Experience', 'feyikemi-portfolio' ); ?> <i class="fas fa-arrow-right"></i></a>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Achievements Section -->
<section id="achievements-preview" class="section achievements-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_achieve_subtitle', 'Milestones' ) ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_achieve_title', 'Key Achievements' ) ); ?></h2>
        </div>
        <div class="achievements-grid">
            <?php for ( $i = 1; $i <= 4; $i++ ) :
                $defaults = array(
                    1 => array( 'fas fa-microphone-alt', 'Successfully delivered integrity lectures singlehandedly to over four NYSC batches annually, cumulatively engaging 20,000+ youths nationwide.' ),
                    2 => array( 'fas fa-chart-line', 'Played instrumental roles in compliance monitoring across national programs and election integrity initiatives.' ),
                    3 => array( 'fas fa-school', 'Contributed to institutional anti-corruption advocacy through formation and supervision of over 70 school-based anti-corruption clubs.' ),
                    4 => array( 'fas fa-handshake', 'Recognized for capacity to bridge communication and compliance in multi-agency task forces.' ),
                );
                $icon = get_theme_mod( "feyikemi_achievement_{$i}_icon", $defaults[ $i ][0] );
                $text = get_theme_mod( "feyikemi_achievement_{$i}_text", $defaults[ $i ][1] );
            ?>
            <div class="achievement-card" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 100; ?>">
                <div class="achievement-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                <p><?php echo esc_html( $text ); ?></p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section id="cta" class="section cta-section">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <h2><?php echo esc_html( get_theme_mod( 'feyikemi_cta_title', 'Interested in Working Together?' ) ); ?></h2>
            <p><?php echo esc_html( get_theme_mod( 'feyikemi_cta_text', 'I am open to collaborations, speaking engagements, consultancy opportunities, and anti-corruption advocacy partnerships.' ) ); ?></p>
            <a href="<?php echo esc_url( get_theme_mod( 'feyikemi_cta_btn_url', '#contact' ) ); ?>" class="btn btn-white"><?php echo esc_html( get_theme_mod( 'feyikemi_cta_btn_text', 'Contact Me' ) ); ?> <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
