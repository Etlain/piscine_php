<?php
echo '<p>Commandes en cours : </p>';
    include("connectdbb.php");
    $req = "SELECT * FROM vente WHERE vendu=1 ORDER BY membre";
    
    $lolcats = mysqli_query($conn, $req);
    if ($lolcats == false)
        echo 'probleme';
    //$_SESSION['contenupanier']= 0;
    
    echo '<div class="allpanier">';
    $lct = 0;
    echo   '<div class="aallpanier">';
    $member = '0z0z0';
    while($ke = mysqli_fetch_row($lolcats))
    {
        if ($member != $ke['9'])
        {
            $member = $ke['9'];
            $req1 = "SELECT * FROM members WHERE mail='$member'";
            $lol = mysqli_query($conn, $req1);
            $kom = mysqli_fetch_row($lol);
            echo '<h4>Commande de '.$kom['7'].' '.$kom['8'].'. A livrer a '.$kom['3'].' '.$kom['6'].' '.$kom['5'].'.</h4>';
           echo '<h4>Mail de contact : '.$kom['4'].'</h4>';
            echo '<form method="post" action="livree.php">';
            echo '<input type="hidden" name="members" value="'.$member.'" />';
            echo '<input type="submit" name="supprimer" value="commande livree" />';
        }
            
        echo '<div class="articlepanier">';
        $lid = $ke['0'];
        echo '<h3>'.$ke['1'].' (variété : '.$ke['2'].')</h3>';
        echo '<h4> Quantité : '.$ke['5'].' articles.</h4>';
        $lct = $lct + $ke['4'];
        echo '</form>';
        echo '</div>';
        
    }
?>
