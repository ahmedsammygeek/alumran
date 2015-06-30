<?php 

try {

	$conn=new PDO('mysql:host=localhost;dbname=hrooofco_desoqy','hrooofco_desoqy','pGPhQ7A@ArND');

	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	// if ($conn) {

	// 	echo "conn yup";

	// }

} catch (Exception $e) {

	echo $e->getMessage();

}



 ?>