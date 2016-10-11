<?php
	session_start();
	//include("session/auth.php");
	if ($_POST['submit'] === "creer" && is_mail($_POST['mail']) === false && isset($_POST['passwd']))
	{	
		//$_SESSION['login'] = $_POST['mail'];
		include('compte/create_compte.php');
?>
	<p>Le compte est maintenant actif.</p>
<?php
	}
	else
	{
?>
<h2>Creer compte</h2>
<form action="#" method="post">
	nom<span style="margin-left:32px;">:</span> <input type="text" name="nom" required="required">
	<br />
	<br />
	prenom<span style="margin-left:12px;">:</span> <input type="text" name="prenom" required="required">
	<br />
	<br />
	mail<span style="margin-left:32px;">:</span> <input type="email" name="mail" required="required">
	<br />
	<br />
	password: <input type="password" name="passwd" required="required">
	<br />
	<br />
	adresse<span style="margin-left:12px;">:</span> <input type="text" name="adresse" required="required">
	<br />
	<br />
	ville<span style="margin-left:30px;">:</span> <input type="text" name="ville" required="required">
	<br />
	<br />
	Code postal <span style="margin-left:35px;">:</span> <input type="number" min="10" max="999999" name="cdp" required="required">
	<br />
	<br />	
	<input type="submit" name="submit" value="creer">
</form>
<?php }?>
