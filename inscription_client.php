<?php 
session_start() ;
if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['Nom']) && isset($_POST['Prenom'])) {  // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
        // donnes du formulaire mise en variable
        $email = $_POST['email'] ;
        $mdp = $_POST['mdp'] ;
        $nom = $_POST['Nom'] ;
        $prenom = $_POST['Prenom'] ;
        $erreur = "" ;
        //connection à la base de donnés sql
        $nom_serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe ="";
        $nom_base_données ="sncf2" ;
        $passwordHash = hash("sha256",$mdp);
        $lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
        //Requete sql
        $req = mysqli_query($lien , "INSERT INTO client VALUES( '','$nom', '$prenom', '$email','$passwordHash'  ) ") ; //on verifie si le login et le mot de passe donnés existent bien dans la base de donnés
        header("Location:connexion_client.php") ;
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription client</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class ='body-test'>
    <section>
        <h1 class="titre_connexion_client"> Inscription</h1>
        <?php 
       
        ?>
        <form action="" method="POST" class="formulaire_connexion"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
            <label>E_mail</label>
            <input type="text" name="email" class="info_connexion_formulaire">
            <label >Mot de Passe</label>
            <input type="password" name="mdp" class="info_connexion_formulaire">
            <label>Nom</label>
            <input type="text" name="Nom" class="info_connexion_formulaire">
            <label>Prenom</label>
            <input type="text" name="Prenom" class="info_connexion_formulaire">
            <div class="validation_inscription_client">
                <input type="submit" value="Valider" name="boutton-valider" class="button_valider2">
            </div>
            
        </form>
    </section> 
    </body>
</html>