<?php session_start();
require 'check_admin.php';
require 'connection.php';
/*
select all members
*/
$emails = array();
$query = $conn->prepare("SELECT email FROM news_letter");
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
$up = move_uploaded_file($_FILES['file']['tmp_name'], "image/$img_name");
if (!$up) {
	header("location: send_mail_all.php?msg=nup");die();
}
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
foreach ($emails as $key => $mail) {
	$m->addAddress($mail);
}


$m->isHtml(true);


$m->subject = 'frist message';
$m->Body = '<p>$msg</p> <br> <br> <img src="image/'.$img_name.'">' ; 
$m->AltBody = '';


if ($m->send()) {
	echo "sent";
}
else
{
	echo $m->ErrorInfo;
}


?>