$('.delete-btn').click(function(e) {

	var confirmation_message = "Do you really want to delete this item?";
	var input_control_confirmation_msg = $(this).data('msg');


	if( input_control_confirmation_msg != undefined && input_control_confirmation_msg.length > 1 )
		confirmation_message = input_control_confirmation_msg;

	var user_response = confirm(confirmation_message);

	if( user_response ) {
		// let him do what he wants to
	} else {
		e.preventDefault(); // prevent anchor click trigger
	}

});


// prevent empty forms submissions

$('.new-post-form form').submit(function(e) {

	var error_flag = false;

	$(this).find('input[type=text],input[type=password],textarea').each(function() {
		
		if( $(this).val().length <= 2 ) {
			// flag an error
			$(this).addClass('red-borders');

			if( !error_flag )
				$(this).focus();
			
			error_flag = true;
		} else {
			// de-flag the error if already set
			$(this).removeClass('red-borders');
		}
	});

	if( error_flag == true )
		e.preventDefault(); // stop submission of form
	else
		return true;
});