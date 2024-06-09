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
    if (isset($_GET['id']) && (isset($_POST['validation']))) {
        $id = $_GET['id'];
        //connection à la base de donnés sql
        $nom_serveur = "mysql-ethanbermond.alwaysdata.net";
        $utilisateur = "340115";
        $mot_de_passe ="N@hteb2004";
        $nom_base_données ="ethanbermond_3" ;
        $lien = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_données);
        //Requete sql
        $query = "DELETE FROM trajet WHERE ID_trajet = $id"; 
        $req =  mysqli_query($lien, $query);
        header("Location:ath_admin.php");
    }

    if (isset($_POST['refus'])) { 
        header("Location:ath_admin.php");
    }

    ?>

    <section class="validation_delete"><!-- formulaire pour confirmer la suppression d'un rdv donné -->
        <form method="POST" class="creation_rdv">
            <label> Etes vous sur de vouloir supprimer ce rdv?</label>
            <div class="button_delete">
                <button name="validation">oui</button>
                <button name="refus">non</button>
            </div>
        </form>
    </section>
</body>

</html>