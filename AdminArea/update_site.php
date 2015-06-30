<?php 
require 'check_user.php';


// var_dump($_POST); die();
if(isset($_POST['goo'])) {

	$args = array('email' =>FILTER_SANITIZE_STRING ,
		'address_ar'=>FILTER_SANITIZE_STRING,
		'address'=>FILTER_SANITIZE_STRING,
		'title'=>FILTER_SANITIZE_STRING,
		'title_ar'=>FILTER_SANITIZE_STRING,
		'facebook'=>FILTER_SANITIZE_STRING,
		'google'=>FILTER_SANITIZE_STRING,
		'twitter'=>FILTER_SANITIZE_STRING,
		'phone'=>FILTER_SANITIZE_STRING
		);
	//recived data
	$inputs=filter_input_array(INPUT_POST,$args);

	extract($inputs);
	$working_dates = htmlspecialchars($_POST['working_dates']);
	$working_dates_ar = htmlspecialchars($_POST['working_dates_ar']);
	$working_dates = trim($working_dates);
	$working_dates_ar = trim($working_dates_ar);
	// $working_dates  = nl2br($working_dates);
	// $working_dates_ar  = nl2br($working_dates_ar);
	require 'connection.php';
	$update = $conn->prepare("UPDATE site_data SET  phone = ? ,
		email = ?,
		address_ar = ? , 
		address = ? , 
		working_dates = ? ,
		working_dates_ar = ? ,
		title = ? , 
		title_ar = ? ,
		facebook = ? , 
		google = ? ,
		twitter = ?  WHERE id = 1 ");
	$update->bindValue(1 , $phone , PDO::PARAM_STR);
	$update->bindValue(2, $email , PDO::PARAM_STR);
	$update->bindValue(3 , $address_ar , PDO::PARAM_STR);
	$update->bindValue(4 , $address , PDO::PARAM_STR);
	$update->bindValue(5 , $working_dates , PDO::PARAM_STR);
	$update->bindValue(6 , $working_dates_ar , PDO::PARAM_STR);
	$update->bindValue(7 , $title , PDO::PARAM_STR);
	$update->bindValue(8 , $title_ar , PDO::PARAM_STR);
	$update->bindValue(9 , $facebook , PDO::PARAM_STR);
	$update->bindValue(10 , $google , PDO::PARAM_STR);
	$update->bindValue(11 , $twitter , PDO::PARAM_STR);

	if($update->execute()) {
		header("Location: edit_site_data.php?msg=done");
		die();
	}
	else {
		header("Location: edit_site_data.php?msg=again");
		die();
	}


}

else {
	header("Location: edit_site_data.php");
	die();
}


?>