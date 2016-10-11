<?php
echo '<p>Articles en Stock : </p>';
    include("connectdbb.php");
    $req = "SELECT * FROM items";
    
    $lolcats = mysqli_query($conn, $req);
    if ($lolcats == false)
        echo 'probleme';
    //$_SESSION['contenupanier']= 0;
    

    $lct = 0;
    $member = '0z0z0';
    while($ke = mysqli_fetch_row($lolcats))
    {
        
        echo '<div class="articlepanier">';
        $lid = $ke['0'];
        echo '<h3>'.$ke['1'].' </h3>';
        echo '<form method="post" action="changestock.php">';
        echo 'Modifier la quantité de '.$ke['4'].' :  <input type="number" min="0" name="quantite1" placeholder="'.$ke['5'].'" /><br />';
         echo 'Modifier la quantité de '.$ke['6'].' :  <input type="number" min="0" name="quantite2" placeholder="'.$ke['7'].'" /><br />';
         echo 'Modifier la quantité de '.$ke['8'].' :  <input type="number" min="0" name="quantite3" placeholder="'.$ke['9'].'" /><br />';
        echo '<input type="submit" name="modifier" value="modifier" />';
        echo '<input type="hidden" name="lid" value="'.$ke['0'].'" />';
        echo '<input type="submit" name="supprimer" value="supprimer cet article" />';
        echo '</form>';
        echo '</div>';
        
        
    }
?>
