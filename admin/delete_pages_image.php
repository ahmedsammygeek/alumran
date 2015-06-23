<?php session_start();
require 'check_admin.php';
/*row id want to delete*/
if (!isset($_GET['image_id']) || !isset($_GET['page_id'])) {
	header("location: website_pages.php");die();
}
$id = $_GET['page_id'];
require '../connection/connection.php';
/*image name */
$images = $conn->prepare("SELECT image FROM pages_images WHERE id=?");
$images->bindValue(1,$_GET['image_id'],PDO::PARAM_INT);
$images->execute();
$image = $images->fetch(PDO::FETCH_OBJ);
/*delete from db and pc*/
$query = $conn->prepare("DELETE FROM pages_images WHERE id=?");
$query->bindValue(1,$_GET['image_id'],PDO::PARAM_INT);
if ($query->execute()) {
	unlink("../uploaded/pages_images/$image->image");
	header("location: edit_pages.php?msg=deleted&id=$id");die();
}
header("location: edit_pages.php?msg=error&id=$id");die();



 ?>