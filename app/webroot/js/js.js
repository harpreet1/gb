$(document).ready(function(){

	$(function() {
		$.vegas('slideshow', {
			delay: 8000,
			backgrounds: [
				{ src: '/img/1.jpg', fade: 4000 },
				{ src: '/img/2.jpg', fade: 4000 },
				{ src: '/img/3.jpg', fade: 4000 }
			]
		});
		$.vegas('overlay', {
			src: '/img/overlays/02.png'
		});
	});

	$('.portfolio a').each(function(){
		$(this).click(function(event){
			event.preventDefault();
			event.stopPropagation();
			window.open(this.href, '_blank');
		});

		$("img").addClass("img-polaroid");

		$('img').width('150px');
	});

});
