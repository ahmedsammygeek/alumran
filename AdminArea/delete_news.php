<?php 
// check if he have right to go here or not 
require 'check_user.php';
//check if the id send in get request
	if(!isset($_GET['id']) || empty($_GET['id'])) {

		header("Location: news.php");
		die();
	}
	$img = filter_input(INPUT_GET, 'img' ,FILTER_SANITIZE_STRING );
	$id =  filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT );

	require 'connection.php';

	$delete = $conn->prepare("DELETE  FROM news WHERE id= ?");
	$delete->bindValue(1,$id , PDO::PARAM_INT);
	$delete->execute();
	if($delete->rowCount()>0) {
		if(file_exists('../uploaded/news/'.$img)) {
		unlink('../uploaded/news/'.$img);
		}
		header("Location: news.php?msg=de_done");
		die();
	}
	else {
		header("Location: news.php?msg=again");
		die();
	}

 ?>