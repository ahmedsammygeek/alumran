<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	}
	//recieved data admin add it in form 
	$content=htmlspecialchars($_POST['content']);
	$content_ar=htmlspecialchars($_POST['content_ar']);
	
}

require 'connection.php';
$sql="UPDATE terms SET content='$content',content_ar='$content_ar' WHERE id=$id "; 
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: show_terms.php?msg=updated");die();
}
else
{
	header("location: edit_terms.php?msg=error_update&id=$id");die();
}

?>