<?php session_start();
require 'check_admin.php';
/*data from html form*/
if (isset($_POST['submit'])) {
	$title            = htmlspecialchars_decode($_POST['title']);
	$content          = htmlspecialchars_decode($_POST['content']);
	$title_ar         = htmlspecialchars_decode($_POST['title_ar']);
	$content_ar       = htmlspecialchars_decode($_POST['content_ar']);
	$inputs = array($title , $title_ar , $content , $content_ar);
	foreach ($inputs as $value) {
		if (empty($value)) {
			echo "empty_data";
		}
	}
	foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
		
	}
}
var_dump($_POST['optionsRadios']);die();



?>