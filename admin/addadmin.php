<?php session_start();
require 'check_admin.php';

$args = array('name' =>FILTER_SANITIZE_STRING ,'password'=>FILTER_SANITIZE_STRING );
//this array to validate inputs recieved from admin to add new admin
$inputs=filter_input_array(INPUT_POST,$args);
// use post method to recieved data 
foreach ($inputs as $key_input => $input_value) {
	if (empty($input_value)) {
		// if left eny input empty 
		//go to input page and show alert about this case 
		header('location: admin.php?msg=empty_data'); die();
	}
}
extract($inputs);
//put elements in variables
$password=hash('ripemd160', "$password");
require '../connection/connection.php';
//conection with databasemet
$sql="INSERT INTO admin VALUES('',?,?) ";
$query=$conn->prepare($sql);
//prepare qsl request
$query->bindValue(1,$name,PDO::PARAM_STR);
//bind informathion and send it to table(admin)
$query->bindValue(2,$password,PDO::PARAM_STR);
//bind informathion and send it to table(admin)

if ($query->execute()) {
	//if sql request executed go to gallery (admins)
	header('location: showadmin.php?msg=data_inserted'); die();
}
else
{
	header('location: admin.php?msg=error_data'); die();
}



 ?>