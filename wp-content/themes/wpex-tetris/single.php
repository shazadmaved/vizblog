<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */


get_header('single'); // Loads the header.php template

if ( have_posts()) : while ( have_posts()) : the_post(); ?>

<div id="single-post-content" class="sidebar-bg container clearfix">
	
	<div id="post" class="clearfix">
		<?php
		// Show header on all post formats except quotes
		if( 'quote' != get_post_format() ) { ?>
			<header id="post-header">
				<h1 style="color: #e6494f;"><?php the_title(); ?></h1>
				<ul class="meta clearfix">
					<li><strong>Author:</strong> <?php the_author_posts_link(); ?></li>   
					<li><strong>Date:</strong> <?php echo get_the_date(); ?></li>
					<li><strong>Category:</strong> <?php the_category(',');?></li>
					<li><?php dynamic_sidebar('footer-2') ?></li>
				</ul>

			</header><!-- /post-header -->
		<?php } ?>
		<!-- Entry Content Start -->
		<article <?php post_class('entry clearfix fitvids'); ?>>
			<div class="inner-post">
				<?php the_content(); // This is your main post content output ?>
				<?php if( get_post_format() == 'quote' ){ ?><div class="quote-author">&#8211; <?php the_title(); ?></div><?php } ?>
			</div><!-- /inner-post -->
		</article><!-- /entry -->
		<!-- Entry Content End -->
		<?php wp_link_pages(); // Paginate pages when <!- next --> is used ?>
		<?php the_tags('<div id="post-tags" class="clearfix">','','</div>'); ?>
		<?php
		// Show author bio on all post formats except quotes
		if( get_post_format() !== 'quote' ) { ?>
		<?php } ?>
		<?php comments_template(); ?>
	</div><!-- /post -->
		<div class="tuki">
			<?php dynamic_sidebar('footer-1') ?>
		</div>
	
	
	<?php
	//end post loop
	endwhile; endif;
	
	//get template sidebar
	//*get_sidebar(); ?>
	
</div><!--/container -->

<?php get_footer(); ?>