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



<?php
	$post_id = false; // current post
	$post_id = 1; // post ID = 1
	$post_id = "user_2"; // user ID = 2
	$post_id = "category_3"; // category term ID = 3
	$post_id = "event_4"; // event (custom taxonomy) term ID = 4
	$post_id = "option"; // options page
	$post_id = "options"; // same as above

	//echo($post_id);

	$post_id = false; // current post

	$book_title = get_field('book_title');

	//echo($book_title);


	$hero_group_id = 'group_65fc174264359'; // Replace with group ID
	$hero_fields      = array();

	$fields = acf_get_fields( $hero_group_id );


	foreach ( $fields as $field ) {
		$field_value = get_field( $field['name'] );   //Putting true as second param means this doesn't work.
		//echo($field['name']);
		//the_field($field['name']);
		//echo("<br/>");

		if ( ! empty( $field_value ) ) {
			//echo("not empty");
			$hero_fields[ $field['name'] ] = $field_value;
		}

		// Works now:
		//echo($field_value);
		//echo("<br/>");
	}

	// Getting a single field.
	//the_field('the_squirrels');
	//echo("<br/><br/>");
	$fields = get_field_objects();


//echo("<br/><br/>");
//the_field('hero_section');
//the_field('book_title');
?>




<section style="display:none;">
	<h3>Testing get_template_part.</h3>
	<?php
		get_template_part('template-parts/content', 'aboutTheAuthor');
	?>
</section>

	<main id="primary" class="site-main">

	<!-- Hero -->
	<section id="hero" class="" >
		<div class="container pt-5">
			<div class="row">
				<div class="col-md-7">
					<p class="white topper pt-5">UPCOMING RELEASE</p>
					<h1 class="white  fw-bold"><?php echo($hero_fields['book_title']) ?></h1>
					<h2 class="white">A JOURNEY TO AN UNCHARTED PLANET... AND A MISSION THAT WILL CHANGE THE COURSE OF HUMANITY.</h2>

					<div class="pt-5">
						<button class="btn btn-primary">Buy On Amazon</button>
						<button class="btn btn-secondary">Learn More</button>
					</div>
					
				</div>
				<div class="col-md-5">
					<!-- Fix: needs display block or something -->
					<img class="img-fluid d-block pb-4" data-aos="fade-up" data-aos-once="true" loading="eager" src="<?php echo get_template_directory_uri(); ?>/images/OmegaProjectPaperback.png">
				</div>
			</div>
		</div>
	</section>

	<section style="display:none;">
		<h1>My New Book Title</h1>
		<h2>My New Book Title</h2>
		<h3>My New Book Title</h3>
		<h4>My New Book Title</h4>
		<h5>My New Book Title</h5>
		<h6>My New Book Title</h6>
		<p>My New Book Title</p>
	</section>

	

	<!-- Reviews -->
	<section id="reviews" class="pt-5 pb-5 bg-white">
		<div class="container pt-3">
			<div class="row text-center pt-5">
				<div class="col">
					<h2 class="display-2">What Readers Are Saying About <i>The Omega Project:</i></h2>
				</div>
			</div>
		</div>
		<div id="reviewsCarousel" class="carousel slide">
			<div class="carousel-indicators" style="display:none;">
				<button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item  active" style="height:400px;">
					<div class="container d-flex text-center pt-5 pb-5">
						<div class="row pt-5 pb-5">
							<div class="col reviews-col d-flex flex-column mx-auto">
								<h3>A great read from start to end.</h3>
								<p>I couldn't put this down. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p class="reviewer-name pt-2">ARC Reviewer</p>
								<div><img class="img-fluid" loading="lazy" height="500" src="<?php echo get_template_directory_uri(); ?>/images/Five-Stars.jpg"></div>
							</div>
						</div>
					</div>
				
					
				</div>
				<div class="carousel-item" style="height:400px;">
					<div class="container d-flex text-center pt-5 pb-5">
						<div class="row pt-5 pb-5">
							<div class="col reviews-col d-flex flex-column mx-auto">
								<h3>A great sci-fi action read.</h3>
								<p>I couldn't put this down. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p class="reviewer-name pt-2">Goodreads Review</p>
								<div><img class="img-fluid" loading="lazy" height="500" src="<?php echo get_template_directory_uri(); ?>/images/Five-Stars.jpg"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="prev" >
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#reviewsCarousel" data-bs-slide="next" >
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden"></span>
			</button>
		</div>
	</section>

	<!-- Book Details -->
	<section id="book" class="bg-darkBlue pt-5 pb-5 px-2">
		<div class="container pt-5 pb-5 white align-items-center">
			<div class="row pt-5 pb-5 align-items-center">
				<div class="col-lg-4 col-md-4 col-sm-12 text-center">
					<img class="img-fluid" loading="lazy" data-aos="fade-up" data-aos-once="true" height="500" src="<?php echo get_template_directory_uri(); ?>/images/The-Omega-Project-Book-Cover.jpg">
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 details" >
					<p class="topper">SCI-FI / ACTION NOVEL</p>
					<h2 class="title">About The Book</h2>
					<p>Earth is threatened by the arrival of a hostile alien force. Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin aliquam ultrices sagittis orci a 
						scelerisque purus semper. Massa sapien faucibus et molestie ac feugiat sed lectus. </p>
					<p>Pellentesque habitant morbi tristique senectus. Hac habitasse platea dictumst quisque sagittis. </p>
					<div class="pt-5">
						<h3 class="pb-2">Where to Buy <i>The Omega Project</i></h3>
						<button class="btn btn-primary">Amazon</button>
						<button class="btn btn-primary">Barnes and Noble</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Subscribe -->
	<section id="subscribe" class="pt-5 pb-5 px-5 white">
		<div class="container pt-5 pb-5">
			<div class="row pt-5 pb-5">
				<div class="col-12 text-center pt-5 pb-5">
					<h2>Subscribe</h2>
					<p class="pt-1 pb-4">Sign up for the email list to make sure you never miss any updates.</p>
					<?php echo(do_shortcode('[mc4wp_form id=76]')) ?>
					
					<form name="subscribeForm" style="display:none;">
						<div class="row">
							<div class="col-lg-4 col-md-12 gx-2">
								<input type="text" class=" flex-fill form-control me-2 mb-2" id="firstName" name="FNAME"
								 placeholder="First name" aria-describedby="firstName" aria-label="First name">
							</div>
							<div class="col-lg-4 col-md-12 gx-2">
								<input type="email" class=" flex-fill form-control me-2 mb-2" id="email" name="EMAIL"
								 placeholder="Email address" aria-label="Email">
							</div>
							<div class="col-lg-4 col-md-12 gx-2">
								<input type="hidden" name="mc4wp-subscribe" value="1" />
								<label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1711406212"><input type="hidden" name="_mc4wp_form_id" value="76"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
								<button type="submit" class="flex-fill btn btn-primary me-1 mb-2">Send Me Updates</button>
							  </div>
						  </div>
						  <div>
							<p class="form-text white pt-2">We'll never share your info with anyone else.</p>
						  </div>
						  <div class="">
							<div class="" role="alert">
								
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	

	<!-- About The Author -->
	<section id="about" class="bg-light pt-5 pb-5">
		<div class="container pt-5 pb-5">
			<div class="row pt-5 pb-5">
				<div class="col-md-4 gx-5">
				
					<img class="img-fluid" loading="lazy" height="300" src="<?php echo get_template_directory_uri(); ?>/images/Author-Photo.png">
				</div>
				<div class="col-md-8 gx-5">
					<p class="topper pt-3">About The Author</p>
					<h2>John Miller</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin aliquam ultrices sagittis orci a 
					scelerisque purus semper. Massa sapien faucibus et molestie ac feugiat sed lectus.</p>
				</div>
			</div>
		</div>
	</section>

	
	<section class="bg-light" >
		<h2>Contact Form 7, "Untitled" Form:</h2>
		<?php //echo do_shortcode('[contact-form-7 id="4f9fdcf" title="Untitled"]'); ?>
	</section>

	<section class="bg-light" style="display:none;">
		<h2>Contact Form 7:</h2>
		<?php //echo do_shortcode('[contact-form-7 id="47caa7b" title="Contact form 1"]'); ?>
	</section>

	<section class="bg-light" style="display:none;">
		<h2>WP Forms:</h2>
		<?php //echo do_shortcode('[wpforms id="78" title="false"]'); ?>
	</section>

	<section class="bg-light" style="display:none;">
		<h2>Forminator:</h2>
		<?php //echo do_shortcode('[forminator_form id="80"]'); ?>
	</section>

	<!-- Contact with CF7 -->
	<section id="contact" class="bg-dark white" >
		<div class="container align-items-center">
			<div class="row align-items-center">
				<div class="image-col col-lg-5 col-md-12">
					
					<img class="the-image" loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/images/Explorer-Spacesuit-Alien-Planet.jpg">
				</div>
				<div class="col-lg-7 col-md-12 pt-5 pb-5 px-5 ">
					<h2 class="pt-5">Contact</h2>
					<p class="pt-1 pb-4">For any questions about my book, interview requests, or to just say hello, use the form below.</p>
					
					
						<?php echo do_shortcode('[contact-form-7 id="47caa7b" title="Contact form 1"]'); ?>
					
				</div>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section id="contact" class="bg-dark white" style="display:none;" >
		<div class="container align-items-center">
			<div class="row align-items-center">
				<div class="image-col col-lg-5 col-md-12">
					
					<img class="the-image" loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/images/Explorer-Spacesuit-Alien-Planet.jpg">
				</div>
				<div class="col-lg-7 col-md-12 pt-5 pb-5 px-5 ">
					<h2 class="">Contact</h2>
					<p class="pt-1 pb-4">For any questions about my book, interview requests, or to just say hello, use the form below.</p>
					
					<form name="contactForm" >


						<div class="row" style="display:none;">
							<div class="col-lg-6 col-md-12 gx-2">
								<input type="text" class="flex-fill form-control me-2 mb-2" id="firstName" name="FNAME"
								 placeholder="First name" aria-describedby="firstName" aria-label="First name">
							</div>
							<div class="col-lg-6 col-md-12 gx-2">
								<input type="text" class="flex-fill form-control me-2 mb-2" id="lastName" name="LNAME"
								 placeholder="Last name" aria-describedby="lastName" aria-label="Last name">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 gx-2">
								<input type="email" class="flex-fill form-control me-2 mb-2" id="email" name="EMAIL"
								 placeholder="Email address" aria-label="Email">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 gx-2">
								<input type="text" class="flex-fill form-control me-2 mb-2" id="subject" name="SUBJECT"
								 placeholder="Subject" aria-describedby="subject" aria-label="Subject">
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-md-12 gx-2">
								<textarea class="flex-fill form-control me-2 mb-2" id="message" rows="3" name="MESSAGE"
								placeholder="Your message" aria-label="Message"></textarea>
							</div>
						</div>
						<div class="row">
								<div class="col-lg-12 col-md-12 gx-2">
									
									<label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1711406212"><input type="hidden" name="_mc4wp_form_id" value="76"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
									<button type="submit" class="flex-fill btn btn-primary me-1 mb-2">Submit</button>
								</div>
						 	 </div>
					</form>


				</div>
			</div>
		</div>
	</section>

	<!-- Display a template -->
	<section style="display:none;">
		<?php get_template_part( 'template-parts/content', 'page' ); ?>
	</section>

	<!-- Display the book title -->
	<section style="display:none;">
		<h1><?php echo($book_title); ?></h1>
	</section>
		

	</main><!-- #main -->

<?php
get_footer();
