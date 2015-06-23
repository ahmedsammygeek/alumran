<?php


$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['name'])) {
	$errors['name'] = 'Name is required.';

} else {
	$name = filter_input(INPUT_POST, 'name' , FILTER_SANITIZE_STRING );
}


if (empty($_POST['email'])) {
	$errors['email'] = 'email is required.';

} else {
	$email = filter_input(INPUT_POST, 'email' , FILTER_VALIDATE_EMAIL );
	if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
		$errors['email'] = 'email is not valid.';
	} 
}

if (empty($_POST['address'])) {
	$errors['address'] = 'address is required.';

} else {
	$address = filter_input(INPUT_POST, 'address' , FILTER_SANITIZE_STRING );
}



if (empty($_POST['phone'])) {
	$errors['phone'] = 'phone is required.';

} else {
	$phone = filter_input(INPUT_POST, 'phone' , FILTER_SANITIZE_NUMBER_INT );
}

if (empty($_POST['msg'])) {
	$errors['msg'] = 'msg is required.';
} else {
	$msg = filter_input(INPUT_POST, 'msg' , FILTER_SANITIZE_STRING );
	
}

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
if (!empty($errors)) {

		// if there are items in our errors array, return those errors
	$data['success'] = false;
	$data['errors']  = $errors;
} else {


	$data['success'] = true;
	$data['message'] = 'Thank you! , now you will recive all our offter';
 // show a message of success and provide a true success variable

}

	// return all our data to an AJAX call
echo json_encode($data);