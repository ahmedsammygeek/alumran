<?php session_start();
require 'check_admin.php';

/*
get id want to update
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$img = $_GET['img'];
	$menu = htmlspecialchars($_POST['menu']);
	$menu_ar = htmlspecialchars($_POST['menu_ar']);
}


/*
check menu empty or not
*/
if (empty($menu) || empty($menu_ar)) {
	header("location: edit_menu.php?msg=empty_data&id=$id");die();
}
/*
empty image or new image
*/
if (empty($_FILES['file']['name'])) {
	$img_name = $img;
}
else{
	if (file_exists('image/'.$img)) {
		unlink('image/'.$img);
	}
	$img_name=$_FILES['file']['name'];
	//function used to be sure this is image
	require '../helpers/filevalidate.php';
	if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: edit_menu.php?id=$id&msg=error_data");die();
	}
	//function used to know file type
	require '../helpers/filetype.php';
	$type=get_type($img_name);
	//class used to resize images
	require_once '../helpers/ImageManipulator.php';
	//to make random name
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$img_name=$randomstring.".$type" ;
	$newName= time() . '_';
	$img=new ImageManipulator($_FILES['file']['tmp_name']);
	//resize image
	$newimg=$img->resample(950,400);
	//put image in file "image"
	$img->save('image/'.$img_name);
}



/*
update in database
*/
require 'connection.php';


$query = $conn->prepare("UPDATE menu SET cat_name=?,cat_name_ar=?,image=? WHERE id = ?");
$query->bindValue(1,$menu,PDO::PARAM_STR);
$query->bindValue(2,$menu_ar,PDO::PARAM_STR);
$query->bindValue(3,$img_name,PDO::PARAM_STR);
$query->bindValue(4,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: show_menu.php?msg=data_updated");die();
}
header("location: edit_menu.php?msg=error_data&id=$id");die();









 ?>