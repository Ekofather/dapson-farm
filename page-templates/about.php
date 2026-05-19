<?php
/**
 * Template Name: About Page
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-about">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">About</span>
            <h1>Demola Bakare, <span class="gold">FSI</span></h1>
            <p>A quarter-century legacy of championing integrity, accountability, and ethical governance in Nigeria and beyond.</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<!-- Biography Section -->
<section class="section section-biography">
    <div class="container">
        <div class="bio-grid">
            <div class="bio-sidebar" data-aos="fade-right">
                <div class="bio-portrait">
                    <div class="portrait-frame">
                        <div class="image-placeholder large">
                            <div class="placeholder-content">
                                <i class="fas fa-user-tie"></i>
                                <span>Demola Bakare, FSI</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bio-quick-facts">
                    <h3>Quick Facts</h3>
                    <ul>
                        <li><strong>Full Name:</strong> Demola Bakare</li>
                        <li><strong>Designation:</strong> FSI (Fellow, Security Institute)</li>
                        <li><strong>Current Role:</strong> Director, Public Enlightenment & Education, ICPC</li>
                        <li><strong>Experience:</strong> 25+ Years</li>
                        <li><strong>Institution:</strong> ICPC Nigeria</li>
                        <li><strong>NGO:</strong> MRI-ELG Founder</li>
                        <li><strong>Location:</strong> Abuja, Nigeria</li>
                    </ul>
                </div>
            </div>
            <div class="bio-content" data-aos="fade-left">
                <h2 class="section-title">Biography</h2>
                <div class="bio-text">
                    <p class="lead">Demola Bakare, FSI, stands as one of Nigeria's most respected voices in the fight against corruption, institutional reform, and ethical governance. With over 25 years of distinguished service, he has built an extraordinary career dedicated to advancing transparency, accountability, and development-minded citizenship.</p>

                    <h3>Pioneer of Anti-Corruption in Nigeria</h3>
                    <p>As a pioneer officer of the Independent Corrupt Practices and Other Related Offences Commission (ICPC), Demola Bakare was among the founding cohort that established the institutional framework for Nigeria's premier anti-corruption agency. His early contributions helped shape the Commission's operational philosophy and public engagement strategy.</p>

                    <h3>Leadership at ICPC</h3>
                    <p>Rising through the ranks of the Commission, Mr. Bakare serves as the Director of the Public Enlightenment and Education Department, where he oversees nationwide anti-corruption education, civic engagement programs, and strategic communication initiatives. In this capacity, he also serves as the official Spokesperson of ICPC, representing the Commission in national and international forums.</p>

                    <h3>Media & Public Engagement</h3>
                    <p>Recognized for his exceptional ability to communicate complex governance issues to diverse audiences, Bakare was conferred with the Award of Excellence in Media Relations by the National Association of Online Security News Publishers (NAOSNP) in 2025. His keynote addresses and public appearances have shaped national discourse on corruption, ethics, and institutional accountability.</p>

                    <h3>Ethics Training & Capacity Building</h3>
                    <p>Throughout his career, Demola Bakare has developed and delivered hundreds of ethics training programs for public servants, law enforcement agencies, judicial officers, educational institutions, and civil society organizations. His training methodology combines practical case studies with theoretical frameworks, producing measurable improvements in institutional integrity.</p>

                    <h3>The Vision: MRI-ELG</h3>
                    <p>Drawing on decades of experience, Bakare founded the Moral Rearmament Initiative for Ethical Leadership & Governance (MRI-ELG), a think tank and consultancy dedicated to advancing integrity, accountability, and development-minded citizenship across Africa. MRI-ELG represents the culmination of his life's work and vision for a more ethical society.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards & Recognition -->
<section class="section section-awards">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Recognition</span>
            <h2 class="section-title">Awards & Honours</h2>
        </div>
        <div class="awards-grid">
            <div class="award-card" data-aos="fade-up">
                <div class="award-icon"><i class="fas fa-trophy"></i></div>
                <h3>Award of Excellence in Media Relations</h3>
                <p>National Association of Online Security News Publishers (NAOSNP), 2025</p>
            </div>
            <div class="award-card" data-aos="fade-up" data-aos-delay="100">
                <div class="award-icon"><i class="fas fa-medal"></i></div>
                <h3>SAEMA Diligent Investigation Award</h3>
                <p>Security and Emergency Management Award — accepted on behalf of ICPC, 2025</p>
            </div>
            <div class="award-card" data-aos="fade-up" data-aos-delay="200">
                <div class="award-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Fellow, Security Institute (FSI)</h3>
                <p>Conferred fellowship of the Security Institute of Nigeria in recognition of distinguished service</p>
            </div>
            <div class="award-card" data-aos="fade-up" data-aos-delay="300">
                <div class="award-icon"><i class="fas fa-star"></i></div>
                <h3>Pioneer Officer Recognition</h3>
                <p>Recognized as a founding member of ICPC, Nigeria's premier anti-corruption institution</p>
            </div>
        </div>
    </div>
</section>

<!-- Philosophy -->
<section class="section section-philosophy">
    <div class="container">
        <div class="philosophy-content" data-aos="fade-up">
            <div class="philosophy-quote">
                <i class="fas fa-quote-left"></i>
                <blockquote>
                    <p>Credibility, not speed, remains the true currency of leadership. Every investigation must be built on a foundation of integrity and pursued with meticulous expertise. This is the standard we must hold ourselves to — not just as institutions, but as individuals committed to the progress of our nation.</p>
                </blockquote>
                <cite>— Demola Bakare, FSI</cite>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="section section-values">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <span class="section-label">Guiding Principles</span>
            <h2 class="section-title">Core Values</h2>
        </div>
        <div class="values-grid">
            <?php
            $values = array(
                array( 'icon' => 'fas fa-balance-scale', 'title' => 'Integrity', 'desc' => 'Unwavering commitment to truth, honesty, and ethical conduct in all endeavors.' ),
                array( 'icon' => 'fas fa-eye', 'title' => 'Transparency', 'desc' => 'Championing openness and accountability in governance and public administration.' ),
                array( 'icon' => 'fas fa-hands-helping', 'title' => 'Service', 'desc' => 'Dedicated to public service and the collective well-being of Nigerian citizens.' ),
                array( 'icon' => 'fas fa-lightbulb', 'title' => 'Innovation', 'desc' => 'Embracing creative approaches to solving governance challenges and institutional reform.' ),
                array( 'icon' => 'fas fa-globe-africa', 'title' => 'Pan-African Vision', 'desc' => 'Advocating for African-led solutions to governance and development challenges.' ),
                array( 'icon' => 'fas fa-graduation-cap', 'title' => 'Education', 'desc' => 'Belief in the transformative power of knowledge and ethical education.' ),
            );
            foreach ( $values as $index => $value ) :
            ?>
                <div class="value-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $index * 100 ); ?>">
                    <div class="value-icon"><i class="<?php echo esc_attr( $value['icon'] ); ?>"></i></div>
                    <h3><?php echo esc_html( $value['title'] ); ?></h3>
                    <p><?php echo esc_html( $value['desc'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
