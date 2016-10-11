<?php
    include("connectdbb.php");
    $blue = session_id();
    $req = "SELECT * FROM vente WHERE membre='$blue' AND panier=1";
    
    $lolcats = mysqli_query($conn, $req);
    if ($lolcats == false);
		//echo 'probleme';
	else
	//$_SESSION['contenupanier']= 0;
	{
    echo '<div class="allpanier">';
    $lct = 0;
    $sesure = (intval(session_id()) * 4) + 42;
    echo   '<div class="aallpanier">';
    while($ke = mysqli_fetch_row($lolcats))
        {
            echo '<div class="articlepanier">';
            $lid = $ke['0'];
            echo '<h3>'.$ke['1'].' (variété : '.$ke['2'].')</h3>';
            echo '<h4> Vous avez choisi '.$ke['5'].' articles à '.$ke['3'].' euros.</h4>';
            echo '<h3 class="lefted"> Total: '.$ke['4'].' euros.</h3>';
            $lct = $lct + $ke['4'];
            echo '<form method="post" action="changepanier.php">';
            echo 'Modifier la quantité :  <input type="number" min="1" max="10" name="quantite" />';
            echo '<input type="submit" name="modifier" value="modifier" />';
            echo '<input type="hidden" name="mega" value="'.$sesure.'" />';
            echo '<input type="hidden" name="lid" value="'.$ke['0'].'" />';
            echo '<input type="submit" name="supprimer" value="supprimer cet article" />';
            echo '</form>';
            echo '</div>';
            
		}
	}
    if ($lct > 0)
    {
        if ($lct < 20)
        {
            echo '<h4 class="lefted"> Frais de livraison :  4 euros (GRATUIT dès 20 euros d\'achat)</h4>';
            $lct = $lct + 4;
        }
        echo'<br /><h3 class="lefted"> Total à Payer : '.$lct.' euros </h3>';
        echo '<form class="lefted" method="post" action="endorder.php">';
        if(($_SESSION['login'])!= NULL)
        {
            echo '<input class="lefted" type="submit" name="ok" value="Confirmer ma commande" />';
        }
        else
        {
            echo'<h4 class="lefted">Vous devez vous connecter pour confirmer votre commande.</h4>';
        }
        echo '</form>';
    }
    else
    {
        if(isset($_SESSION['orderok']) AND $_SESSION['orderok'] == 1)
        {
            echo '<h3>Merci pour votre commande ! Elle sera livrée sous deux jours ouvrables. N\'oubliez pas de payer votre commande au livreur à sa récéption !</h3>';
            $_SESSION['orderok'] = 0;
        }
        else
            echo '<h3>Votre Panier est vide. Mais rassurez vous : nos pages regorgent de délicieux produits.</h3>';
    }
        echo '</div>';

    
    mysqli_close($conn);
    ?>

