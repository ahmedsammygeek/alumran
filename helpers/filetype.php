<?php 

function get_type($filename)
{
	$type=explode(".", $filename);
	$type=end($type);
	return $type;
}
 ?>