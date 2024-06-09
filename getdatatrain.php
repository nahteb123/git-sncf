<?php
$nom_serveur = "mysql-ethanbermond.alwaysdata.net";
$utilisateur = "340115";
$mot_de_passe ="N@hteb2004";
$nom_base_données ="ethanbermond_3" ;
$lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
$query= "SELECT ID_train,nom_train, capacité_train,nombre_réservation ,nom_station , libelle_type_train  FROM train t INNER JOIN station s ON t.ID_station =s.ID_station INNER JOIN type_train tt on t.ID_type_train= tt.ID_type_train " ; 
$req =  mysqli_query($lien ,$query);
// id trajet, nom quai, nom gare, heure depart
echo json_encode(mysqli_fetch_all($req,MYSQLI_ASSOC));


?>