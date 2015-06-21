<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}


$id=$_GET['id'];
//get the id of this row we need to delete and put it in this variable($id)
$image=$_GET['img'];
//get the name of this id we need to delete and put it in this variable($id)
if(file_exists("image/$image"))  {
	//if this image exist in this file 
	unlink("image/$image");
	//remove it 
}else{
	//if this image not exist 
	//go to gallery slider and show alert about this case
	header('location: showslider.php?msg=not_exist');
	die();
}

include 'connection.php';
//connection with database(met)
$sql="DELETE FROM slider WHERE id='$id' ";
//delete from table (slider)
$query=$conn->query($sql);
//prepare the sql request
$num=$query->rowCount();
//this function return the number of rows 
// var_dump($num); die();
if ($num==1) {
	//if rows doesnt=0 go to gellery slider and show alert about deleted 
	header('location: showslider.php?msg=deleted'); die();
}
else
{
	header('location: showslider.php?msg=error_delete'); die();
}
 ?>