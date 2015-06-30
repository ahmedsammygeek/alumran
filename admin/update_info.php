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
	$args = array('phone' => FILTER_SANITIZE_STRING , 'facebook' => FILTER_SANITIZE_STRING ,
		'instgram' => FILTER_SANITIZE_STRING , 'email' => FILTER_SANITIZE_STRING , 'address_ar' => FILTER_SANITIZE_STRING
		, 'address_en' => FILTER_SANITIZE_STRING);
	$inputs = filter_input_array(INPUT_POST,$args);
	foreach ($inputs as $key => $value) {
		if (empty($value)) {
			header("location: edit_info.php?msg=empty_data&id=$id&$key");die();
		}
	}
}

extract($inputs);
/*
coonection with db 
*/
require '../connection/connection.php';
/*
update in database
*/
$query = $conn->prepare("UPDATE site_info SET phone=?,facebook=?,instgram=?,email=?,address_ar=?,
	address=? WHERE id=?");
$query->bindValue(1,$phone,PDO::PARAM_INT);
$query->bindValue(2,$facebook,PDO::PARAM_STR);
$query->bindValue(3,$instgram,PDO::PARAM_STR);
$query->bindValue(4,$email,PDO::PARAM_STR);
$query->bindValue(5,$address_ar,PDO::PARAM_STR);
$query->bindValue(6,$address_en,PDO::PARAM_STR);
$query->bindValue(7,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: show_info.php?msg=updated");die();
}
header("location: edit_info.php?msg=error_data&id=$id");die();
?>