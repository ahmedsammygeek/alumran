<?php 

// check if he have right to go here or not 

require 'check_user.php';



if (isset($_POST['goo'])) {

	



	// create variables from inputs array in runtime

	

	// load helper functions

	require 'helper.php';

	//load database connetion 

	require 'connection.php';

	//check if the file attached or not

	if(!isset($_FILES['slide']['name']) || empty($_FILES['slide']['name'])  ) { 

		header("Location: add_slide.php?msg=image");

		die();

	}

	// get attached file name

	$image_name  = $_FILES['slide']['name'];

	$image_tmp = $_FILES['slide']['tmp_name'];



		// valid types of images

	$valid_types = array('jpg' , 'png' , 'jpeg' , 'bmp');

	if(!is_valid_type($image_name ,$valid_types)) {

		header("Location: slider.php?msg=invalid");

		die();

	}

	$ex = explode('.', $_FILES['slide']['name']) ;

	$ex = end($ex);

	$new_name = rand_string(10).'.'.$ex;

	if(!move_uploaded_file($image_tmp, "../uploaded/slider/".$new_name)) {

		header("Location: slider.php?msg=up_error");

		die();

	}



	
	include'ImageResize.php'; 
	$obj = new img_opt();
// set maximum width within wich the image should be resized
$obj->max_width(1440);
// set maximum height within wich the image should be resized
// for example size of the area in which image to be displayed
$obj->max_height(500);
$obj->image_path("../uploaded/slider/".$new_name);
// call the functio to resize the image
$obj->image_resize();

$title_ar = '';
$title = '';
	$insert = $conn->prepare("INSERT INTO slider  VALUES('' , ? , ? , ? )");

	$insert->bindValue(1,$title_ar, PDO::PARAM_STR);

	$insert->bindValue(2,$title, PDO::PARAM_STR);

	$insert->bindValue(3,$new_name , PDO::PARAM_STR);

	if(!$insert->execute()) {

			// redirect if error happened in insert to databse

		header("Location: slider.php?msg=ins_error");

		die();

	}

			// redirect when every thing goes right

	header("Location: slider.php?msg=done");

	die();

	

	// insert new into databse without the image

}

else {

	header("Location: slider.php");

	die();

}







?>