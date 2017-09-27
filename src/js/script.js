// DÉBUT Navbar
    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});

    /* set active class */
    // $('a[href="' + this.location.pathname + '"]').parents('li,ul').addClass('active');

// FIN Navbar

// DÉBUT Slider
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
// FIN Slider

/*$(document).ready(function() {
    $('#demo').pinterest_grid({
        no_columns: 4,
        padding_x: 10,
        padding_y: 10,
        margin_bottom: 50,
        single_column_breakpoint: 700
    });
});*/