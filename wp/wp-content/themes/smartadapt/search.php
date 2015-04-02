<?php
/**
 * Template for displaying Search Results pages.
 */

get_header(); ?>

<div id="content" class="<?php echo get_class_of_component('content', smartadapt_option( 'smartadapt_layout' )) ?>" role="main">

    <?php if (have_posts()) : ?>

    <header class="page-header">
        <h1 class="archive-title"><?php printf(__('Search Results for: %s', 'smartadapt'), '<span>' . get_search_query() . '</span>'); ?></h1>
    </header>



    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', 'loop'); ?>
        <?php endwhile; ?>

    <?php smartadapt_content_nav('nav-below'); ?>

    <?php else : ?>

    <article id="post-0" class="post no-results not-found">
        <header class="entry-header">
            <h2 class="entry-title"><?php _e('Nothing Found', 'smartadapt'); ?></h2>
        </header>

        <div class="entry-content">
            <p><?php _e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'smartadapt'); ?></p>
            <?php get_search_form(); ?>
        </div>
        <!-- .entry-content -->
    </article>

    <?php endif; ?>

</div><!-- #content -->
<?php
if(check_position_of_component('menu', 'right', smartadapt_option( 'smartadapt_layout' ))){
	get_template_part('section', 'menu');
}//if menu is one the right side
?>
</div><!-- #main -->

</div><!-- #page -->

<?php
//add sidebar on the right side
if(check_position_of_component('sidebar', 'right', smartadapt_option( 'smartadapt_layout' )))
	get_sidebar();
?>
</div><!-- #wrapper -->
<?php get_footer(); ?>