<?php session_start();
require 'check_admin.php';
require '../connection/connection.php';
/*
select all members
*/
$emails = array();
$query = $conn->prepare("SELECT email FROM newsletter");
$query->execute();
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
	$emails[] = $result->email;
}
// var_dump($emails);die();
/*
message
*/
if (empty($_POST['message'])) {
	header("location: send_mail_all.php?msg=empty_data");die();
}
$msg = htmlspecialchars($_POST['message']);
$img_name = $_FILES['file']['name'];
require '../helpers/filevalidate.php';
if (!validation($img_name,array('jpg','png','jpeg' , 'gif'))) {
		// function return false 
	header("location: send_mail_all.php?msg=error_data");die();
}
	//function used to know file type
require '../helpers/filetype.php';
$type=get_type($img_name);
	//to make random name
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$img_name=$randomstring.".$type" ;
/*
add this image to our folder
*/
// var_dump($img_name);die();
$up = move_uploaded_file($_FILES['file']['tmp_name'], "../uploaded/mails_image/$img_name");
$from = "root@alumran.com";

$to = array('ahmedsamigeek@gmail.com');
$body = '<html> 
  <body bgcolor="#DCEEFC"> 
    <center>';


$body .= '<p>'.$msg.'</p><br><br> <img src="http://retagshop.com/admin/image/'.$img_name.'">';

$body .= ' </center> 
      <br><br>*** we Always love to contact with us  <br> Regards<br> alumran Team 
  </body> 
</html>'; 
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$sent = @mail(implode(',' , $emails), 'RetagShop Newsletters ', $body, $headers);

if($sent) {
 header("location: show_subscribe.php?msg=done");
 die();
 
}
else {
 header("location: show_subscribe.php?msg=no");
 die();
}


?>