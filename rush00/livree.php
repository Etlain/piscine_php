<?php
    session_start();
    header('location:commandes.php');
    include("connectdbb.php");
    if (isset($_POST['members']))
    {
    $lid = strip_tags($_POST['members']);
    $req = "UPDATE vente SET livre='1' WHERE membre='$lid' AND vendu=1";
    $lolcats = mysqli_query($conn, $req);
    if ($lolcats == false)
    echo 'probleme 2';
    $req2 = "UPDATE vente SET vendu='0' WHERE membre='$lid' AND vendu=1";
    $lolcats2 = mysqli_query($conn, $req2);
    if ($lolcats2 == false)
    echo 'probleme 2';
        mysqli_close($conn);
    }
?>
