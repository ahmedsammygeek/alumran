<?php session_start();





//check the admin
require 'check_admin.php';
// DB connection
require '../connection/DB.php';
require '../helpers/functions.php';


if(!isset($_POST['cat_id']) || empty($_POST['cat_id'])) {
	header("location: add_product.php?msg=cat_id");
	die();
}



$args = array(
	'title_en' => FILTER_SANITIZE_STRING,
	'title_ar' => FILTER_SANITIZE_STRING,
	'price' => FILTER_SANITIZE_STRING,
	);
// filter the inputs
$inputs = filter_input_array( INPUT_POST,  $args );
//check inputs if it empty or not 
foreach ($inputs as $key => $value) {
	if ( empty( $value ) ) {
		header("location: add_product.php?msg=$key");
		die();
	}
}


extract($inputs);
if(empty($_POST['desc_ar']) || !isset($_POST['desc_ar'])) {
	header("Location: add_product.php?msg=desc_ar");
	die();
}

if(empty($_POST['desc_en']) || !isset($_POST['desc_en'])) {
	header("Location: add_product.php?msg=desc_ar");
	die();
}

$desc_ar =   htmlentities($_POST['desc_ar']) ;

$desc_en =   htmlentities($_POST['desc_en'])   ;



if(!empty($_POST['extra_ar'])) {
	$extra_ar =    htmlentities($_POST['extra_ar']) ;

}
else {
	$extra_ar = '';
}
if(!empty($_POST['extra_en'])) {
	$extra_en =  htmlentities($_POST['extra_en']) ;

}
else {
	$extra_en = '';
}



$uplaoded_files = array('null' , 'null' , 'null' , 'null');
if(isset($_FILES['images']['name'][0]) && !empty($_FILES['images']['name'][0])) {
				require_once '../helpers/ImageManipulator.php';
	for ($i=0; $i <count($_FILES['images']['tmp_name']) ; $i++) { 
		if(!empty($_FILES['images']['name'][$i])) {
				// get uploded file type
			$file_name = $_FILES['images']['name'][$i];
			if(is_valid_type($file_name , array('jpg' , 'png' , 'jpeg'))) {
				if(file_exists('../uploaded/products/'.$file_name)) {
					$file_name = md5(date('h:m:s:i')).'_'.$file_name;
				}
				if($i == 0) {
				$img=new ImageManipulator($_FILES['images']['tmp_name'][$i]);
				$newimg=$img->resample(285,380);
				$img->save('../uploaded/products/'.'preview_'.$file_name);

				$img2=new ImageManipulator($_FILES['images']['tmp_name'][$i]);
				$newimg=$img2->resample(50,67);
				$img2->save('../uploaded/products/'.'cart_'.$file_name);


				}
				$move = move_uploaded_file($_FILES['images']['tmp_name'][$i], "../uploaded/products/".$file_name);
				// var_dump($move); die();
				if($move) {
					$uplaoded_files[$i] = $file_name; 
				}	
			}
			else {
				header("Location: add_product.php?msg=invalid");
				die();
			}
		}
	}
}


$conn->beginTransaction();
try {

	
	$product = $conn->prepare("INSERT INTO products VALUES('' , ?  , ? , ? , ? , ? , ?, ?, ?, ? , ?  ,  ?) ");
	$product->bindValue(1,$title_en , PDO::PARAM_STR);
	$product->bindValue(2,$title_ar , PDO::PARAM_STR);
	$product->bindValue(3,$desc_en , PDO::PARAM_STR);
	$product->bindValue(4,$desc_ar , PDO::PARAM_STR);
	$product->bindValue(5,$extra_en , PDO::PARAM_STR);
	$product->bindValue(6,$extra_ar , PDO::PARAM_STR);
	$product->bindValue(7,$price , PDO::PARAM_INT);
	$product->bindValue(8,$uplaoded_files[0] , PDO::PARAM_INT);
	$product->bindValue(9,$uplaoded_files[1] , PDO::PARAM_INT);
	$product->bindValue(10,$uplaoded_files[2] , PDO::PARAM_INT);
	$product->bindValue(11,$uplaoded_files[3] , PDO::PARAM_INT);
	$product->execute();
	$product_id = $conn->lastInsertId();
	$cat_id = $_POST['cat_id'];
	foreach ($cat_id as $key => $value) {
		$cats = $conn->prepare("INSERT INTO product_categories VALUES('' , ? , ?)");
		$cats->bindValue(1, $product_id , PDO::PARAM_INT);
		$cats->bindValue(2, $value , PDO::PARAM_INT);
		$cats->execute();
	}
	$conn->commit();
	header("Location: products.php?msg=done");
	die();
} catch (PDOException $e) {
	$conn->rollback();
	echo  $e->getMessage();
	// header("Location: add_product.php?msg=error");
	die();
}

?>

