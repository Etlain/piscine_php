<div class="cont">
<div class="menulist"><a href="index.php"><img src="https://cdn0.iconfinder.com/data/icons/layout-and-location/24/Untitled-2-01-20.png" alt="acceuil" name="acceuil" /> Accueil</a></div>
<div class="menulist"><a href="?nav=panier" ><img src="https://cdn0.iconfinder.com/data/icons/seo-web-15/126/seo-social-web-network-internet_276-20.png" alt="panier" name="panier" /> Mon Panier <?php if(isset($_SESSION['contenupanier']) AND $_SESSION['contenupanier'] > 0) echo '('.$_SESSION['contenupanier'].' articles)'; ?></a></div>
<div class="menulist"><a href="?nav=connect" ><img src="https://cdn0.iconfinder.com/data/icons/users-android-l-lollipop-icon-pack/24/user-20.png" alt="compte" name="compte" /> Mon Compte</a></div>
<?php
if (isset($_SESSION['login']) && $_SESSION['login'] !== '')
{
	// condition pour eviter les personnes non connecter
?>
	<div class="menulist"><a href="?nav=logout">Deconnexion</a></div>
<?php
	if ($_SESSION['droit'] == 1)
	{
?>	<div class="menulist"><a href="?nav=gestion">Gestion du site</a></div>
<?php
	}
	}
?>
<!--<div class="menulist"><form method="post" action="search.php" ><img src="https://cdn4.iconfinder.com/data/icons/standard-free-icons/139/Find01-20.png" alt="acceuil" name="acceuil" /> <input type="search" placeholder="Que cherchez-vous ?" /></div>-->
</div>
