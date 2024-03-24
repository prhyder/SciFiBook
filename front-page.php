<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>

	<main id="primary" class="site-main">
		<!-- Lower Section of Header-->
	<section id="hero">
		<div class="container pt-5">
			<div class="row">
				<div class="col-md-7">
					<p class="color-light topper pt-5">UPCOMING RELEASE</p>
					<h1 class="color-light  fw-bold">THE OMEGA PROJECT</h1>
					<h2 class="color-light">A JOURNEY TO AN UNCHARTED PLANET... AND A MISSION THAT WILL CHANGE THE COURSE OF HUMANITY.</h2>

					<div class="pt-5">
						<button class="btn btn-primary">Buy On Amazon</button>
						<button class="btn btn-secondary">Learn More</button>
					</div>
					
				</div>
				<div class="col-md-5">
					<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/OmegaProjectPaperback.png">
				</div>
			</div>
		</div>
	</section>

		

	</main><!-- #main -->

<?php
get_footer();
