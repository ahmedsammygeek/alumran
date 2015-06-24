<?php session_start();
require 'check_admin.php';
/*hotel id*/
$hotel_id = $_GET['id'];
if (!isset($_GET['id'])) {
	header("location: edit_hotel.php?id=$hotel_id");die();
}
/*validate and resise images classes*/
require '../helpers/filevalidate.php';
require '../helpers/filetype.php';
require '../classes/SimpleImage.php';
if (empty($_FILES['file']['name'])) {
	header("location: edit_hotel.php?id=$hotel_id&msg=empty_data");die();
}
$img_name = $_FILES['file']['name'];
/*validate and resize image*/
if (!validation($img_name,array('jpg','png','jpeg'))) {
	header("location: edit_hotel.php?msg=empty_data&id=$hotel_id");die();
}
$type     =get_type($img_name); 
$img_name = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz123456789"), 0 , 12);
$img_name = $img_name.".".$type; 
$up       = move_uploaded_file($_FILES['file']['tmp_name'], '../uploaded/hotels_images/'.$img_name.'');
$img      = new SimpleImage();
$img->load('../uploaded/hotels_images/'.$img_name.'')->resize(900, 600)->save('../uploaded/hotels_images/'.$img_name.'');
/*insert images for this hotel id*/
require '../connection/connection.php';
$insert_image = $conn->prepare("INSERT INTO hotel_images VALUES('',?,?)");
$insert_image->bindValue(1,$hotel_id,PDO::PARAM_INT);
$insert_image->bindValue(2,$img_name,PDO::PARAM_STR);
if ($insert_image->execute()) {
	header("location: edit_hotel.php?id=$hotel_id");die();
}




?>