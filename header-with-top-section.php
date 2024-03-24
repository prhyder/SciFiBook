<?php
/**
 * The header for our theme
 * 
 * Template Name: Header With Top Section
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

	<style>
		#top-header {
			background-image: linear-gradient(to bottom, #38464eaa, #263036aa),
				url("<?php echo get_template_directory_uri(); ?>/images/Sci-Fi-City.jpg");
				background-size: cover;

				background-image: 
				url("<?php echo get_template_directory_uri(); ?>/images/Explorer-Spacesuit-Alien-Planet.jpg");
				background-size: cover;
				object-fit: contain;
				background-position: 50% 75%;

			height: 500px;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<section id="top-header" class="d-flex flex-column justify-content-center align-middle align-center text-center mx-auto">
	
	<div class="container d-flex flex-column justify-content-center align-middle align-center text-center mx-auto">
		<div class="row justify-content-center">
			<div class="col-12 text-center mx-auto d-flex justify-content-center">
				<p class="text-center mx-auto d-flex justify-content-center">Hero image</p>
			</div>
		</div>
	</div>
</section>

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
			<div class="container">
				<!-- <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..."></a> -->
				<button style="display:none;" class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Menu
					<svg class="svg-inline--fa fa-bars ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path></svg><!-- <i class="fas fa-bars ms-1"></i> Font Awesome fontawesome.com -->
				</button>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse" id="navbarResponsive" style="">
					<ul class="navbar-nav text-uppercase  mx-auto py-4 py-lg-0">
						<li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
						<li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
						<li class="nav-item"><a class="nav-link" href="#about">About</a></li>
						<li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
						<li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav> 
	</header>


	

{# <asefimg class="header-image" src="<?php echo get_template_directory_uri(); ?>/images/Sci-Fi-City.jpg" /> #}





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
