<?php  


try {
	$conn=new PDO('mysql:host=50.62.209.83:3306;dbname=jalalallowz_sya7a;charset=utf8','alaa','fo2Px73#');
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// if ($conn) {
	// 	echo "conn yup";
	// }
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>