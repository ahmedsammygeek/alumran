<?php error_reporting(true);

// check if he have right to go here or not 

require 'check_user.php';





if (isset($_POST['goo'])) {



	$args = array('title' => FILTER_SANITIZE_STRING , 

		'title_ar' => FILTER_SANITIZE_STRING , 

		'parent_id' => FILTER_SANITIZE_NUMBER_INT

		);

	filter_input_array(INPUT_POST , $args);

	$inputs = $_POST;

	foreach ( $inputs as $input_name => $input_value )

	{

		// redirect if there are any invalid value

		// Null values will be seen as empty value

		if ( empty( $input_value ) ) {

			header("Location: add_pages.php?msg=$input_name");

			die();

		}

	}

	// create variables from inputs array in runtime

	extract( $inputs );

	$content = htmlspecialchars($_POST['content']);

	$content_ar = htmlspecialchars($_POST['content_ar']);

	require 'connection.php';

	$insert = $conn->prepare("INSERT INTO sub_pages  VALUES('' , ? , ? , ? , ? , ? )");

	$insert->bindValue(3,$title , PDO::PARAM_STR);

	$insert->bindValue(4,$content , PDO::PARAM_STR);

	$insert->bindValue(1,$title_ar , PDO::PARAM_STR);

	$insert->bindValue(2,$content_ar , PDO::PARAM_STR);

	$insert->bindValue(5,$parent_id , PDO::PARAM_INT);

	if(!$insert->execute()) {

			// redirect if error happened in insert to databse

		header("Location: add_pages.php?msg=ins_error");

		die();

	}

	$page_id = $conn->lastInsertId();


	// load helper functions

	include'helper.php';

	//check if the file attached or not



	if(empty($_FILES['page_pic']['name']))  {
		
		header("Location: add_pages.php?msg=image");

		die();

	}

	include'ImageResize.php';

	for ($i=0; $i <count($_FILES['page_pic']['name']) ; $i++) { 
		$image_name  = $_FILES['page_pic']['name'][$i];

		$image_tmp = $_FILES['page_pic']['tmp_name'][$i];




		// valid types of images

		// $image_name = trim($image_name);
		$valid_types = array('jpg' , 'png' , 'jpeg' , 'bmp' , 'JPEG' , 'PNG' , 'JPG' , 'BMP');
		if(!is_valid_type($image_name ,$valid_types)) {

			header("Location: add_pages.php?msg=invalid");

			die();

		}

		
		$ex = explode('.', $_FILES['page_pic']['name'][$i]) ;

		$ex = end($ex);

		$ex = strtolower($ex);

		$new_name = rand_string(10).'.'.$ex;

		if(!move_uploaded_file($image_tmp, "../uploaded/pages/".$new_name)) {

			header("Location: services.php?msg=up_error");

			die();

		}


		$obj = new img_opt();
// set maximum width within wich the image should be resized
		$obj->max_width(400);
// set maximum height within wich the image should be resized
// for example size of the area in which image to be displayed
		$obj->max_height(220);
		$obj->image_path("../uploaded/pages/".$new_name);
// call the functio to resize the image
		$obj->image_resize();



		$insert_pic = $conn->prepare("INSERT INTO page_images  VALUES('' , ? , ?)");

		$insert_pic->bindValue(1,$page_id, PDO::PARAM_INT);

		$insert_pic->bindValue(2,$new_name, PDO::PARAM_STR);

		$insert_pic->execute();

	} // the end of for



	header("Location: pages.php?msg=done");

	die();

}

else {

	header("Location: pages.php");

	die();



}

?>