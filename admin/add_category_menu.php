<?php session_start();
require 'check_admin.php';
/*
get menu id
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
/*
add new category in this menu 
*/
if (!empty($_POST['cat_name']) && !empty($_POST['cat_name_ar']) && !empty($_POST['title']) && !empty($_POST['title_ar'])) {
	$cat_names = htmlspecialchars($_POST['cat_name']);
	$cat_name = explode(",", $cat_names);
	$cat_names_ar = htmlspecialchars($_POST['cat_name_ar']);
	$cat_name_ar = explode(",", $cat_names_ar);
	$title = htmlspecialchars($_POST['title']);
	$title_ar = htmlspecialchars($_POST['title_ar']);
}
else {
	header("location: category_menu.php?msg=empty_data&id=$id");die();

}
/*
check cat names ar = en or not 
*/
if (count($cat_name) != count($cat_name_ar)) {
	header("location: category_menu.php?msg=en_neq_ar&id=$id");die();
}
require 'connection.php';
for ($i=0; $i < count($cat_name); $i++) { 
	$query = $conn->prepare("INSERT INTO menu_menu VALUES('',?,?,?,?,?) ");
	$query->bindValue(1,$cat_name[$i],PDO::PARAM_STR);
	$query->bindValue(2,$id,PDO::PARAM_INT);
	$query->bindValue(3,$cat_name_ar[$i],PDO::PARAM_INT);
	$query->bindValue(4,$title,PDO::PARAM_STR);
	$query->bindValue(5,$title_ar,PDO::PARAM_STR);
	$query->execute();
}
header("location: show_categories_menu.php?id=$id&msg=inserted");die();




?>