
<?php 

session_start() ;
?>

<?php 
    if(isset($_POST['boutton-valider'])){  
        if( isset($_POST['date_depart']) && isset($_POST['date_arrivee']) && isset($_POST['heure_depart']) && isset($_POST['heure_arrivee']) && isset($_POST['train_utilisé']) && isset($_POST['nom_gare_depart'])&& isset($_POST['nom_gare_arrivee'])&& isset($_POST['nom_train'])) { 
            $date_depart = $_POST['date_depart'] ;
            $date_arrivee = $_POST['date_arrivee'] ;
            $heure_depart = $_POST['heure_depart'] ;
            $heure_arrivee = $_POST['heure_arrivee'] ;
            $nom_gare_depart = $_POST['nom_gare_depart'] ;
            $nom_gare_arrivee = $_POST['nom_gare_arrivee'] ;
            $nom_train = $_POST['nom_train'] ;
            
            $erreur = "" ;
            //connection à la base de donnés sql
            $nom_serveur = "mysql-ethanbermond.alwaysdata.net";
        $utilisateur = "340115";
        $mot_de_passe ="N@hteb2004";
        $nom_base_données ="ethanbermond_3" ;
            //Requete sql
            $lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
            $req1 =mysqli_query($lien , "INSERT INTO trajet VALUES(6, '$date_depart', '$date_arrivee', '$heure_depart', '$heure_arrivee','$nom_train') " ) ;
            $req2 =mysqli_query($lien , "INSERT INTO avoir VALUES( 5 ,'$nom_gare_depart') " ) ;
            $req3 =mysqli_query($lien , "INSERT INTO avoir VALUES(5,  '$nom_gare_arrivee') " ) ;
            $req4 =mysqli_query($lien , "INSERT INTO creer VALUES(5,  6) " ) ;
            
            echo " votre rdv a été crée";
            header("Location:ath_admin.php") ;
        }
    }
?>








<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de connexion</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class ='body-test'>
    <section>
        <h1> Création trajet train</h1>
        <form class="form-connexion" action="" method="POST"> 
            <label>date_depart</label>
            <input type="date" name="date_depart">
            <label>date_arrivee</label>
            <input type="date" name="date_arrivee">
            <label>heure_depart</label>
            <input type="time" name="heure_depart">
            <label>heure_arrivee</label>
            <input type="time" name="heure_arrivee">
            <label>train_utilisé</label>
            <input type="text" name="train_utilisé">
            <label>nom_gare_depart</label>
            <input type="text" name="nom_gare_depart">
            <label>nom_gare_arrivee</label>
            <input type="text" name="nom_gare_arrivee">
            <label>nom_train</label>
            <input type="text" name="nom_train">
            <input type="submit" value="Valider" name="boutton-valider">

        </form>
    </section> 
    </body>
</html>