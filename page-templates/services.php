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
            <p>Comprehensive governance, ethics, and anti-corruption solutions for institutions, organizations, and governments.</p>
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
            <p class="section-desc">Drawing from over 25 years of frontline experience in anti-corruption and governance, Demola Bakare and MRI-ELG offer a comprehensive suite of professional services.</p>
        </div>

        <div class="services-detailed-grid">
            <?php
            $services = array(
                array(
                    'icon'     => 'fas fa-chalkboard-teacher',
                    'title'    => 'Ethics & Anti-Corruption Training',
                    'desc'     => 'Customized training programs that equip organizations with the knowledge, tools, and frameworks needed to build a culture of integrity.',
                    'features' => array(
                        'Customized Ethics Workshops',
                        'Anti-Corruption Compliance Training',
                        'Leadership Integrity Programs',
                        'Code of Conduct Development',
                        'Train-the-Trainer Certification',
                        'Online & In-Person Delivery',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-building',
                    'title'    => 'Institutional Governance Advisory',
                    'desc'     => 'Strategic advisory services for governments, agencies, and organizations seeking to strengthen their governance frameworks.',
                    'features' => array(
                        'Governance Audits & Assessments',
                        'Institutional Reform Strategy',
                        'Anti-Corruption Policy Development',
                        'Regulatory Framework Design',
                        'Performance Management Systems',
                        'Stakeholder Engagement Strategy',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-microphone-alt',
                    'title'    => 'Keynote Speaking & Presentations',
                    'desc'     => 'Engaging, thought-provoking presentations on governance, ethics, anti-corruption, and leadership for conferences and events.',
                    'features' => array(
                        'Conference Keynote Addresses',
                        'Panel Discussions & Moderation',
                        'Commencement Speeches',
                        'Corporate Retreats & Seminars',
                        'Parliamentary & Legislative Briefings',
                        'Media Commentary & Analysis',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-bullhorn',
                    'title'    => 'Public Enlightenment Campaign Design',
                    'desc'     => 'Designing and executing impactful public awareness campaigns that drive behavioral change and civic engagement.',
                    'features' => array(
                        'Campaign Strategy Development',
                        'Media Relations & Communications',
                        'Community Engagement Programs',
                        'Digital Advocacy Campaigns',
                        'Stakeholder Mobilization',
                        'Impact Measurement & Evaluation',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-flask',
                    'title'    => 'Research & Policy Development',
                    'desc'     => 'Rigorous research and analysis that informs evidence-based policy recommendations for governance improvement.',
                    'features' => array(
                        'Governance Research Studies',
                        'Anti-Corruption Index Analysis',
                        'Policy Brief Development',
                        'Benchmarking & Best Practices',
                        'Legislative Review & Recommendations',
                        'White Paper Publishing',
                    ),
                ),
                array(
                    'icon'     => 'fas fa-project-diagram',
                    'title'    => 'Program Design & Management',
                    'desc'     => 'End-to-end design and management of governance, ethics, and civic engagement programs for maximum impact.',
                    'features' => array(
                        'Program Conceptualization',
                        'Curriculum Development',
                        'Implementation Management',
                        'Monitoring & Evaluation',
                        'Report Writing & Documentation',
                        'Sustainability Planning',
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
                array( 'num' => '01', 'title' => 'Initial Consultation', 'desc' => 'We begin with a thorough assessment of your organization\'s needs, challenges, and objectives.' ),
                array( 'num' => '02', 'title' => 'Strategy Development', 'desc' => 'Our team develops a customized strategy and action plan tailored to your specific context.' ),
                array( 'num' => '03', 'title' => 'Implementation', 'desc' => 'We deliver our services with excellence, adapting to feedback and emerging needs along the way.' ),
                array( 'num' => '04', 'title' => 'Evaluation & Follow-Up', 'desc' => 'We measure impact, provide detailed reporting, and offer ongoing support for sustained results.' ),
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
                array( 'icon' => 'fas fa-landmark', 'title' => 'Government Agencies', 'desc' => 'Federal, state, and local government institutions seeking governance reform.' ),
                array( 'icon' => 'fas fa-briefcase', 'title' => 'Corporate Organizations', 'desc' => 'Businesses committed to ethical practices and corporate governance.' ),
                array( 'icon' => 'fas fa-users', 'title' => 'Civil Society', 'desc' => 'NGOs and CSOs working on governance, accountability, and transparency.' ),
                array( 'icon' => 'fas fa-university', 'title' => 'Educational Institutions', 'desc' => 'Universities, schools, and training academies integrating ethics education.' ),
                array( 'icon' => 'fas fa-globe', 'title' => 'International Organizations', 'desc' => 'Multilateral agencies and development partners focused on governance.' ),
                array( 'icon' => 'fas fa-gavel', 'title' => 'Legislative Bodies', 'desc' => 'Parliamentary committees and legislative assemblies on oversight and reform.' ),
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
