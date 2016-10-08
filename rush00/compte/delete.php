<?php	
	session_start();
	//include("session/auth.php");
	if ($_POST['delete'] === "Supprimer" && auth($_SESSION['login'], $_POST['passwd4']))
	{
		include('compte/delete_compte.php');
		$_SESSION['login'] = '';
?>
	<p>le compte a bien ete supprimer</p>
<?php
	}
	else
	{
?>
<h2>Supprimer Compte</h2>
<form action="#" method="post">
	password: <input type="password" name="passwd4" required="required">
	<br />
	<br />
	<input type="submit" name="delete" value="Supprimer">
</form>
<?php
	}
?>
