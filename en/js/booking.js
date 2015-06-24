$(function() {
	

	$('a[name=book_now_button]').on('click' ,  function(event) {
		hotel_id = $(this).data('hotel-id');
	});
	// reservation hotel form process
	$('button[name=book_this_hotel]').on( 'click' , function(event) {
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'name' 	        : $(document).find('input[name=username]').val(),
			'address' 	    : $('input[name=useraddress]').val(),
			'email' 	    : $('input[name=useremail]').val(),
			'phone' 	    : $('input[name=userphone]').val(),
			'msg' 	    	: $('textarea[name=usermsg]').val(),
			'hotel_id'      : hotel_id
		};

		

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'process-booking.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 

				// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors for name ---------------
					if (data.errors.name) {
						// alert("name");
						$('div#booking-name').addClass('has-error'); // add the error class to show red input
						$('div#booking-name').append('<span class="help-block">' + data.errors.name + '</span>'); // add the actual error message under our input
					}
					

					// handle errors for email ---------------
					if (data.errors.email) {
						// alert("email");

						$('div#booking-email').addClass('has-error'); // add the error class to show red input
						$('div#booking-email').append('<span class="help-block">' + data.errors.email + '</span>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					if (data.errors.phone) {
						

						$('div#booking-phone').addClass('has-error'); // add the error class to show red input
						$('div#booking-phone').append('<span class="help-block">' + data.errors.phone + '</span>'); // add the actual error message under our input
					}

					// handle errors for email ---------------
					
					if (data.errors.address) {
						

						$('div#booking-address').addClass('has-error'); // add the error class to show red input
						$('div#booking-address').append('<span class="help-block">' + data.errors.address + '</span>'); // add the actual error message under our input
					}

					if (data.errors.msg) {
						

						$('div#booking-msg').addClass('has-error'); // add the error class to show red input
						$('div#booking-msg').append('<span class="help-block">' + data.errors.msg + '</span>'); // add the actual error message under our input
					}
				} else {

					
					// ALL GOOD! just show the success message!
					$('#res_form').append('<div class="alert alert-success">' + data.message + '</div>');

					// usually after form submission, you'll want to redirect
					// window.location = '/thank-you'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		
	});
});