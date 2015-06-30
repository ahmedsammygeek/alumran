<?php  session_start();

		$_SESSION['logged']='true';
		header("location: index.php");
 ?>