<?php session_start() ;
/*
data from login page
*/
if (isset($_POST['submit'])) {
	$args = array('userid' =>FILTER_SANITIZE_STRING ,'password' =>FILTER_SANITIZE_STRING);
	$inputs=filter_input_array(INPUT_POST,$args);
	foreach ($inputs as $key_input => $value_input) {
		if (empty($value_input)) {
			header('location: login.php?msg=data_empty'); die();
		}
	}
	extract($inputs);
	/*
	hash password
	*/
	// $password=hash('ripemd160', "$password");
	/*
	chech admin info in database
	*/
	include 'connection.php';
	$sql="SELECT * FROM admin WHERE user_name = '$userid' && password= '$password' " ;
	$query=$conn->query($sql);
	while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
		extract($result);
	}
	$query->execute();
	$num=$query->rowCount();
	if ($num == 1) {
		$_SESSION['logged']='true';
		header('location: index.php');
		die();
	}
	else
	{
		header('location: login.php?msg=data_error'); die();
	}
}
?>