<?php
/**
 * Template Name: Testimonials
 *
 * @package AnnieCakes
 */

get_header();
?>

<section class="ac-page-header">
    <div class="ac-container">
        <span class="ac-section-badge"><?php esc_html_e( 'Love Notes', 'annie-cakes' ); ?></span>
        <h1><?php esc_html_e( 'Testimonials', 'annie-cakes' ); ?></h1>
        <p><?php esc_html_e( 'See what our happy customers have to say', 'annie-cakes' ); ?></p>
    </div>
</section>

<section class="ac-section ac-testimonials-page">
    <div class="ac-container">
        <div class="ac-testimonials-grid">
            <?php
            $testimonials = new WP_Query( array(
                'post_type'      => 'ac_testimonial',
                'posts_per_page' => -1,
            ) );

            if ( $testimonials->have_posts() ) :
                while ( $testimonials->have_posts() ) :
                    $testimonials->the_post();
                    ?>
                    <div class="ac-testimonial-card ac-testimonial-full" data-aos="fade-up">
                        <div class="ac-testimonial-stars">
                            <?php
                            $rating = get_post_meta( get_the_ID(), '_testimonial_rating', true ) ?: 5;
                            for ( $i = 1; $i <= 5; $i++ ) {
                                echo $i <= $rating ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
                            }
                            ?>
                        </div>
                        <div class="ac-testimonial-content">
                            <?php the_content(); ?>
                        </div>
                        <div class="ac-testimonial-author">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div class="ac-testimonial-avatar"><?php the_post_thumbnail( 'thumbnail' ); ?></div>
                            <?php else : ?>
                                <div class="ac-testimonial-avatar ac-avatar-placeholder"><i class="fas fa-user"></i></div>
                            <?php endif; ?>
                            <div>
                                <h4><?php the_title(); ?></h4>
                                <span><?php echo esc_html( get_post_meta( get_the_ID(), '_testimonial_role', true ) ); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                $defaults = array(
                    array( 'name' => 'Sarah Johnson', 'role' => 'Bride', 'text' => 'Annie Cakes made the most stunning wedding cake I\'ve ever seen. It was not only beautiful but absolutely delicious!', 'rating' => 5 ),
                    array( 'name' => 'Michael Ade', 'role' => 'Birthday Client', 'text' => 'Ordered a custom birthday cake for my daughter and it exceeded all expectations. The attention to detail was incredible.', 'rating' => 5 ),
                    array( 'name' => 'Chioma Okafor', 'role' => 'Corporate Client', 'text' => 'We\'ve been ordering gift hampers from Annie Cakes for our corporate events and they never disappoint.', 'rating' => 5 ),
                    array( 'name' => 'Tunde Bakare', 'role' => 'Anniversary Client', 'text' => 'The anniversary cake was a masterpiece! My wife was in tears of joy when she saw it. Thank you, Annie Cakes!', 'rating' => 5 ),
                    array( 'name' => 'Amara Nwosu', 'role' => 'Regular Customer', 'text' => 'I\'ve been ordering from Annie Cakes for over 2 years now. Consistently excellent quality and amazing customer service.', 'rating' => 5 ),
                    array( 'name' => 'David Osei', 'role' => 'Graduation Party', 'text' => 'The graduation cake for my son was exactly what we envisioned. Professional, creative, and absolutely delicious!', 'rating' => 5 ),
                );
                foreach ( $defaults as $testimonial ) :
                    ?>
                    <div class="ac-testimonial-card ac-testimonial-full" data-aos="fade-up">
                        <div class="ac-testimonial-stars">
                            <?php for ( $i = 1; $i <= $testimonial['rating']; $i++ ) : ?><i class="fas fa-star"></i><?php endfor; ?>
                        </div>
                        <div class="ac-testimonial-content"><p><?php echo esc_html( $testimonial['text'] ); ?></p></div>
                        <div class="ac-testimonial-author">
                            <div class="ac-testimonial-avatar ac-avatar-placeholder"><i class="fas fa-user"></i></div>
                            <div>
                                <h4><?php echo esc_html( $testimonial['name'] ); ?></h4>
                                <span><?php echo esc_html( $testimonial['role'] ); ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_footer();
