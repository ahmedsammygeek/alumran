// magic.js
$(document).ready(function() {

	// Newsletter form process
	$('#newsletter-form').submit(function(event) {

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'input-name' 	        : $('input#newsletter-name').val(),
			'input-email' 	    	: $('input#newsletter-email').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'process-newsletter.php', // the url where we want to POST
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
						$('#newsletter-name-group').addClass('has-error'); // add the error class to show red input
						$('#newsletter-name-group').append('<span class="help-block">' + data.errors.name + '</span>'); // add the actual error message under our input
					}
					

					// handle errors for email ---------------
					if (data.errors.email) {
						$('#newsletter-email-group').addClass('has-error'); // add the error class to show red input
						$('#newsletter-email-group').append('<span class="help-block">' + data.errors.email + '</span>'); // add the actual error message under our input
					}

				} else {

					// ALL GOOD! just show the success message!
					$('#newsletter-form').append('<div class="alert alert-success">' + data.message + '</div>');

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

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

// reservation hotel form process
$('#res_form').submit(function(event) {

		$('.form-group').removeClass('has-error'); // remove the error class
		$('.help-block').remove(); // remove the error text

		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'name' 	        : $('input[name=name]').val(),
			'address' 	    	: $('input[name=address]').val(),
			'email' 	    	: $('input[name=email]').val(),
			'phone' 	    	: $('input[name=phone]').val(),
			'msg' 	    	: $('input[name=msg]').val()
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'process-res.php', // the url where we want to POST
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

					alert(data.message);
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

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});



});
