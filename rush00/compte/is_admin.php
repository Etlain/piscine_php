<?php
		/*
		function is_admin($admin_mail)
		{
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
		{
			echo 'error connection bdd';
			return (false);
		}	
		$mail = mysqli_real_escape_string($bdd, $admin_mail);
		//echo 'test';
		$bool = mysqli_query($bdd, "SELECT admin FROM members WHERE mail='".$mail."'");
		$tab = mysqli_fetch_array($bool, MYSQLI_NUM);
		mysqli_free_result($bool);
		mysqli_close($bdd);
		if (isset($tab[0]) && $tab[0] === '1')
			return true;
		else
			return false;
		}*/
?>
