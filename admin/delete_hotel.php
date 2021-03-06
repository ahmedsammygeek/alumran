<?php session_start();
require 'check_admin.php';
/*get id want to delete data*/
if (!isset($_GET['id'])) {
	header("location: hotels.php");die();
}
$hotel_id = $_GET['id'];
require '../connection/connection.php';
/*delete from pc*/
	$images = $conn->prepare("SELECT * FROM hotel_images WHERE hotel_id=?");
	$images->bindValue(1,$hotel_id,PDO::PARAM_INT);
	$images->execute();
/*delete from db*/
try {
	$conn->beginTransaction();
	$query = $conn->prepare("DELETE FROM hotels WHERE id=?");
	$query->bindValue(1,$hotel_id,PDO::PARAM_INT);
	$query->execute();
	/*delete */
	while ($image = $images->fetch(PDO::FETCH_OBJ)) {
		if (file_exists("../uploaded/hotel_images/$image->pic")) {
			unlink("../uploaded/hotel_images/$image->pic");
		}
	}
	$pics = $conn->prepare("SELECT pic FROM hotel_images WHERE hotel_id=?");
	$pics->bindValue(1,$hotel_id,PDO::PARAM_INT);
	$pics->execute();

	while ($pic = $pics->fetch(PDO::FETCH_OBJ)) {
		if(file_exists('../uploaded/hotels_images/'.$pic->pic)) {
			unlink('../uploaded/hotels_images/'.$pic->pic);
		}
	}
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