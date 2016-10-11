<?php
    session_start();
    header('location: index.php?nav=panier');
    include("connectdbb.php");
    
    if($_SESSION['login'] != NULL)
    {
    $blue = session_id();
    $req = "SELECT * FROM vente WHERE membre='$blue' AND panier=1";
    
    $lolcats = mysqli_query($conn, $req);
    if ($lolcats == false)
    echo 'probleme';
    while($ke = mysqli_fetch_row($lolcats))
    {
        $zero = $ke['0'];
        $lolog = $_SESSION['login'];
        $req1 = "UPDATE vente SET vendu=1 WHERE id='$zero' AND panier=1";
        $req2 = "UPDATE vente SET panier=0 WHERE id='$zero' AND panier=1";
        $req3 = "UPDATE vente SET membre='$lolog' WHERE id='$zero'";
        $article = $ke['1'];
        $req4 = "SELECT * FROM  items WHERE article='$article'";
        $ls = mysqli_query($conn, $req1);
        $lsd = mysqli_query($conn, $req2);
        $lsd = mysqli_query($conn, $req3);
        $lsdata = mysqli_query($conn, $req4);
        if ($ls == false)
            echo 'error ls';
        if ($lsd == false)
            echo 'error lsd';
        $kem = mysqli_fetch_row($lsdata);
        $zerod = $kem['0'];
        if ($kem['4'] == $ke['2'])
        {
            $new = $kem['5'] - $ke['5'];
            $req5 = "UPDATE items SET stock1='$new' WHERE id='$zerod'";
        }
        else if ($kem['6'] == $ke['2'])
        {
            $new = $kem['7'] - $ke['5'];
            $req5 = "UPDATE items SET stock2='$new' WHERE id='$zerod'";
        }
        else if ($kem['8'] == $ke['2'])
        {
            $new = $kem['9'] - $ke['5'];
            $req5 = "UPDATE items SET stock3='$new' WHERE id='$zerod'";
        }
        $ls = mysqli_query($conn, $req5);
        $_SESSION['contenupanier'] = 0;
        $_SESSION['orderok'] = 1;
    }
    mysqli_close($conn);
    }
    ?>

