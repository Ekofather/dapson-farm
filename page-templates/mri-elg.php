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
                <p>To advance ethical leadership, institutional integrity, and development-minded citizenship through corruption risk assessments, ethics training, policy advocacy, civic mobilization, and institutional advisory — drawing on over two decades of frontline anti-corruption expertise to foster a culture of accountability and transparency across Africa. We believe prevention is better than cure: that strengthening systems, closing loopholes, and reshaping incentives will accomplish more than enforcement alone.</p>
            </div>
            <div class="mv-card vision-card" data-aos="fade-left">
                <div class="mv-icon"><i class="fas fa-eye"></i></div>
                <h2>Our Vision</h2>
                <p>A Nigeria and an Africa where governance is defined by integrity, public institutions are trusted by citizens, leaders are held to the highest ethical standards, and every individual embraces development-minded citizenship as a way of life — where the social contract between state and citizen is honoured through transparent systems, accountable institutions, and a moral rearmament of the collective conscience.</p>
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
                <p>The Moral Rearmament Initiative for Ethical Leadership & Governance (MRI-ELG) is a think tank and consultancy institution founded by <strong>Demola Bakare, FSI, ANIPR</strong> — Director of Public Enlightenment & Education and official Spokesperson of ICPC Nigeria — to institutionalize the values and practices of ethical governance across Nigeria and the African continent.</p>
                <p>MRI-ELG was born from a conviction forged over 25 years at the frontlines of Nigeria's anti-corruption struggle: that sustainable development demands more than enforcement alone. At ICPC, Mr. Bakare witnessed firsthand how corruption risk assessments transformed Nigeria's port sector, how system studies revealed hidden vulnerabilities in education and health, and how preventive education reshaped institutional cultures. MRI-ELG channels these battle-tested methodologies into a platform that serves governments, the private sector, civil society, and development partners.</p>
                <p>The initiative operates at the intersection of governance innovation, institutional reform, and civic transformation — bringing together the rigour of ICPC-level corruption prevention with the accessibility of public enlightenment, the depth of academic research, and the urgency of Africa's governance challenges.</p>
            </div>
            <div class="mri-about-sidebar" data-aos="fade-left">
                <div class="mri-stats-card">
                    <h3>Our Approach</h3>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-search"></i></div>
                        <div>
                            <strong>Evidence-Based</strong>
                            <span>Corruption risk assessments and system studies</span>
                        </div>
                    </div>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-users"></i></div>
                        <div>
                            <strong>People-Centered</strong>
                            <span>Citizens' enlightenment and youth vanguards</span>
                        </div>
                    </div>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-globe-africa"></i></div>
                        <div>
                            <strong>Africa-Focused</strong>
                            <span>African-led solutions for African governance</span>
                        </div>
                    </div>
                    <div class="mri-stat">
                        <div class="stat-icon"><i class="fas fa-chart-line"></i></div>
                        <div>
                            <strong>Results-Oriented</strong>
                            <span>Ethics scorecards and compliance metrics</span>
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
                    'desc'  => 'Conducting corruption risk assessments, system studies, and governance research modelled on ICPC\'s proven methodologies that have saved Nigeria over N30 billion in public funds.',
                    'items' => array( 'Corruption Risk Assessments', 'System Studies & Reviews', 'Ethics & Integrity Compliance Scorecards', 'Policy Brief Publications' ),
                ),
                array(
                    'icon'  => 'fas fa-chalkboard-teacher',
                    'title' => 'Ethics & Integrity Training Academy',
                    'desc'  => 'Designing and delivering ethics and anti-corruption training programs modelled on the sensitisation workshops delivered to senior civil servants, agency heads, and tertiary institutions across Nigeria.',
                    'items' => array( 'Senior Civil Servant Ethics Workshops', 'Corporate Integrity Programs', 'Students Anti-Corruption Vanguard Programs', 'Train-the-Trainer Certification' ),
                ),
                array(
                    'icon'  => 'fas fa-bullhorn',
                    'title' => 'Civic Reorientation & Public Enlightenment',
                    'desc'  => 'Mobilizing citizens through awareness campaigns, school outreach visits, community dialogues, and media engagement — drawing on the public enlightenment expertise that produced ICPC\'s nationwide reach.',
                    'items' => array( 'National Awareness Campaigns', 'School & University Outreach', 'Media & Journalism Partnerships', 'Digital Civic Education Platforms' ),
                ),
                array(
                    'icon'  => 'fas fa-building',
                    'title' => 'Institutional Advisory & Consultancy',
                    'desc'  => 'Establishing Anti-Corruption and Transparency Units (ACTUs), designing governance frameworks, and conducting integrity assessments for organizations seeking systemic transformation.',
                    'items' => array( 'ACTU Establishment & Support', 'Governance Audit & Advisory', 'Process Redesign & SOP Harmonization', 'Digital Governance Solutions' ),
                ),
                array(
                    'icon'  => 'fas fa-handshake',
                    'title' => 'Stakeholder Engagement & Partnerships',
                    'desc'  => 'Building coalitions modelled on the inter-agency partnerships that produced Nigeria\'s Port Process Manual (NPPM) and the Presidential Port Standing Task Team.',
                    'items' => array( 'Multi-Stakeholder Governance Forums', 'Public-Private Integrity Partnerships', 'Inter-Agency Anti-Corruption Coalitions', 'Development Partner Collaboration' ),
                ),
                array(
                    'icon'  => 'fas fa-book-reader',
                    'title' => 'Knowledge Management & Publications',
                    'desc'  => 'Publishing research findings, opinion editorials, and thought leadership content on anti-corruption, tax reform, governance innovation, and ethical citizenship.',
                    'items' => array( 'Annual Governance & Integrity Reports', 'Op-Eds & Policy Commentary', 'Case Studies in Corruption Prevention', 'MRI-ELG Newsletter & Insights' ),
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
                array( 'icon' => 'fas fa-balance-scale', 'title' => 'Integrity First', 'desc' => 'Every investigation, assessment, and intervention must be built on a foundation of integrity and pursued with meticulous expertise.' ),
                array( 'icon' => 'fas fa-shield-alt', 'title' => 'Prevention Over Cure', 'desc' => 'Enforcement addresses corruption after damage is done. Prevention blocks opportunities, closes loopholes, and reshapes incentives before misconduct occurs.' ),
                array( 'icon' => 'fas fa-search', 'title' => 'Evidence-Based Action', 'desc' => 'Our interventions are grounded in corruption risk assessments, system studies, and integrity compliance metrics — not assumptions.' ),
                array( 'icon' => 'fas fa-seedling', 'title' => 'Sustainable Transformation', 'desc' => 'We focus on systemic institutional reform — redesigning processes, harmonizing SOPs, and building cultures of accountability that outlast individual leaders.' ),
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
            <p>Whether you are a government agency seeking to establish an Anti-Corruption and Transparency Unit, a corporation building an integrity framework, a university launching a Students Anti-Corruption Vanguard, or a development partner investing in governance reform — MRI-ELG brings battle-tested expertise to your mission.</p>
            <div class="cta-actions">
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>" class="btn btn-gold btn-lg">Partner With Us</a>
                <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'services' ) ) ?: '#' ); ?>" class="btn btn-outline-light btn-lg">View Our Services</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
