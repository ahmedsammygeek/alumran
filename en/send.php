<?php


$args = array('name'=>FILTER_SANITIZE_STRING , 'message'=>FILTER_SANITIZE_STRING , 'email'=>FILTER_SANITIZE_STRING);

$inputs = filter_input_array(INPUT_POST,$args);

foreach ($inputs as $key => $value) {
    if(empty($value)) {
        header("Location: contact.php?msg=empty");
    }
}

extract($inputs);
if(!filter_var($email , FILTER_VALIDATE_EMAIL)) {
header("Location: contact.php?msg=inv_email");
}





$email_from = $email;
    $email_to = 'email@email.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . "a new message from site" . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, "a new message from site", $body, 'From: <'.$email_from.'>');

    if($success) {
header("Location: contact.php?msg=done");
die();
    }

    else {
header("Location: contact.php?msg=fail");
die();
    }
    