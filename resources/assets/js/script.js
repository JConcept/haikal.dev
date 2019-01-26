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

// Page vidéos
	// Loop selectors
	var videos = document.querySelectorAll(".youtube");
	for (var i = 0; i < videos.length; i++) {
		var youtube = videos[i];
		// Get function
		getVideos(youtube);
	}
	// Get videos function
	function getVideos(el) {
		var img = document.createElement("img");
		// Get minified images
		img.setAttribute('src', 'http://i.ytimg.com/vi/' + el.id + '/mqdefault.jpg'); // other types : https://www.thewebtaylor.com/articles/how-to-get-a-youtube-videos-thumbnail-image-in-high-quality
		// Insert tag
		el.appendChild(img);
		// On click get video
		el.addEventListener('click', function () {
			var iframe = document.createElement("iframe");
			iframe.setAttribute('class', 'youtube_video');
			iframe.setAttribute('src', 'https://www.youtube.com/embed/' +
				this.id + '?autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1');
			// Replace img for video
			this.parentNode.replaceChild(iframe, this);
		}, false);
	}