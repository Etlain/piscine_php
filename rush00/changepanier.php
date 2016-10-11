<?php
    session_start();
    header('location: index.php?nav=panier');
    include("connectdbb.php");
    
        
        if (isset($_POST['modifier']) AND isset($_POST['quantite'])  AND isset($_POST['lid']))
        {
            $lid = intval(strip_tags($_POST['lid']));
            $req = "SELECT * FROM vente WHERE id='$lid'";
            $lolcats = mysqli_query($conn, $req);
            if ($lolcats == false)
                echo 'probleme 1';
            $ke = mysqli_fetch_row($lolcats);
            $price = $ke['3'];
            $_SESSION['contenupanier'] = $_SESSION['contenupanier'] - $ke['5'] + intval(strip_tags($_POST['quantite']));
            $newq = intval(strip_tags($_POST['quantite']));
            $req = "UPDATE vente SET quantite='$newq' WHERE id='$lid '";
            $lolcats = mysqli_query($conn, $req);
            if ($lolcats == false)
                echo 'probleme 2';
            $newtotal = $price * $newq;
            $req = "UPDATE vente SET total='$newtotal' WHERE id='$lid '";
            $lolcats = mysqli_query($conn, $req);
            if ($lolcats == false)
                echo 'probleme 2';
        }
        else if(isset($_POST['supprimer']) AND  isset($_POST['lid']))
        {
            
            $lid = intval(strip_tags($_POST['lid']));
            $req = "SELECT * FROM vente WHERE id='$lid'";
            $lolcats = mysqli_query($conn, $req);
            if ($lolcats == false)
                echo 'probleme 1';
            $ke = mysqli_fetch_row($lolcats);
            $_SESSION['contenupanier'] = $_SESSION['contenupanier'] - $ke['5'];
            
            $req = "DELETE FROM vente WHERE id='$lid'";
            $lolcats = mysqli_query($conn, $req);
            if ($lolcats == false)
                echo 'probleme 2';
        }
        mysqli_close($conn);

    ?>