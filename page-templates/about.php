<?php
/**
 * Template Name: About Us
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header ac-page-header-lg">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Our Story', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'About Annie Cakes & Gift', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'Crafting sweet memories since day one', 'annie-cakes' ); ?></p>
    </div>
</section>

<section class="ac-section ac-about-story">
    <div class="ac-container">
        <div class="ac-about-grid">
            <div class="ac-about-img" data-aos="fade-right">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'large' ); ?>
                <?php else : ?>
                    <div class="ac-about-img-placeholder">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                <?php endif; ?>
            </div>
            <div class="ac-about-text" data-aos="fade-left">
                <span class="ac-section-badge"><?php esc_html_e( 'Who We Are', 'annie-cakes' ); ?></span>
                <h2><?php esc_html_e( 'A Passion for Perfection', 'annie-cakes' ); ?></h2>
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile;
                ?>
                <?php if ( ! get_the_content() ) : ?>
                    <p><?php esc_html_e( 'Annie Cakes & Gift was born from a simple dream: to create the most beautiful and delicious cakes that bring joy to every celebration. What started as a small home kitchen has blossomed into a premium bakery and gift brand loved by thousands.', 'annie-cakes' ); ?></p>
                    <p><?php esc_html_e( 'Every cake we create is a work of art, handcrafted with the finest ingredients and decorated with meticulous attention to detail. Our gift collections are thoughtfully curated to make every occasion special.', 'annie-cakes' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="ac-section ac-about-values ac-bg-cream">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Our Values', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'What Drives Us', 'annie-cakes' ); ?></h2>
        </div>
        <div class="ac-values-grid">
            <div class="ac-value-card" data-aos="fade-up" data-aos-delay="100">
                <div class="ac-value-icon"><i class="fas fa-gem"></i></div>
                <h3><?php esc_html_e( 'Quality First', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We never compromise on quality. From ingredients to presentation, everything meets our highest standards.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-value-card" data-aos="fade-up" data-aos-delay="200">
                <div class="ac-value-icon"><i class="fas fa-heart"></i></div>
                <h3><?php esc_html_e( 'Made With Love', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Every creation is infused with genuine passion and care. We pour our hearts into every slice.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-value-card" data-aos="fade-up" data-aos-delay="300">
                <div class="ac-value-icon"><i class="fas fa-leaf"></i></div>
                <h3><?php esc_html_e( 'Fresh & Natural', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'We use fresh, natural ingredients sourced locally whenever possible. No artificial preservatives.', 'annie-cakes' ); ?></p>
            </div>
            <div class="ac-value-card" data-aos="fade-up" data-aos-delay="400">
                <div class="ac-value-icon"><i class="fas fa-users"></i></div>
                <h3><?php esc_html_e( 'Customer Delight', 'annie-cakes' ); ?></h3>
                <p><?php esc_html_e( 'Your satisfaction is our greatest reward. We go above and beyond to exceed expectations.', 'annie-cakes' ); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="ac-section ac-about-team">
    <div class="ac-container">
        <div class="ac-section-header" data-aos="fade-up">
            <span class="ac-section-badge"><?php esc_html_e( 'Meet The Team', 'annie-cakes' ); ?></span>
            <h2><?php esc_html_e( 'The Artists Behind The Magic', 'annie-cakes' ); ?></h2>
        </div>
        <div class="ac-team-grid">
            <?php
            $team = array(
                array( 'name' => 'Annie', 'role' => 'Founder & Head Baker', 'icon' => 'fa-crown' ),
                array( 'name' => 'Chef David', 'role' => 'Pastry Chef', 'icon' => 'fa-hat-wizard' ),
                array( 'name' => 'Grace', 'role' => 'Cake Designer', 'icon' => 'fa-palette' ),
                array( 'name' => 'James', 'role' => 'Gift Curator', 'icon' => 'fa-gift' ),
            );
            foreach ( $team as $index => $member ) :
                ?>
                <div class="ac-team-card" data-aos="fade-up" data-aos-delay="<?php echo esc_attr( ( $index + 1 ) * 100 ); ?>">
                    <div class="ac-team-avatar">
                        <i class="fas <?php echo esc_attr( $member['icon'] ); ?>"></i>
                    </div>
                    <h3><?php echo esc_html( $member['name'] ); ?></h3>
                    <p><?php echo esc_html( $member['role'] ); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
get_footer();
