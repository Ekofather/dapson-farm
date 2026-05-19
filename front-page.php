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
                <span>Anti-Corruption Advocate &bull; Governance Strategist &bull; ICPC Director</span>
            </div>
            <h1 class="hero-title">
                <span class="hero-name">Demola Bakare</span>
                <span class="hero-suffix">, FSI</span>
            </h1>
            <p class="hero-subtitle"><?php echo esc_html( get_theme_mod( 'demola_hero_subtitle', 'Director, Public Enlightenment & Education Department, ICPC Nigeria | Pioneer Anti-Corruption Officer | ANIPR | Spokesperson of Nigeria\'s Premier Anti-Corruption Agency | Architect of Preventive Anti-Corruption Strategies | Founder, MRI-ELG' ) ); ?></p>
            <div class="hero-quote">
                <blockquote>
                    &ldquo;<?php echo esc_html( get_theme_mod( 'demola_hero_quote', 'Credibility, not speed, remains the true currency of journalism. Every investigation must be built on a foundation of integrity and pursued with meticulous expertise. Prevention, not enforcement alone, offers deeper, longer-lasting value in the fight against corruption.' ) ); ?>&rdquo;
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
                    <span class="stat-number" data-count="330">0</span><span class="stat-suffix">+</span>
                    <span class="stat-label">MDAs Assessed</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="1500">0</span><span class="stat-suffix">+</span>
                    <span class="stat-label">Projects Tracked</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-count="30">0</span><span class="stat-suffix">B+</span>
                    <span class="stat-label">Naira Saved for Govt</span>
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
                    <p><?php echo esc_html( get_theme_mod( 'demola_about_intro', 'Demola Bakare, FSI, ANIPR, is a nationally respected anti-corruption advocate, governance strategist, and ethics trainer who has dedicated over two decades to Nigeria\'s fight against corruption. As a pioneer officer and the current Director of Public Enlightenment and Education Department at the Independent Corrupt Practices and Other Related Offences Commission (ICPC), he serves as the official Spokesperson of Nigeria\'s premier anti-corruption agency — leading nationwide campaigns, corruption risk assessments, system studies, and public enlightenment initiatives that have saved the Nigerian government over N30 billion.' ) ); ?></p>
                    <p>His thought leadership has shaped national discourse on corruption prevention, tax reform, digital governance, and ethical citizenship. From inaugurating Students Anti-Corruption Vanguards across Nigerian universities to presenting ICPC\'s landmark Constituency and Executive Projects Tracking Initiative (CEPTI) findings at World Press Conferences, Mr. Bakare bridges the gap between institutional enforcement and public consciousness.</p>
                </div>
                <div class="credential-tags">
                    <span class="tag"><i class="fas fa-award"></i> Fellow, Security Institute (FSI)</span>
                    <span class="tag"><i class="fas fa-certificate"></i> Associate, NIPR (ANIPR)</span>
                    <span class="tag"><i class="fas fa-landmark"></i> Pioneer Officer, ICPC</span>
                    <span class="tag"><i class="fas fa-microphone-alt"></i> ICPC Spokesperson</span>
                    <span class="tag"><i class="fas fa-trophy"></i> NAOSNP Award of Excellence</span>
                    <span class="tag"><i class="fas fa-medal"></i> SAEMA Award Recipient</span>
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
                    'desc'  => 'Spearheading Nigeria\'s fight against corruption through corruption risk assessments, system studies, and preventive strategies. Played a key role in ICPC\'s port sector reforms that dismantled corruption networks and enhanced trade facilitation.',
                ),
                array(
                    'icon'  => 'fas fa-landmark',
                    'title' => 'Governance & Policy',
                    'desc'  => 'Advancing governance reforms through ICPC\'s Ethics and Integrity Compliance Scorecard (EICS) — assessing 330+ MDAs annually on management culture, transparency, and accountability structures to drive institutional transformation.',
                ),
                array(
                    'icon'  => 'fas fa-chalkboard-teacher',
                    'title' => 'Ethics Training',
                    'desc'  => 'Delivering sensitisation workshops and capacity-building programs for public servants from Grade Level 16-17 officers to agency heads — embedding corruption prevention as organizational culture, not merely compliance.',
                ),
                array(
                    'icon'  => 'fas fa-bullhorn',
                    'title' => 'Public Enlightenment',
                    'desc'  => 'Directing ICPC\'s public awareness strategy as official Spokesperson — from World Press Conferences to community outreach campaigns. Delivered keynote at NAOSNP media workshop on combatting corruption through responsible journalism.',
                ),
                array(
                    'icon'  => 'fas fa-users',
                    'title' => 'Civic Reorientation',
                    'desc'  => 'Launching Students Anti-Corruption Vanguards (SAV) across Nigerian universities and polytechnics, hosting secondary school educational visits to ICPC, and championing youth-driven integrity movements to reshape Nigeria\'s moral fabric.',
                ),
                array(
                    'icon'  => 'fas fa-handshake',
                    'title' => 'Institutional Reform',
                    'desc'  => 'Leading ICPC\'s collaboration with UBEC to strengthen transparency in Nigeria\'s basic education sector, inaugurating Anti-Corruption and Transparency Units (ACTUs) across MDAs, and advocating for digitally-enabled coordination in public institutions.',
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
                <p>Born from over two decades at the frontlines of Nigeria's anti-corruption struggle, MRI-ELG is the institutional expression of Demola Bakare's conviction that sustainable development requires more than enforcement — it demands a fundamental moral rearmament of leadership, governance systems, and citizenry. MRI-ELG brings together research, training, civic mobilization, and institutional advisory to forge a new culture of accountability across Africa.</p>
            </div>
            <div class="mri-focus-areas">
                <div class="focus-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="focus-icon"><i class="fas fa-graduation-cap"></i></div>
                    <h4>Research & Policy</h4>
                    <p>Corruption risk assessments, system studies, and evidence-based policy briefs drawn from ICPC-level institutional knowledge.</p>
                </div>
                <div class="focus-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="focus-icon"><i class="fas fa-users-cog"></i></div>
                    <h4>Capacity Building</h4>
                    <p>Ethics academies, anti-corruption masterclasses, and leadership integrity workshops for public and private sectors.</p>
                </div>
                <div class="focus-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="focus-icon"><i class="fas fa-globe-africa"></i></div>
                    <h4>Civic Engagement</h4>
                    <p>Citizens' enlightenment campaigns, Students Anti-Corruption Vanguards, and community-based accountability programs.</p>
                </div>
                <div class="focus-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="focus-icon"><i class="fas fa-chart-line"></i></div>
                    <h4>Institutional Advisory</h4>
                    <p>ACTU establishment, governance audits, and integrity compliance scorecards for organizations seeking systemic transformation.</p>
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
                    'desc'  => 'Joined the Independent Corrupt Practices and Other Related Offences Commission (ICPC) as one of its founding officers following the enactment of the ICPC Act 2000 under President Olusegun Obasanjo — helping to build Nigeria\'s premier anti-corruption institution from the ground up.',
                ),
                array(
                    'year'  => '2000s-2010s',
                    'title' => 'Public Enlightenment Campaigns',
                    'desc'  => 'Served as Deputy Director in the System Study and Review Department, representing the ICPC Chairman at sensitisation workshops, corruption risk assessment trainings, and institutional integrity programs across federal ministries and agencies.',
                ),
                array(
                    'year'  => '2010s',
                    'title' => 'Ethics Training Programs',
                    'desc'  => 'Delivered corruption prevention workshops for senior civil servants (GL 16-17), emphasizing that prevention is the best strategy for a corruption-free workplace. Trained hundreds of public servants on the phenomenon of corruption and its impact on governance.',
                ),
                array(
                    'year'  => '2020s',
                    'title' => 'Director, Public Enlightenment & Education',
                    'desc'  => 'Appointed Director of the Public Enlightenment and Education Department at ICPC, becoming the Commission\'s official Spokesperson. Oversaw the presentation of CEPTI Phase 6 reports and Ethics and Integrity Compliance Scorecard (EICS) findings assessing 330 MDAs.',
                ),
                array(
                    'year'  => '2025',
                    'title' => 'Award of Excellence in Media Relations',
                    'desc'  => 'Conferred with the NAOSNP Award of Excellence in Media Relations at Lagos Chamber of Commerce. Delivered keynote on "Combatting Corruption in Public Service: The Role of Online Journalists." Accepted the SAEMA Diligent Investigation Award on behalf of ICPC at NDLEA headquarters.',
                ),
                array(
                    'year'  => 'Present',
                    'title' => 'Founding MRI-ELG',
                    'desc'  => 'Establishing MRI-ELG to institutionalize a lifetime of anti-corruption expertise into a think tank and consultancy advancing integrity, accountability, and development-minded citizenship. Publishing influential opinion pieces on corruption prevention, tax reform, and governance in national media.',
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
                    <blockquote>This award speaks to an ingrained ethos within the ICPC — the unwavering belief that every investigation must be built on a foundation of integrity and pursued with meticulous expertise.</blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <strong>Demola Bakare, FSI</strong>
                            <span>Accepting SAEMA Diligent Investigation Award, NDLEA HQ, 2025</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <blockquote>Credibility, not speed, remains the true currency of journalism. Protecting investigators' mental health through factual, objective, and less opinionated reportage is protecting the integrity of our institutions.</blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <strong>Demola Bakare, FSI</strong>
                            <span>Keynote Address, NAOSNP Media Workshop, LCCI Lagos, October 2025</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="quote-icon"><i class="fas fa-quote-left"></i></div>
                    <blockquote>Prevention is better than cure. Enforcement addresses corruption after public resources have been diverted, trust eroded, and institutions weakened. Prevention, on the other hand, is proactive — it blocks opportunities, closes loopholes, and reshapes incentives before misconduct occurs.</blockquote>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <strong>Demola Bakare, FSI, ANIPR</strong>
                            <span>Published in The Pinnacle Times, February 2026</span>
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
                        'title' => 'Why Prevention is Better Than "Cure" in Nigeria\'s Anti-Corruption Efforts',
                        'desc'  => 'Enforcement alone cannot sustainably defeat corruption. Preventive strategies — corruption risk assessments, system studies, and institutional reform — offer deeper, longer-lasting value.',
                        'cat'   => 'Anti-Corruption',
                        'date'  => 'Feb 17, 2026',
                    ),
                    array(
                        'title' => 'Why Well-Meaning Nigerians Should Support Tax Reform',
                        'desc'  => 'A weak tax framework is itself a corruption enabler. By broadening the tax base and reducing excessive human interference, tax reform directly advances the anti-corruption agenda.',
                        'cat'   => 'Governance',
                        'date'  => 'Jan 18, 2026',
                    ),
                    array(
                        'title' => 'Accelerating Basic Education Through Digitally-Enabled Coordination',
                        'desc'  => 'Digital transformation offers practical solutions for real-time, transparent governance across UBEC and SUBEBs — from geo-tagged project monitoring to automated financial management.',
                        'cat'   => 'Policy',
                        'date'  => 'Apr 27, 2026',
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
                array( 'name' => 'Independent Corrupt Practices Commission', 'abbr' => 'ICPC' ),
                array( 'name' => 'National Association of Online Security News Publishers', 'abbr' => 'NAOSNP' ),
                array( 'name' => 'Security Institute of Nigeria', 'abbr' => 'SI' ),
                array( 'name' => 'Security & Emergency Management Awards', 'abbr' => 'SAEMA' ),
                array( 'name' => 'Federal Government of Nigeria', 'abbr' => 'FGN' ),
                array( 'name' => 'Universal Basic Education Commission', 'abbr' => 'UBEC' ),
                array( 'name' => 'Nigerian Institute of Public Relations', 'abbr' => 'NIPR' ),
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
