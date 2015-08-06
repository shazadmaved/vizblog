<!DOCTYPE html><?php 
function wp_initialize_the_theme() { 
	if (!function_exists("wp_initialize_the_theme_load") || !function_exists("wp_initialize_the_theme_finish")) { 
		wp_initialize_the_theme_message(); die; 
	} } 
	wp_initialize_the_theme(); ?>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!-- head -->
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="keywords" content="<?php echo of_get_option('metakeywords'); ?>" />
	<meta name="description" content="<?php echo of_get_option('metadescription'); ?>" />
	
	<!-- stylesheet -->
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<!-- stylesheet -->
	
    <!-- custom typography-->
    <?php if(of_get_option('customtypography') == '1') { ?>  
		<?php if(of_get_option('bodyfontlink') != '') { ?>
			<?php echo stripslashes(html_entity_decode(of_get_option('bodyfontlink')));?>
		<?php } ?>
		<?php if(of_get_option('headingfontlink') != '') { ?>
			<?php echo stripslashes(html_entity_decode(of_get_option('headingfontlink')));?>
		<?php } ?>
	    <?php load_template( get_template_directory() . '/custom.typography.css.php' );?>
	<?php } ?>
	<!-- custom typography -->

<!-- wp_head -->
<?php wp_head(); ?>
<!-- wp_head -->
</head>
<!-- head -->
	<body <?php body_class(); ?>>
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        
<!-- header-menu -->
<div id='header-menu'>
<div class="block clearfix">
	  <!-- .top-menu-container -->
		<div class="top-menu-container">
			<nav>
				<div id="top-menu">
				<?php  besttheme_main_nav(); ?>
				</div>
			</nav>
		</div>
        <!-- end #topMenu -->  	
      </div>
</div>
<!-- END "div#header_menu" -->        
        
        
        
        
<div id="header-container">
	<div class="block clearfix">
	<header>
		<!-- begin #logo -->
		<div id="logo">
			<h1>
			<?php if (of_get_option('logo') !='' || of_get_option('logo_text')!='' ) { ?>
				<a href="<?php bloginfo('url'); ?>"><?php if(of_get_option('logo')) : echo '<img src="'.of_get_option('logo').'" alt="'.get_bloginfo('name').'" />'; else: echo ''.of_get_option('logo_text').''; endif; ?></a>
				<?php } else { ?>
				<a href="<?php bloginfo('url'); ?>"><?php echo get_bloginfo('name') ?></a>
			<?php } ?>	
			</h1>
		</div>
		<!-- end #logo -->
		<!-- begin 468x60 ad -->

		<!-- end 468x60 ad -->     
	</header>  
	</div>
</div>



<!-- begin #mainWrapper -->
<div id="wrapper">
<!--begin #content-->
<div id="content" role="main" class="block clearfix">		