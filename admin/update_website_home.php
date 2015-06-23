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
if (isset($_POST['submit'])) {
/*
variables from html form
*/
$args = array(
	'title'      => FILTER_SANITIZE_STRING,
	'content'    => FILTER_SANITIZE_STRING,
	'title_ar'   => FILTER_SANITIZE_STRING,
	'content_ar' => FILTER_SANITIZE_STRING);
/*
check empty data
*/
$inputs = filter_input_array(INPUT_POST,$args);
foreach ($inputs as $value) {
	if (empty($value)) {
		header("location: edit_website_home.php?id=$id&msg=empty_data");die();
	}
}
extract($inputs);
}

/*image not changed*/
if (empty($_FILES['file']['name'])) {
	$image = $img;
}
/*update image*/
else
{
	$image = $_FILES['file']['name'];
		unlink('../uploaded/index_image/'.$img.'');
	
}
/*resize and validate image */
require '../helpers/filevalidate.php';
require '../helpers/filetype.php';
require '../classes/SimpleImage.php';
if (!validation($image,array('jpg','png','jpeg'))) {
	header("location: edit_website_home.php?id=$id&msg=err_vali");die();
}
$type = get_type($image);
$up = move_uploaded_file($_FILES['file']['tmp_name'], '../uploaded/index_image/'.$image.'');
$img = new SimpleImage();
$img->load('../uploaded/index_image/'.$image.'')->resize(1400, 900)->save('../uploaded/index_image/'.$image.'');
/*update data */
require '../connection/connection.php';
$query = $conn->prepare("UPDATE website_home SET title=? , content=? , title_ar=? , content_ar=? , 
	image=? WHERE id=?");
$query->bindValue(1,$title,PDO::PARAM_STR);
$query->bindValue(2,$content,PDO::PARAM_STR);
$query->bindValue(3,$title_ar,PDO::PARAM_STR);
$query->bindValue(4,$content_ar,PDO::PARAM_STR);
$query->bindValue(5,$image,PDO::PARAM_STR);
$query->bindValue(6,$id,PDO::PARAM_STR);
if ($query->execute()) {
	header("location: website_index.php?msg=updated");die();
}
header("location: edit_website_home?id=$id&msg=error");die();


?>