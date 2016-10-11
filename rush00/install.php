<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "base";
$conn = new mysqli($servername, $username, $password);
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
	echo "!!!!ERREUR!!!!!! erreur de connection a la base de donnees\n";
}
if (!(mysqli_select_db($conn, $dbname)))
{
	$sql = "CREATE DATABASE $dbname";
	if ($conn->query($sql))
	{
		//echo "Creation reussie\n";
	}
	else
	{
		echo "!!!!!!ERREUR!!!!!!!! Creation echouee\n";
	}
}
/*else
	return;*/
mysqli_close($conn);
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
	echo "erreur de commection a la base de donnees";
}
if(TRUE )
{
	$sql = "CREATE TABLE members (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, mdp VARCHAR (255) NOT NULL, admin BOOL NOT NULL, 
		adresse VARCHAR (255) NOT NULL, mail VARCHAR (50) NOT NULL, ville VARCHAR (50) NOT NULL, cdp INT NOT NULL, prenom VARCHAR (50) NOT NULL, nom VARCHAR (50) NOT NULL, fid INT, achat INT)";
	if (mysqli_query($conn, $sql))
	{
		$pwd = hash("whirlpool", hash("gost", 'chocolat'."admin"));
		$sql = "INSERT INTO `members`(`mdp`, `admin`, `adresse`, `mail`, `ville`, `cdp`, `prenom`, `nom`) VALUES ('".$pwd."','1','partout','admin','internet','4242','admin','admin')";
		mysqli_query($conn, $sql);
		//echo "table members ok \n";
	}
	else
	{
		//echo "!!!!!ERREUR!!!!!! table members non cree \n";
	}
}
if(TRUE )
{
	$sql = "CREATE TABLE items (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, article VARCHAR (50) NOT NULL, conditionnement VARCHAR (50) NOT NULL, 
		prix INT NOT NULL, variete1 VARCHAR (50) NOT NULL, stock1 INT, variete2 VARCHAR (50), stock2 INT, variete3 VARCHAR (50), stock3 INT, bio BOOL, 
		lowcost BOOL, legume BOOL, fruit BOOL, provenance VARCHAR (50) NOT NULL, description VARCHAR (255), image VARCHAR (255))";
	if (mysqli_query($conn, $sql))
	{
		include("additems.php");
		//echo "table items ok \n";
	}
	else
	{
		//echo "!!!!!ERREUR!!!!!! table items non cree \n";
	}
}
if(TRUE )
{
	$sql = "CREATE TABLE vente (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, article VARCHAR (50) NOT NULL, variete VARCHAR (50) NOT NULL, prix INT NOT NULL, total INT NOT NULL, quantite INT NOT NULL, panier BOOL, vendu BOOL, livre BOOL, membre VARCHAR (255), connected BOOL, time TIMESTAMP NOT NULL)";
	if (mysqli_query($conn, $sql))
	{
		//echo "table vente ok \n";
	}
	else
	{
		mysqli_error($conn);	//echo "!!!!!ERREUR!!!!!! table vente non cree \n";
	}
}	
if(TRUE )
{
	$sql = "CREATE TABLE nom_categorie (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, categorie VARCHAR (50) NOT NULL)";
	if (mysqli_query($conn, $sql))
	{
		mysqli_query($conn, "INSERT INTO `nom_categorie`(`categorie`) VALUES ('bio')");
		mysqli_query($conn, "INSERT INTO `nom_categorie`(`categorie`) VALUES ('lowcost')");
		mysqli_query($conn, "INSERT INTO `nom_categorie`(`categorie`) VALUES ('legume')");
		mysqli_query($conn, "INSERT INTO `nom_categorie`(`categorie`) VALUES ('fruit')");
		//echo "table vente ok \n";
	}
	else
	{
		//echo "!!!!!ERREUR!!!!!! table vente non cree \n";
	}
}
//echo "fin d'initialisation !\n ";

?>
