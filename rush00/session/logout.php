<?php
	session_start();
	$_SESSION['login'] = "";
	$_SESSION['install_bdd'] = "ko";
	$_SESSION['droit'] = "";
	session_destroy();
	echo 'Deconnection reussie';
?>
