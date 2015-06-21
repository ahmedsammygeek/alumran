<?php 
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
require 'connection.php';
$sql="DELETE FROM messages WHERE id=$id ";
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: message.php?msg=data_deleted");die();
}
header("location: message.php?msg=error_delete"); die();

 ?>