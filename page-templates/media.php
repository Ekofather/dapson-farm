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
            <p>Research papers, policy briefs, media appearances, and thought leadership content on governance and anti-corruption.</p>
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
                    array( 'title' => 'The Role of Public Enlightenment in Anti-Corruption Campaigns', 'type' => 'Policy Brief', 'desc' => 'An analysis of strategic communication approaches in shaping public attitudes toward corruption.' ),
                    array( 'title' => 'Ethics Training as a Tool for Institutional Reform', 'type' => 'Research Paper', 'desc' => 'How structured ethics programs reshape organizational culture and foster integrity-driven leadership.' ),
                    array( 'title' => 'Building Development-Minded Citizenship in Nigeria', 'type' => 'Working Paper', 'desc' => 'A framework for cultivating civic responsibility and active citizen participation in governance.' ),
                    array( 'title' => 'Media Relations and Anti-Corruption Communication', 'type' => 'Speech', 'desc' => 'Exploring the intersection of journalism, transparency, and the fight against corruption in public service.' ),
                    array( 'title' => 'Civic Reorientation and National Development', 'type' => 'Report', 'desc' => 'Strategies for fostering value reorientation, patriotism, and collective responsibility in society.' ),
                    array( 'title' => 'Integrity Systems in Public Institutions', 'type' => 'Case Study', 'desc' => 'Examining best practices in building and sustaining integrity frameworks within government agencies.' ),
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
                    'title'  => 'ICPC Spokesperson Bags Award of Excellence in Media Relations',
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
                    'title'  => 'ICPC Urges Students to Champion the Fight Against Corruption',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'October 2025',
                    'url'    => 'https://icpc.gov.ng/icpc-urges-students-to-champion-the-fight-against-corruption/',
                    'type'   => 'News',
                ),
                array(
                    'title'  => 'ICPC Hosts Secondary School Students on Anti-Corruption Educational Visit',
                    'source' => 'ICPC Nigeria',
                    'date'   => 'May 2025',
                    'url'    => 'https://icpc.gov.ng/icpc-hosts-secondary-school-students-on-anti-corruption-educational-visit/',
                    'type'   => 'News',
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
