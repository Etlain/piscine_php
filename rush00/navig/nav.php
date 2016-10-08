<?php
	session_start();
?>
<ul id="navig">
	<li><a href="?nav=accueil">Accueil</a></li>
	<li><a href="?nav=panier">Panier</a></li>
	<li><a href="?nav=connect">Mon Compte</a></li>
<?php
if ($_SESSION['login'] !== '')
	{
?>
	<li><a href="?nav=logout">Deconnection</a></li>
<?php
	}
?>
</ul>
