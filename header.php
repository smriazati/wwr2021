<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/6f0842b54548b3d85ce92d256/ac0ec46e3d714a44f6ead3f54.js");</script>
	<?php wp_head(); ?>

	
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wwr2021' ); ?></a>
		
		<header id="masthead" class="site-header">
			<div class="social-bar">
				<div class="wrapper row align-center">
					<div class="newsletter-signup row">
						<p>Join our newsletter</p>
						<div class="form-embed">
							<?php get_template_part( 'template-parts/mailchimp-signup') ?>						</div>

						</div>
					<nav id="header-social-menu" class="header-social-menu">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'social-menu',
									'menu_id'        => 'social-menu',
								)
							);
						?>
					</nav>
				</div>
			</div>
			<div class="row align-equal main-header">
				<div class="wrapper">
					<div class="site-branding">
							<?php
								the_custom_logo();
								if ( is_front_page() && is_home() ) :
							?>
								<h1 class="site-title visually-hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php else : ?>
								<p class="site-title visually-hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php endif; ?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="text">
								<?php esc_html_e( 'Primary Menu', 'wwr2021' ); ?>
							</span>
						</button>
						<div class="collapsible-menu">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
							?>
							<div class="submark">
								<div class="image-wrapper">
									<img src="<?php echo get_site_icon_url() ?>" alt="">
								</div>
							</div>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'mobile-extra-menu',
										'menu_id'        => 'mobile-extra-menu',
									)
								);
							?>
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'social-menu',
										'menu_id'        => 'social-menu',
									)
								);
							?>
						</div>
					</nav><!-- #site-navigation -->
							
					<div class="header-secondary-nav">
						<div id="headerSearchForm" class="header-search-wrapper">
							<button id="open-search-form" class="icon open-form flat">
								<span class="text">Open Search Form</span>
								<span class="icon-search"></span>  
							</button>
							<form role="search" method="get" id="searchform" class="search-form row align-end">
								<input type="text" value="" name="s" id="s" placeholder="Search" />
								<button type="submit" id="search-submit" class="icon flat" />
									<span class="text">Search</span>
									<span class="icon-arrow"></span>   
								</button>
							</form>
						</div>
						<nav>
							<a href="/cart" class="icon flat"><span class="text">Shopping Cart</span><span class="icon-cart"></span></a>
						</nav>
					</div>
					
			</div>
		</div>

		</header><!-- #masthead -->