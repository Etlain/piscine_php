<?php
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$mail = mysqli_real_escape_string($bdd, $_POST['mail']);
		$pwd = mysqli_real_escape_string($bdd, $_POST['passwd']);
		$nom = mysqli_real_escape_string($bdd, $_POST['nom']);
		$prenom = mysqli_real_escape_string($bdd, $_POST['prenom']);
		$adresse = mysqli_real_escape_string($bdd, $_POST['adresse']);
		$ville = mysqli_real_escape_string($bdd, $_POST['ville']);
		$cdp = mysqli_real_escape_string($bdd, $_POST['cdp']);
		$pwd = hash("whirlpool", hash("gost", 'chocolat'.$pwd));
		$requete = "INSERT INTO `members`(`mdp`, `admin`, `adresse`, `mail`, `ville`, `cdp`, `prenom`, `nom`) VALUES ('".$pwd."', '0','".$adresse."','".$mail."','".$ville."','".$cdp."','".$prenom."','".$nom."')";
		$b = mysqli_query($bdd, $requete);
		if ($b == false)
			echo mysqli_error($bdd);
		mysqli_close($bdd);
?>
