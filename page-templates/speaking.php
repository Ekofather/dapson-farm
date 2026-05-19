<?php
/**
 * Template Name: Speaking & Engagements Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-speaking">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Speaking</span>
            <h1>Speaking & <span class="gold">Engagements</span></h1>
            <p>From the NAOSNP Media Workshop in Lagos to UBEC's 29th Quarterly Meeting in Abuja, from World Press Conferences to Students Anti-Corruption Vanguard inaugurations — compelling, evidence-based presentations that shape national discourse on governance, ethics, and anti-corruption.</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<!-- Speaking Topics -->
<section class="section section-topics">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Expertise Areas</span>
            <h2 class="section-title">Speaking Topics</h2>
            <p class="section-desc">Demola Bakare, FSI, ANIPR, brings over two decades of frontline anti-corruption experience to every engagement — drawing from real institutional reform, real corruption risk assessments, and real governance outcomes to deliver presentations that are both authoritative and transformative.</p>
        </div>
        <div class="topics-grid">
            <?php
            $topics = array(
                array( 'icon' => 'fas fa-shield-alt', 'title' => 'Why Prevention is Better Than Cure', 'desc' => 'Drawing from ICPC\'s port sector reforms, system studies, and corruption risk assessments to demonstrate that preventive strategies offer deeper, longer-lasting value than enforcement alone.' ),
                array( 'icon' => 'fas fa-landmark', 'title' => 'Building Integrity Systems in Public Institutions', 'desc' => 'From ACTU establishment to Ethics and Integrity Compliance Scorecards — practical frameworks for transforming institutional governance across MDAs.' ),
                array( 'icon' => 'fas fa-users', 'title' => 'Ethical Leadership & Development-Minded Citizenship', 'desc' => 'Cultivating integrity-driven leadership culture and a new social contract between state and citizen grounded in transparency and collective responsibility.' ),
                array( 'icon' => 'fas fa-bullhorn', 'title' => 'Public Enlightenment as a Governance Tool', 'desc' => 'How strategic communication bridges the gap between institutional enforcement and public consciousness — from national campaigns to grassroots mobilization.' ),
                array( 'icon' => 'fas fa-chart-line', 'title' => 'Digital Governance & Anti-Corruption Innovation', 'desc' => 'Geo-tagged project monitoring, automated financial management, and digitally-enabled coordination as tools for real-time, transparent governance.' ),
                array( 'icon' => 'fas fa-newspaper', 'title' => 'Media, Journalism & the Fight Against Corruption', 'desc' => 'Credibility over speed — how responsible journalism serves as a strategic ally in the anti-corruption struggle and why media practitioners must prioritize accuracy and national interest.' ),
            );
            foreach ( $topics as $index => $topic ) :
            ?>
                <div class="topic-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                    <div class="topic-icon"><i class="<?php echo esc_attr( $topic['icon'] ); ?>"></i></div>
                    <h3><?php echo esc_html( $topic['title'] ); ?></h3>
                    <p><?php echo esc_html( $topic['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Past Engagements -->
<section class="section section-past-engagements">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Track Record</span>
            <h2 class="section-title">Notable Engagements</h2>
        </div>
        <div class="engagements-list">
            <?php
            $engagements = get_posts( array(
                'post_type'      => 'engagement',
                'posts_per_page' => 10,
                'orderby'        => 'meta_value',
                'meta_key'       => '_engagement_date',
                'order'          => 'DESC',
            ) );

            if ( $engagements ) :
                foreach ( $engagements as $engagement ) :
                    $date     = get_post_meta( $engagement->ID, '_engagement_date', true );
                    $location = get_post_meta( $engagement->ID, '_engagement_location', true );
                    $type     = get_post_meta( $engagement->ID, '_engagement_type', true );
            ?>
                <div class="engagement-item" data-aos="fade-up">
                    <div class="engagement-date">
                        <?php if ( $date ) : ?>
                            <span class="eng-month"><?php echo esc_html( gmdate( 'M', strtotime( $date ) ) ); ?></span>
                            <span class="eng-day"><?php echo esc_html( gmdate( 'd', strtotime( $date ) ) ); ?></span>
                            <span class="eng-year"><?php echo esc_html( gmdate( 'Y', strtotime( $date ) ) ); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="engagement-details">
                        <h3><?php echo esc_html( $engagement->post_title ); ?></h3>
                        <div class="engagement-meta">
                            <?php if ( $location ) : ?>
                                <span><i class="fas fa-map-marker-alt"></i> <?php echo esc_html( $location ); ?></span>
                            <?php endif; ?>
                            <?php if ( $type ) : ?>
                                <span><i class="fas fa-tag"></i> <?php echo esc_html( ucfirst( $type ) ); ?></span>
                            <?php endif; ?>
                        </div>
                        <?php if ( $engagement->post_excerpt ) : ?>
                            <p><?php echo esc_html( $engagement->post_excerpt ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endforeach;
                wp_reset_postdata();
            else :
                $sample_engagements = array(
                    array( 'title' => 'UBEC 29th Quarterly Meeting: "Accelerating Basic Education Through Digitally-Enabled Coordination"', 'location' => 'UBEC Digital Resource Centre, Abuja', 'type' => 'Keynote', 'date' => 'Apr 2026', 'desc' => 'Presented on behalf of the ICPC Chairman on leveraging digital tools — geo-tagging, automated financial management, and centralised data platforms — to strengthen transparency in Nigeria\'s basic education sector.' ),
                    array( 'title' => 'NAOSNP Media Workshop: "Combatting Corruption in Public Service: The Role of Online Journalists"', 'location' => 'LCCI Expo & Conference Centre, Alausa, Lagos', 'type' => 'Keynote', 'date' => 'Oct 2025', 'desc' => 'Delivered keynote address to media practitioners and security reporters. Declared: "Credibility, not speed, remains the true currency of journalism." Received Award of Excellence in Media Relations.' ),
                    array( 'title' => 'SAEMA Diligent Investigation Award Ceremony', 'location' => 'NDLEA Headquarters, Abuja', 'type' => 'Award Acceptance', 'date' => 'Nov 2025', 'desc' => 'Represented ICPC to accept the prestigious SAEMA Diligent Investigation Award for a second consecutive year, stating: "This award speaks to an ingrained ethos within the ICPC."' ),
                    array( 'title' => 'ICPC World Press Conference: CEPTI Phase 6 & EICS 2024 Reports', 'location' => 'ICPC Headquarters, Abuja', 'type' => 'Press Conference', 'date' => 'Dec 2024', 'desc' => 'Presented findings from the Constituency and Executive Projects Tracking Initiative (Phase 6) and Ethics and Integrity Compliance Scorecard assessing 330 MDAs. Highlighted N346M cash recoveries, N513M asset recoveries, and N30B in government savings.' ),
                    array( 'title' => 'Students Anti-Corruption Vanguard (SAV) Inauguration', 'location' => 'ICPC Auditorium, Abuja', 'type' => 'Inauguration', 'date' => 'Nov 2024', 'desc' => 'Inaugurated SAV chapters at Nile University, Federal Polytechnic Nasarawa (Toto), and FCT College of Nursing Sciences. Charged students to be "ambassadors of integrity" and "advocates for ethical leadership."' ),
                    array( 'title' => 'Federal Ministry of Labour & Employment: GL 16-17 Officers Ethics Workshop', 'location' => 'Abuja, Nigeria', 'type' => 'Workshop', 'date' => '2022', 'desc' => 'Represented the ICPC Chairman to deliver sensitisation workshop on "The Phenomenon of Corruption: Types, Causes, Consequences and Impact on Civil Servants" for senior officers.' ),
                    array( 'title' => 'Secondary School Anti-Corruption Educational Visits', 'location' => 'ICPC Headquarters, Abuja', 'type' => 'Education', 'date' => '2025', 'desc' => 'Hosted students from multiple secondary schools including Oloye Comprehensive College for anti-corruption education visits, emphasizing that "every time you choose to do the right thing, you are helping to build a better Nigeria."' ),
                    array( 'title' => 'ICPC-UBEC Partnership Courtesy Visit', 'location' => 'ICPC Headquarters, Abuja', 'type' => 'Institutional', 'date' => 'Oct 2025', 'desc' => 'Participated in the landmark courtesy visit by UBEC Executive Secretary Dr. Aisha Garba, strengthening institutional cooperation for transparency in basic education.' ),
                );
                foreach ( $sample_engagements as $index => $eng ) :
            ?>
                <div class="engagement-item" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                    <div class="engagement-date">
                        <span class="eng-month"><?php echo esc_html( $eng['date'] ); ?></span>
                    </div>
                    <div class="engagement-details">
                        <h3><?php echo esc_html( $eng['title'] ); ?></h3>
                        <div class="engagement-meta">
                            <span><i class="fas fa-map-marker-alt"></i> <?php echo esc_html( $eng['location'] ); ?></span>
                            <span><i class="fas fa-tag"></i> <?php echo esc_html( $eng['type'] ); ?></span>
                        </div>
                        <p><?php echo esc_html( $eng['desc'] ); ?></p>
                    </div>
                </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Booking CTA -->
<section class="section section-booking-cta">
    <div class="container">
        <div class="booking-content" data-aos="fade-up">
            <h2>Book Demola Bakare for Your Next Event</h2>
            <p>Invite the Director of Public Enlightenment & Education and official Spokesperson of ICPC Nigeria — a nationally respected authority with over 25 years of frontline anti-corruption experience, multiple awards for excellence in media relations, and a proven track record of delivering presentations that transform institutional cultures.</p>
            <div class="booking-actions">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>" class="btn btn-gold btn-lg">Request a Speaking Engagement</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
