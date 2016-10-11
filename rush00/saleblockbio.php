<?php
    include("connectdbb.php");
   
    $req = "SELECT * FROM items WHERE bio=1";
    
    $lolcats = mysqli_query($conn, $req);
    if ($lolcats == false)
        echo 'probleme';
    ?>
    <div class="allarticles">


  <?php
    while($ke = mysqli_fetch_row($lolcats))
    {
        echo   '<div class="article">';
        echo '<div class="info">';
        echo '<h3>'.$ke['1'].'</h3>';
        echo '<img class="artimg" src="'.$ke['16'].'">';
        echo '<br /><h4> Provenance : '.$ke['14'].'</h4>';
        echo '<p> '.$ke['15'].'</p>';
        echo '<h4>prix : '.$ke['3'].'€ / '.$ke['2'].'</h4>';
        echo '<br />';
        echo '<form method="post" action="addtopanier.php">';
        echo 'Variétés : <br />';
        echo '<input type="radio" name="variete"  value="'.$ke['4'].'" required />'.$ke['4'].'<br />';
        if (isset($ke['6']))
            echo '<input type="radio" name="variete"  value="'.$ke['6'].'" />'.$ke['6'].'<br />';
        if (isset($ke['8']))
            echo '<input type="radio" name="variete"  value="'.$ke['8'].'" />'.$ke['8'].'<br />';
        echo 'Quantité : <input type="number" min="0" max="10" name="quantite" required/>';
        echo'<input type="hidden" name="article" value="'.$ke['1'].'" />';
        echo '<input type="hidden" name="page" value="bio.php" />';
        echo '<br />';
        echo '<input type="submit" value="Ajouter au panier" />';
        echo '</form>';
        echo '</div>';
        echo '</div>';    }

    
    mysqli_close($conn);
?>
</div>