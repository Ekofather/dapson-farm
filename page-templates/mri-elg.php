<?php
/**
 * Template Name: MRI-ELG Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-mri">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <div class="mri-hero-emblem">
                <i class="fas fa-balance-scale"></i>
            </div>
            <span class="page-label light">The Institution</span>
            <h1>Moral Rearmament Initiative for Ethical Leadership &amp; Governance</h1>
            <p class="mri-hero-tagline">&ldquo;Advancing Integrity, Accountability and Development-Minded Citizenship&rdquo;</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<!-- Mission & Vision -->
<section class="section section-mission-vision">
    <div class="container">
        <div class="mv-grid">
            <div class="mv-card mission-card" data-aos="fade-right">
                <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
                <h2>Our Mission</h2>
                <p>To advance ethical leadership, institutional integrity, and development-minded citizenship through research, training, policy advocacy, and civic engagement, fostering a culture of accountability and transparency across Africa.</p>
            </div>
            <div class="mv-card vision-card" data-aos="fade-left">
                <div class="mv-icon"><i class="fas fa-eye"></i></div>
                <h2>Our Vision</h2>
                <p>A Nigeria and an Africa where governance is defined by integrity, public institutions are trusted by citizens, and every individual embraces ethical conduct as a way of life — creating societies that thrive on transparency and collective responsibility.</p>
            </div>
        </div>
    </div>
</section>

<!-- About MRI-ELG -->
<section class="section section-mri-about">
    <div class="container">
        <div class="mri-about-grid">
            <div class="mri-about-content" data-aos="fade-right">
                <span class="section-label">About MRI-ELG</span>
                <h2 class="section-title">A Think Tank for Ethical Governance</h2>
                <p>The Moral Rearmament Initiative for Ethical Leadership & Governance (MRI-ELG) is a think tank and consultancy institution founded by Demola Bakare, FSI, to institutionalize the values and practices of ethical governance across Nigeria and the African continent.</p>
                <p>Born from over 25 years of frontline experience in anti-corruption enforcement, public enlightenment, and institutional reform at ICPC Nigeria, MRI-ELG represents a bold vision for scaling integrity-driven governance through evidence-based research, capacity building, policy advocacy, and civic mobilization.</p>
                <p>MRI-ELG operates at the intersection of governance innovation, institutional reform, and civic transformation — bringing together seasoned practitioners, academic researchers, policy experts, and community leaders to drive measurable change in governance outcomes.</p>
            </div>
            <div class="mri-about-sidebar" data-aos="fade-left">
                <div class="mri-stats-card">
                    <h3>Our Approach</h3>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-search"></i></div>
                        <div>
                            <strong>Evidence-Based</strong>
                            <span>Research-driven policy recommendations</span>
                        </div>
                    </div>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <strong>People-Centered</strong>
                            <span>Community-driven solutions</span>
                        </div>
                    </div>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-globe-africa"></i></div>
                        <div>
                            <strong>Africa-Focused</strong>
                            <span>Contextually relevant interventions</span>
                        </div>
                    </div>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <strong>Results-Oriented</strong>
                            <span>Measurable governance outcomes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core Programs -->
<section class="section section-programs">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">What We Do</span>
            <h2 class="section-title">Core Programs & Initiatives</h2>
            <p class="section-desc">MRI-ELG operates through six strategic program areas, each designed to address a critical dimension of governance and institutional reform.</p>
        </div>
        <div class="programs-grid">
            <?php
            $programs = array(
                array(
                    'icon'  => 'fas fa-flask',
                    'title' => 'Governance Research & Policy Lab',
                    'desc'  => 'Conducting original research on governance challenges, producing evidence-based policy briefs, and advising governments on institutional reform strategies.',
                    'items' => array( 'Anti-Corruption Research', 'Governance Index Studies', 'Policy Brief Publications', 'Data-Driven Advocacy' ),
                ),
                array(
                    'icon'  => 'fas fa-chalkboard-teacher',
                    'title' => 'Ethics & Integrity Training Academy',
                    'desc'  => 'Designing and delivering comprehensive ethics training programs for public servants, corporate leaders, civil society, and educational institutions.',
                    'items' => array( 'Public Sector Ethics Training', 'Corporate Integrity Programs', 'Youth Ethics Leadership', 'Train-the-Trainer Modules' ),
                ),
                array(
                    'icon'  => 'fas fa-bullhorn',
                    'title' => 'Civic Reorientation & Public Enlightenment',
                    'desc'  => 'Mobilizing citizens through awareness campaigns, community dialogues, and media engagement to foster development-minded citizenship.',
                    'items' => array( 'National Awareness Campaigns', 'Community Town Halls', 'Media Engagement Programs', 'Digital Civic Education' ),
                ),
                array(
                    'icon'  => 'fas fa-building',
                    'title' => 'Institutional Advisory & Consultancy',
                    'desc'  => 'Providing strategic advisory services to organizations seeking to build robust integrity systems and governance frameworks.',
                    'items' => array( 'Integrity Assessments', 'Anti-Corruption Frameworks', 'Organizational Restructuring', 'Compliance Systems Design' ),
                ),
                array(
                    'icon'  => 'fas fa-handshake',
                    'title' => 'Stakeholder Engagement & Partnerships',
                    'desc'  => 'Building coalitions among government, private sector, civil society, and international partners for collective governance impact.',
                    'items' => array( 'Multi-Stakeholder Forums', 'Public-Private Partnerships', 'International Collaboration', 'CSO Network Building' ),
                ),
                array(
                    'icon'  => 'fas fa-book-reader',
                    'title' => 'Knowledge Management & Publications',
                    'desc'  => 'Publishing research findings, best practices, and thought leadership content to advance the field of governance and anti-corruption.',
                    'items' => array( 'Annual Governance Reports', 'Policy Working Papers', 'Case Study Collections', 'Newsletter & Blog' ),
                ),
            );
            foreach ( $programs as $index => $program ) :
            ?>
                <div class="program-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                    <div class="program-icon"><i class="<?php echo esc_attr( $program['icon'] ); ?>"></i></div>
                    <h3><?php echo esc_html( $program['title'] ); ?></h3>
                    <p><?php echo esc_html( $program['desc'] ); ?></p>
                    <ul class="program-list">
                        <?php foreach ( $program['items'] as $item ) : ?>
                            <li><i class="fas fa-check"></i> <?php echo esc_html( $item ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="section section-mri-values">
    <div class="mri-values-bg"></div>
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label light">Our Foundation</span>
            <h2 class="section-title light">Core Values of MRI-ELG</h2>
        </div>
        <div class="mri-values-grid">
            <?php
            $mri_values = array(
                array( 'icon' => 'fas fa-balance-scale', 'title' => 'Integrity First', 'desc' => 'We lead by example, ensuring that our actions consistently reflect the highest ethical standards.' ),
                array( 'icon' => 'fas fa-hands-helping', 'title' => 'Collaborative Impact', 'desc' => 'We believe in the power of partnerships and collective action to drive systemic change.' ),
                array( 'icon' => 'fas fa-search', 'title' => 'Evidence-Based Action', 'desc' => 'Our interventions are grounded in rigorous research, data analysis, and best practices.' ),
                array( 'icon' => 'fas fa-seedling', 'title' => 'Sustainable Change', 'desc' => 'We focus on long-term institutional transformation rather than short-term fixes.' ),
            );
            foreach ( $mri_values as $index => $val ) :
            ?>
                <div class="mri-value-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                    <div class="mri-value-icon"><i class="<?php echo esc_attr( $val['icon'] ); ?>"></i></div>
                    <h3><?php echo esc_html( $val['title'] ); ?></h3>
                    <p><?php echo esc_html( $val['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section section-mri-cta">
    <div class="container">
        <div class="mri-cta-content" data-aos="fade-up">
            <h2>Join the Movement for Ethical Governance</h2>
            <p>Partner with MRI-ELG to advance integrity, accountability, and development-minded citizenship in your organization or community.</p>
            <div class="cta-actions">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>" class="btn btn-gold btn-lg">Partner With Us</a>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ?: '#' ); ?>" class="btn btn-outline-light btn-lg">View Our Services</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
