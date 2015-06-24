<?php session_start();
require 'check_admin.php';
$hotel_id = $_GET['hotel_id'];
/*id image want to delete*/
if (!isset($_GET['image_id']) || !isset($_GET['hotel_id'])) {
	header("location: edit_hotel.php?id=$hotel_id");die();
}
$image_id = $_GET['image_id'];
require '../connection/connection.php';
/*select this images*/
$images = $conn->prepare("SELECT * FROM hotel_images WHERE id=?");
$images->bindValue(1,$image_id,PDO::PARAM_INT);
$images->execute();
/*delete from db */
$query = $conn->prepare("DELETE FROM hotel_images WHERE id=?");
$query->bindValue(1,$image_id,PDO::PARAM_INT);
if ($query->execute()) {
	while ($image = $images->fetch(PDO::FETCH_OBJ)) {
		if (file_exists("../uploaded/hotels_images/$image->pic")) {
			unlink("../uploaded/hotels_images/$image->pic");
		}
	}
	header("location: edit_hotel.php?msg=delete_image&id=$hotel_id");die();
}



 ?>