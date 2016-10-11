<?php
$Servername = "localhost";
$username ="admin";
$password ="admin";
$dbname = "base";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn)
{

	$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Tomates bio', '500g', '2.99', 'Saint Pierre', '100', 'Coeur de Boeuf', '50', NULL, NULL, '1', NULL, '1', '1', 'France', 'De belles tomates fraiches et juteuses cultivées avec soin par nos fermiers.', 'http://amelioretasante.com/wp-content/uploads/2014/05/Tomate-500x333.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "1!!!!ERROR!!!!!!";
	}

$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Clémentines', '1kg', '3.99', 'clémenvilla', '80', NULL, NULL, NULL, NULL, NULL, '1', NULL, '1', 'Corse ou Espagne', 'Des bons fruits qui annoncent le début de l\' hiver...', 'http://www.lanutrition.fr/images/stories/images-principales/m_clementines-vrac.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "2!!!!ERROR!!!!!!";
	}

$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Cerises Bio', '1kg', '5.99', 'Burlat', '70', 'Reverchon', '50', NULL, NULL, '1', NULL, NULL, '1', 'France', 'On a les cerises. Ou est le gâteau ?', 'http://www.terragourma.fr/wp-content/uploads/2016/06/cerises-blog.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "3!!!!ERROR!!!!!!";
	}

$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Courge Bio', '1 pièce', '3.99', 'Potiron', '300', NULL, NULL, NULL, NULL, '1', NULL, '1', NULL, 'France', 'Nul besoin d\'être un fantome d\'Halloween pour apprécier ce légume. Soupe, gateau, Gratin : A vous de voir ...', 'https://www.foodette.fr/wp-content/uploads/2014/09/soupe-potimarron.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "4!!!!ERROR!!!!!!";
	}

$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Poireaux', '500g environ', '1.99', 'Armor', '100', 'Jaune du Poitou', '50', NULL, NULL, NULL, '1', '1', NULL, 'Belgique', 'Ces poireaux sont délicieux. Si vous êtes pas encore convaincu de cela, goûtez-les sans attendre !', 'http://lespaniers.aptitudsports.com/wp-content/uploads/2013/01/Poireaux_1.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "5!!!!ERROR!!!!!!";
	}
    
$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Haricots Bio', '1kg', '3.99', 'organdi', '100', NULL, NULL, NULL, NULL, '1', '1', '1', NULL, 'France', 'Bio et pas cher : ces haricots fermiers cultivés en Ile-De-France raviront votre palais et votre porte-monnaie', 'http://www.detentejardin.com/sites/art-de-vivre/files/styles/large/public/haricot_vert_crockett_fotolia.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "6!!!!ERROR!!!!!!";
	}

$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Pommes de Terre', 'sac de 2 kg', '4.99', 'Adriana', '200', NULL , NULL , NULL, NULL, NULL, '1', '1', NULL, 'France', 'Gardez la frite avec nos patates francaises', 'http://www.mgc-prevention.fr/wp-content/uploads/2014/10/pomme_de_terre_107052713.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "7!!!!ERROR!!!!!!";
	}
$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Radis', 'Barquette de 400g', '2.99', 'radic commun', '150', NULL, NULL, NULL, NULL, NULL, '1', '1', NULL, 'France', 'Ca ne coûte pas un radis... enfin si mais ca reste pas cher !', 'http://media.ooreka.fr/public/image/plant/34/mainImage-source-9343007.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "8!!!!ERROR!!!!!!";
	}

$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Carottes', '1 kg', '3.99', 'Carrotes communes', '100', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, 'France', 'Approuvées par nos lapins.', 'http://mbc.intnet.mu/sites/default/files/field/image/Carottes_Descary_Descary.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "9!!!!ERROR!!!!!!";
	}
    
$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Pommes Bio', '2kg', '4.5', 'Granny Smith', '200', NULL , NULL, NULL, NULL, '1', '1', NULL, '1', 'France', 'Ces pommes bio raviront petits et grands', 'http://www.tbvergers.fr/fr/wp-content/uploads/2013/01/iStock_000008686959Small.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "10!!!!ERROR!!!!!!";
	}

$one = "INSERT INTO items (id, article, conditionnement, prix, variete1, stock1, variete2, stock2, variete3, stock3, bio, lowcost, legume, fruit, provenance, description, image) VALUES (NULL, 'Abricots de saison', '1kg', '3.99', 'Orangered', '70', 'Rouge du Rousillon', '50', 'Bergeron', '50', NULL, '1', NULL, '1', 'France', 'Encore un fruit cultivé avec amour par nos agriculteurs !', 'http://www.aux-fourneaux.fr/wp-content/uploads/2014/06/abricot2.jpg')";
	if(!(mysqli_query($conn, $one)))
	{
		echo "11!!!!ERROR!!!!!!";
	}
 
	mysqli_close($conn);
}
?>
