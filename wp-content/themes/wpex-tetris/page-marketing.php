<?php
/**
 * Page.php is used to render your regular pages.
 */

get_header('marketing'); // Loads the header.php template

if (have_posts()) : ?>
<div id="blog-wrap" class="blog-isotope clearfix">
        <div class="entry clearfix">	
				<?php query_posts('category_name=marketing');
				while (have_posts()) : the_post();
				    get_template_part( 'content', get_post_format() );   
					endwhile;// do whatever you want
				?>
        </div><!-- /entry -->         
    <?php comments_template(); ?>
</div><!-- /container -->

<?php
wpex_pagination(); // Paginate your posts
endif;
get_footer(); // Loads the footer.php file ?>
 