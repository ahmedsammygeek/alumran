<?php 
require_once 'PHPMailerAutoload.php';
$m = new phpmailer;
$m->isSMTP();
$m->SMTPAuth = true ;
$m->Host = 'smtpout.secureserver.net';
$m->username = '' ;
$m->password = '' ;
$m->SMTPSecure = 'ssl';
$m->Port = '' ;


$m->From = '';
$m->FromName = '';
$m->addReplyTo('' , '');
$m->addAddress('' , '');


$m->isHtml(true);


$m->subject = '';
$m->Body = '' ; 
$m->AltBody = '';







 ?>