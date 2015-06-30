<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	}
	//recieved data admin add it in form 
	$content=htmlspecialchars_decode($_POST['content']);
	$content_ar=htmlspecialchars_decode($_POST['content_ar']);
	
}

require '../connection/connection.php';
$sql="UPDATE aboutus SET content='$content',content_ar='$content_ar' WHERE id=$id "; 
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: showabout.php?msg=updated");die();
}
else
{
	header("location: editabout.php?msg=error&id=$id");die();
}

?>