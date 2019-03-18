$(document).ready(function () {
	$('.owl-carousel').owlCarousel({
		items: 2,
		nav: false,
		loop: false,
		margin: 10,
		nav: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	})
});