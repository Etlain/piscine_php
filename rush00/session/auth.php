<?php
	function auth($mail, $pwd)
	{
		if (isset($mail) === FALSE && isset($pwd) === FALSE)
			return (false);
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$mail = mysqli_real_escape_string($bdd, $mail);
		$pwd = mysqli_real_escape_string($bdd, $pwd);
		$bool = mysqli_query($bdd, "SELECT mail FROM members WHERE mail='".$mail."' AND mdp='".$pwd."'");
		$tab = mysqli_fetch_array($bool, MYSQLI_NUM);
		mysqli_free_result($bool);
		mysqli_close($bdd);
		if (isset($tab[0]))
			return true;
		else
			return false;
	}

	function is_mail($mail)
	{
		if (isset($mail) === FALSE)
			return (false);
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$mail = mysqli_real_escape_string($bdd, $mail);
		$bool = mysqli_query($bdd, "SELECT mail FROM members WHERE mail='".$mail."'");
		$tab = mysqli_fetch_array($bool, MYSQLI_NUM);
		mysqli_free_result($bool);
		mysqli_close($bdd);
		if (isset($tab[0]))
			return true;
		else
			return false;
	}
?>
