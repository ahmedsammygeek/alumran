<?php session_start();
require 'check_admin.php';
/*get id want to delete data*/
if (!isset($_GET['id'])) {
	header("location: hotels.php");die();
}
$hotel_id = $_GET['id'];
/*delete from db*/
require '../connection/connection.php';
try {
	$conn->beginTransaction();
	$query = $conn->prepare("DELETE FROM hotels WHERE id=?");
	$query->bindValue(1,$hotel_id,PDO::PARAM_INT);
	$query->execute();
	/*delete this hotel images*/
	$query2 = $conn->prepare("DELETE FROM hotel_images WHERE hotel_id=?");
	$query2->bindValue(1,$hotel_id,PDO::PARAM_INT);
	$query2->execute();
	$conn->commit();
	header("location: hotels.php?msg=deleted");die();
} catch (Exception $e) {
	echo $e->getMessage ;
}




 ?>