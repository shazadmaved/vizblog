<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Tetris WPExplorer Theme
 * @since Tetris 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="icon" type="images/png" href="<?php echo get_site_url(); ?>/wp-content/themes/wpex-tetris/images/Vizury-V.png" />
	

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
<body <?php body_class(); ?>>

<div class="h-warp">

	<div id="header-wrap">
		<div id="pre-header" class="clearfix">
			<ul id="header-actions">
				<li>
					<input type='button' class='login-button' value='LOGIN' />
				</li>
				<li>
					<input class='search-bar' type="text" id="search_container" style="" />
					<span class='header-icon icon-home_header_searchwhite'></span>
				</li>
				<li>
					<a href='/contactusform'>
						<span class='header-icon icon-home_header_contactwhite'></span>
					</a>
				</li>
				<li>
					<select class='language-select'>
						<option value='EN'>EN</option>
						<option value='AR'>AR</option>
						<option value='JP'>JP</option>
						<option value='KO'>KO</option>
						<option value='CN'>CN</option>
						<option value='PG'>PG</option>
					</select>
				</li>
			</ul>
		</div><!-- /pre-header -->

		<header id="header" class="clearfix">
			<div id="logo">
				<a href="<?php echo home_url(); ?>/" title="<?php echo get_bloginfo( 'name' ); ?>" rel="home"><img src="<?php echo network_site_url()?>/imgs/logo.png" alt="<?php echo get_bloginfo( 'name' ) ?>" /></a>
			</div><!-- /logo -->
			<nav id="navigation" class="clearfix">
				<div class="vizuri_menu_class">
					<ul id="menu-header-menu" class="sf-menu sf-js-enabled">
						<li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-5">
							<a href="/products">PRODUCTS</a>
						</li>
						<li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6">
							<a href="/story">ABOUT</a>
						</li>
						<li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7">
							<a href="/publishers">PUBLISHERS</a>
						</li>
						<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8">
							<a href="/success-stories">RESOURCES</a>
						</li>
						<li id="menu-item-9" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9">
							<a href="/vizuryblog">BLOG</a>
						</li>
					</ul>
				</div>
			</nav><!-- /navigation -->
			<div class='subnav'>
				<div class='subnav-block products-subnav'>
					<div class='reach-block product-subnav-block'>
						<a href='/products/reach'><h3>Reach</h3></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class='convert-block product-subnav-block'>
						<a href='/products/convert'><h3>Convert</h3></a>
						<div>Retargeting solutions</div>
						<ul class='subnav-list-control'>
							<li>
								<a href='/products/convert'>
									<span class='icon-home_menuicons__convertxp'></span>
									CONVERT RS
								</a>
							</li>
							<li>

								<a href='/products/convert/appreengage/'>

									<span class='icon-home_menuicons_apprengage'></span>
									App Re-Engagement
								</a>
							</li>
							<li>

								<a href='/products/convert/fbmarketing/'>

									<span class='icon-home_menuicons__fbmarketing'></span>
									Facebook Marketing
								</a>
							</li>
							<li>
								<a href='/products/convert/crossdevice/'>
									<span class='icon-home_menuicons__crosschannel'></span>
									Cross Device
								</a>
							</li>
							<li>
								<a href='/products/convert/mobilewebappengage/'>
									<span class='icon-home_menuicons__webmobileapp'></span>
									Mobile Web-App Engagement
								</a>
							</li>
						</ul>
					</div>
					<div class='engage-block product-subnav-block'>
						<a href='/products/engage'><h3>Engage</h3></a>
						<div>Performance marketing hub</div>
						<ul class='subnav-list-control'>
							<li>
								<a href='/products/engage/data-onboarding/'>
									<span class='icon-home_menuicons__Dataonboarding'></span>
									Data Onboarding / Aggregation
								</a>
							</li>
							<li>
								<a href='/products/engage/insights/'>
									<span class='icon-home_menuicons__analyticsandreporting'></span>
									Analytics & Reporting
								</a>
							</li>
							<li>
								<a href='/products/engage/marketing/'>
									<span class='icon-home_menuicons__marketingchannel'></span>
									Marketing Channels & Optimization
								</a>
							</li>
						</ul>
					</div>
					<div class='contact-block product-subnav-block'>
						<div>For personalised solutions,</div>
						<input class='yellowbutton' type='button' value='GET IN TOUCH' />
					</div>
				</div>
				<div class='subnav-block about-subnav'>
					<div class='company-block about-subnav-block'>
						<a href='/story'><h3>Company</h3></a>
						<ul class='subnav-list-control'>
							<li>
								<span class='icon-home_menuicons__ourstory'></span>
								<a href='/story'>Story</a>
							</li>
							<li>
								<span class='icon-home_menuicons__values'></span>
								<a href='/values'>Values</a>
							</li>
						</ul>
					</div>
					<div class='convert-block about-subnav-block'>
						<a href='/team'><h3>Team</h3></a>
						<ul class='subnav-list-control'>
							<li>
								<span class='icon-home_menuicons__founders'></span>
								<a href='/aboutus/founders'>Founders</a>
							</li>
							<li>
								<span class='icon-home_menuicons__board'></span>
								<a href='/aboutus/board'>Board</a>
							</li>
							<li>
								<span class='icon-home_menuicons__leadership'></span>
								<a href='/aboutus/board'>Leadership</a>
							</li>
							<li>
								<span class='icon-home_menuicons__investors'></span>
								<a href='/investors'>Investors</a>
							</li>
						</ul>
					</div>
					<div class='engage-block about-subnav-block'>
						<a href='/lifeatvizury'><h3>Careers</h3></a>
						<ul class='subnav-list-control'>
							<li>
								<span class='icon-home_menuicons__Vizurianspeak'></span>
								<a href='/lifeatvizury'>Life @ Vizury</a>
							</li>
							<li>
								<span class='icon-home_menuicons__jobopening'></span>
								<a href='/jobopenings'>Job Openings</a>
							</li>
						</ul>
					</div>
					<div class='no-border press-block about-subnav-block'>
						<a href='/press-release'><h3>Press Release</h3></a>
						<ul class='subnav-list-control'>
							<li>
								<span class='icon-home_menuicons_pressroom'></span>
								<a href='/press-release'>Press Release</a>
							</li>
							<li>
								<span class='icon-home_menuicons__mediacoverage'></span>
								<a href='/media-coverage'>Media Coverage</a>
							</li>
				<!-- 			<li>
								<span class='icon-home_menuicons__exclusives'></span>
								<a href='javascript://'>Exclusives</a>
							</li> -->
						</ul>
					</div>
				</div>
				<div class='subnav-block resources-subnav'>
					<div class='company-block resources-subnav-block'>
						<a href='/whitepapers'>
							<h3>
								<span class='icon-home_menuicons__whitepaper'></span>
								Whitepaper
							</h3>
						</a>
					</div>
					<div class='convert-block resources-subnav-block'>
						<a href='/success-stories'>
							<h3>
								<span class='icon-home_menuicons__successstories'></span>
								Case Studies
							</h3>
						</a>
					</div>
					<div class='engage-block resources-subnav-block'>
						<a href='/industry-reports'>
							<h3>
								<span class="icon-home_menuicons__industryreports"></span>
								Industry Reports
							</h3>
						</a>
					</div>
					<div class='no-border press-block resources-subnav-block'>
						<a href='/insights'>
							<h3>
								<span class="icon-home_menuicons__insights"></span>
								Insights
							</h3>
						</a>
					</div>
				</div>
			</div>
			<nav id="mobilenavigation-container">
				<div class='navigation-trigger'>
					<span class='icon-jobopenings_department'></span>
				</div>
				<ul class="mobilenavigation">
					<li class='has-submenu'>
						<div>Products</div>
						<span class='plus-icon'>+</span>
						<span class='minus-icon'>-</span>
						<ul class="mobilesubnav">
							<li>
								<a href='/products'>Products Overview</a>
							</li>
							<li>
								<a href='/products/reach'>Reach</a>
							</li>
							<li class='has-submenu'>
								<div>Convert</div>
								<span class='plus-icon'>+</span>
								<span class='minus-icon'>-</span>
								<ul class="mobilesubnav">
									<li>
										<a href='/products/convert'>Convert Overview</a>
									</li>
									<li>
										<a href='/products/convert'>Convert XP</a>
									</li>
									<li>
										<a href='/products/convert/appreengage/'>App Re engagement</a>
									</li>
									<li>
										<a href='/products/convert/fbmarketing/'>Facebook Marketing</a>
									</li>
									<li>
										<a href='/products/convert/crossdevice/'>Cross Device</a>
									</li>
									<li>
										<a href='/products/convert/mobilewebappengage/'>Mobile Web-App Engagement</a>
									</li>
								</ul>
							</li>
							<li class='has-submenu'>
								<div>Engage</div>
								<span class='plus-icon'>+</span>
								<span class='minus-icon'>-</span>
								<ul class="mobilesubnav">
									<li>
										<a href='/products/engage'>Engage Overview</a>
									</li>
									<li>
										<a href='/products/engage/data-onboarding/'>Data On boarding / Aggregation</a>
									</li>
									<li>
										<a href='/products/engage/insights/'>Analytics and Reporting</a>
									</li>
									<li>
										<a href='/products/engage/marketing'>Marketing Channels & Optimization</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class='has-submenu'>
						<div>About</div>
						<span class='plus-icon'>+</span>
						<span class='minus-icon'>-</span>
						<ul class="mobilesubnav">
							<li>
								<div>Company</div>
								<span class='plus-icon'>+</span>
								<span class='minus-icon'>-</span>
								<ul class="mobilesubnav">
									<li>
										<a href='/story'>Story</a>
									</li>
									<li>
										<a href='/values'>Values</a>
									</li>
								</ul>
							</li>
							<li>
								<div>Team</div>
								<span class='plus-icon'>+</span>
								<span class='minus-icon'>-</span>
								<ul class="mobilesubnav">
									<li>
										<a href='/convert'>Founders</a>
									</li>
									<li>
										<a href='/convert'>Board</a>
									</li>
									<li>
										<a href='/convert'>Leadership</a>
									</li>
									<li>
										<a href='/investors'>Investors</a>
									</li>
								</ul>
							</li>
							<li>
								<div>Careers</div>
								<span class='plus-icon'>+</span>
								<span class='minus-icon'>-</span>
								<ul class="mobilesubnav">
									<li>
										<a href='/convert'>Vizurians Speak</a>
									</li>
									<li>
										<a href='/jobopenings'>Job Openings</a>
									</li>
								</ul>
							</li>
							<li>
								<div>Press Room</div>
								<span class='plus-icon'>+</span>
								<span class='minus-icon'>-</span>
								<ul class="mobilesubnav">
									<li>
										<a href='/media-coverage'>Media Coverage</a>
									</li>
								<!-- 	<li>
										<a href='/convert'>Exclusives</a>
									</li> -->
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href='/publishers'>Publishers</a>
					</li>
					<li class='has-submenu'>
						<div>Resources</div>
						<span class='plus-icon'>+</span>
						<span class='minus-icon'>-</span>
						<ul class='mobilesubnav'></ul>
					</li>
					<li class='has-submenu'>
						<div>Blog</div>
						<span class='plus-icon'>+</span>
						<span class='minus-icon'>-</span>
						<ul class='mobilesubnav'></ul>
					</li>
					<li>
						<a href='/contact'>Contact Us</a>
					</li>
					<li>
						<a href='/language'>Language</a>
					</li>
					<li>
						<a href='/login'>
							<input class='login-button' type='button' value='Login' />
						</a>
					</li>
					<li>
						<a href='javascript://'>
							<input class='search-bar' type="text" id="search_container_mobile" style="" />
							<span class='icon-home_header_searchwhite'></span>
						</a>
					</li>
				</ul>
			</nav>
		</header><!-- /header -->

		<div class='floating-header'>
			<div class='small-logo'></div>
		</div>

	</div><!-- /header-wrap -->
	</div>
	<div id="wrap" class="clearfix">
	<div id="main-content" class="clearfix">
			 <div id="pre-head" class="clearfix">
			 	<ul class="taxanomy-filter" >
			 		<li><a href="<?php echo get_site_url(); ?>/?filter=marketing" <?php if(isset($_REQUEST['filter']) && $_REQUEST['filter'] == 'marketing' ){ ?> class="active" <?php } ?> > Marketing  </a></li>
			 		<li><a href="<?php echo get_site_url(); ?>/?filter=technology" <?php if(isset($_REQUEST['filter']) && $_REQUEST['filter'] == 'technology' ){ ?> class="active" <?php } ?>>Technology </a></li>
			 	</ul>
			<ul id="header-social" class="clearfix">

				<li>
				<form method="get" id="searchbar" action="<?php echo home_url( '/' ); ?>"><input type="search" name="s" value="<?php _e('', 'wpex'); ?>" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"></form>
				</li>
								<li><?php
				// Show social icons if enabled
				wpex_display_social(); 
				get_sidebar("sidebar") ?>  </li>
			</ul><!-- /header-social -->
		</div><!-- /pre-header -->
		<!--<?php
		// Homepage tagline
		if( is_front_page() &&  get_bloginfo('description') ) { ?>
			<h2 id="homepage-title"><span><?php echo get_bloginfo('description'); ?></span></h2>
		<?php } ?>-->