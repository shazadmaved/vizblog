<?php
/**
 * The Header for our theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<style> 
		@font-face {
            font-family: "Proxima Nova Light";
            src: url(http://graffiti-media.co/roshni/vizury_tech_blog/wp-content/themes/wpex-tetris/languages/ProximaNova-Light.otf);
        }
		@font-face {
            font-family: "Source SansPro Light";
            src: url(http://graffiti-media.co/roshni/vizury_tech_blog/wp-content/themes/wpex-tetris/languages/SourceSansPro-Light.otf);
        }		
	</style>	
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( get_theme_mod('wpex_custom_favicon') ) { ?>
		<link rel="shortcut icon" href="<?php echo get_theme_mod('wpex_custom_favicon'); ?>" />
	<?php } ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<!-- Begin Body -->
<body <?php body_class(); ?> style="background-color: #efeeee;
background-image: none;
background-repeat: repeat;
background-position: top left;
background-attachment: scroll;">

<div id="wrap" class="clearfix">

	<div id="header-wrap">

		<header id="header" class="clearfix">
			<div id="logo">
					<a href="<?php echo site_url(''); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-blog-single.png" /></a>
			</div><!-- /logo -->
			<nav id="navigation" class="clearfix" style="color:red;">
				<?php wp_nav_menu( array(
					'theme_location'	=> 'main_menu',
					'sort_column'		=> 'menu_order',
					'menu_class'		=> 'sf-menu',
					'fallback_cb'		=> false
				)); ?>
			</nav><!-- /navigation -->
		</header><!-- /header -->
				<div id="pre-header" class="clearfix">
			<ul id="header-social" class="clearfix">
				<?php
				// Show social icons if enabled
				 ?>  
				<form method="get" id="searchbar" action="<?php echo home_url( '/' ); ?>"><input  style="border: 1px solid #E73420;" type="search" name="s" value="<?php _e('', 'wpex'); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"></form>
			</ul><!-- /header-social -->
		</div><!-- /pre-header -->
	</div><!-- /header-wrap -->
	
	<div id="main-content" class="clearfix">
	
		<!--<?php
		// Homepage tagline
		if( is_front_page() &&  get_bloginfo('description') ) { ?>
			<h2 id="homepage-title"><span><?php echo get_bloginfo('description'); ?></span></h2>
		<?php } ?>-->