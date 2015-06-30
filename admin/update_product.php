<?php session_start();

//check the admin
require 'check_admin.php';
// DB connection
require '../connection/DB.php';
require '../helpers/functions.php';




if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("location: products.php");
    die();
}

$product_id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);

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


$conn->beginTransaction();
try {

	
	$product = $conn->prepare("UPDATE products SET title_en = ? , title_ar = ? , desc_en = ? , desc_ar = ? , extra_info_en = ?  ,
	extra_info_ar = ? ,price = ?  WHERE id= ? 
	  ");
	$product->bindValue(1,$title_en , PDO::PARAM_STR);
	$product->bindValue(2,$title_ar , PDO::PARAM_STR);
	$product->bindValue(3,$desc_en , PDO::PARAM_STR);
	$product->bindValue(4,$desc_ar , PDO::PARAM_STR);
	$product->bindValue(5,$extra_en , PDO::PARAM_STR);
	$product->bindValue(6,$extra_ar , PDO::PARAM_STR);
	$product->bindValue(7,$price , PDO::PARAM_INT);
	$product->bindValue(8,$product_id , PDO::PARAM_INT);
	$product->execute();
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

