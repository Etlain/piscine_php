<?php
	session_start();
	include("install.php");
?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="index.css">
<title>Title</title>
</head>
<body>
<header>
	<h1>Title</h1>
	<nav>
<?php	include("navig/nav.php"); ?>
	</nav>
</header>
<div id="container">
	<aside id="categorie">
	test
	</aside>
	<section id="corps">
<?php
	if ($_GET['nav'] === 'connect')
		include("compte/login.php");
	else if ($_GET['nav'] === 'create')
		include("compte/create.php");
	else if ($_GET['nav'] == 'logout')
		include("session/logout.php");
	else
		echo 'bonjour, bienvenue sur notre site';
?>
	</section>
</div>
<footer>
</footer>
</body>
</html>
