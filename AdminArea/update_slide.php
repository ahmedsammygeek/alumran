<?php 

// check if he have right to go here or not 

require 'check_user.php';



if (isset($_POST['goo'])) {

	//check if the id send in get request

	if(!isset($_GET['id']) || empty($_GET['id'])) {

		header("Location: slider.php");

		die();

	}

	$id =  filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT  );

	$image =  filter_input(INPUT_GET, 'img' ,FILTER_SANITIZE_STRING  );

	

	// create variables from inputs array in runtime

	extract( $inputs );



	// load helper functions

	require 'helper.php';

	//load database connetion 

	require 'connection.php';

	//check if the file attached or not

	if(!empty($_FILES['slide']['name']) ) {

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

		if(file_exists("../uploaded/slider/$image")) {

			unlink("../uploaded/slider/$image");

		}


		$title_ar = '';

		$title = '';

		//prepare the query

		$insert = $conn->prepare("UPDATE  slider  set title = ?,

			title_ar = ? , 

			image = ?  

			WHERE id = ?

			");

		$insert->bindValue(1,$title , PDO::PARAM_STR);

		$insert->bindValue(2,$title_ar , PDO::PARAM_STR);

		$insert->bindValue(3,$new_name , PDO::PARAM_STR);

		$insert->bindValue(4,$id , PDO::PARAM_INT);



		if(!$insert->execute()) {

			// redirect if error happened in insert to databse

			header("Location: slider.php?msg=ins_error");

			die();

		}

			// redirect when every thing goes right

		header("Location: slider.php?msg=up_done");

		die();

	}

	// insert new into databse without the image

	else {

		$insert = $conn->prepare("UPDATE  slider  set title = ?,

			title_ar = ? , 

			image = ?  

			WHERE id = ?

			");

		$insert->bindValue(1,$title , PDO::PARAM_STR);

		$insert->bindValue(2,$title_ar , PDO::PARAM_STR);

		$insert->bindValue(3,$image , PDO::PARAM_STR);

		$insert->bindValue(4,$id , PDO::PARAM_INT);



		if(!$insert->execute()) {

			// redirect if error happened in insert to databse

			header("Location: slider.php?msg=ins_error");

			die();

		}

			// redirect when every thing goes right

		header("Location: slider.php?msg=up_done");

		die();

	}

}

else {

	header("Location: slider.php?msg=done");

	die();

}







?>