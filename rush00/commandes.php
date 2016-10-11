<?php
    session_start();
    if(!(isset($_SESSION['droit']) AND $_SESSION['droit'] == 1))
       {
       header("location: index.php");
       }
       ?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./index.css">
<title>Title</title>
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
    {
    include("suivicommandes.php");
    include("suivistock.php");
    }
?>
</section>
</div>
<footer>
</footer>
</body>
</html>
