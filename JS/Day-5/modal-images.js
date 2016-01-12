/*JS Code Here*/

$('.img-item').click(function() {
	var large_image = $(this).attr('data-large');
	// $('.modal-wrapper').html( '<img src="' + large_image + '" />' );
	$('.modal-wrapper img').attr( 'src', large_image );

	$('.overlay').fadeIn(400, function() {
		$('.modal-wrapper').fadeIn();			
	});
});

// bind click event for closing the modal
$('.overlay,.close-icon').click(function(e) {
	e.preventDefault();

	$('.modal-wrapper').fadeOut(function() {
		$('.overlay').fadeOut();
	});
});