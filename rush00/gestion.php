<?php
	if ($_POST['ajouter_categorie'] == 'ajouter' && isset($_POST['categorie']) && $_POST['categorie'] != '')
	{
		$request = "INSERT INTO nom_categorie(categorie) VALUES ('".$_POST['categorie']."')";
		add_bdd($request);
		add_bdd("ALTER TABLE items ADD ".$_POST['categorie']." VARCHAR(50)");
		echo 'categorie creer avec succes';
	}
	else if ($_POST['delete_categorie'] == 'delete' && isset($_POST['categorie']) && $_POST['categorie'] != '')
	{
		echo $_POST['categorie'];
		add_bdd("ALTER TABLE items DROP ".$_POST['categorie']);
		$requete = "DELETE FROM `nom_categorie` WHERE `categorie`='".$_POST['categorie']."'";
		add_bdd($requete);
		echo 'categorie effacer';
	}
	else if ($_POST['ajouter_article'] == 'ajouter')
	{
		$request = "INSERT INTO items (article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES ('".$_POST['article']."', '".$_POST['poids']."', '".$_POST['prix']."', '".$_POST['variete1']."', '".$_POST['stock1']."', '".$_POST['variete2']."', '".$_POST['stock2']."', '".$_POST['variete3']."', '".$_POST['stock3']."', '".$_POST['bio']."', '".$_POST['lowcost']."', '".$_POST['legume']."', '".$_POST['fruit']."', '".$_POST['provenance']."', '".$_POST['description']."', '".$_POST['url_img']."')";
		add_bdd($request);
	}
	else
	{
?>
<a href="commandes.php">Commandes</a>
<h2>Gestion du Site</h2>
<form action="#" method="post">
	categorie :<input type="text" name="categorie" required="required"></input>
	<br />
	<br />
	<input type="submit" name="ajouter_categorie" value="ajouter"><input type="submit" name="delete_categorie" value="delete">
	<br />
	<br />
</form>
<h2>Ajout Article</h2>
<form action="#" method="post">
	article :<input type="text" name="article" required="required"></input>
	<br />
	<br />
	poids :<input type="text" name="poids" required="required"></input>
	<br />
	<br />
	prix :<input type="text" name="prix" required="required"></input>
	<br />
	<br />
	variete1 :<input type="text" name="variete1" required="required"></input>
	<br />
	<br />
	stock1:<input type="text" name="stock1" required="required"></input>
	<br />
	<br />
	variete2:<input type="text" name="variete2"></input>
	<br />
	<br />
	stock2 :<input type="text" name="stock2"></input>
	<br />
	<br />
	variete3 :<input type="text" name="variete3"></input>
	<br />
	<br />
	stock3 :<input type="text" name="stock3"></input>
	<br />
	<br />
	bio (boolen) :<input type="text" name="bio"></input>
	<br />
	<br />
	lowcost (boolen) :<input type="text" name="lowcost"></input>
	<br />
	<br />
	fruit(boolen):<input type="text" name="fruit"></input>
	<br />
	<br />
	legume(boolen):<input type="text" name="legume"></input>
	<br />
	<br />
	provenance :<input type="text" name="provenance"></input>
	<br />
	<br />
	description :<input type="text" name="description"></input>
	<br />
	<br />
	image(url) :<input type="text" name="url_img"></input>
	<br />
	<br />
	<input type="submit" name="ajouter_article" value="ajouter">
	<br />
	<br />
</form>
<?php	}
?>
