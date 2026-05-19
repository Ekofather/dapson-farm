<?php
/**
 * Front Page Template
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section" id="hero">
    <div class="hero-overlay"></div>
    <div class="hero-particles" id="hero-particles"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1200">
            <div class="hero-badge">
                <span class="badge-icon"><i class="fas fa-shield-alt"></i></span>
                <span>Anti-Corruption Advocate &bull; Governance Strategist</span>
            </div>
            <h1 class="hero-title">
                <span class="hero-name">Demola Bakare</span>
                <span class="hero-suffix">, FSI</span>
            </h1>
            <p class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'demola_hero_subtitle', 'Pioneer Officer of ICPC Nigeria | Director, Public Enlightenment & Education | Ethics Trainer | Governance & Policy Consultant | Civic Transformation Strategist' ) ); ?></p>
            <div class="hero-quote">
                <blockquote>
                    &ldquo;<?php echo esc_html( get_theme_mod( 'demola_hero_quote', 'Credibility, not speed, remains the true currency of leadership. Every institution must be built on a foundation of integrity and pursued with meticulous expertise.' ) ); ?>&rdquo;
                </blockquote>
            </div>
            <div class="hero-actions">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ?: '#about-preview' ); ?>" class="btn btn-gold btn-lg">
                    <span>Explore My Journey</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'mri-elg' ) ) ?: '#mri-elg-preview' ); ?>" class="btn btn-outline-gold btn-lg">
                    <span>Discover MRI-ELG</span>
                </a>
            </div>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number" data-count="25">0</span><span class="stat-suffix">+</span>
                    <span class="stat-label">Years of Service</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="500">0</span><span class="stat-suffix">+</span>
                    <span class="stat-label">Training Sessions</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="50">0</span><span class="stat-suffix">+</span>
                    <span class="stat-label">Policy Initiatives</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="100">0</span><span class="stat-suffix">K+</span>
                    <span class="stat-label">Lives Impacted</span>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-scroll-indicator">
        <a href="#about-preview" aria-label="Scroll down">
            <span class="scroll-text">Scroll</span>
            <span class="scroll-line"></span>
        </a>
    </div>
</section>

<!-- About Preview -->
<section class="section section-about-preview" id="about-preview">
    <div class="container">
        <div class="about-preview-grid">
            <div class="about-preview-image" data-aos="fade-right" data-aos-duration="1000">
                <div class="image-frame">
                    <div class="image-placeholder">
                        <div class="placeholder-content">
                            <i class="fas fa-user-tie"></i>
                            <span>Demola Bakare, FSI</span>
                        </div>
                    </div>
                    <div class="image-accent"></div>
                </div>
                <div class="experience-badge">
                    <span class="exp-number">25+</span>
                    <span class="exp-text">Years Fighting<br>Corruption</span>
                </div>
            </div>
            <div class="about-preview-content" data-aos="fade-left" data-aos-duration="1000">
                <span class="section-label">About Demola Bakare</span>
                <h2 class="section-title">A Legacy of Integrity,<br>A Vision for Ethical Governance</h2>
                <div class="about-text">
                    <p><?php echo esc_html( get_theme_mod( 'demola_about_intro', 'Demola Bakare, FSI, is a nationally respected anti-corruption advocate, governance strategist, and ethics trainer with over 25 years of distinguished service in Nigeria\'s fight against corruption. As a pioneer officer and Director of Public Enlightenment and Education at the Independent Corrupt Practices and Other Related Offences Commission (ICPC), he has been at the forefront of shaping Nigeria\'s anti-corruption landscape.' ) ); ?></p>
                    <p>His work spans policy advocacy, ethics training, civic reorientation, public enlightenment campaigns, and institutional reform initiatives that have impacted millions of Nigerians across all sectors of governance.</p>
                </div>
                <div class="credential-tags">
                    <span class="tag"><i class="fas fa-award"></i> Fellow, Security Institute (FSI)</span>
                    <span class="tag"><i class="fas fa-landmark"></i> Pioneer Officer, ICPC</span>
                    <span class="tag"><i class="fas fa-microphone-alt"></i> ICPC Spokesperson</span>
                    <span class="tag"><i class="fas fa-trophy"></i> NAOSNP Award of Excellence</span>
                </div>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' ) ) ?: '#' ); ?>" class="btn btn-primary">
                    <span>Read Full Biography</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Core Pillars -->
<section class="section section-pillars">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Areas of Expertise</span>
            <h2 class="section-title">Pillars of Impact</h2>
            <p class="section-desc">Over two decades of dedicated service across six critical domains of governance and institutional reform.</p>
        </div>
        <div class="pillars-grid">
            <?php
            $pillars = array(
                array(
                    'icon'  => 'fas fa-shield-alt',
                    'title' => 'Anti-Corruption Strategy',
                    'desc'  => 'Leading Nigeria\'s fight against corruption through evidence-based strategies, institutional frameworks, and pioneering enforcement mechanisms at ICPC.',
                ),
                array(
                    'icon'  => 'fas fa-landmark',
                    'title' => 'Governance & Policy',
                    'desc'  => 'Designing and advocating for governance reforms, transparency frameworks, and accountability mechanisms across public institutions.',
                ),
                array(
                    'icon'  => 'fas fa-chalkboard-teacher',
                    'title' => 'Ethics Training',
                    'desc'  => 'Developing and delivering comprehensive ethics and integrity training programs for public servants, institutions, and civil society organizations.',
                ),
                array(
                    'icon'  => 'fas fa-bullhorn',
                    'title' => 'Public Enlightenment',
                    'desc'  => 'Pioneering public awareness campaigns and civic education initiatives that have reached millions of Nigerians across all demographics.',
                ),
                array(
                    'icon'  => 'fas fa-users',
                    'title' => 'Civic Reorientation',
                    'desc'  => 'Championing value reorientation programs that foster development-minded citizenship, patriotism, and collective responsibility.',
                ),
                array(
                    'icon'  => 'fas fa-handshake',
                    'title' => 'Institutional Reform',
                    'desc'  => 'Advising on institutional restructuring, capacity building, and the development of robust integrity systems for organizations.',
                ),
            );
            foreach ( $pillars as $index => $pillar ) :
            ?>
                <div class="pillar-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                    <div class="pillar-icon">
                        <i class="<?php echo esc_attr( $pillar['icon'] ); ?>"></i>
                    </div>
                    <h3><?php echo esc_html( $pillar['title'] ); ?></h3>
                    <p><?php echo esc_html( $pillar['desc'] ); ?></p>
                    <div class="pillar-number"><?php echo esc_html( str_pad( $index + 1, 2, '0', STR_PAD_LEFT ) ); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- MRI-ELG Preview -->
<section class="section section-mri-preview" id="mri-elg-preview">
    <div class="mri-bg-pattern"></div>
    <div class="container">
        <div class="mri-preview-content" data-aos="fade-up" data-aos-duration="1000">
            <div class="mri-header">
                <div class="mri-emblem">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <span class="section-label light">The Institution</span>
                <h2 class="section-title light">Moral Rearmament Initiative for Ethical Leadership &amp; Governance</h2>
                <p class="mri-tagline">&ldquo;Advancing Integrity, Accountability and Development-Minded Citizenship&rdquo;</p>
            </div>
            <div class="mri-description">
                <p>MRI-ELG is a think tank and consultancy institution founded by Demola Bakare, FSI, dedicated to advancing ethical leadership, good governance, and institutional integrity across Africa and beyond.</p>
            </div>
            <div class="mri-focus-areas">
                <div class="focus-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="focus-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Research & Policy</h4>
                    <p>Evidence-based research and policy recommendations for governance reform.</p>
                </div>
                <div class="focus-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="focus-icon"><i class="fas fa-users-cog"></i></div>
                    <h4>Capacity Building</h4>
                    <p>Training programs for ethical leadership and institutional integrity.</p>
                </div>
                <div class="focus-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="focus-icon"><i class="fas fa-globe-africa"></i></div>
                    <h4>Civic Engagement</h4>
                    <p>Mobilizing citizens for accountability and development-minded participation.</p>
                </div>
                <div class="focus-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="focus-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Institutional Advisory</h4>
                    <p>Strategic consulting for organizations seeking integrity-driven transformation.</p>
                </div>
            </div>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'mri-elg' ) ) ?: '#' ); ?>" class="btn btn-gold btn-lg">
                <span>Learn More About MRI-ELG</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Impact Timeline -->
<section class="section section-timeline">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Career Highlights</span>
            <h2 class="section-title">A Journey of Impact</h2>
        </div>
        <div class="timeline">
            <?php
            $timeline_items = array(
                array(
                    'year'  => 'Early 2000s',
                    'title' => 'Pioneer Officer, ICPC',
                    'desc'  => 'Joined the Independent Corrupt Practices and Other Related Offences Commission as one of its founding officers, helping to establish the institutional framework for Nigeria\'s premier anti-corruption agency.',
                ),
                array(
                    'year'  => '2000s-2010s',
                    'title' => 'Public Enlightenment Campaigns',
                    'desc'  => 'Led groundbreaking public awareness campaigns across Nigeria, reaching millions of citizens with anti-corruption education and civic engagement programs.',
                ),
                array(
                    'year'  => '2010s',
                    'title' => 'Ethics Training Programs',
                    'desc'  => 'Developed and delivered hundreds of ethics and integrity training sessions for public servants, law enforcement, judiciary, and educational institutions.',
                ),
                array(
                    'year'  => '2020s',
                    'title' => 'Director, Public Enlightenment & Education',
                    'desc'  => 'Appointed Director of the Public Enlightenment and Education Department at ICPC, overseeing nationwide anti-corruption education and communication strategies.',
                ),
                array(
                    'year'  => '2025',
                    'title' => 'Award of Excellence in Media Relations',
                    'desc'  => 'Conferred with the Award of Excellence in Media Relations by the National Association of Online Security News Publishers (NAOSNP) for outstanding media engagement.',
                ),
                array(
                    'year'  => 'Present',
                    'title' => 'Founding MRI-ELG',
                    'desc'  => 'Establishing the Moral Rearmament Initiative for Ethical Leadership & Governance (MRI-ELG) to advance integrity, accountability, and development-minded citizenship across Africa.',
                ),
            );
            foreach ( $timeline_items as $index => $item ) :
            ?>
                <div class="timeline-item <?php echo 0 === $index % 2 ? 'left' : 'right'; ?>" data-aos="fade-<?php echo 0 === $index % 2 ? 'right' : 'left'; ?>" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                    <div class="timeline-marker">
                        <span class="timeline-dot"></span>
                    </div>
                    <div class="timeline-content">
                        <span class="timeline-year"><?php echo esc_html( $item['year'] ); ?></span>
                        <h3><?php echo esc_html( $item['title'] ); ?></h3>
                        <p><?php echo esc_html( $item['desc'] ); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="timeline-line"></div>
        </div>
    </div>
</section>

<!-- Testimonials / Quotes -->
<section class="section section-testimonials">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Voices of Impact</span>
            <h2 class="section-title">What Others Say</h2>
        </div>
        <div class="testimonials-slider" id="testimonials-slider">
            <?php
            $testimonials = get_posts( array(
                'post_type'      => 'testimonial',
                'posts_per_page' => 6,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ) );

            if ( $testimonials ) :
                foreach ( $testimonials as $testimonial ) :
                    $role = get_post_meta( $testimonial->ID, '_testimonial_role', true );
                    $org  = get_post_meta( $testimonial->ID, '_testimonial_organization', true );
            ?>
                <div class="testimonial-card" data-aos="fade-up">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <blockquote><?php echo esc_html( $testimonial->post_content ); ?></blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <strong><?php echo esc_html( $testimonial->post_title ); ?></strong>
                            <?php if ( $role || $org ) : ?>
                                <span><?php echo esc_html( trim( $role . ', ' . $org, ', ' ) ); ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
                wp_reset_postdata();
            else :
            ?>
                <div class="testimonial-card" data-aos="fade-up">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <blockquote>Every investigation must be built on a foundation of integrity and pursued with meticulous expertise. This is the ingrained ethos within the ICPC.</blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <strong>Demola Bakare, FSI</strong>
                            <span>At SAEMA Award Ceremony, 2025</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <blockquote>Credibility, not speed, remains the true currency of journalism. Inaccurate or exaggerated reports could undermine public trust and compromise national security.</blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <strong>Demola Bakare, FSI</strong>
                            <span>NAOSNP Media Workshop, 2025</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <blockquote>Every time you choose to do the right thing, even when no one is watching, you are helping to build a better Nigeria. Young people can lead with values and integrity.</blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <strong>ICPC Youth Engagement Program</strong>
                            <span>Anti-Corruption Educational Visit</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Latest Insights -->
<section class="section section-insights">
    <div class="container">
        <div class="section-header-row" data-aos="fade-up">
            <div>
                <span class="section-label">Latest Insights</span>
                <h2 class="section-title">Thought Leadership</h2>
            </div>
            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: get_bloginfo( 'url' ) . '/blog/' ); ?>" class="btn btn-outline-primary">
                View All Articles <i class="fas fa-arrow-right"></i>
            </a>
        </div>
        <div class="insights-grid">
            <?php
            $latest_posts = new WP_Query( array(
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ) );

            if ( $latest_posts->have_posts() ) :
                $delay = 0;
                while ( $latest_posts->have_posts() ) :
                    $latest_posts->the_post();
            ?>
                <article class="insight-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                    <div class="insight-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'demola-card' ); ?>
                        <?php else : ?>
                            <div class="insight-image-placeholder">
                                <i class="fas fa-newspaper"></i>
                            </div>
                        <?php endif; ?>
                        <div class="insight-category">
                            <?php
                            $categories = get_the_category();
                            if ( $categories ) {
                                echo esc_html( $categories[0]->name );
                            }
                            ?>
                        </div>
                    </div>
                    <div class="insight-content">
                        <div class="insight-meta">
                            <span><i class="far fa-calendar"></i> <?php echo esc_html( get_the_date( 'M d, Y' ) ); ?></span>
                            <span><i class="far fa-clock"></i> <?php echo esc_html( demola_reading_time() ); ?> min read</span>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">
                            Read Article <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            <?php
                    $delay += 100;
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <?php
                $placeholder_posts = array(
                    array(
                        'title' => 'The Role of Public Enlightenment in Anti-Corruption',
                        'desc'  => 'Examining how strategic communication and civic education can transform public attitudes toward corruption and institutional accountability.',
                        'cat'   => 'Governance',
                        'date'  => 'Jan 15, 2025',
                    ),
                    array(
                        'title' => 'Ethics Training as a Tool for Institutional Reform',
                        'desc'  => 'How structured ethics training programs can fundamentally reshape organizational culture and foster a new generation of integrity-driven leaders.',
                        'cat'   => 'Ethics',
                        'date'  => 'Dec 08, 2024',
                    ),
                    array(
                        'title' => 'Building Development-Minded Citizenship in Nigeria',
                        'desc'  => 'A strategic framework for cultivating civic responsibility, national consciousness, and active citizen participation in governance processes.',
                        'cat'   => 'Civic Education',
                        'date'  => 'Nov 22, 2024',
                    ),
                );
                foreach ( $placeholder_posts as $index => $post_item ) :
                ?>
                    <article class="insight-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                        <div class="insight-image">
                            <div class="insight-image-placeholder">
                                <i class="fas fa-newspaper"></i>
                            </div>
                            <div class="insight-category"><?php echo esc_html( $post_item['cat'] ); ?></div>
                        </div>
                        <div class="insight-content">
                            <div class="insight-meta">
                                <span><i class="far fa-calendar"></i> <?php echo esc_html( $post_item['date'] ); ?></span>
                                <span><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                            <h3><a href="#"><?php echo esc_html( $post_item['title'] ); ?></a></h3>
                            <p><?php echo esc_html( $post_item['desc'] ); ?></p>
                            <a href="#" class="read-more">Read Article <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Partners & Affiliations -->
<section class="section section-partners">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Affiliations & Recognition</span>
            <h2 class="section-title">Institutional Partnerships</h2>
        </div>
        <div class="partners-logos" data-aos="fade-up" data-aos-delay="200">
            <?php
            $partners = array(
                array( 'name' => 'ICPC Nigeria', 'abbr' => 'ICPC' ),
                array( 'name' => 'NAOSNP', 'abbr' => 'NAOSNP' ),
                array( 'name' => 'Security Institute', 'abbr' => 'SI' ),
                array( 'name' => 'SAEMA', 'abbr' => 'SAEMA' ),
                array( 'name' => 'Federal Government of Nigeria', 'abbr' => 'FGN' ),
                array( 'name' => 'MRI-ELG', 'abbr' => 'MRI-ELG' ),
            );
            foreach ( $partners as $partner ) :
            ?>
                <div class="partner-item" title="<?php echo esc_attr( $partner['name'] ); ?>">
                    <span class="partner-abbr"><?php echo esc_html( $partner['abbr'] ); ?></span>
                    <span class="partner-name"><?php echo esc_html( $partner['name'] ); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
