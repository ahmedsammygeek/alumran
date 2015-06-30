<?php session_start();


require 'check_admin.php';
/*page id want to update it*/
if (!isset($_GET['id'])) {
	header("location: website_pages.php");die();
}
$page_id = $_GET['id'];
/*vars from html*/
$title      = htmlspecialchars($_POST['title']);
$content    = htmlspecialchars($_POST['content']);
$title_ar   = htmlspecialchars($_POST['title_ar']);
$content_ar = htmlspecialchars($_POST['content_ar']);
$page_name  = htmlspecialchars($_POST['page_name']);
$page_name_ar= htmlspecialchars($_POST['page_name_ar']);
$inputs = array($title , $content , $title_ar , $content_ar );
/*check empty*/
foreach ($inputs as $value) {
	if (empty($value)) {
		header("location: edit_pages.php?id=$page_id&msg=empty_data");
	}
}
require '../connection/connection.php';


if($page_id == 4) {

	// echo "ds"; die;

	$v1 = $_POST['v1'];
	$v1 = explode('watch?v=', $v1)[1];

	$v2 = $_POST['v2'];
	$v2 = explode('watch?v=', $v2)[1];


	$v3 = $_POST['v3'];
	$v3 = explode('watch?v=', $v3)[1];


	$v4 = $_POST['v4'];
	$v4 = explode('watch?v=', $v4)[1];

	$query = $conn->prepare("UPDATE pages SET title=? , descreption=? , title_ar=? , descreption_ar=? , 
		page_name=? , page_name_ar=?  , video1 = ? , video2 = ? ,  video3 = ? , video4 = ?  
		WHERE id=$page_id");
	$query->bindValue(1,$title,PDO::PARAM_STR);
	$query->bindValue(2,$content,PDO::PARAM_STR);
	$query->bindValue(3,$title_ar,PDO::PARAM_STR);
	$query->bindValue(4,$content_ar,PDO::PARAM_STR);
	$query->bindValue(5,$page_name,PDO::PARAM_STR);
	$query->bindValue(6,$page_name_ar,PDO::PARAM_STR);
	$query->bindValue(7,$v1,PDO::PARAM_STR);
	$query->bindValue(8,$v2,PDO::PARAM_STR);
	$query->bindValue(9,$v3,PDO::PARAM_STR);
	$query->bindValue(10,$v4,PDO::PARAM_STR);
	
	if($query->execute()) {
		header("location: website_pages.php?msg=updated");die();
	}
	header("location: edit_pages.php?msg=error");die();
}
else {
	$query = $conn->prepare("UPDATE pages SET title=? , descreption=? , title_ar=? , descreption_ar=? , 
		page_name=? , page_name_ar=? 
		WHERE id=$page_id");
	$query->bindValue(1,$title,PDO::PARAM_STR);
	$query->bindValue(2,$content,PDO::PARAM_STR);
	$query->bindValue(3,$title_ar,PDO::PARAM_STR);
	$query->bindValue(4,$content_ar,PDO::PARAM_STR);
	$query->bindValue(5,$page_name,PDO::PARAM_STR);
	$query->bindValue(6,$page_name_ar,PDO::PARAM_STR);
	if($query->execute()) {
		header("location: website_pages.php?msg=updated");die();
	}
	header("location: edit_pages.php?msg=error");die();
}







?>