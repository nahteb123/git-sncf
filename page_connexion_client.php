<?php 
session_start() ;
if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['login']) && isset($_POST['mdp'])) {  // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
        // donnes du formulaire mise en variable
        $login = $_POST['login'] ;
        $mdp = $_POST['mdp'] ;
        $erreur = "" ;
        //connection à la base de donnés sql
        $nom_serveur = "localhost";
        $utilisateur = "root";
        $mot_de_passe ="";
        $nom_base_données ="egosoin" ;
        $lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
        //Requete sql
        $req = mysqli_query($lien , "SELECT * FROM patient WHERE P_login = '$login' AND P_mdp ='$mdp' ") ; //on verifie si le login et le mot de passe donnés existent bien dans la base de donnés
        $num_ligne = mysqli_num_rows($req) ;
        if($num_ligne > 0){ //si la requete renvoie 0 ligne, on renvoie une erreur sinon on le rediriger sur sa page de connexion
            header("Location:bienvenu.php") ;
            $_SESSION['login'] = $login ;  
        }else {
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
        }
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire de connexion</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class ='body-test'>
    <section>
        <h1 class="titre_connexion_client"> Connexion page client</h1>
        <?php 
        if(isset($erreur)){
            echo "<p class= 'Erreur'>".$erreur."</p>"  ;// permet de faire l'affichage de l'erreur si elle se produit
        }
        ?>
        <form action="" method="POST" class="formulaire_connexion"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
            <label>E_mail</label>
            <input type="text" name="login" class="info_connexion_formulaire">
            <label >Mot de Passe</label>
            <input type="password" name="mdp" class="info_connexion_formulaire">
            <div class="inscription_client_et_validation">
                 <a class="lien_inscription" href="./inscription_client.php">S'inscrire</a>
                <input type="submit" value="Valider" name="boutton-valider" class="button_valider">
            </div>
            
        </form>
    </section> 
    </body>
</html>