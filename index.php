<?php 
session_start() ;
if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['email']) && isset($_POST['mdp'])) {  
        
        $email = $_POST['email'] ;
        $mdp = $_POST['mdp'] ;
        $sel ="je_suis_un_sel";
        $mdp_sel= $mdp .$sel;
        $passwordHash = hash("sha256",$mdp_sel);
        $erreur = "" ;
        //connection à la base de donnés sql
        $nom_serveur = "mysql-ethanbermond.alwaysdata.net";
        $utilisateur = "340115";
        $mot_de_passe ="N@hteb2004";
        $nom_base_données ="ethanbermond_3" ;
        $ip =$_SERVER['REMOTE_ADDR'] ;
        $lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
        //Requete sql
        $req = mysqli_query($lien , "SELECT * FROM client WHERE email = '$email' AND mot_de_passe ='$passwordHash' ") ; //on verifie si l'email et le mot de passe donnés existent bien dans la base de donnés
        $num_ligne = mysqli_num_rows($req) ;
        if($num_ligne > 0){ //si la requete renvoie 0 ligne, on renvoie une erreur sinon on le rediriger sur sa page de connexion  
            $datas=array();
                while($row = mysqli_fetch_assoc($req)) {
                    $datas=$row;
                }
            $req1 =mysqli_query($lien , "INSERT INTO logs_tentative_connexion VALUES('','$ip', '$email', '$passwordHash', 2,1, NOW()) " ) ; // logs de connexion avec succes
            $code_client=$datas['id_client'];
             $_SESSION['login'] = $code_client ; 

           
           header("Location:menu.php") ; 
        }else {
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
            
            $req2 =mysqli_query($lien , "INSERT INTO logs_tentative_connexion VALUES('','$ip', '$email', '$passwordHash', 2,0, NOW()) " ) ; // logs de connexion echec
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
        <title>Connexion client</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class ='body-test'>
    <section>
        <h1 class="titre_connexion_client"> Connexion Client</h1>
        <?php 
        if(isset($erreur)){
            echo "<p class= 'Erreur'>".$erreur."</p>"  ;// permet de faire l'affichage de l'erreur si elle se produit
        }
        ?>
        <form action="" method="POST" class="formulaire_connexion"> <!-- Dans ce formulaire, on demande à l'utilisateur son login et son mot de passe--->
            <label>E_mail</label>
            <input type="text" name="email" class="info_connexion_formulaire">
            <label >Mot de Passe</label>
            <input type="password" name="mdp" class="info_connexion_formulaire">
            <div class="validation_connexion_client">
                <a class="bouton_inscription" href="./inscription_client.php">Inscription</a>
                <input type="submit" value="Valider" name="boutton-valider" class="button_valider2">
            </div>
            
        </form>
    </section> 
    </body>
</html>