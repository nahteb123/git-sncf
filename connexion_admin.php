<?php 
session_start() ;
if(isset($_POST['boutton-valider'])){ 
    if(isset($_POST['email']) && isset($_POST['mdp'])) {  // les issests servent à verifier que l'utilisateur à bien rempli un login, un mot de passe et qu'il a bien valider ceci
        // donnes du formulaire mise en variable
        $email = $_POST['email'] ;
        $mdp = $_POST['mdp'] ;
        $erreur = "" ;
        $sel ="je_suis_un_sel";
        $mdp_sel= $mdp .$sel;
        $passwordHash = hash("sha256",$mdp_sel);
        //connection à la base de donnés sql
        $nom_serveur = "mysql-ethanbermond.alwaysdata.net";
        $utilisateur = "340115";
        $mot_de_passe ="N@hteb2004";
        $nom_base_données ="ethanbermond_3" ;
        $ip =$_SERVER['REMOTE_ADDR'] ;
        $lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
        //Requete sql
        $req = mysqli_query($lien , "SELECT * FROM employés WHERE email = '$email' AND mot_de_passe ='$passwordHash' ") ; //on verifie si le login et le mot de passe donnés existent bien dans la base de donnés
        $num_ligne = mysqli_num_rows($req) ;
        //echo $num_ligne;
        if($num_ligne > 0){ //si la requete renvoie 0 ligne, on renvoie une erreur sinon on le rediriger sur sa page de connexion  
            $datas=array();
                while($row = mysqli_fetch_assoc($req)) {
                    $datas=$row;
                }
            $code_client=$datas['id_employés'];
             $_SESSION['login'] = $code_client ;
             $req1 =mysqli_query($lien , "INSERT INTO logs_tentative_connexion VALUES('','$ip', '$email', '$passwordHash', 1,1,NOW()) " ) ;
           
           header("Location:acceuil_interne.php") ; 
        }else {
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";
            $req1 =mysqli_query($lien , "INSERT INTO logs_tentative_connexion VALUES('','$ip', '$email', '$passwordHash', 1,0,NOW()) " ) ;
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
        <h1 class="titre_connexion_client"> Connexion</h1>
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
            <div class="validation_connexion_admin">
                <input type="submit" value="Valider" name="boutton-valider" class="button_valider2">
            </div>
            
        </form>
    </section> 
    </body>
</html>