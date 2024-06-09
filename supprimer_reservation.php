<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class='body-test'>

    <?php
    if (isset($_GET['id1']) && isset($_GET['id2']) && (isset($_POST['validation']))) {
        echo "test";
        $id1 = $_GET['id1'];
        $id2 = $_GET['id2'];
       $id_client= $_SESSION['login'];
        //connection à la base de donnés sql
        $nom_serveur = "mysql-ethanbermond.alwaysdata.net";
        $utilisateur = "340115";
        $mot_de_passe ="N@hteb2004";
        $nom_base_données ="ethanbermond_3" ;
        $lien = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_données);
        //Requete sql
        $query = "DELETE FROM reserver WHERE id_train = $id1 AND Id_client = $id2  "; 
        $req =  mysqli_query($lien, $query);
        header("Location:liste_reservation.php");
    }

    if (isset($_POST['refus'])) { 
        header("Location:liste_reservation.php");
    }

   ?>

    <section class="validation_delete"><!-- formulaire pour confirmer la suppression d'un rdv donné -->
        <form method="POST" class="reservation">
            <label> Voulez-vous supprimer cet réservation?</label>
            <div class="button_delete">
                <button name="validation" class ="button">oui</button>
                <button name="refus" class ="button">non</button>
            </div>
        </form>
    </section>
</body>

</html>