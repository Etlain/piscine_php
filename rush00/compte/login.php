<?php
	session_start();
	include('session/auth.php');
	//include('compte/is_admin.php');
	if ($_POST['submit2'] === "OK" && auth($_POST['mail2'], $_POST['passwd2']) !== FALSE)
	{
		$_SESSION['login'] = $_POST['mail2'];
		if (is_admin($_SESSION['login']))
			$_SESSION['droit'] = '1';
		else
			$_SESSION['droit'] = '0';
?>
	<p>Bienvenue <?php echo $_SESSION['login']?></p>
<?php
	}
	else if (isset($_SESSION['login']) && $_SESSION['login'] !== '')
	{
		//print_r ($_SESSION);
		//echo $_SESSION['login'];
		include ("compte/modif.php");
	}
	else
	{
		$_SESSION['login'] = '';
?>
<h2>Connection</h2>
<form action="#" method="post">
	mail<span style="margin-left:35px;">:</span> <input type="text" name="mail2" required="required">
	<br />
	<br />
	password : <input type="password" name="passwd2" required="required">
	<br />
	<br />
	<input type="submit" name="submit2" value="OK">
</form>
<?php 
	include("compte/create.php");
	}
?>
