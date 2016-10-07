<?php
	session_start();
	include("auth.php");
	if (auth($_GET["login"], $_GET["passwd"]) === FALSE)
	{
		$_SESSION['loggued_on_user'] = "";
		echo "ERROR\n";
		return ;
	}
	$_SESSION['loggued_on_user'] = $_GET["login"];
	echo "OK\n";
?>
