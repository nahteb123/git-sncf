
<?php 
    session_start() ;   
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
  <body class ='body-test'>
    <?php 

    // $idAtm = $_GET['idAtm'];

      if (isset($_GET['idAtm'])&& (isset($_POST['compte_rendu'])) ){
            $id =$_GET['idAtm'];
            $compte_rendu= $_POST['compte_rendu']; 
            //connection à la base de donnés sql
            $nom_serveur = "localhost";
            $utilisateur = "root";
            $mot_de_passe ="";
            $nom_base_données ="test2" ;
            //Requete sql
            $lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
            $query = "UPDATE  atm SET destination = '$compte_rendu' WHERE id_atm =$id" ; //on change la date du jour selon l'id de la consultation
            $req =  mysqli_query($lien ,$query);
            header("Location: https://projetsncf.alwaysdata.net/ath_admin.php") ;
      } 
    ?>
    <section>
      <form class="form-connexion" method="POST"> 
            <label> Modifier votre trajet </label>
            <input type="text" name="compte_rendu">
            <button name="validation">Valider</button>
      </form>
      </section>
    </body>
</html>
