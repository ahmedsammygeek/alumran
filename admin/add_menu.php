<?php session_start();
require 'check_admin.php';
/*
info about menu
*/
if (isset($_POST['submit'])) {
	/*
	menu name ar and en
	*/
	$menu = htmlspecialchars($_POST['menu']);
	$menu_ar = htmlspecialchars($_POST['menu_ar']);
	$img_name = $_FILES['file']['name'];
	// var_dump($menu);var_dump($menu_ar);var_dump($cat_name);var_dump($cat_name_ar);var_dump($img_name);die();
}
/*
check data empty or not
*/
if (empty($menu) || empty($menu_ar) || empty($img_name)) {
	header("location: menu.php?msg=empty_data");die();
}

//function used to be sure this is image
require '../helpers/filevalidate.php';
if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
	header("location: menu.php?msg=error_data");die();
}
	//function used to know file type
require '../helpers/filetype.php';
$type=get_type($img_name);
	//to make random name
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$img_name=$randomstring.".$type" ;
//class used to resize images
require_once '../helpers/ImageManipulator.php';
	//to make random name
$newName= time() . '_';
$img=new ImageManipulator($_FILES['file']['tmp_name']);
	//resize image

$newimg=$img->resample(950,400);
	//put image in file "image"
$img->save('image/'.$img_name);
require 'connection.php';
/*
add menu name in tb(menu)
*/

$query = $conn->prepare("INSERT INTO menu VALUES('',?,?,?) ");
$query->bindValue(1,$menu,PDO::PARAM_STR);
$query->bindValue(2,$menu_ar,PDO::PARAM_STR);
$query->bindValue(3,$img_name,PDO::PARAM_STR);
if ($query->execute()) {
	header("location: show_menu.php?msg=data_insertd");die();

}



?>