<?php session_start();
require 'check_admin.php';
/*page id want to update it*/
if (!isset($_GET['id'])) {
	header("location: website_pages.php");die();
}
$page_id = $_GET['id'];
/*vars from html*/
$title      = htmlspecialchars_decode($_POST['title']);
$content    = htmlspecialchars_decode($_POST['content']);
$title_ar   = htmlspecialchars_decode($_POST['title_ar']);
$content_ar = htmlspecialchars_decode($_POST['content_ar']);
$inputs = array($title , $content , $title_ar , $content_ar );
/*check empty*/
foreach ($inputs as $value) {
	if (empty($value)) {
		header("location: edit_pages.php?id=$page_id&msg=empty_data");
	}
}
require '../connection/connection.php';
/*update in db*/
$query = $conn->prepare("UPDATE pages SET title=? , descreption=? , title_ar=? , descreption_ar=? 
	WHERE id=$page_id");
$query->bindValue(1,$title,PDO::PARAM_STR);
$query->bindValue(2,$content,PDO::PARAM_STR);
$query->bindValue(3,$title_ar,PDO::PARAM_STR);
$query->bindValue(4,$content_ar,PDO::PARAM_STR);
if ($query->execute()) {
	header("location: website_pages.php?msg=updated");die();
}
	header("location: edit_pages.php?msg=error");die();





 ?>