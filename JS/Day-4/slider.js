var cr_slide = 1;
var total_slides = $('.slide').length;

$('.next-slide').click(function(e) {
	e.preventDefault();

	// $('.slider-inner-wrapper').css('left', '-' + ( cr_slide*900 ) + 'px');
	$('.slider-inner-wrapper').animate({left: '-' + ( cr_slide*900 ) + 'px'});

	cr_slide++;

	if( cr_slide > 1 ) {
		$('.prev-slide').show();
	}

	if( cr_slide >= total_slides ) {
		$('.next-slide').hide();
	}

});

$('.prev-slide').click(function (e) {
	e.preventDefault();

	$('.slider-inner-wrapper').animate({left: '-' + ( (cr_slide - 2)*900 ) + 'px'});

	cr_slide--;

	if( cr_slide < total_slides ) {
		$('.next-slide').show();
	}

	if( cr_slide == 1 ) {
		$('.prev-slide').hide();
	}
});