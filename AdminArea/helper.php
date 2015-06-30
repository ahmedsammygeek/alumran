<?php 
/**
 * generate a random string with given length
 * @param  integer $length [the length of the string you wanna it to return]
 * @return string          [description]
 */
function rand_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// /**
//  * Redirect to main page
//  * @param  string $msg
//  * @return void
//  */
// function safe_redirect($page  , $msg = "" )
// {
// 	header( "location: $page.php?msg=". $msg, true, 302 );
// 	die();
// }

function is_valid_type($ex , $valid= array('pdf','doc' , 'ppt' , 'pptx' , 'docx' , 'rar','jpg' , 'jpeg' , 'txt'  , 'png' , 'zip')) {
	$ex = explode('.', $ex);
	$ex = end($ex);
	if(in_array($ex, $valid)) {
		return TRUE;
	}
	return FALSE;
}


 ?>
