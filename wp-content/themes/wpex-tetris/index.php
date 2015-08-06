<?php
/**
 * Index.php is the default template. This file is used when a more specific template can not be found to display your posts.
 */

get_header(); // Loads the header.php template

if (have_posts()) : ?>
<div id="blog-wrap" class="blog-isotope clearfix">   
	<?php
	// Loop through each post
    while (have_posts()) : the_post();
        get_template_part( 'content', get_post_format() );   
    endwhile;        	
    ?>           
</div><!-- /post -->
<?php
wpex_pagination(); // Paginate your posts
endif;
get_footer(); //get template footer ?>