<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>html{visibility: hidden;opacity:0;}</style>

	<!--<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/images/OmegaProjectPaperback.png" as="image" /> -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
			<div class="container">
				<a class="navbar-brand" aria-label="Scroll to Page Top" href="#page-top"><img alt="John Stephens Author Logo" src="<?php echo get_template_directory_uri(); ?>/images/John-Stephens-Author-Logo.png"></a>
				
				<button  class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span> 
				</button>
				<!--
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				-->
				<div class="navbar-collapse collapse" id="navbarResponsive" >
					<ul class="navbar-nav text-uppercase  mx-auto py-4 py-lg-0">
						<li class="nav-item"><a class="nav-link" href="#book">The Book</a></li>
						<li class="nav-item"><a class="nav-link" href="#about">About the Author</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
					</ul>
					<a href="#subscribe" class="action-button mobile btn-primary btn text-center mx-auto">Subscribe Now</a>
				</div>
				<a href="#subscribe" class="action-button desktop btn-primary btn text-center mx-auto">Subscribe Now</a>

				
			</div>
		</nav> 
	</header>

	


	





	<!-- Old header -->
	<header id="masthead" class="site-header" style="display:none;">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$_s_description = get_bloginfo( 'description', 'display' );
			if ( $_s_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $_s_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', '_s' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
