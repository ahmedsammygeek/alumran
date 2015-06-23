<?php session_start();
require 'check_admin.php';
/*
get id of row want to update
*/
if (!isset($_GET['id'])) {
	header("location: website_index.php");die();
}
$id = htmlspecialchars_decode($_GET['id']);
$img = htmlspecialchars_decode($_GET['img']);
/*
variables from html form
*/
$args = array(
	'title'          => FILTER_SANITIZE_STRING,
	'descreption'    => FILTER_SANITIZE_STRING,
	'title_ar'       => FILTER_SANITIZE_STRING,
	'descreption_ar' => FILTER_SANITIZE_STRING);
/*
check empty data
*/
$inputs = filter_input_array(INPUT_POST,$args);
foreach ($inputs as $value) {
	if (empty($value)) {
		header("location: edit_website_home.php?id=$id&msg=empty_data&img=$img");die();
	}
}
extract($inputs);
/*image not changed*/
if (empty($_FILES['file']['name'])) {
	$image = $img;
}
/*update image*/
$image = $_FILES['file']['name'];
require '../helpers/filevalidate.php';
require '../helpers/filetype';
if (!validation($image,array('jpg','png','jpeg'))) {
	header("location: edit_website_home.php?id=$id&img=$img&msg=err_vali");die();
}
$type = get_type($image);

?>