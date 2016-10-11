<?php
session_start();
//include("session/auth.php");
//include("compte/is_admin.php");
	function add_bdd($str)
	{
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
			echo 'error connection bdd';
		/*$str = mysqli_real_escape_string($bdd, $str);*/
		$b = mysqli_query($bdd, $str);
		echo mysqli_error($bdd);
		mysqli_close($bdd);
		return ($tab);
	}
		function is_admin($admin_mail)
		{
		$serveur = 'localhost';
		$mdp = 'admin';
		$log = 'admin';
		$name_bdd = "base";
		$bdd = mysqli_connect($serveur, $mdp, $log, $name_bdd);
		if ($bdd == false)
		{
			echo 'error connection bdd';
			return (false);
		}	
		$mail = mysqli_real_escape_string($bdd, $admin_mail);
		//echo 'test';
		$bool = mysqli_query($bdd, "SELECT admin FROM members WHERE mail='".$mail."'");
		$tab = mysqli_fetch_array($bool, MYSQLI_NUM);
		mysqli_free_result($bool);
		mysqli_close($bdd);
		if (isset($tab[0]) && $tab[0] === '1')
			return true;
		else
			return false;
		}
	if (!(isset($_SESSION['install_bdd'])) OR $_SESSION['install_bdd'] !== 'ok')
	{
		include("install.php");
		//echo 'ok';
		$_SESSION['install_bdd'] = 'ok';
	}
	/*else
		echo 'ko';*/
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./index.css">
<title>P.D.S</title>
</head>
<body>
<header>
<h2></h2>
<img class="logo" src="logo.png" title="logo" alt="logo">
<nav>
<?php	include("navig/nav.php"); ?>
</nav>
</header>
<div class="separe" ></div>
<div id="container">
<aside id="categorie">
<?php include("menu.php"); ?>
</aside>
<section id="corps">
<?php
	if ($_GET['nav'] === 'connect')
		include("compte/login.php");
	else if ($_GET['nav'] === 'create')
		include("compte/create.php");
	else if ($_GET['nav'] === 'logout')
		include("session/logout.php");
	else if ($_GET['nav'] == 'panier')
		include("panier.php");
	else if ($_GET['nav'] === 'gestion')
	{
		if (is_admin($_SESSION['login']) === true)
			include("gestion.php");
		else
			echo 'acces interdit';
	}
	else
    {
		include("welcome.php");
		include("saleblock.php");
    }
?>
</section>
</div>
<footer>
</footer>
</body>
</html>
