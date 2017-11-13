// NAV MENU
$(document).ready(function () {
	$('.button-left').click(function () {
		$('aside').toggleClass('menu-close');
		$('.main').toggleClass('menu-close');
		$('#navMenu li a').addClass('collapsed');
		$('#navMenu li a').setAttribute('aria-expanded', 'false');
		// $('#navMenu li a').each(function () {
		//     $(this).attr('aria-expanded', 'false')
		// });
	});

});
function checkPosition() {
	if (window.matchMedia("(max-width: 1330px)").matches) {
		$('aside').addClass('menu-close');
		$('.main').addClass('menu-close');
	} else {
		$('aside').removeClass('menu-close');
		$('.main').removeClass('menu-close');
	}
}
window.addEventListener('resize', checkPosition, false);
window.addEventListener('load', checkPosition, false);
// END nav menu

// SLIDER
	$('.carousel-sync').on('slide.bs.carousel', function(ev) {
		var dir = ev.direction == 'right' ? 'prev' : 'next';
		$('.carousel-sync').not('.sliding').addClass('sliding').carousel(dir);
	});
	$('.carousel-sync').on('slid.bs.carousel', function(ev) {
		$('.carousel-sync').removeClass('sliding');
	});
	/* personnalisation */
	$(function(){
		$("#carouselIndex").carousel();
	});
	$(function(){
		$("#carousel1").carousel();
	});
	$(function(){
		$("#carousel2").carousel();
	});
	$(function(){
		$("#carousel3").carousel();
	});
	$(function(){
		$("#carousel4").carousel();
	});
	$(function(){
		$("#carousel5").carousel();
	});
	$(function(){
		$("#carousel6").carousel();
	});
	$(function(){
		$("#carousel7").carousel();
	});
	$(function(){
		$("#carousel8").carousel();
	});
// END slider

/*$(document).ready(function() {
	$('#demo').pinterest_grid({
		no_columns: 4,
		padding_x: 10,
		padding_y: 10,
		margin_bottom: 50,
		single_column_breakpoint: 700
	});
});*/
