<?php
/**
 * The template for displaying Category pages.
 */

get_header();


?>

<div id="content" class="<?php echo get_class_of_component('content', smartadapt_option( 'smartadapt_layout' )) ?>" role="main">


    <?php if (have_posts()) : ?>
    <header class="archive-header">
        <h1 class="archive-title"><?php printf(__('Platform Selected: %s', 'smartadapt'), '<span>' . single_cat_title('', false) . '</span>'); ?></h1>

        <?php if (category_description()) : // Show an optional category description ?>
        <div class="archive-meta"><?php echo category_description(); ?></div>
        <?php endif; ?>
    </header><!-- .archive-header -->
<?php
	$category_template = smartadapt_template_category_loop();
?>
<div class="row smartadapt-category-row <?php echo $category_template ?>">
    <?php

  global $wp_query;

	if(isset($wp_query->query_vars['posts_per_page'])){
		$limit = $wp_query->query_vars['posts_per_page'];
	}else{
		$limit = 10;
	}
  $all_posts = $wp_query->post_count;
	$i = 1;
	$j = 1;
		  /* Start the Loop */
	while (have_posts()) : the_post();
		if ( $i == 1 && $category_template=='loop-2columns') {
							echo '<div class="row smartadapt-box-line">';
						}
        /* Include the post format-specific template for the content. If you want to
                   * this in a child theme then include a file called called content-___.php
                   * (where ___ is the post format) and that will be used instead.
                   */

			get_template_part( 'content', $category_template);

		if($category_template=='loop-2columns'){
		if ( $i % 2 == 0 || $j == $limit || $j == $all_posts ) {

								echo '</div>';

		           	$i = 1;
						}
						else {
							$i ++;
						}

						$j ++;
				}
    endwhile;
?>
		</div>
		<?php
    smartadapt_content_nav('nav-below');
    ?>

    <?php else : ?>
    <?php get_template_part('content', 'none'); ?>
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