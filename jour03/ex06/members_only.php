<?php
//	print_r($_SERVER);
	$value = $_SERVER[$PHP_AUTH_USR];
	echo $value;
/*foreach ($_SERVER as $value)
	{
		if ($value == "zaz")
			echo $value."\n";
	}*/
?>
