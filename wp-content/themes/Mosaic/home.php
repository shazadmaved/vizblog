<?php get_header(); ?>

<!-- begin #main -->
<div id="main">
	<h1>
		<?php if (is_category()) { ?>
		<?php _e("Posts Categorized", "bestthemeframework"); ?> / <span><?php single_cat_title(); ?></span> 
		<?php } elseif (is_tag()) { ?> 
		<?php _e("Posts Tagged", "bestthemeframework"); ?> / <span><?php single_cat_title(); ?></span>
		<?php } elseif (is_author()) { ?>
		<?php _e("Posts By", "bestthemeframework"); ?> / <span><?php the_author_meta('display_name', $post->post_author) ?> </span> 
		<?php } elseif (is_day()) { ?>
		<?php _e("Daily Archives", "bestthemeframework"); ?> / <span><?php the_time('l, F j, Y'); ?></span>
		<?php } elseif (is_month()) { ?>
		<?php _e("Monthly Archives", "bestthemeframework"); ?> / <span><?php the_time('F Y'); ?></span>
		<?php } elseif (is_year()) { ?>
		<?php _e("Yearly Archives", "bestthemeframework"); ?> / <span><?php the_time('Y'); ?></span> 
		<?php } elseif (is_Search()) { ?>
		<?php _e("Search Results", "bestthemeframework"); ?> / <span><?php echo esc_attr(get_search_query()); ?></span> 
		<?php } ?>
	</h1>
			
<div id="posts" class="clearfix">
	<?php
		// WP 3.0 PAGED BUG FIX
		if ( get_query_var('paged') )
		$paged = get_query_var('paged');
		elseif ( get_query_var('page') )
		$paged = get_query_var('page');
		else
		$paged = 1;
		$args = array(
		'post_type' => 'post',
		'paged' => $paged, 
		'posts_per_page' => of_get_option('homepage_num_posts')
		);
		query_posts($args);
		?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(	array('clearfix', 'box' ) ); ?> role="article">
		<?php get_template_part( '/lib/post-formats/content', get_post_format() ); ?>
		<?php edit_post_link('edit', '<p class="edit-post">', '</p>'); ?>
		</article>
	<?php endwhile; ?>
</div><!-- //posts -->

<!-- begin #pagination -->
<?php if (function_exists("emm_paginate")) { 
	emm_paginate();  
} else { ?>
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('Older') ?></div>
		<div class="alignright"><?php previous_posts_link('Newer') ?></div>
	</div>
<?php } ?>
<!-- end #pagination -->
<?php endif;?>
<?php wp_reset_query(); ?>
</div>
<!-- end #main -->
<?php get_footer(); ?>