<?php



// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array


if (empty($_GET['id'])) {
	header('location: hotels.php');
	die;
}
 else {
	$page_id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
}


if (empty($_POST['name'])) {
	header('location: page.php?msg=name&page_id='.$page_id);
	die;

} else {
	$name = filter_input(INPUT_POST, 'name' , FILTER_SANITIZE_STRING );
}


if (empty($_POST['email'])) {
	header('location: page.php?msg=email&page_id='.$page_id);
	die;
	

} else {
	$email = filter_input(INPUT_POST, 'email' , FILTER_VALIDATE_EMAIL );
	if (!filter_var($email, FILTER_VALIDATE_EMAIL )) {
		header('location: page.php?msg=emailIN&page_id='.$page_id);
		die;
	} 
}

if (empty($_POST['address'])) {
	header('location: page.php?msg=address&page_id='.$page_id);
	die;
	

} else {
	$address = filter_input(INPUT_POST, 'address' , FILTER_SANITIZE_STRING );
}



if (empty($_POST['phone'])) {
	header('location: page.php?msg=phone&page_id='.$page_id);
	die;
} else {
	$phone = filter_input(INPUT_POST, 'phone' , FILTER_SANITIZE_NUMBER_INT );
}

if (empty($_POST['msg'])) {
	header('location: page.php?msg=msg&page_id='.$page_id);
	die;
	
} else {
	$msg = filter_input(INPUT_POST, 'msg' , FILTER_SANITIZE_STRING );
	
}

require '../connection/connection.php';
$insert = $conn->prepare("INSERT INTO booking VALUES('' , ? , ? , ? , ? , ? , ? , ? , NOW() , 0)");
$insert->bindValue(1,$name , PDO::PARAM_STR);
$insert->bindValue(2,$email , PDO::PARAM_STR);
$insert->bindValue(3,$phone , PDO::PARAM_STR);
$insert->bindValue(4,3 , PDO::PARAM_STR);
$insert->bindValue(5,$page_id , PDO::PARAM_INT);
$insert->bindValue(6,$msg , PDO::PARAM_STR);
$insert->bindValue(7,$address , PDO::PARAM_STR);

if($insert->execute()) {
	header('location: page.php?msg=done&page_id='.$page_id);
	die;
}
else {
	header('location: page.php?msg=error&page_id='.$page_id);
	die;
}



