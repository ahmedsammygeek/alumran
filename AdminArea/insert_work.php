<?php 

// check if he have right to go here or not 

require 'check_user.php';



if (isset($_POST['goo'])) {



	$args = array('title' => FILTER_SANITIZE_STRING , 

		'title_ar' => FILTER_SANITIZE_STRING , 

		'content_ar' => FILTER_SANITIZE_STRING , 

		'content' => FILTER_SANITIZE_STRING

		);

	$inputs = filter_input_array(INPUT_POST , $args);

	

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

	// load helper functions

	require 'helper.php';

	//load database connetion 

	require 'connection.php';

	//check if the file attached or not

	if(empty($_FILES['work_pic']['name']) )  {

		header("Location: add_work.php?msg=image");

		die();

	}

	// get attached file name

	$image_name  = $_FILES['work_pic']['name'];

	$image_tmp = $_FILES['work_pic']['tmp_name'];



		// valid types of images

	$valid_types = array('jpg' , 'png' , 'jpeg' , 'bmp');

	if(!is_valid_type($image_name ,$valid_types)) {

		header("Location: add_work.php?msg=invalid");

		die();

	}

	$ex = explode('.', $_FILES['work_pic']['name']) ;

	$ex = end($ex);

	$new_name = rand_string(10).'.'.$ex;

	if(!move_uploaded_file($image_tmp, "../uploaded/works/".$new_name)) {

		header("Location: works.php?msg=up_error");

		die();

	}

	require 'ImageResize.php';



			$obj = new img_opt();
// set maximum width within wich the image should be resized
$obj->max_width(480);
// set maximum height within wich the image should be resized
// for example size of the area in which image to be displayed
$obj->max_height(332);
$obj->image_path("../uploaded/works/".$new_name);
// call the functio to resize the image
$obj->image_resize();


		//prepare the query

	$insert = $conn->prepare("INSERT INTO works  VALUES('' , ? , ? , ? , ? , ? )");

	$insert->bindValue(2,$title , PDO::PARAM_STR);

	$insert->bindValue(3,$content , PDO::PARAM_STR);

	$insert->bindValue(4,$title_ar , PDO::PARAM_STR);

	$insert->bindValue(5,$content_ar , PDO::PARAM_STR);

	$insert->bindValue(1,$new_name , PDO::PARAM_STR);

	if(!$insert->execute()) {

			// redirect if error happened in insert to databse

		header("Location: works.php?msg=ins_error");

		die();

	}

			// redirect when every thing goes right

	header("Location: works.php?msg=done");

	die();





}

else {

	header("Location: works.php");

	die();

}







?>