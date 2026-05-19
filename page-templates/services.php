<?php
/**
 * Template Name: Services Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-services">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Services</span>
            <h1>Consultancy & <span class="gold">Professional Services</span></h1>
            <p>Battle-tested governance, ethics, and anti-corruption solutions drawn from over two decades of institutional reform at ICPC Nigeria. From corruption risk assessments to ethics training, from ACTU establishment to digital governance advisory.</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<!-- Services Overview -->
<section class="section section-services-overview">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">What We Offer</span>
            <h2 class="section-title">Professional Services</h2>
            <p class="section-desc">Drawing from over 25 years of frontline experience — including corruption risk assessments that transformed Nigeria's port sector, ethics training for senior civil servants, and the presentation of nationwide CEPTI and EICS reports — Demola Bakare and MRI-ELG offer a battle-tested suite of professional services.</p>
        </div>

        <div class="services-detailed-grid">
            <?php
            $services = array(
                array(
                    'icon'     => 'fas fa-chalkboard-teacher',
                    'title'    => 'Ethics & Anti-Corruption Training',
                    'desc'     => 'Modelled on the sensitisation workshops delivered to senior civil servants, agency heads, and tertiary institutions — programs that embed corruption prevention as organizational culture, not merely compliance.',
                    'features' => array(
                        'Senior Civil Servant Ethics Workshops (GL 14-17)',
                        'Anti-Corruption Compliance & Prevention Training',
                        'Leadership Integrity Masterclasses',
                        'Code of Conduct & SOP Development',
                        'Train-the-Trainer Certification Programs',
                        'Students Anti-Corruption Vanguard Setup',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-building',
                    'title'    => 'Institutional Governance Advisory',
                    'desc'     => 'Strategic advisory drawing on ICPC\'s proven methodologies for corruption risk assessment, system studies, and the establishment of Anti-Corruption and Transparency Units (ACTUs) across MDAs.',
                    'features' => array(
                        'Corruption Risk Assessment & Mitigation',
                        'ACTU Establishment & Operationalization',
                        'Ethics & Integrity Compliance Scorecards',
                        'Process Redesign & SOP Harmonization',
                        'Digital Governance & e-Monitoring Systems',
                        'Grievance Handling Mechanism Design',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-microphone-alt',
                    'title'    => 'Keynote Speaking & Presentations',
                    'desc'     => 'Drawing from keynote addresses at NAOSNP, UBEC quarterly meetings, World Press Conferences, and SAEMA ceremonies — engaging presentations that shape national discourse on governance and integrity.',
                    'features' => array(
                        'Conference Keynote Addresses',
                        'Anti-Corruption & Governance Panel Discussions',
                        'Institutional Retreats & Capacity Sessions',
                        'Parliamentary & Legislative Briefings',
                        'Media Engagement & Press Conferences',
                        'University Lectures & Student Engagements',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-bullhorn',
                    'title'    => 'Public Enlightenment Campaign Design',
                    'desc'     => 'Drawing on the expertise that produced ICPC\'s nationwide public enlightenment reach — designing campaigns that bridge the gap between institutional enforcement and public consciousness.',
                    'features' => array(
                        'National Anti-Corruption Campaign Strategy',
                        'Media Relations & Spokesperson Training',
                        'Community & Grassroots Mobilization',
                        'Digital Advocacy & Social Media Strategy',
                        'Citizens\' Enlightenment Programs',
                        'Campaign Impact Measurement & Reporting',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-flask',
                    'title'    => 'Research & Policy Development',
                    'desc'     => 'Modelled on the corruption risk assessments and system studies that produced Nigeria\'s Port Process Manual and saved over N30 billion in public funds through effective project monitoring.',
                    'features' => array(
                        'Corruption Risk Assessment Projects',
                        'System Studies & Institutional Reviews',
                        'Constituency Projects Tracking Methodology',
                        'Policy Brief & Op-Ed Development',
                        'Legislative Review & Reform Recommendations',
                        'Governance Data Analysis & Scorecards',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-project-diagram',
                    'title'    => 'Program Design & Management',
                    'desc'     => 'End-to-end design and management of anti-corruption, ethics, and civic engagement programs — from conceptualization through implementation to impact evaluation.',
                    'features' => array(
                        'Anti-Corruption Program Design',
                        'Ethics Curriculum Development',
                        'Implementation & Project Management',
                        'Monitoring, Evaluation & Geo-Tagging',
                        'Report Writing & World Press Presentations',
                        'Sustainability & Institutional Memory Planning',
                    ),
                ),
            );
            foreach ( $services as $index => $service ) :
            ?>
                <div class="service-detail-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index % 3 ) * 100 ); ?>">
                    <div class="service-header">
                        <div class="service-icon"><i class="<?php echo esc_attr( $service['icon'] ); ?>"></i></div>
                        <h3><?php echo esc_html( $service['title'] ); ?></h3>
                    </div>
                    <p><?php echo esc_html( $service['desc'] ); ?></p>
                    <ul class="service-features">
                        <?php foreach ( $service['features'] as $feature ) : ?>
                            <li><i class="fas fa-check-circle"></i> <?php echo esc_html( $feature ); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Process -->
<section class="section section-process">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">How We Work</span>
            <h2 class="section-title">Our Process</h2>
        </div>
        <div class="process-steps">
            <?php
            $steps = array(
                array( 'num' => '01', 'title' => 'Diagnostic Assessment', 'desc' => 'We conduct a thorough corruption risk assessment and institutional review — identifying vulnerabilities in processes such as procurement, licensing, recruitment, and revenue collection.' ),
                array( 'num' => '02', 'title' => 'Strategy & Design', 'desc' => 'We develop a customized intervention strategy: redesigning SOPs, establishing accountability structures, and designing training curricula tailored to your institutional context.' ),
                array( 'num' => '03', 'title' => 'Implementation & Training', 'desc' => 'We deploy our programs with excellence — from ethics workshops and ACTU inaugurations to public enlightenment campaigns and digital monitoring systems.' ),
                array( 'num' => '04', 'title' => 'Evaluation & Sustainability', 'desc' => 'We measure impact through integrity compliance scorecards, provide detailed reporting, and build institutional memory to ensure reforms outlast individual leaders.' ),
            );
            foreach ( $steps as $index => $step ) :
            ?>
                <div class="process-step" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 150 ); ?>">
                    <div class="step-number"><?php echo esc_html( $step['num'] ); ?></div>
                    <h3><?php echo esc_html( $step['title'] ); ?></h3>
                    <p><?php echo esc_html( $step['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Clients -->
<section class="section section-clients">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Who We Serve</span>
            <h2 class="section-title">Our Clients</h2>
        </div>
        <div class="clients-grid" data-aos="fade-up" data-aos-delay="200">
            <?php
            $clients = array(
                array( 'icon' => 'fas fa-landmark', 'title' => 'Government MDAs', 'desc' => 'Federal ministries, departments, and agencies — from UBEC to the Federal Ministry of Labour — seeking integrity assessments and ACTU establishment.' ),
                array( 'icon' => 'fas fa-briefcase', 'title' => 'Corporate & Port Sector', 'desc' => 'Private businesses, port operators, and corporations building ethical governance frameworks and anti-corruption compliance systems.' ),
                array( 'icon' => 'fas fa-users', 'title' => 'Civil Society & Media', 'desc' => 'NGOs, CSOs, and media organizations working on accountability journalism, governance monitoring, and citizen engagement.' ),
                array( 'icon' => 'fas fa-university', 'title' => 'Educational Institutions', 'desc' => 'Universities, polytechnics, and secondary schools establishing Students Anti-Corruption Vanguards and ethics curricula.' ),
                array( 'icon' => 'fas fa-globe', 'title' => 'Development Partners', 'desc' => 'UNDP, bilateral agencies, and international organizations investing in governance reform and anti-corruption capacity building.' ),
                array( 'icon' => 'fas fa-gavel', 'title' => 'Security & Justice Sector', 'desc' => 'Law enforcement agencies, the judiciary, and security sector institutions seeking integrity-driven institutional reform.' ),
            );
            foreach ( $clients as $index => $client ) :
            ?>
                <div class="client-card">
                    <div class="client-icon"><i class="<?php echo esc_attr( $client['icon'] ); ?>"></i></div>
                    <h4><?php echo esc_html( $client['title'] ); ?></h4>
                    <p><?php echo esc_html( $client['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section section-services-cta">
    <div class="container">
        <div class="services-cta-content" data-aos="fade-up">
            <h2>Ready to Transform Your Institution?</h2>
            <p>Let's discuss how our expertise can help your organization build a stronger foundation of integrity and accountability.</p>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ?: '#' ); ?>" class="btn btn-gold btn-lg">Schedule a Consultation</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
