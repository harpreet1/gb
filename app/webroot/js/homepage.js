$(document).ready(function(){

	$(function() {
		$.vegas('slideshow', {
			delay: 10000,
			backgrounds: [
				{ src: '/img/homepage/backgrounds/0.jpg', fade: 4000 },
				{ src: '/img/homepage/backgrounds/1.jpg', fade: 4000 },
				{ src: '/img/homepage/backgrounds/2.jpg', fade: 4000 },
				{ src: '/img/homepage/backgrounds/3.jpg', fade: 4000 },
			]
		});
//		$.vegas('overlay', {
//			src: '/img/overlays/02.png'
//		});
	});
	
	
	// Carousel Bootstrap	
	$('.carousel').carousel({
  		interval: 6000,
		pause:'hover'
	})

});
