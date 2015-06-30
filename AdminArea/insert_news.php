<?php 
// check if he have right to go here or not 
require 'check_user.php';

if (isset($_POST['goo'])) {
	$inputs = $_POST;
	foreach ( $inputs as $input_name => $input_value )
	{
		// redirect if there are any invalid value
		// Null values will be seen as empty value
		if ( empty( $input_value ) ) {
			header("Location: add_news.php?msg=$input_name");
			die();
		}
	}
	// create variables from inputs array in runtime
	extract( $inputs );

	$title_ar = htmlspecialchars($title_ar);
	$title = htmlspecialchars($title);
	$content = htmlspecialchars($content);
	$content_ar = htmlspecialchars($content_ar);
	$date = date("M j Y");
	// load helper functions
	require 'helper.php';
	//load database connetion 
	require 'connection.php';
	//check if the file attached or not
	if(!empty($_FILES['news_pic']['name']) ) {
	// get attached file name
		$image_name  = $_FILES['news_pic']['name'];
		$image_tmp = $_FILES['news_pic']['tmp_name'];

		// valid types of images
		$valid_types = array('jpg' , 'png' , 'jpeg' , 'bmp');
		if(!is_valid_type($image_name ,$valid_types)) {
			header("Location: news.php?msg=invalid");
			die();
		}
		$ex = explode('.', $_FILES['news_pic']['name']) ;
		$ex = end($ex);
		$new_name = rand_string(10).'.'.$ex;
		if(!move_uploaded_file($image_tmp, "../uploaded/news/".$new_name)) {
			header("Location: news.php?msg=up_error");
			die();
		}

		//prepare the query
		$insert = $conn->prepare("INSERT INTO news  VALUES('' , ? , ? , ? , ? , ? ,? )");
		$insert->bindValue(1,$title , PDO::PARAM_STR);
		$insert->bindValue(2,$content , PDO::PARAM_STR);
		$insert->bindValue(3,$title_ar , PDO::PARAM_STR);
		$insert->bindValue(4,$content_ar , PDO::PARAM_STR);
		$insert->bindValue(5,$new_name , PDO::PARAM_STR);
		$insert->bindValue(6,$date , PDO::PARAM_STR);
		if(!$insert->execute()) {
			// redirect if error happened in insert to databse
			header("Location: news.php?msg=ins_error");
			die();
		}
			// redirect when every thing goes right
		header("Location: news.php?msg=done");
		die();
	}
	// insert new into databse without the image
	else {
		$insert = $conn->prepare("INSERT INTO news(id,title , content, title_ar , content_ar ,date)  VALUES('' , ? , ? , ? , ? , ?  )");
		$insert->bindValue(1,$title , PDO::PARAM_STR);
		$insert->bindValue(2,$content , PDO::PARAM_STR);
		$insert->bindValue(3,$title_ar , PDO::PARAM_STR);
		$insert->bindValue(4,$content_ar , PDO::PARAM_STR);
		$insert->bindValue(5,$date , PDO::PARAM_STR);
		if(!$insert->execute()) {
			// redirect if error happened in insert to databse
			header("Location: news.php?msg=ins_error");
			die();
		}
			// redirect when every thing goes right
		header("Location: news.php?msg=done");
		die();
	}
}
else {
	header("Location: news.php");
	die();
}



?>

