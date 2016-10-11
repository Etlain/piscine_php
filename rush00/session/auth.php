<?php
	/*function add_bdd($str)
	{
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$str = mysqli_real_escape_string($bdd, $str);
		$b = mysqli_query($bdd, $str);
		echo mysqli_error($bdd);
		mysqli_close($bdd);
		return ($tab);
	}*/

	function see_bdd($str)
	{
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$str = mysqli_real_escape_string($bdd, $str);
		$b = mysqli_query($bdd, $str);
		$tab = mysqli_fetch_all($b, MYSQLI_NUM);
		mysqli_free_result($b);
		mysqli_close($bdd);
		return ($tab);
	}

	function info_compte($mail, $champs)
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
		$bool = mysqli_query($bdd, "SELECT ".$champs." FROM members WHERE mail='".$mail."'");
		$tab = mysqli_fetch_array($bool, MYSQLI_NUM);
		mysqli_free_result($bool);
		mysqli_close($bdd);
		return ($tab[0]);
	}

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
		$pwd = hash("whirlpool", hash("gost", 'chocolat'.$pwd));
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
