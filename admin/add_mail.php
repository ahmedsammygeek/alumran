
<?php session_start();
require 'check_admin.php';
/*
get id
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$msg = htmlspecialchars($_POST['message']);
	$img_name = $_FILES['file']['name'];
} 
/*
check mesg empty or not
*/
if (empty($msg)) {
	header("location: send_mail.php?msg=empty_data&id=$id");die();
}
require '../helpers/filevalidate.php';
if (!validation($img_name,array('jpg','png','jpeg' , 'gif'))) {
		// function return false 
	header("location: send_mail.php?msg=error_data&id=$id");die();
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
/*
get id for user 
*/
require '../connection/connection.php';
$query = $conn->prepare("SELECT email FROM newsletter WHERE id=?");
$query->bindValue(1,$id,PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
extract($result);

$from = "root@reatgshop.com";

$to = array('ahmedsamigeek@gmail.com');
$body = '<html> 
  <body bgcolor="#DCEEFC"> 
    <center>';


$body .= '<p>'.$msg.'</p><br><br> <img src="http://retagshop.com/admin/image/'.$img_name.'">';

$body .= ' </center> 
      <br><br>*** we Always love to contact with us  <br> Regards<br> RetagShop Team 
  </body> 
</html>'; 
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: ". $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$sent = @mail($email, 'RetagShop Newsletters ', $body, $headers);

if($sent) {
	header("location: message.php?msg=done");
	die();
	
}
else {
	header("location: reply_mail.php?msg=no&id=$id");
	die();
}






?>