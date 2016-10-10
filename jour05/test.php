<?php
	$serveur = 'localhost';
	$mdp = 'admin';
	$log = 'admin';
	$name_bdd = 'db_mmouhssi';
	$bdd = mysqli_connect($serveur, $log, $mdp, $name_bdd);
	mysqli_query($bdd, "CREATE TABLE ft_table (id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL, login VARCHAR(8) DEFAULT 'toto' NOT NULL, groupe ENUM('staff', 'student', 'other') NOT NULL, date_de_creation DATE NOT NULL)");
	echo mysqli_error($bdd);
	mysqli_close($bdd);
?>
