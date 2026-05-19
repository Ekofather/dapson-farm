<?php
/**
 * Template Name: Media & Publications Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-media">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Media</span>
            <h1>Media & <span class="gold">Publications</span></h1>
            <p>Published opinion editorials, keynote addresses, institutional reports, and media coverage documenting over two decades of anti-corruption advocacy, governance reform, and ethical leadership at the national level.</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<!-- Publications -->
<section class="section section-publications">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Research & Writing</span>
            <h2 class="section-title">Publications</h2>
        </div>
        <div class="publications-grid">
            <?php
            $publications = get_posts( array(
                'post_type'      => 'publication',
                'posts_per_page' => 9,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );

            if ( $publications ) :
                foreach ( $publications as $pub ) :
                    $pub_date = get_post_meta( $pub->ID, '_publication_date', true );
                    $pub_url  = get_post_meta( $pub->ID, '_publication_url', true );
                    $types    = get_the_terms( $pub->ID, 'publication_type' );
            ?>
                <div class="publication-card" data-aos="fade-up">
                    <div class="pub-image">
                        <?php if ( has_post_thumbnail( $pub->ID ) ) : ?>
                            <?php echo get_the_post_thumbnail( $pub->ID, 'demola-card' ); ?>
                        <?php else : ?>
                            <div class="pub-image-placeholder"><i class="fas fa-file-alt"></i></div>
                        <?php endif; ?>
                        <?php if ( $types && ! is_wp_error( $types ) ) : ?>
                            <span class="pub-type"><?php echo esc_html( $types[0]->name ); ?></span>
                        <?php endif; ?>
                    </div>
                    <div class="pub-content">
                        <h3><?php echo esc_html( $pub->post_title ); ?></h3>
                        <?php if ( $pub_date ) : ?>
                            <span class="pub-date"><i class="far fa-calendar"></i> <?php echo esc_html( gmdate( 'M Y', strtotime( $pub_date ) ) ); ?></span>
                        <?php endif; ?>
                        <p><?php echo esc_html( wp_trim_words( $pub->post_content, 20 ) ); ?></p>
                        <?php if ( $pub_url ) : ?>
                            <a href="<?php echo esc_url( $pub_url ); ?>" class="read-more" target="_blank" rel="noopener noreferrer">Read Publication <i class="fas fa-external-link-alt"></i></a>
                        <?php else : ?>
                            <a href="<?php echo esc_url( get_permalink( $pub->ID ) ); ?>" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                endforeach;
                wp_reset_postdata();
            else :
                $sample_pubs = array(
                    array( 'title' => 'Why Prevention is Better Than "Cure" in Nigeria\'s Anti-Corruption Efforts', 'type' => 'Op-Ed', 'desc' => 'A compelling argument for preventive strategies over enforcement-only approaches, drawing on ICPC\'s landmark work in port sector reform. Published in The Pinnacle Times, February 2026.' ),
                    array( 'title' => 'Why Well-Meaning Nigerians Should Support Tax Reform', 'type' => 'Op-Ed', 'desc' => 'Positioning fiscal reform as integrity reform — arguing that a weak tax framework is itself a corruption enabler. Published in Economic Confidential, January 2026.' ),
                    array( 'title' => 'CEPTI Phase 6 Report & Ethics and Integrity Compliance Scorecard 2024', 'type' => 'Institutional Report', 'desc' => 'Presented at ICPC World Press Conference. Covering 330 MDAs assessed, N346M cash recoveries, N513M asset recoveries, and approximately N30B saved through project monitoring.' ),
                    array( 'title' => 'Combatting Corruption and Other Vices in Public Service: The Role of Online Journalists', 'type' => 'Keynote Address', 'desc' => 'Delivered at NAOSNP capacity-building workshop, Lagos Chamber of Commerce. On media as watchdog and partner in governance.' ),
                    array( 'title' => 'Accelerating Basic Education Performance Through Digitally-Enabled Coordination', 'type' => 'Presentation', 'desc' => 'Presented at UBEC\'s 29th Quarterly Meeting on digital governance solutions for education sector transparency.' ),
                    array( 'title' => 'The Phenomenon of Corruption: Types, Causes, Consequences and Impact on Civil Servants', 'type' => 'Training Material', 'desc' => 'Sensitisation workshop content delivered to GL 16-17 officers at the Federal Ministry of Labour and Employment.' ),
                );
                foreach ( $sample_pubs as $index => $pub ) :
            ?>
                <div class="publication-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                    <div class="pub-image">
                        <div class="pub-image-placeholder"><i class="fas fa-file-alt"></i></div>
                        <span class="pub-type"><?php echo esc_html( $pub['type'] ); ?></span>
                    </div>
                    <div class="pub-content">
                        <h3><?php echo esc_html( $pub['title'] ); ?></h3>
                        <p><?php echo esc_html( $pub['desc'] ); ?></p>
                        <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<!-- Media Appearances -->
<section class="section section-media-appearances">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">In the News</span>
            <h2 class="section-title">Media Appearances</h2>
        </div>
        <div class="media-grid">
            <?php
            $media_items = array(
                array(
                    'title'  => 'ICPC Calls for Digital Coordination to Boost Basic Education Delivery',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'April 2026',
                    'url'    => 'https://icpc.gov.ng/icpc-calls-for-digital-coordination-to-boost-basic-education-delivery/',
                    'type'   => 'Press Release',
                ),
                array(
                    'title'  => 'Why Prevention is Better Than "Cure" in Nigeria\'s Anti-Corruption Efforts',
                    'source' => 'The Pinnacle Times',
                    'date'   => 'February 2026',
                    'url'    => 'https://thepinnacletimes.com.ng/why-prevention-is-better-than-cure-in-nigeria-s-anti-corruption-efforts/',
                    'type'   => 'Op-Ed',
                ),
                array(
                    'title'  => 'Why Well-Meaning Nigerians Should Support Tax Reform',
                    'source' => 'Economic Confidential',
                    'date'   => 'January 2026',
                    'url'    => 'https://economicconfidential.com/well-meaning-nigerians-tax/',
                    'type'   => 'Op-Ed',
                ),
                array(
                    'title'  => 'ICPC Spokesperson, Demola Bakare, Bags Award of Excellence in Media Relations',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'October 2025',
                    'url'    => 'https://icpc.gov.ng/icpc-spokesperson-demola-bakare-bags-award-of-excellence-in-media-relations/',
                    'type'   => 'Award',
                ),
                array(
                    'title'  => 'ICPC Repeats History, Wins 2025 SAEMA Diligent Investigation Award',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'November 2025',
                    'url'    => 'https://icpc.gov.ng/icpc-repeats-history-wins-2025-saema-diligent-investigation-award/',
                    'type'   => 'Press Release',
                ),
                array(
                    'title'  => 'ICPC Releases Reports on CEPTI Phase 6 and 2024 Ethics and Integrity Compliance Scorecard',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'December 2024',
                    'url'    => 'https://icpc.gov.ng/icpc-releases-reports-on-cepti-phase-6-and-2024-ethics-and-integrity-compliance-scorecard-eics/',
                    'type'   => 'Press Conference',
                ),
                array(
                    'title'  => 'ICPC Urges Students to Champion the Fight Against Corruption',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'October 2025',
                    'url'    => 'https://icpc.gov.ng/icpc-urges-students-to-champion-the-fight-against-corruption/',
                    'type'   => 'News',
                ),
                array(
                    'title'  => 'ICPC Launches Student Anti-Corruption Vanguard to Empower Youth',
                    'source' => 'The Sun Nigeria',
                    'date'   => 'November 2024',
                    'url'    => 'https://thesun.ng/icpc-launches-student-anti-corruption-vanguard-to-empower-youth-against-corruption/',
                    'type'   => 'News',
                ),
                array(
                    'title'  => 'ICPC Hosts Secondary School Students on Anti-Corruption Educational Visit',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'May 2025',
                    'url'    => 'https://icpc.gov.ng/icpc-hosts-secondary-school-students-on-anti-corruption-educational-visit/',
                    'type'   => 'News',
                ),
                array(
                    'title'  => 'Corruption Prevention, Best Strategy for a Corruption-Free Workplace – ICPC',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'February 2022',
                    'url'    => 'https://icpc.gov.ng/corruption-prevention-best-strategy-for-a-corruption-free-workplace-icpc/',
                    'type'   => 'Workshop',
                ),
                array(
                    'title'  => 'ICPC, UBEC Strengthen Partnership to Promote Transparency in Basic Education',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'October 2025',
                    'url'    => 'https://icpc.gov.ng/icpc-ubec-strengthen-partnership-to-promote-transparency-and-accountability-in-nigerias-basic-education-sector/',
                    'type'   => 'News',
                ),
                array(
                    'title'  => 'NELFUND Disbursed Only N44.2bn, Over N71bn Unaccounted For – ICPC',
                    'source' => 'The Whistler',
                    'date'   => '2025',
                    'url'    => 'https://thewhistler.ng/tag/demola-bakare/',
                    'type'   => 'Investigation',
                ),
            );
            foreach ( $media_items as $index => $media ) :
            ?>
                <a href="<?php echo esc_url( $media['url'] ); ?>" class="media-card" target="_blank" rel="noopener noreferrer" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                    <div class="media-card-type"><?php echo esc_html( $media['type'] ); ?></div>
                    <h3><?php echo esc_html( $media['title'] ); ?></h3>
                    <div class="media-card-meta">
                        <span><?php echo esc_html( $media['source'] ); ?></span>
                        <span><?php echo esc_html( $media['date'] ); ?></span>
                    </div>
                    <span class="media-card-link">Read Article <i class="fas fa-external-link-alt"></i></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
