<?php
/**
 * The default template for displaying standard post format content.
 *
 * @package WordPress
 */


if ( is_singular() ) { ?>

	<div id="post-thumbnail">
		<img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id() ),  wpex_img( 'blog_width' ), wpex_img( 'blog_height' ), wpex_img( 'blog_crop' ) ); ?>" alt="<?php echo the_title(); ?>" />
	</div>

<?php } else { ?>

	<article <?php post_class('blog-entry clearfix'); ?>>
		<?php if( has_post_thumbnail() ) { ?>
			<div class="blog-entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo aq_resize( wp_get_attachment_url( get_post_thumbnail_id(), 'full' ),  wpex_img( 'blog_entry_width' ), wpex_img( 'blog_entry_height' ), wpex_img( 'blog_entry_crop' ) ); ?>" alt="<?php echo the_title(); ?>" /></a>
			</div><!-- /blog-entry-thumbnail -->
		<?php } ?>
		<div class="entry-text clearfix">
			<header>
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<ul class="entry-meta">
				<li style="font-size: 15px;font-family: Proxima Nova Light;"><strong>Author:</strong> <?php the_author_posts_link(); ?></li>   
				<li style="font-size: 15px;font-family: Proxima Nova Light;"><strong>Date:</strong> <?php echo get_the_date(); ?></li>
			</ul><!-- /entry-meta -->
			<li style="font-size: 14px;font-family: Proxima Nova Light;list-style: none;line-height: 18px;padding-top: 5px;"><?php wpex_excerpt(); ?></li>
			<div id="read-more">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/read-more.jpg"/></a>
			</div>
		</div><!-- /entry-text -->
	</article><!-- /blog-entry -->

<?php } ?>