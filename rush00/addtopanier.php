<?php
    session_start();
    if (isset($_POST['page']))
    $head = strip_tags($_POST['page']);
    else
    $head = index.php;
    header('location: '.$head);
    include("connectdbb.php");
    if (isset($_POST['article']) AND isset($_POST['quantite']) AND isset($_POST['variete']))
    {
        //ligne 8
        $reqart = strip_tags($_POST['article']);
        $rqte = strip_tags($_POST['quantite']);
        $rvar = strip_tags($_POST['variete']);
        //ligne12
        $req = "SELECT * FROM items WHERE article='$reqart'";
        $lol = mysqli_query($conn, $req);
        if ($lol == false)
            echo 'probleme';
        $ke = mysqli_fetch_row($lol);
        if ($ke)
        {
            //ligne 20
            if($ke['4'] === $rvar && ($ke['5'] - intval($rqte)) >= 0 )
               $var = $ke['4'];
            else if($ke['6'] === $rvar && ($ke['7'] - intval($rqte)) >= 0 )
                $var = $ke['6'];
            else if($ke['8'] === $rvar && ($ke['9'] - intval($rqte)) >= 0 )
                $var = $ke['8'];
            else
                $var = FALSE;
           // if ($var === FALSE)
                  //  $head = wrongchoice.php;
            //else
           // {
                    //ligne 32
			//include("cleanventes.php");
			if($var !== FALSE)
			{
            $article = $ke['1'];
            $vari  = $var;
            $prix = $ke['3'];
            $qte = intval($rqte);
            $total = $prix * $qte;
            $seesid = session_id();
            $iscon = 1; //a changer plus tard
                $req = "INSERT INTO vente (id,article,variete,prix,total,quantite,panier,vendu,livre,membre,connected,time) VALUES (NULL,'$article','$vari','$prix','$total','$qte','1',NULL,NULL,'$seesid','$iscon', NOW())";
                $ok = mysqli_query($conn, $req);
                if ($ok == false)
                {
                    echo mysqli_error($conn);
                }
            if(!(isset($_SESSION['contenupanier'])))
                $_SESSION['contenupanier'] = 0;
			$_SESSION['contenupanier'] = $_SESSION['contenupanier'] + intval($rqte);
			}
            mysqli_close($conn);
        }
    }
    
?>

<?PHP

