<?php session_start();
require 'check_admin.php';
if (!isset($_GET['id'])) {
	header("location: bookinglist.php");die();
}
$book_id = $_GET['id'];
require '../connection/connection.php';
$query = $conn->prepare("DELETE FROM bookind WHERE id=?");
$query->bindValue(1,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: bookinglist.php?msg=deleted");die();	
}

 ?>