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
echo "exist email";}

$query = $conn->prepare("INSERT INTO newsletter VALUES('',?,?)");
$query->bindValue(1,$name,PDO::PARAM_STR);
$query->bindValue(2,$email,PDO::PARAM_STR);
if ($query->execute()) {
echo "done";}
echo "contact with support";




 ?>