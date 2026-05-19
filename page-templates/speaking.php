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
            <p>Powerful, thought-provoking presentations on governance, ethics, anti-corruption, and leadership transformation.</p>
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
            <p class="section-desc">Demola Bakare, FSI, delivers compelling presentations across a range of governance and ethics-related topics.</p>
        </div>
        <div class="topics-grid">
            <?php
            $topics = array(
                array( 'icon' => 'fas fa-shield-alt', 'title' => 'Anti-Corruption Strategy & Enforcement', 'desc' => 'Lessons from the frontline of Nigeria\'s anti-corruption campaign, institutional strategies, and enforcement mechanisms.' ),
                array( 'icon' => 'fas fa-landmark', 'title' => 'Governance Reform & Institutional Integrity', 'desc' => 'Building transparent, accountable institutions through strategic reform, policy innovation, and integrity systems.' ),
                array( 'icon' => 'fas fa-users', 'title' => 'Ethical Leadership in Public Service', 'desc' => 'Cultivating integrity-driven leadership culture in government, corporate, and civil society organizations.' ),
                array( 'icon' => 'fas fa-bullhorn', 'title' => 'Public Enlightenment & Civic Education', 'desc' => 'Designing and implementing effective public awareness campaigns that drive behavioral and attitudinal change.' ),
                array( 'icon' => 'fas fa-flag', 'title' => 'Nation Building & Civic Reorientation', 'desc' => 'Fostering development-minded citizenship, national consciousness, and collective responsibility for Nigeria\'s progress.' ),
                array( 'icon' => 'fas fa-newspaper', 'title' => 'Media, Governance & Accountability', 'desc' => 'The critical role of media in combating corruption, promoting transparency, and strengthening democratic governance.' ),
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
                    array( 'title' => 'NAOSNP Media Workshop Keynote Address', 'location' => 'Lagos Chamber of Commerce, Lagos', 'type' => 'Keynote', 'date' => 'Oct 2025', 'desc' => 'Keynote address on "Combatting Corruption and Other Vices in Public Service: The Role of Online Journalists"' ),
                    array( 'title' => 'SAEMA Award Ceremony', 'location' => 'NDLEA Headquarters, Abuja', 'type' => 'Award', 'date' => 'Nov 2025', 'desc' => 'Represented ICPC to accept the 2025 SAEMA Diligent Investigation Award' ),
                    array( 'title' => 'ICPC Anti-Corruption Educational Visit', 'location' => 'ICPC Headquarters, Abuja', 'type' => 'Education', 'date' => '2025', 'desc' => 'Hosted secondary school students for anti-corruption education and integrity awareness programs' ),
                    array( 'title' => 'UBEC Education Sector Anti-Corruption Workshop', 'location' => 'Abuja, Nigeria', 'type' => 'Workshop', 'date' => '2026', 'desc' => 'Led discussions on digital coordination to boost basic education delivery and combat corruption in the education sector' ),
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
            <p>Invite a nationally respected authority on governance, ethics, and anti-corruption to inspire and educate your audience.</p>
            <div class="booking-actions">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>" class="btn btn-gold btn-lg">Request a Speaking Engagement</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
