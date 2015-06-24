<?php session_start();
require 'check_admin.php';
/*data from html form*/
if (isset($_POST['submit'])) {
	$title            = htmlspecialchars_decode($_POST['title']);
	$content          = htmlspecialchars_decode($_POST['content']);
	$title_ar         = htmlspecialchars_decode($_POST['title_ar']);
	$content_ar       = htmlspecialchars_decode($_POST['content_ar']);
	$inputs           = array($title , $title_ar , $content , $content_ar);
	/*check empty data*/
	foreach ($inputs as $value) {
		if (empty($value)) {
			echo "empty_data";die();
		}
	}
	/*type of offer*/
	$hotel_or_offer   = $_POST['optionsRadios'];
	$new_checks = array();
	/*things exist in hotel*/
	$check_boxes      = array(
		'BED'         => FILTER_VALIDATE_INT,
		'POOL'        =>FILTER_VALIDATE_INT,
		'SAFE'        =>FILTER_VALIDATE_INT,
		'GAMES'       =>FILTER_VALIDATE_INT,
		'TRANSPORT'   =>FILTER_VALIDATE_INT,
		'CONDITION'   =>FILTER_VALIDATE_INT,
		'BATHTUB'     =>FILTER_VALIDATE_INT,
		'CHAMPAIGNE'  =>FILTER_VALIDATE_INT,
		'DINNER'      =>FILTER_VALIDATE_INT,
		'ROOM_SERVICE'=>FILTER_VALIDATE_INT,
		'PET_FRIENDLY'=>FILTER_VALIDATE_INT,);
	$check_box = filter_input_array(INPUT_POST,$check_boxes);
	foreach ($check_box as $key => $checks) {
		if (is_null($checks)) {
			$new_checks[$key] = 0;
		} else {
			$new_checks[$key] = 1;
		}
	}
	extract($new_checks);
	/*validate and resise images classes*/
	require '../helpers/filevalidate.php';
	require '../helpers/filetype.php';
	require '../classes/SimpleImage.php';
	if(empty($_FILES['files']['name'])){ 
		echo "empty_image";die();
	} 
}
/*insert data in db*/
require '../connection/connection.php';
$query = $conn->prepare("INSERT INTO hotels VALUES('',?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$query->bindValue(1,$title,PDO::PARAM_STR);
$query->bindValue(2,$content,PDO::PARAM_STR);
$query->bindValue(3,$BED,PDO::PARAM_INT);
$query->bindValue(4,$POOL,PDO::PARAM_INT);
$query->bindValue(5,$SAFE,PDO::PARAM_INT);
$query->bindValue(6,$GAMES,PDO::PARAM_INT);
$query->bindValue(7,$TRANSPORT,PDO::PARAM_INT);
$query->bindValue(8,$CONDITION,PDO::PARAM_INT);
$query->bindValue(9,$BATHTUB,PDO::PARAM_INT);
$query->bindValue(10,$CHAMPAIGNE,PDO::PARAM_INT);
$query->bindValue(11,$DINNER,PDO::PARAM_INT);
$query->bindValue(12,$ROOM_SERVICE,PDO::PARAM_INT);
$query->bindValue(13,$PET_FRIENDLY,PDO::PARAM_INT);
$query->bindValue(14,$title_ar,PDO::PARAM_STR);
$query->bindValue(15,$content_ar,PDO::PARAM_STR);
$query->bindValue(16,$hotel_or_offer,PDO::PARAM_INT);
if ($query->execute()) {
	$hotel_id = $conn->lastInsertId();
	/*validate and resize image*/
	foreach($_FILES['files']['name'] as $key => $img_name){ 
		if (!validation($img_name,array('jpg','png','jpeg'))) {
			echo "error_file";die();
		}
		$type     =get_type($img_name); 
		$img_name = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz123456789"), 0 , 12);
		$img_name = $img_name.".".$type; 
		$up       = move_uploaded_file($_FILES['files']['tmp_name']["$key"], '../uploaded/hotels_images/'.$img_name.'');
		$img      = new SimpleImage();
		$img->load('../uploaded/hotels_images/'.$img_name.'')->resize(1170, 780)->save('../uploaded/hotels_images/'.$img_name.'');
		/*insert images for this hotel id*/
		$insert_image = $conn->prepare("INSERT INTO hotel_images VALUES('',?,?)");
		$insert_image->bindValue(1,$hotel_id,PDO::PARAM_INT);
		$insert_image->bindValue(2,$img_name,PDO::PARAM_STR);
		$insert_image->execute();
	}

	echo "inserted";
	
}

?>