<?php


$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

if (empty($_POST['input-name'])) {
	$errors['name'] = 'Name is required.';

} else {
	$name = filter_input(INPUT_POST, 'input-name' , FILTER_SANITIZE_STRING );
}



if (empty($_POST['input-email'])) {
	$errors['email'] = 'Email is required.';
} else {
	$email = filter_input(INPUT_POST, 'input-email' , FILTER_SANITIZE_STRING );
	
}



if (!filter_var($_POST['input-email'] , FILTER_VALIDATE_EMAIL))
	$errors['email'] = 'Email is not valid';

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
if (!empty($errors)) {

		// if there are items in our errors array, return those errors
	$data['success'] = false;
	$data['errors']  = $errors;
} else {

		// if there are no errors process our form, then return a message

    	//If there is no errors, send the email
	require '../connection/connection.php';
/*
check exist email
*/
$check = $conn->prepare("SELECT email FROM newsletter WHERE email=?");
$check->bindValue(1,$email,PDO::PARAM_STR);
$check->execute();
/*
count of results
*/

if ($check->rowCount() > 0 ) {
	$data['success'] = true;
	$data['message'] = 'exist email';
} else {
	$query = $conn->prepare("INSERT INTO newsletter VALUES('',?,?)");
	$query->bindValue(1,$name,PDO::PARAM_STR);
	$query->bindValue(2,$email,PDO::PARAM_STR);
	if ($query->execute()) {
		$data['success'] = true;
		$data['message'] = 'Thank you! , now you will recive all our offter';

	}
	else {
		$data['success'] = false;
		$data['message'] = 'error , contact with support';
	}
}


		// show a message of success and provide a true success variable

}

	// return all our data to an AJAX call
echo json_encode($data);