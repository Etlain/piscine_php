<?php
	session_start();
	//include("session/auth.php");
	if ($_POST['submit'] === "creer" && is_mail($_POST['mail']) === false && isset($_POST['passwd']))
	{	
		$_session['login'] = $_POST['mail'];
		include('compte/create_compte.php');
?>
	<p>le compte a bien ete creer</p>
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
	mail<span style="margin-left:32px;">:</span> <input type="text" name="mail" required="required">
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
	cdp<span style="margin-left:35px;">:</span> <input type="text" name="cdp" required="required">
	<br />
	<br />	
	<input type="submit" name="submit" value="creer">
</form>
<?php }?>
