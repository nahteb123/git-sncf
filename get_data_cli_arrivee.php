<?php
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe ="";
$nom_base_données ="sncf2" ;
$lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
$query= "SELECT t.ID_trajet ,nom_gare,nom_quai, heure_arrivee, nom_train
FROM trajet t
INNER JOIN avoir a
ON t.ID_trajet =a.id_trajet
INNER JOIN gare g
ON a.id_gare_depart= g.ID_gare
INNER JOIN quai q
ON g.ID_gare = q.id_gare
INNER JOIN train tr
ON t.id_train =tr.ID_train
ORDER BY t.ID_trajet;
" ; // a voir s'il faut enlever pour l'admin 
$req =  mysqli_query($lien ,$query);
// id trajet, nom quai, nom gare, heure depart
echo json_encode(mysqli_fetch_all($req,MYSQLI_ASSOC));



?>