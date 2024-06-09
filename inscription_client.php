<?php 
session_start() ;
if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['Nom']) && isset($_POST['Prenom'])) {  
        $email = $_POST['email'] ;
        $mdp = $_POST['mdp'] ;
        $nom = $_POST['Nom'] ;
        $prenom = $_POST['Prenom'] ;
        $erreur = "" ;
        
        //connection à la base de donnés sql
        $nom_serveur = "mysql-ethanbermond.alwaysdata.net";
        $utilisateur = "340115";
        $mot_de_passe ="N@hteb2004";
        $nom_base_données ="ethanbermond_3" ;
        $sel ="je_suis_un_sel";

        $mdp_sel= $mdp .$sel;
        $passwordHash = hash("sha256",$mdp_sel); //on hache le mot de passe 

        $lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
        $regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{12,}$/'; //verifie que le mot de passe a au minimum 12 caractère donc une minuscule, un majuscule, un chiffre et un caractère spécial.
        if (preg_match($regex, $mdp)) {
            $req = mysqli_query($lien , "INSERT INTO client VALUES( '','$nom', '$prenom', '$email','$passwordHash'  ) ") ; //on insere les donnes du formulaire dans la bdd 
            header("Location:index.php") ;
        } else {
            $erreur = "Le mot de passe doit avoir au minimum 12 caractère donc une minuscule, un majuscule, un chiffre et un caractère spécial !";
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
        <title>Inscription client</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class ='body-test'>
    <section>
        <h1 class="titre_connexion_client"> Inscription</h1>
        <?php 
        if(isset($erreur)){
            echo "<p class= 'Erreur'>".$erreur."</p>"  ;// permet de faire l'affichage de l'erreur si elle se produit
        }
        ?>
        <form action="" method="POST" class="formulaire_connexion"> 
            <label>E_mail</label>
            <input type="text" name="email" class="info_connexion_formulaire">
            <label >Mot de Passe</label>
            <input type="password" name="mdp" class="info_connexion_formulaire">
            <label>Nom</label>
            <input type="text" name="Nom" class="info_connexion_formulaire">
            <label>Prenom</label>
            <input type="text" name="Prenom" class="info_connexion_formulaire">
            <div class="validation_inscription_client">
            <a class="bouton_inscription" href="./index.php">Retour a la page de connexion</a>
                <input type="submit" value="Valider" name="boutton-valider" class="button_valider2">
            </div>
            
        </form>
    </section> 
    </body>
</html>