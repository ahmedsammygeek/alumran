<?php session_start();

/*
get id admin want to delete
*/
if (!isset($_GET['id']) || empty($_GET['id'])) {
	header("location: products.php?msg=id");
	die;
} 


$id = filter_input(INPUT_GET , 'id' , FILTER_SANITIZE_NUMBER_INT);

require '../connection/DB.php';

/*
detele the row have this id 
*/



$item_pics = $conn->prepare("SELECT * FROM products WHERE id = ?");
$item_pics->bindValue(1,$id ,PDO::PARAM_INT);
$item_pics->execute();

$pic = $item_pics->fetch(PDO::FETCH_OBJ);


	if(file_exists("../uploaded/products/".$pic->image1."")) {
		unlink("../uploaded/products/".$pic->image1."");
	}

	if(file_exists("../uploaded/products/".$pic->image2."")) {
		unlink("../uploaded/products/".$pic->image2."");
	}

	if(file_exists("../uploaded/products/".$pic->image2."")) {
		unlink("../uploaded/products/".$pic->image2."");
	}

	if(file_exists("../uploaded/products/".$pic->image2."")) {
		unlink("../uploaded/products/".$pic->image2."");
	}


$delete = $conn->prepare("DELETE  FROM products WHERE id = ?");
	$delete->bindValue(1,$id,PDO::PARAM_INT);
	if ($delete->execute()) {
		header("location: products.php?msg=deleted");die();
	}
	header("location: products.php?msg=error_delete");die();



?>