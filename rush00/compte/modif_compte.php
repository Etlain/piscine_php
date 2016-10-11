<?php
		session_start();
		function update($bdd, $str, $champs, $session_login)
		{
			if (isset($str) && $str !== '')
			{
				//echo $champs.$str.$session_login."<br />";
				//echo 'test';
				$requete = "UPDATE `members` SET `".$champs."`='".$str."' WHERE `mail`='".$session_login."'";
				//$requete = "update 'members' set '".$champs."'='".$str."' where mail='".$session_login."'";
				$b = mysqli_query($bdd, $requete);
				if ($b == false)
					echo mysqli_error($bdd);
			}
		}
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$mail = mysqli_real_escape_string($bdd, $_POST['mail3']);
		$pwd = mysqli_real_escape_string($bdd, $_POST['passwd3']);
		$nom = mysqli_real_escape_string($bdd, $_POST['nom3']);
		$prenom = mysqli_real_escape_string($bdd, $_POST['prenom3']);
		$adresse = mysqli_real_escape_string($bdd, $_POST['adresse3']);
		$ville = mysqli_real_escape_string($bdd, $_POST['ville3']);
		$cdp = mysqli_real_escape_string($bdd, $_POST['cdp3']);
		$pwd = hash("whirlpool", hash("gost", 'chocolat'.$pwd));
		update($bdd, $pwd, "mdp", $_SESSION['login']);
		update($bdd, $nom, "nom", $_SESSION['login']);
		update($bdd, $prenom, "prenom", $_SESSION['login']);
		update($bdd, $adresse, "adresse", $_SESSION['login']);
		update($bdd, $ville, "ville", $_SESSION['login']);
		update($bdd, $cdp, "cdp", $_SESSION['login']);
		if (is_mail($mail) === false)
			update($bdd, $mail, "mail", $_SESSION['login']);
		$_SESSION['login'] = $mail;
		mysqli_close($bdd);
?>
