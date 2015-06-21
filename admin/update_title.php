<?php session_start();
require 'check_admin.php';
/*
get id of row want to update
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
/*
check data not empty
*/
if (isset($_POST['submit'])) {
	$args = array('title' => FILTER_SANITIZE_STRING , 'title_ar' => FILTER_SANITIZE_STRING ,
		);
	$inputs = filter_input_array(INPUT_POST,$args);
	foreach ($inputs as $key => $value) {
		if (empty($value)) {
			header("location: edit_title.php?msg=empty_data&id=$id");die();
		}
	}
}

extract($inputs);
/*
coonection with db 
*/
require 'connection.php';
/*
update in database
*/
$query = $conn->prepare("UPDATE title SET title=?,title_ar=? WHERE id=?");
$query->bindValue(1,$title,PDO::PARAM_INT);
$query->bindValue(2,$title_ar,PDO::PARAM_STR);
$query->bindValue(3,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: title.php?msg=updated");die();
}
header("location: edit_title.php?msg=error_data&id=$id");die();
?>