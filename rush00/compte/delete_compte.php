<?php
		session_start();
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$mail = mysqli_real_escape_string($bdd, $_SESSION['login']);
		$pwd = mysqli_real_escape_string($bdd, $_POST['passwd4']);
		$requete = "DELETE FROM `members` WHERE `mail`='".$mail."' AND `mdp`='".$pwd."'";
		$b = mysqli_query($bdd, $requete);
		if ($b == false)
			echo mysqli_error($bdd);
		mysqli_close($bdd);
?>
