<?php
/**
 * Archive Template
 *
 * @package DemolaBakare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero page-hero-archive">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content" data-aos="fade-up">
            <span class="page-label">Archive</span>
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description( '<p>', '</p>' ); ?>
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
                        <?php while ( have_posts() ) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card' ); ?> data-aos="fade-up">
                                <div class="blog-card-image">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'demola-card' ); ?></a>
                                    <?php else : ?>
                                        <a href="<?php the_permalink(); ?>" class="blog-image-placeholder"><i class="fas fa-newspaper"></i></a>
                                    <?php endif; ?>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-meta">
                                        <?php demola_posted_on(); ?>
                                        <span><i class="far fa-clock"></i> <?php echo esc_html( demola_reading_time() ); ?> min</span>
                                    </div>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p><?php echo esc_html( get_the_excerpt() ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more">Read Article <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <?php demola_pagination(); ?>
                <?php else : ?>
                    <div class="no-posts">
                        <i class="fas fa-search"></i>
                        <h2>Nothing Found</h2>
                        <p>No content matched your search criteria. Try a different search or browse our other pages.</p>
                    </div>
                <?php endif; ?>
            </div>
            <aside class="blog-sidebar">
                <?php dynamic_sidebar( 'sidebar-blog' ); ?>
            </aside>
        </div>
    </div>
</section>

<?php get_footer(); ?>
