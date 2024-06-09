<?php
$nom_serveur = "mysql-ethanbermond.alwaysdata.net";
$utilisateur = "340115";
$mot_de_passe ="N@hteb2004";
$nom_base_données ="ethanbermond_3" ;
$lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
$query= "SELECT t.ID_trajet , date_depart, date_arrivee , heure_depart ,heure_arrivee, id_train, g.nom_gare AS nom_gare_depart, ga.nom_gare AS nom_gare_arrivee
FROM trajet t
INNER JOIN avoir a
ON t.ID_trajet =a.id_trajet
INNER JOIN gare g
ON a.id_gare_depart= g.ID_gare
INNER JOIN gare ga
ON a.id_gare_arrivee= ga.ID_gare;
;
  
" ;

// a voir s'il faut enlever pour l'admin WHERE t.ID_gare =1;
$req =  mysqli_query($lien ,$query);
// id trajet, nom quai, nom gare, heure depart
echo json_encode(mysqli_fetch_all($req,MYSQLI_ASSOC));


?>