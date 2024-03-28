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
					<p class="white topper pt-5">COMING SOON</p>
					<h1 class="white fw-bold"><?php echo($hero_fields['book_title']) ?></h1>
					<h2 class="white"><?php echo($hero_fields['book_subtitle']) ?></h2>
					<h2 class="white" style="display:none;">A JOURNEY TO AN UNCHARTED PLANET... AND A MISSION THAT WILL CHANGE THE COURSE OF HUMANITY.</h2>

					<div class="pt-5">
						<a href="" class="btn btn-primary">
							<span>Buy On Amazon
							<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="white" focusable="false"><path d="M13.582,8.182C11.934,8.367,9.78,8.49,8.238,9.166c-1.781,0.769-3.03,2.337-3.03,4.644 c0,2.953,1.86,4.429,4.253,4.429c2.02,0,3.125-0.477,4.685-2.065c0.516,0.747,0.685,1.109,1.629,1.894 c0.212,0.114,0.483,0.103,0.672-0.066l0.006,0.006c0.567-0.505,1.599-1.401,2.18-1.888c0.231-0.188,0.19-0.496,0.009-0.754 c-0.52-0.718-1.072-1.303-1.072-2.634V8.305c0-1.876,0.133-3.599-1.249-4.891C15.23,2.369,13.422,2,12.04,2 C9.336,2,6.318,3.01,5.686,6.351C5.618,6.706,5.877,6.893,6.109,6.945l2.754,0.298C9.121,7.23,9.308,6.977,9.357,6.72 c0.236-1.151,1.2-1.706,2.284-1.706c0.584,0,1.249,0.215,1.595,0.738c0.398,0.584,0.346,1.384,0.346,2.061V8.182z M13.049,14.088 c-0.451,0.8-1.169,1.291-1.967,1.291c-1.09,0-1.728-0.83-1.728-2.061c0-2.42,2.171-2.86,4.227-2.86v0.615 C13.582,12.181,13.608,13.104,13.049,14.088z M20.683,19.339C18.329,21.076,14.917,22,11.979,22c-4.118,0-7.826-1.522-10.632-4.057 c-0.22-0.199-0.024-0.471,0.241-0.317c3.027,1.762,6.771,2.823,10.639,2.823c2.608,0,5.476-0.541,8.115-1.66 C20.739,18.62,21.072,19.051,20.683,19.339z M21.336,21.043c-0.194,0.163-0.379,0.076-0.293-0.139 c0.284-0.71,0.92-2.298,0.619-2.684c-0.301-0.386-1.99-0.183-2.749-0.092c-0.23,0.027-0.266-0.173-0.059-0.319 c1.348-0.946,3.555-0.673,3.811-0.356C22.925,17.773,22.599,19.986,21.336,21.043z"></path></svg>
							</span>
						</a>
						<a href="#reviews" class="btn btn-secondary">Learn More 
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
							</svg>
						</a>
					</div>
					
				</div>
				<div class="col-md-5">
					<img class="img-fluid d-block pb-4" alt="The Omega Project Paperback" data-aos="fade-up" data-aos-once="true" loading="eager" src="<?php echo get_template_directory_uri(); ?>/images/OmegaProjectPaperback.png">
				</div>
			</div>
		</div>
	</section>

	<!-- Reviews -->
	<section id="reviews" class="bg-white">
		<div id="reviewsCarousel" class="carousel slide">
		<img class="quotes left-quotes" alt="" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Left-Quotes.png">
		<img class="quotes right-quotes" alt="" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Right-Quotes.png">

			<div class="carousel-indicators" style="display:none;">
				<button type="button" name="Slide 1" data-bs-target="#reviewsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" name="Slide 2" data-bs-target="#reviewsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item  active" style="height:400px;">
					<div class="container d-flex text-center pt-5 pb-5">
						<div class="row pt-5 pb-5">
							<div class="col reviews-col d-flex flex-column mx-auto">
								<h3>A great read from start to end.</h3>
								<p>I couldn't put this down. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
								<p class="reviewer-name pt-2">ARC Reviewer</p>
								<div><img class="img-fluid" alt="" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Five-Stars.jpg"></div>
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
								<div><img class="img-fluid" alt="" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/Five-Stars.jpg"></div>
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
					<img class="img-fluid" loading="lazy" alt="The Omega Project Book Cover" data-aos="fade-up" data-aos-once="true" height="500" src="<?php echo get_template_directory_uri(); ?>/images/The-Omega-Project-Book-Cover.jpg">
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 details" >
					<p class="topper">SCI-FI / ACTION NOVEL</p>
					<h2 class="title">About The Book</h2>
					<p>Earth is threatened by the arrival of a hostile alien force. Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin aliquam ultrices sagittis orci a 
						scelerisque purus semper. Massa sapien faucibus et molestie ac feugiat sed lectus. </p>
					<p>Pellentesque habitant morbi tristique senectus. Hac habitasse platea dictumst quisque sagittis. </p>
					<div class="pt-5">
						<p class="pb-2"><strong>Where to get <i>The Omega Project:</i></strong></p>
						<button aria-label="Amazon" class="btn btn-primary">Buy on Amazon 
						<svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="white" focusable="false"><path d="M13.582,8.182C11.934,8.367,9.78,8.49,8.238,9.166c-1.781,0.769-3.03,2.337-3.03,4.644 c0,2.953,1.86,4.429,4.253,4.429c2.02,0,3.125-0.477,4.685-2.065c0.516,0.747,0.685,1.109,1.629,1.894 c0.212,0.114,0.483,0.103,0.672-0.066l0.006,0.006c0.567-0.505,1.599-1.401,2.18-1.888c0.231-0.188,0.19-0.496,0.009-0.754 c-0.52-0.718-1.072-1.303-1.072-2.634V8.305c0-1.876,0.133-3.599-1.249-4.891C15.23,2.369,13.422,2,12.04,2 C9.336,2,6.318,3.01,5.686,6.351C5.618,6.706,5.877,6.893,6.109,6.945l2.754,0.298C9.121,7.23,9.308,6.977,9.357,6.72 c0.236-1.151,1.2-1.706,2.284-1.706c0.584,0,1.249,0.215,1.595,0.738c0.398,0.584,0.346,1.384,0.346,2.061V8.182z M13.049,14.088 c-0.451,0.8-1.169,1.291-1.967,1.291c-1.09,0-1.728-0.83-1.728-2.061c0-2.42,2.171-2.86,4.227-2.86v0.615 C13.582,12.181,13.608,13.104,13.049,14.088z M20.683,19.339C18.329,21.076,14.917,22,11.979,22c-4.118,0-7.826-1.522-10.632-4.057 c-0.22-0.199-0.024-0.471,0.241-0.317c3.027,1.762,6.771,2.823,10.639,2.823c2.608,0,5.476-0.541,8.115-1.66 C20.739,18.62,21.072,19.051,20.683,19.339z M21.336,21.043c-0.194,0.163-0.379,0.076-0.293-0.139 c0.284-0.71,0.92-2.298,0.619-2.684c-0.301-0.386-1.99-0.183-2.749-0.092c-0.23,0.027-0.266-0.173-0.059-0.319 c1.348-0.946,3.555-0.673,3.811-0.356C22.925,17.773,22.599,19.986,21.336,21.043z"></path></svg>
						</button>
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
								 placeholder="First name" aria-label="First name">
							</div>
							<div class="col-lg-4 col-md-12 gx-2">
								<input type="email" class=" flex-fill form-control me-2 mb-2" id="email" name="EMAIL"
								 placeholder="Email address" aria-label="Email">
							</div>
							<div class="col-lg-4 col-md-12 gx-2">
								<input type="hidden" name="mc4wp-subscribe" value="1" />
								<label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp" value="1711406212"><input type="hidden" name="_mc4wp_form_id" value="76"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
								<button type="submit" aria-label="Send Me Updates" class="flex-fill btn btn-primary me-1 mb-2">Send Me Updates</button>
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
				<div class="col-md-12 col-lg-4 gx-5">
					<div class="img-div">
						<img alt="Author Photo" loading="lazy"  src="<?php echo get_template_directory_uri(); ?>/images/Author-Photo.jpg">
					</div>
					
				</div>
				<div class="col-md-12 col-lg-8 gx-5">
					<p class="topper about pt-3">About The Author</p>
					<h2 class="name">John Stephens</h2>
					<p class="author-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sollicitudin aliquam ultrices sagittis orci a 
					scelerisque purus semper. Massa sapien faucibus et molestie ac feugiat sed lectus.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-light" style="display:none;">
		<h2>Contact Form 7, "Ye Test Form":</h2>
		<?php //echo do_shortcode('[contact-form-7 id="e5e7a27" title="YeTestForm"]'); ?>
	</section>
	
	<section class="bg-light" style="display:none;">
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
					
					<img class="the-image" loading="lazy" alt="Explorer on Alien Planet" src="<?php echo get_template_directory_uri(); ?>/images/Explorer-Spacesuit-Alien-Planet.jpg">
				</div>
				<div class="col-lg-7 col-md-12 pt-5 pb-5 px-5 ">
					<h2 class="pt-5">Contact</h2>
					<p class="pt-1 pb-4">For any questions about my book, interview requests, or to just say hello, use the form below.</p>
					
					
						<?php //echo do_shortcode('[contact-form-7 id="47caa7b" title="Contact form 1"]'); ?>
						<?php echo do_shortcode('[contact-form-7 id="e5e7a27" title="YeTestForm"]'); ?>
					
				</div>
			</div>
		</div>
	</section>

	<!-- Contact ORIGINAL -->
	<section id="contact" class="bg-dark white" style="display:none;">
		<div class="container align-items-center">
			<div class="row align-items-center">
				<div class="image-col col-lg-5 col-md-12">
					<img class="the-image" loading="lazy" alt="Explorer on Alien Planet" src="<?php echo get_template_directory_uri(); ?>/images/Explorer-Spacesuit-Alien-Planet.jpg">
				</div>
				<div class="col-lg-7 col-md-12 pt-5 pb-5 px-5 ">
					<h2 class="">Contact</h2>
					<p class="pt-1 pb-4">For any questions about my book, interview requests, or to just say hello, use the form below.</p>
					
					<form name="contactForm">
						<div class="row" >
							<div class="col-lg-6 col-md-12 gx-2">
								<input type="text" class="flex-fill form-control me-2 mb-2" id="firstName" name="FNAME"
								 placeholder="First name" aria-label="First name">
							</div>
							<div class="col-lg-6 col-md-12 gx-2">
								<input type="text" class="flex-fill form-control me-2 mb-2" id="lastName" name="LNAME"
								 placeholder="Last name" aria-label="Last name">
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
								 placeholder="Subject" aria-label="Subject">
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
									<button aria-label="Submit" type="submit" class="flex-fill btn btn-primary me-1 mb-2">Submit</button>
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
