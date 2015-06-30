<?php session_start();
require 'check_admin.php';

/*
get category id
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$menu_id= $_GET['menu_id'];
}
/*
delete thos category 
*/
require 'connection.php';
$query = $conn->prepare("DELETE FROM menu_menu WHERE id = ?");
$query->bindValue(1,$id,PDO::PARAM_INT);
/*
check query execute or not
*/
if ($query->execute()) {
	header("location: show_categories_menu.php?msg=deleted&id=$menu_id");die();
}
	header("location: show_categories_menu.php?id=$menu_id&msg=error_delete");die();


 ?>