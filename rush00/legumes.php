<?php
    session_start();
    ?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./index.css">
<title>legumes</title>
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
    include("welcomelegumes.php");
    include("saleblocklegumes.php");
    }
?>
</section>
</div>
<footer>
</footer>
</body>
</html>
