<?php
		session_start();
		function update($bdd, $str, $champs, $session_login)
		{
			if ($str != '')
			{
				//echo 'test';
				$requete = "UPDATE `members` SET `".$champs."`='".$str."' WHERE `mail`='".$session_login."'";
				//$requete = "UPDATE 'members' SET '".$champs."'='".$str."' WHERE mail='".$session_login."'";
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
		/*if ($mail != '')
		{
			$requete = "UPDATE 'members' SET 'mail'='".$mail."'";
			$b = mysqli_query($bdd, $requete);
		}*/
		//$requete = "INSERT INTO `members`(`mdp`, `admin`, `adresse`, `mail`, `ville`, `cdp`, `prenom`, `nom`) VALUES ('".$pwd."', '0','".$adresse."','".$mail."','".$ville."','".$cdp."','".$prenom."','".$nom."')";
		//$b = mysqli_query($bdd, $requete);
		//echo $_SESSION['login']."d";
		//print_r ($_SESSION['login']['mail']);
		update($bdd, $mail, "mail", $_SESSION['login']);
		update($bdd, $pwd, "mdp", $_SESSION['login']);
		update($bdd, $nom, "nom", $_SESSION['login']);
		update($bdd, $prenom, "prenom", $_SESSION['login']);
		update($bdd, $adresse, "adresse", $_SESSION['login']);
		update($bdd, $ville, "ville", $_SESSION['login']);
		update($bdd, $cdp, "cdp", $_SESSION['login']);
		mysqli_close($bdd);
?>
