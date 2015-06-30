<?php session_start();
require 'check_admin.php';

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
require 'connection.php';
$query = $conn->prepare("UPDATE orders SET status = 3 WHERE id=?");
$query->bindValue(1,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: orders.php?msg=updated");die();
}
header("location: orders.php?msg=error");die();

?>