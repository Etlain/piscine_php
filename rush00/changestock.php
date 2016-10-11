<?php
    session_start();
    header('location: commandes.php');
    include("connectdbb.php");
    
    if($_SESSION['droit'] == 1)
    {
    
    if (isset($_POST['modifier'])  AND isset($_POST['lid']))
    {
        if (isset($_POST['quantite1']) AND $_POST['quantite1'] != NULL)
        {
        $newv = intval(strip_tags($_POST['quantite1']));
        $lid = intval(strip_tags($_POST['lid']));
        $req = "UPDATE items SET stock1='$newv' WHERE id='$lid '";
        $lolcats = mysqli_query($conn, $req);
        if ($lolcats == false)
            echo 'probleme 2';
        }
        
        if (isset($_POST['quantite2']) AND $_POST['quantite2'] != NULL)
        {
            $newv = intval(strip_tags($_POST['quantite2'])) ;
            $lid = intval(strip_tags($_POST['lid']));
            $req = "UPDATE items SET stock2='$newv' WHERE id='$lid '";
            $lolcats = mysqli_query($conn, $req);
            if ($lolcats == false)
                echo 'probleme 2';
        }
    
        if (isset($_POST['quantite3']) AND $_POST['quantite3'] != NULL)
        {
            $newv = intval(strip_tags($_POST['quantite3'])) ;
            $lid = intval(strip_tags($_POST['lid']));
            $req = "UPDATE items SET stock3='$newv' WHERE id='$lid '";
            $lolcats = mysqli_query($conn, $req);
            if ($lolcats == false)
                echo 'probleme 2';
        }
    
    
    }
    else if(isset($_POST['supprimer']) AND  isset($_POST['lid']))
    {
        $lid = intval(strip_tags($_POST['lid']));
        $req = "DELETE FROM items WHERE id='$lid'";
        $lolcats = mysqli_query($conn, $req);
        if ($lolcats == false)
            echo 'probleme 2';
    }
    mysqli_close($conn);
    }
    ?>