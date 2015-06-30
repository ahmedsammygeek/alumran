<?php 
// check if he have right to go here or not 
require 'check_user.php';
//check if the id send in get request
if(!isset($_GET['id']) || empty($_GET['id'])) {

	header("Location: pages.php");
	die();
}
$img = filter_input(INPUT_GET, 'img' ,FILTER_SANITIZE_STRING );
$id =  filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT );

require 'connection.php';

$delete = $conn->prepare("DELETE  FROM sub_pages WHERE id= ?");
$delete->bindValue(1,$id , PDO::PARAM_INT);
$delete->execute();
if($delete->rowCount()>0) {
	$del_pics = $conn->prepare("SELECT * FROM page_images WHERE page_id = ? ");
	$del_pics->bindValue(1,$id , PDO::PARAM_INT);
	$del_pics->execute();
	while ($pic = $del_pics->fetch(PDO::FETCH_OBJ)) {
		if(file_exists('../uploaded/pages/'.$pic->image)) {
			unlink('../uploaded/pages/'.$pic->image);
		}
	}

	$del_pics = $conn->prepare("DELETE  FROM page_images WHERE page_id = ? ");
	$del_pics->bindValue(1,$id , PDO::PARAM_INT);
	$del_pics->execute();	

	header("Location: pages.php?msg=de_done");
	die();
}
else {
	header("Location: services.php?msg=again");
	die();
}

?>