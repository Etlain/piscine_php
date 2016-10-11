<?php	
	session_start();
	if ($_SESSION['droit'] === '1' && $_POST['confirmer'] === "Confirmer" && auth($_SESSION['login'], $_POST['pass_to_adm']) && is_mail($_POST['mail_to_adm']))
	{
		include('compte/create_admin.php');
?>
	<p>Un nouvel admin est nee</p>
<?php
	}
	else if ($_SESSION['droit'] === '1' && $_POST['confirmer2'] === "Confirmer" && auth($_SESSION['login'], $_POST['pass_to_adm2']) && is_mail($_POST['delete_compte']))
	{
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		$mail = mysqli_real_escape_string($bdd, $_POST['delete_compte']);
		$requete = "DELETE FROM `members` WHERE `mail`='".$mail."'";
		$b = mysqli_query($bdd, $requete);
		if ($b == false)
			echo mysqli_error($bdd);
		mysqli_close($bdd);
?>
	<p>Creve</p>
<?php
	}
	else
	{
?>
<h2>Donner droit admin a un compte</h2>
<form action="#" method="post">
	password: <input type="password" name="pass_to_adm" required="required">
	<br />
	<br />
	mail<span style="margin-left:32px;">:</span> <input type="text" name="mail_to_adm" required="required">
	<br />
	<br />
	<input type="submit" name="confirmer" value="Confirmer">
</form>
<h2>Supprimer un compte</h2>
<form action="#" method="post">
	password: <input type="password" name="pass_to_adm2" required="required">
	<br />
	<br />
	mail<span style="margin-left:32px;">:</span> <input type="text" name="delete_compte" required="required">
	<br />
	<br />
	<input type="submit" name="confirmer2" value="Confirmer">
</form>
<?php
	}
?>
