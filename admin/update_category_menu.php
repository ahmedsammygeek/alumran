<?php session_start();
require 'check_admin.php';

/*
get id of category to update
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$menu_id = $_GET['menu_id'];
}
if (!empty($_POST['cat_name']) && !empty($_POST['cat_name_ar'])) {
	$cat_name = htmlspecialchars($_POST['cat_name']);
	$cat_name_ar = htmlspecialchars($_POST['cat_name_ar']);
}
else
{
	header("location: edit_category_menu.php?id=$id&msg=empty_data");die();
}
/*
update this category
*/
require 'connection.php';
$query = $conn->prepare("UPDATE menu_menu SET cat_name_menu=?,cat_name_menu_ar=? WHERE id=?");
$query->bindValue(1,$cat_name,PDO::PARAM_STR);
$query->bindValue(2,$cat_name_ar,PDO::PARAM_STR);
$query->bindValue(3,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: show_categories_menu.php?id=$menu_id&msg=data_updates");die();
}
	header("location: edit_category_menu.php?id=$id&msg=error");die();

 ?>