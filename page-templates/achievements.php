<?php
/**
 * Template Name: Achievements
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-hero-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_achieve_page_subtitle', 'Track Record' ) ); ?></span>
            <h1 class="page-hero-title"><?php echo esc_html( get_theme_mod( 'feyikemi_achieve_page_title', 'Achievements' ) ); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php esc_html_e( 'Achievements', 'feyikemi-portfolio' ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Key Achievements -->
<section class="section achievements-full-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'Milestones', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_achieve_section_title', 'Key Achievements & Impact' ) ); ?></h2>
        </div>

        <div class="achievements-showcase">
            <?php for ( $i = 1; $i <= 4; $i++ ) :
                $defaults = array(
                    1 => array(
                        'fas fa-microphone-alt',
                        'Youth Engagement at Scale',
                        'Successfully delivered integrity lectures singlehandedly to over four National Youth Service Corps (NYSC) batches annually, cumulatively engaging 20,000+ youths nationwide on ethics, national values, public integrity, and anti-corruption civic roles.',
                        '20,000+',
                        'Youths Reached',
                    ),
                    2 => array(
                        'fas fa-chart-line',
                        'National Compliance Monitoring',
                        'Played instrumental roles in compliance monitoring across national programs and election integrity initiatives, including the 2023 Nigerian General Elections, Naira Redesign Task Force, and Federal food distribution programs.',
                        '5+',
                        'National Programs',
                    ),
                    3 => array(
                        'fas fa-school',
                        'Anti-Corruption Clubs Network',
                        'Contributed to institutional anti-corruption advocacy through formation and supervision of over 70 school-based anti-corruption clubs and vanguards in secondary schools and tertiary institutions across Osun and Kwara states.',
                        '70+',
                        'Clubs Established',
                    ),
                    4 => array(
                        'fas fa-handshake',
                        'Multi-Agency Collaboration',
                        'Recognized for capacity to bridge communication and compliance in multi-agency task forces, working alongside ICPC, CBN, EFCC, and other national agencies to ensure transparency and accountability.',
                        '4+',
                        'Agency Partners',
                    ),
                );
                $icon    = get_theme_mod( "feyikemi_achievement_{$i}_icon", $defaults[ $i ][0] );
                $title   = get_theme_mod( "feyikemi_achievement_full_{$i}_title", $defaults[ $i ][1] );
                $text    = get_theme_mod( "feyikemi_achievement_full_{$i}_text", $defaults[ $i ][2] );
                $stat    = get_theme_mod( "feyikemi_achievement_full_{$i}_stat", $defaults[ $i ][3] );
                $stat_lb = get_theme_mod( "feyikemi_achievement_full_{$i}_stat_label", $defaults[ $i ][4] );
            ?>
            <div class="achievement-showcase-card" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 150; ?>">
                <div class="achievement-showcase-header">
                    <div class="achievement-showcase-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                    <div class="achievement-showcase-stat">
                        <span class="stat-number"><?php echo esc_html( $stat ); ?></span>
                        <span class="stat-label"><?php echo esc_html( $stat_lb ); ?></span>
                    </div>
                </div>
                <h3><?php echo esc_html( $title ); ?></h3>
                <p><?php echo esc_html( $text ); ?></p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
