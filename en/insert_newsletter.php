<?php 
/*
submited
*/
if (isset($_POST['submit'])) {
	$name = htmlspecialchars_decode($_POST['name']);
	$email = htmlspecialchars_decode($_POST['email']);
}
/*
check emtpy data 
*/
if (empty($name) || empty($email)) {
	header("location: footer.php?msg=empty_data");die();
}
/*filter email*/
if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
	header("location: footer.php?msg=err_email");die();
}
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
$count = $check->rowCount();
if ($count != 0) {
	header("location: footer.php?msg=exist");die();
}

$query = $conn->prepare("INSERT INTO newsletter VALUES('',?,?)");
$query->bindValue(1,$name,PDO::PARAM_STR);
$query->bindValue(2,$email,PDO::PARAM_STR);
if ($query->execute()) {
	header("location: index.php?msg=sent");die();
}
header("location: index.php?msg=err");die();





 ?>