<?php session_start();
require 'check_admin.php';

/*
get id admin want to delete
*/
if (isset($_GET['img'])) {
	$id = $_GET['id'];
	$img = $_GET['img'];
}

 if (file_exists("image/$img")) {
	unlink("image/$img");
}


require 'connection.php';

/*
detele the row have this id 
*/
try {
	$conn->begintransaction();
	$query = $conn->prepare("DELETE  FROM menu WHERE id = ?");
	$query->bindValue(1,$id,PDO::PARAM_INT);
	$query->execute(); 
	$query2 = $conn->prepare("DELETE FROM menu_menu WHERE menu_id = ?");
	$query2->bindValue(1,$id,PDO::PARAM_INT);
	if ($query2->execute()) {
		$conn->commit();
		header("location: show_menu.php?msg=deleted");die();
	}
	header("location: show_menu.php?msg=error_delete");die();
	
} catch (Exception $e) {
	$e->getMessage() . "</br>"; 

}





?>