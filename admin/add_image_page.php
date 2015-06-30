<?php session_start();
require 'check_admin.php';
if (!isset($_GET['id'])) {
	header("location: website_pages.php");die();
}
$page_id = $_GET['id'];
if (isset($_POST['submit'])) {
	$image = $_FILES['file']['name'];
}
if (empty($image)) {
	header("location: edit_pages.php?msg=empty_data&id=$page_id");die();
}
/*resize image*/
require '../helpers/filevalidate.php';
require '../classes/SimpleImage.php';
if (!validation($image,array('jpg','png','jpeg'))) {
	header("location: edit_pages.php?id=$page_id&msg=err_vali");die();
}
$up = move_uploaded_file($_FILES['file']['tmp_name'], '../uploaded/pages_images/'.$image.'');
$img = new SimpleImage();
$img->load('../uploaded/pages_images/'.$image.'')->resize(1170, 780)->save('../uploaded/pages_images/'.$image.'');
/*insert this image in this page in db*/
require '../connection/connection.php';
$query = $conn->prepare("INSERT INTO pages_images VALUES('',?,?)");
$query->bindValue(1,$image,PDO::PARAM_STR);
$query->bindValue(2,$page_id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: edit_pages.php?id=$page_id&msg=inserted");
}



 ?>