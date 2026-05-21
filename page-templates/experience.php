<?php
/**
 * Template Name: Experience
 *
 * @package Feyikemi_Portfolio
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-hero-subtitle"><?php echo esc_html( get_theme_mod( 'feyikemi_exp_page_subtitle', 'My Professional Journey' ) ); ?></span>
            <h1 class="page-hero-title"><?php echo esc_html( get_theme_mod( 'feyikemi_exp_page_title', 'Experience' ) ); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'feyikemi-portfolio' ); ?></a>
                <span class="separator"><i class="fas fa-chevron-right"></i></span>
                <span class="current"><?php esc_html_e( 'Experience', 'feyikemi-portfolio' ); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- Current Position -->
<section class="section current-position-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'Current Role', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_current_position_title', 'Independent Corrupt Practices and Other Related Offences Commission (ICPC)' ) ); ?></h2>
        </div>
        <div class="current-role-card" data-aos="fade-up">
            <div class="role-header">
                <div class="role-info">
                    <h3><?php echo esc_html( get_theme_mod( 'feyikemi_current_job_title', 'Senior Officer – Public Enlightenment & Education Department' ) ); ?></h3>
                    <span class="role-period"><i class="fas fa-calendar-alt"></i> <?php echo esc_html( get_theme_mod( 'feyikemi_current_job_period', 'December 2021 – Present' ) ); ?></span>
                </div>
                <div class="role-badge">
                    <span class="badge-current"><?php esc_html_e( 'Current', 'feyikemi-portfolio' ); ?></span>
                </div>
            </div>
            <div class="role-ranks">
                <div class="rank-item">
                    <i class="fas fa-award"></i>
                    <span><?php echo esc_html( get_theme_mod( 'feyikemi_rank_1', 'Assistant Superintendent (Grade Level 8) — January 2022 to January 2025' ) ); ?></span>
                </div>
                <div class="rank-item active">
                    <i class="fas fa-star"></i>
                    <span><?php echo esc_html( get_theme_mod( 'feyikemi_rank_2', 'Deputy Superintendent (Grade Level 9) — Promoted January 2025' ) ); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Responsibilities -->
<section class="section responsibilities-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'What I Do', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_resp_title', 'Key Professional Responsibilities' ) ); ?></h2>
        </div>

        <!-- Responsibility 1 -->
        <div class="responsibility-block" data-aos="fade-up">
            <div class="resp-header">
                <div class="resp-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                <h3><?php echo esc_html( get_theme_mod( 'feyikemi_resp1_title', 'Public Enlightenment & Integrity Education' ) ); ?></h3>
            </div>
            <ul class="resp-list">
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp1_item1', 'Deliver annual Integrity Lectures at NYSC Orientation Camps across multiple states (Osun and Kwara) for over 4 consecutive years, orienting over 15,000 corps members on ethics, national values, public integrity, and anti-corruption civic roles.' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp1_item2', 'Develop lecture content tailored to youth audiences focusing on ethics, civic responsibility, and anti-corruption best practices.' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp1_item3', 'Produce post-seminar evaluations and feedback reports to aid ongoing curriculum refinement.' ) ); ?></li>
            </ul>
        </div>

        <!-- Responsibility 2 -->
        <div class="responsibility-block" data-aos="fade-up">
            <div class="resp-header">
                <div class="resp-icon"><i class="fas fa-shield-alt"></i></div>
                <h3><?php echo esc_html( get_theme_mod( 'feyikemi_resp2_title', 'ACTU Desk Officer' ) ); ?></h3>
            </div>
            <ul class="resp-list">
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp2_item1', 'Act as primary liaison between ICPC Headquarters and ACTU in assigned MDAs, guiding unit functions and reporting outcomes.' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp2_item2', 'Monitor ACTU activities, attend quarterly unit meetings, and support professional development and training for unit members.' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp2_item3', 'Assist ACTU members in executing statutory functions such as system reviews, compliance evaluation, and anti-corruption sensitization.' ) ); ?></li>
            </ul>
        </div>

        <!-- Responsibility 3 -->
        <div class="responsibility-block" data-aos="fade-up">
            <div class="resp-header">
                <div class="resp-icon"><i class="fas fa-search"></i></div>
                <h3><?php echo esc_html( get_theme_mod( 'feyikemi_resp3_title', 'Investigation Support & Oversight' ) ); ?></h3>
            </div>
            <ul class="resp-list">
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp3_item1', 'Participated as a team player in investigation activities, supporting investigations, drafting investigation strategies, evidence collation, and reporting.' ) ); ?></li>
            </ul>
        </div>

        <!-- Responsibility 4 -->
        <div class="responsibility-block" data-aos="fade-up">
            <div class="resp-header">
                <div class="resp-icon"><i class="fas fa-school"></i></div>
                <h3><?php echo esc_html( get_theme_mod( 'feyikemi_resp4_title', 'Anti-Corruption Club Formation & Advocacy' ) ); ?></h3>
            </div>
            <ul class="resp-list">
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp4_item1', 'Facilitated the creation and supervision of over 60 Anti-Corruption Clubs in primary and secondary schools, and 5 Student Anti-Corruption Vanguard groups in tertiary institutions.' ) ); ?></li>
                <li><?php echo esc_html( get_theme_mod( 'feyikemi_resp4_item2', 'Designed club engagement models, coordinated stakeholder partnerships, and organized awareness workshops promoting youth leadership in anti-corruption advocacy.' ) ); ?></li>
            </ul>
        </div>
    </div>
</section>

<!-- National Assignments -->
<section class="section assignments-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-subtitle"><?php esc_html_e( 'National Impact', 'feyikemi-portfolio' ); ?></span>
            <h2 class="section-title"><?php echo esc_html( get_theme_mod( 'feyikemi_assign_title', 'National Assignments' ) ); ?></h2>
        </div>
        <div class="assignments-grid">
            <?php for ( $i = 1; $i <= 4; $i++ ) :
                $defaults = array(
                    1 => array( '2023', '2023 Nigerian General & Gubernatorial Elections Monitoring', 'Played a key role in inter-agency integrity monitoring to enhance transparency in electoral processes.', 'fas fa-vote-yea' ),
                    2 => array( '2023', 'Naira Redesign Implementation Task Force', 'Collaborated with ICPC, CBN, and EFCC on fair distribution and compliance mechanisms for new currency rollout.', 'fas fa-money-bill-wave' ),
                    3 => array( '2024', 'Maize & Garri Fair Distribution Monitoring', 'Ensured equitable and transparent distribution of subsidized food commodities across Osun State.', 'fas fa-wheat-awn' ),
                    4 => array( '2025', 'Federal Poverty Alleviation Program', 'Represented ICPC Osun State in supervising subsidized rice distribution to beneficiary communities.', 'fas fa-hands-helping' ),
                );
                $year  = get_theme_mod( "feyikemi_assign_{$i}_year", $defaults[ $i ][0] );
                $title = get_theme_mod( "feyikemi_assign_{$i}_title", $defaults[ $i ][1] );
                $desc  = get_theme_mod( "feyikemi_assign_{$i}_desc", $defaults[ $i ][2] );
                $icon  = get_theme_mod( "feyikemi_assign_{$i}_icon", $defaults[ $i ][3] );
            ?>
            <div class="assignment-card" data-aos="fade-up" data-aos-delay="<?php echo ( $i - 1 ) * 100; ?>">
                <div class="assignment-year"><?php echo esc_html( $year ); ?></div>
                <div class="assignment-icon"><i class="<?php echo esc_attr( $icon ); ?>"></i></div>
                <h3><?php echo esc_html( $title ); ?></h3>
                <p><?php echo esc_html( $desc ); ?></p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<!-- NYSC Section -->
<section class="section nysc-section">
    <div class="container">
        <div class="nysc-card" data-aos="fade-up">
            <div class="nysc-icon"><i class="fas fa-flag"></i></div>
            <div class="nysc-content">
                <h3><?php echo esc_html( get_theme_mod( 'feyikemi_nysc_title', 'National Youth Service Corps (NYSC)' ) ); ?></h3>
                <span class="nysc-period"><?php echo esc_html( get_theme_mod( 'feyikemi_nysc_period', '2018 - 2019' ) ); ?></span>
                <p><?php echo esc_html( get_theme_mod( 'feyikemi_nysc_location', 'Command Day Secondary School, Nigerian Army 82 Division, Abakpa, Enugu' ) ); ?></p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
