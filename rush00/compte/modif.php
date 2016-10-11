<?php
	session_start();
	//include("session/auth.php");
	if ($_POST['submit3'] === "modifier" && is_mail($_SESSION['login']))
	{
		include('compte/modif_compte.php');
?>
	<p>le compte a bien ete modifier</p>
<?php
	}
	else
	{
?>
	<?php echo "Salut, ".$_SESSION['login']; ?>
<h2>Modif compte</h2>
<p>
	nom<span style="margin-left:32px;">:</span> <?php echo info_compte($_SESSION['login'], "nom");?>
	<br />
	<br />
	prenom<span style="margin-left:12px;">:</span> <?php echo info_compte($_SESSION['login'], "prenom");?>
	<br />
	<br />
	mail<span style="margin-left:32px;">:</span> <?php echo info_compte($_SESSION['login'], "mail");?>
	<br />
	<br />
	adresse<span style="margin-left:12px;">:</span> <?php echo info_compte($_SESSION['login'], "adresse");?>
	<br />
	<br />
	ville<span style="margin-left:30px;">:</span> <?php echo info_compte($_SESSION['login'], "ville");?>
	<br />
	<br />
	cdp<span style="margin-left:35px;">:</span> <?php echo info_compte($_SESSION['login'], "cdp");?>
	<br />
	<br />	
</p>
<form action="#" method="post">
	nom<span style="margin-left:32px;">:</span> <input type="text" name="nom3" required="required">
	<br />
	<br />
	prenom<span style="margin-left:12px;">:</span> <input type="text" name="prenom3" required="required">
	<br />
	<br />
	mail<span style="margin-left:32px;">:</span> <input type="text" name="mail3" required="required">
	<br />
	<br />
	password: <input type="password" name="passwd3" required="required">
	<br />
	<br />
	adresse<span style="margin-left:12px;">:</span> <input type="text" name="adresse3" required="required">
	<br />
	<br />
	ville<span style="margin-left:30px;">:</span> <input type="text" name="ville3" required="required">
	<br />
	<br />
	cdp<span style="margin-left:35px;">:</span> <input type="text" name="cdp3" required="required">
	<br />
	<br />	
	<input type="submit" name="submit3" value="modifier">
</form>
<?php
		include("delete.php");
	}
?>
