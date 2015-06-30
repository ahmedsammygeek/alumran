<?php 
require 'check_user.php';


// var_dump($_POST); die();
if(isset($_POST['goo'])) {

	$about = htmlspecialchars($_POST['about']);
	$about_ar = htmlspecialchars($_POST['about_ar']);
	// $about  = nl2br($about);
	// $about_ar  = nl2br($about_ar);
	require 'connection.php';
	$update = $conn->prepare("UPDATE site_data SET  about = ? ,
		about_ar = ?
		 WHERE id = 1");
	$update->bindValue(1 , $about , PDO::PARAM_STR);
	$update->bindValue(2, $about_ar , PDO::PARAM_STR);
	

	if($update->execute()) {
		header("Location: edit_about.php?msg=done");
		die();
	}
	else {
		header("Location: edit_about.php?msg=again");
		die();
	}


}

else {
	header("Location: edit_about.php");
	die();
}


?>