<?php
/**
 * The template for displaying Comments.
 *
 */
if (post_password_required())
    return;
?>

<div id="comments" class="comments-area">

    <?php // You can start editing here -- including this comment! ?>

    <?php if (have_comments()) : ?>
    <h3 class="comments-title">
        <i class="icon-comments icon-left"></i>
        <?php
        printf(_n('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'smartadapt'),
            number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
        ?>
    </h3>

    <ol class="commentlist">
        <?php wp_list_comments(array('callback' => 'smartadapt_comment', 'style' => 'ol')); ?>
    </ol><!-- .commentlist -->

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
        <nav id="comment-nav-below" class="navigation" role="navigation">
            <h1 class="assistive-text section-heading"><?php _e('Comment navigation', 'smartadapt'); ?></h1>

            <div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', 'smartadapt')); ?></div>
            <div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', 'smartadapt')); ?></div>
        </nav>
        <?php endif; // check for comment navigation ?>

    <?php
    /* If there are no comments and comments are closed, let's leave a note.
          * But we only want the note on posts and pages that had comments in the first place.
          */
    if (!comments_open() && get_comments_number()) : ?>
        <p class="nocomments"><?php _e('Comments are closed.', 'smartadapt'); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php
    $args = array('id_submit' => 'submit');

    comment_form($args); ?>

</div><!-- #comments .comments-area -->