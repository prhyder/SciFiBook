const reviewsCarouselElement = document.querySelector('#reviewsCarousel');

// Autoplay
const carousel = new bootstrap.Carousel(reviewsCarouselElement, {
  interval: 2000,
  touch: false
});