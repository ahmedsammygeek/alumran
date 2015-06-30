<?php session_start();
require 'check_admin.php';

/*
get id want to delete 
*/ 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
/*
delete from data base
*/
require 'connection.php';
$query = $conn->prepare("DELETE FROM members WHERE id = ? ");
$query->bindValue(1,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: show_members.php?msg=deleted");die();
}
header("location: show_members.php?msg=error");die();





 ?>