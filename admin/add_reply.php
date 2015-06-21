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
	header("location: reply_mail.php?msg=empty_data&id=$id");die();
}
require '../helpers/filevalidate.php';
if (!validation($img_name,array('jpg','png','jpeg' , 'gif'))) {
		// function return false 
	header("location: reply_mail.php?msg=error_data&id=$id");die();
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
$up = move_uploaded_file($_FILES['file']['tmp_name'], "image/$img_name");
if (!$up) {
	header("location: reply_mail.php?msg=nup&id=?id");die();
}
/*
get id for user 
*/
require '../connection/connection.php';
$query = $conn->prepare("SELECT email FROM messages WHERE id=?");
$query->bindValue(1,$id,PDO::PARAM_INT);
$query->execute();
$result = $query->fetch(PDO::FETCH_ASSOC);
extract($result);
require_once 'phpmailer/PHPMailerAutoload.php';
$m = new phpmailer;
$m->isSMTP();
$m->SMTPAuth = true ;
$m->Host = 'smtpout.secureserver.net';
$m->username = 'jojoallowz' ;
$m->password = 'Jalal369allowz' ;
$m->SMTPSecure = 'ssl';
$m->Port = '465' ;


$m->From = 'admin@pixllart.com';
$m->FromName = 'pixllart.com';
$m->addReplyTo('' , '');
$m->addAddress($email , '');


$m->isHtml(true);


$m->subject = 'frist message';
$m->Body = '<p>$msg</p><br><br> <img src="image/'.$img_name.'">' ; 
$m->AltBody = '';


if ($m->send()) {
	echo "sent";
}
else
{
	echo $m->ErrorInfo;
}





?>