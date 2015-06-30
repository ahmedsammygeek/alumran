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
	echo "empty data";
}
/*filter email*/
if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
	echo "error email";}
	




		?>