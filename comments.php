<?php
/**
 * Comments Template
 *
 * @package DemolaBakare
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            printf(
                /* translators: %d: number of comments */
                esc_html( _n( '%d Comment', '%d Comments', $comment_count, 'demola-bakare' ) ),
                absint( $comment_count )
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 60,
            ) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php
    comment_form( array(
        'class_form'    => 'comment-form demola-comment-form',
        'title_reply'   => __( 'Leave a Comment', 'demola-bakare' ),
        'comment_field' => '<div class="form-group"><label for="comment">' . esc_html__( 'Comment', 'demola-bakare' ) . '</label><textarea id="comment" name="comment" rows="6" required></textarea></div>',
    ) );
    ?>
</div>
