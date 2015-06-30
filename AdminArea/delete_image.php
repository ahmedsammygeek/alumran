<?php 
// check if he have right to go here or not 
require 'check_user.php';
//check if the id send in get request
	if(!isset($_GET['image_id']) || empty($_GET['image_id'])) {

		header("Location: pages.php");
		die();
	}
	$img = filter_input(INPUT_GET, 'img' ,FILTER_SANITIZE_STRING );
	$image_id =  filter_input(INPUT_GET, 'image_id' ,FILTER_SANITIZE_NUMBER_INT );
	$page_id =  filter_input(INPUT_GET, 'page_id' ,FILTER_SANITIZE_NUMBER_INT );

	require 'connection.php';

	$delete = $conn->prepare("DELETE  FROM page_images WHERE id= ?");
	$delete->bindValue(1,$image_id , PDO::PARAM_INT);
	$delete->execute();
	if($delete->rowCount()>0) {
		if(file_exists('../uploaded/pages/'.$img)) {
		unlink('../uploaded/pages/'.$img);
		}
		header("Location: edit_page.php?msg=de_done&id=".$page_id);
		die();
	}
	else {
		header("Location: edit_page.php?msg=again&id=".$page_id);
		die();
	}

 ?>