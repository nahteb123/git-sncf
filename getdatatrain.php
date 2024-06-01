<?php
//$id =$_GET['id'];
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe ="";
$nom_base_données ="sncf2" ;
$lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
$query= "SELECT * FROM train " ; 
$req =  mysqli_query($lien ,$query);
// id trajet, nom quai, nom gare, heure depart
echo json_encode(mysqli_fetch_all($req,MYSQLI_ASSOC));


?>