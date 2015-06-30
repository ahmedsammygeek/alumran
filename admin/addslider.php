<?php  session_start();
require 'check_admin.php';


if (isset($_POST['submit'])) {

	if (empty($_FILES['file']['name'])) {
			// if user leave eny inputs empty without enter eny thing in this case 
		header('location: slider.php?msg=empty_data'); die();
	}
	//name of image
	$img_name=$_FILES['file']['name'];
	$place = $_POST['place'];
	//function used to be sure this is image
	require '../helpers/filevalidate.php';
	if (!validation($img_name,array('jpg','png','jpeg' , 'gif'))) {
		// function return false 
		header("location: slider.php?msg=error_data");die();
	}
	//function used to know file type
	require '../helpers/filetype.php';
	$type=get_type($img_name);
	//to make random name
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$img_name=$randomstring.".$type" ;
	//class used to resize images
	require_once '../helpers/ImageManipulator.php';
	switch ($place) {
		/*left image*/
		case '1':
		$newName= time() . '_';
		$img=new ImageManipulator($_FILES['file']['tmp_name']);
		$newimg=$img->resample(950,400);
		$img->save('image/'.$img_name);
		break;
		/*top image*/
		case '2':
		$newName= time() . '_';
		$img=new ImageManipulator($_FILES['file']['tmp_name']);
		$newimg=$img->resample(950,400);
		$img->save('image/'.$img_name);
		break;
		/*bottom image*/
		case '3':
		$newName= time() . '_';
		$img=new ImageManipulator($_FILES['file']['tmp_name']);
		$newimg=$img->resample(950,400);
		$img->save('image/'.$img_name);
		break;
		/*right image*/
		case '4':
		$newName= time() . '_';
		$img=new ImageManipulator($_FILES['file']['tmp_name']);
		$newimg=$img->resample(950,400);
		$img->save('image/'.$img_name);
		break;
		/*brand image*/
		case '5':
		$newName= time() . '_';
		$img=new ImageManipulator($_FILES['file']['tmp_name']);
		$newimg=$img->resample(143,80);
		$img->save('image/'.$img_name);
		break;
		
		default:
		break;
	}
	
	require 'connection.php';
	$sql="INSERT INTO slider VALUES('',?,?) ";
	$query=$conn->prepare($sql);
	$query->bindValue(1,$img_name,PDO::PARAM_STR);
	$query->bindValue(2,$place,PDO::PARAM_INT);
	if ($query->execute()) {
		
		header('location: showslider.php?msg=data_inserted'); die();
	}
	else{
		header('location: slider.php?msg=error_data'); die();
	}

}


?>