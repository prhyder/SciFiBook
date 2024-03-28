//import bootstrap from "./css/bootstrap/dist/js/bootstrap.bundle.js";





window.onload = function() {
	const navLinks = document.querySelectorAll('.nav-item');
	const menuToggle = document.getElementById('navbarResponsive');
	const bsCollapse = window.bootstrap.Collapse.getOrCreateInstance(menuToggle, {toggle: false});
	navLinks.forEach((l) => {
		l.addEventListener('click', () => { bsCollapse.toggle() });
	});

	const reviewsCarouselElement = document.getElementById('reviewsCarousel');

	// Autoplay carousel
	// const carousel = new bootstrap.Carousel(reviewsCarouselElement, {
	// 	interval: 2000,
	// 	touch: false
	// });
}