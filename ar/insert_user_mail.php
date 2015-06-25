<?php 
date_default_timezone_set('UTC');
/*data from html*/
if (isset($_POST['submit'])) {
	$name    = htmlspecialchars_decode($_POST['name']);
	$phone   = htmlspecialchars_decode($_POST['phone']);
	$email   = htmlspecialchars_decode($_POST['email']);
	$content = htmlspecialchars_decode($_POST['msg']);    
}
/*check empty data*/
$inputs = array($name , $phone , $email , $content);
foreach ($inputs as $value) {
	if (empty($value)) {
		header("location: contact.php?msg=empty_data");die();
	}
}
extract($inputs);
$time_send = date("Y-m-d H:i:s");
require '../connection/connection.php';
$query = $conn->prepare("INSERT INTO messages VALUES('',?,?,?,?,?,?)");
$query->bindValue(1,$name,PDO::PARAM_STR);
$query->bindValue(2,$email,PDO::PARAM_STR);
$query->bindValue(3,$content,PDO::PARAM_STR);
$query->bindValue(4,$phone,PDO::PARAM_STR);
$query->bindValue(5,0,PDO::PARAM_INT);
$query->bindValue(6,$time_send,PDO::PARAM_STR);
if ($query->execute()) {
		header("location: contact.php?msg=sent");die();
}







?>