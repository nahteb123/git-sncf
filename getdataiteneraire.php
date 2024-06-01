<?php
//$nom1 =$_GET['id1'];
//$nom2=$_GET['id2'];
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe ="";
$nom_base_données ="sncf2" ;
$lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
$query= "SELECT id_trajet , id_gare_depart, id_gare_arrivee FROM avoir
  
" ;
// a faire aussi le cote js une fois que la bdd est faite + les autres get avec accueil_interne
$req =  mysqli_query($lien ,$query);
// id trajet, nom quai, nom gare, heure depart
echo json_encode(mysqli_fetch_all($req,MYSQLI_ASSOC));


?>