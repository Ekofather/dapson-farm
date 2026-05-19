<?php
/**
 * Blog / Insights Archive
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-blog">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Blog</span>
            <h1>Insights & <span class="gold">Thought Leadership</span></h1>
            <p>Perspectives on governance, ethics, anti-corruption, and institutional reform from Demola Bakare, FSI.</p>
        </div>
    </div>
</section>

<?php demola_breadcrumbs(); ?>

<section class="section section-blog">
    <div class="container">
        <div class="blog-layout">
            <div class="blog-main">
                <?php if ( have_posts() ) : ?>
                    <div class="blog-grid">
                        <?php
                        $delay = 0;
                        while ( have_posts() ) :
                            the_post();
                        ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?> data-aos="fade-up" data-aos-delay="<?php echo esc_attr( $delay ); ?>">
                                <div class="blog-card-image">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'demola-card' ); ?>
                                        </a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" class="blog-image-placeholder">
                                            <i class="fas fa-newspaper"></i>
                                        </a>
                                    <?php endif; ?>
                                    <div class="blog-card-category">
                                        <?php
                                        $categories = get_the_category();
                                        if ( $categories ) {
                                            echo esc_html( $categories[0]->name );
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-meta">
                                        <?php demola_posted_on(); ?>
                                        <span><i class="far fa-clock"></i> <?php echo esc_html( demola_reading_time() ); ?> min read</span>
                                    </div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        Read Article <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        <?php
                            $delay = ( $delay + 100 ) % 300;
                        endwhile;
                        ?>
                    </div>
                    <?php demola_pagination(); ?>
                <?php else : ?>
                    <div class="no-posts">
                        <i class="fas fa-pen-nib"></i>
                        <h2>Coming Soon</h2>
                        <p>New insights and articles on governance, ethics, and anti-corruption will be published here. Stay tuned!</p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Return Home</a>
                    </div>
                <?php endif; ?>
            </div>

            <aside class="blog-sidebar">
                <?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>
                    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
                <?php else : ?>
                    <!-- Default Sidebar Content -->
                    <div class="widget">
                        <h3 class="widget-title">About the Author</h3>
                        <div class="author-widget">
                            <div class="author-avatar">
                                <div class="avatar-placeholder"><i class="fas fa-user-tie"></i></div>
                            </div>
                            <p><strong>Demola Bakare, FSI</strong></p>
                            <p>Anti-Corruption Advocate, Governance Strategist & Ethics Trainer with 25+ years of experience at ICPC Nigeria.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">Categories</h3>
                        <ul class="widget-categories">
                            <?php wp_list_categories( array( 'title_li' => '' ) ); ?>
                        </ul>
                    </div>
                    <div class="widget widget-newsletter">
                        <h3 class="widget-title">Newsletter</h3>
                        <p>Subscribe for the latest insights on governance and ethics.</p>
                        <form class="newsletter-form sidebar-newsletter" id="sidebar-newsletter">
                            <input type="email" name="email" placeholder="Your email" required>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
