<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$img=$_GET['img'];
}
$place = $_POST['place'];

if (empty($_FILES['file']['name'])) {
	$img_name=$img;	
}
else{
	if (file_exists('image/'.$img)) {
		unlink('image/'.$img);
	}
	$img_name=$_FILES['file']['name'];
	//function used to be sure this is image
	require '../helpers/filevalidate.php';
	if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: editslider.php?id=$id&msg=error_data");die();
	}
	//function used to know file type
	require '../helpers/filetype.php';
	$type=get_type($img_name);
	//to make random name
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$img_name=$randomstring.".$type" ;
	$up = move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$img_name);
	if (!$up) {
		header("location: slider.php?msg=nup");die();
	}
}

extract($inputs);
require 'connection.php';
$sql="UPDATE slider SET image='$img_name',place='$place' WHERE id=$id ";
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: showslider.php?id=$id&msg=data_updated"); die();
}
else
{
	header("location: editslider.php?id=$id&msg=error_update"); die();
}

?>
