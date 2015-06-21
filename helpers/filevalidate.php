<?php 
// functio used to know the type of file user enter 
//its except 2 paramter 1/file user add it   2/array contain all types user can use it only
function validation($filename,$type = array())
{
	//out put is the type of file 
	$filetype=explode(".", $filename);
	$filetype=end($filetype);
	//return true if this type in array 
	//return false if this file type user cant use it 
	if (!in_array($filetype, $type)) {
		return false;
	}
	return true;
}
 ?>