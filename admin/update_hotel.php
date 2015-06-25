<?php session_start();
require 'check_admin.php';
/*row id want to update it*/
if (!isset($_GET['id'])) {
	header("location: hotels.php");die();
}
$row_id = $_GET['id'];
/*data from html form*/
if (isset($_POST['submit'])) {
	$title            = htmlspecialchars_decode($_POST['title']);
	$content          = htmlspecialchars_decode($_POST['content']);
	$title_ar         = htmlspecialchars_decode($_POST['title_ar']);
	$content_ar       = htmlspecialchars_decode($_POST['content_ar']);
	$inputs           = array($title , $title_ar , $content , $content_ar);
	/*check empty data*/
	foreach ($inputs as $value) {
		if (empty($value)) {
			header("location: edit_hotel.php?msg=empty_data&id=$row_id");die();
		}
	}
	/*type of offer*/
	$hotel_or_offer   = $_POST['optionsRadios'];
	$new_checks = array();
	/*things exist in hotel*/
	$check_boxes      = array(
		'BED'         => FILTER_VALIDATE_INT,
		'POOL'        =>FILTER_VALIDATE_INT,
		'SAFE'        =>FILTER_VALIDATE_INT,
		'GAMES'       =>FILTER_VALIDATE_INT,
		'TRANSPORT'   =>FILTER_VALIDATE_INT,
		'CONDITION'   =>FILTER_VALIDATE_INT,
		'BATHTUB'     =>FILTER_VALIDATE_INT,
		'CHAMPAIGNE'  =>FILTER_VALIDATE_INT,
		'DINNER'      =>FILTER_VALIDATE_INT,
		'ROOM_SERVICE'=>FILTER_VALIDATE_INT,
		'PET_FRIENDLY'=>FILTER_VALIDATE_INT,);
	$check_box = filter_input_array(INPUT_POST,$check_boxes);
	foreach ($check_box as $key => $checks) {
		if (is_null($checks)) {
			$new_checks[$key] = 2;
		} else {
			$new_checks[$key] = 1;
		}
	}
	extract($new_checks);
}
/*insert data in db*/
require '../connection/connection.php';
$query = $conn->prepare("UPDATE hotels SET 
	title      =?,
	`desc`     =?,
	BED        =?,
	POOL       =?,
	SAFE       =?,
	GAMES      =?,
	TRANSPORT  =?,
	BATHTUB    =?,
	CHAMPAIGNE =?,
	DINNER     =?,
	ROOM_SERVICE=?,
	PET_FRIENDLY=?,
	title_ar    =?,
	desc_ar     =?,
	hotel_or_not=?,
	`CONDITION` =?
	WHERE id    =? ");
$query->bindValue(1,$title,PDO::PARAM_STR);
$query->bindValue(2,$content,PDO::PARAM_STR);
$query->bindValue(3,$BED,PDO::PARAM_INT);
$query->bindValue(4,$POOL,PDO::PARAM_INT);
$query->bindValue(5,$SAFE,PDO::PARAM_INT);
$query->bindValue(6,$GAMES,PDO::PARAM_INT);
$query->bindValue(7,$TRANSPORT,PDO::PARAM_INT);
$query->bindValue(8,$BATHTUB,PDO::PARAM_INT);
$query->bindValue(9,$CHAMPAIGNE,PDO::PARAM_INT);
$query->bindValue(10,$DINNER,PDO::PARAM_INT);
$query->bindValue(11,$ROOM_SERVICE,PDO::PARAM_INT);
$query->bindValue(12,$PET_FRIENDLY,PDO::PARAM_INT);
$query->bindValue(13,$title_ar,PDO::PARAM_STR);
$query->bindValue(14,$content_ar,PDO::PARAM_STR);
$query->bindValue(15,$hotel_or_offer,PDO::PARAM_STR);
$query->bindValue(16,$CONDITION,PDO::PARAM_INT);
$query->bindValue(17,$row_id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: hotels.php?msg=updated");die();
}


?>