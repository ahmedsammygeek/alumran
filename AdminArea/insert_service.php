<?php 

// check if he have right to go here or not 

require 'check_user.php';



if (isset($_POST['goo'])) {



	$args = array('title' => FILTER_SANITIZE_STRING , 

		'title_ar' => FILTER_SANITIZE_STRING

		);

	filter_input_array(INPUT_POST , $args);

	$inputs = $_POST;

	foreach ( $inputs as $input_name => $input_value )

	{

		// redirect if there are any invalid value

		// Null values will be seen as empty value

		if ( empty( $input_value ) ) {

			header("Location: add_slide.php?msg=$input_name");

			die();

		}

	}

	// create variables from inputs array in runtime

	extract( $inputs );

	$content = htmlspecialchars($_POST['content']);

	$content_ar = htmlspecialchars($_POST['content_ar']);

	// load helper functions

	require 'helper.php';

	//load database connetion 

	require 'connection.php';

	//check if the file attached or not

	if(empty($_FILES['service_pic']['name']) )  {

		header("Location: add_service.php?msg=image");

		die();

	}

	// get attached file name

	$image_name  = $_FILES['service_pic']['name'];

	$image_tmp = $_FILES['service_pic']['tmp_name'];



		// valid types of images

	$valid_types = array('jpg' , 'png' , 'jpeg' , 'bmp');

	if(!is_valid_type($image_name ,$valid_types)) {

		header("Location: add_service.php?msg=invalid");

		die();

	}

	$ex = explode('.', $_FILES['service_pic']['name']) ;

	$ex = end($ex);

	$new_name = rand_string(10).'.'.$ex;

	if(!move_uploaded_file($image_tmp, "../uploaded/services/".$new_name)) {

		header("Location: services.php?msg=up_error");

		die();

	}

	require 'ImageResize.php';

	
	$obj = new img_opt();
// set maximum width within wich the image should be resized
$obj->max_width(400);
// set maximum height within wich the image should be resized
// for example size of the area in which image to be displayed
$obj->max_height(220);
$obj->image_path("../uploaded/services/".$new_name);
// call the functio to resize the image
$obj->image_resize();

		//prepare the query

	$insert = $conn->prepare("INSERT INTO services  VALUES('' , ? , ? , ? , ? , ? )");

	$insert->bindValue(1,$title , PDO::PARAM_STR);

	$insert->bindValue(2,$content , PDO::PARAM_STR);

	$insert->bindValue(3,$title_ar , PDO::PARAM_STR);

	$insert->bindValue(4,$content_ar , PDO::PARAM_STR);

	$insert->bindValue(5,$new_name , PDO::PARAM_STR);

	if(!$insert->execute()) {

			// redirect if error happened in insert to databse

		header("Location: services.php?msg=ins_error");

		die();

	}

			// redirect when every thing goes right

	header("Location: services.php?msg=done");

	die();





}

else {

	header("Location: services.php");

	die();

}







?>