<?php
$nom_serveur = "mysql-ethanbermond.alwaysdata.net";
$utilisateur = "340115";
$mot_de_passe ="N@hteb2004";
$nom_base_données ="ethanbermond_3" ;
$lien = mysqli_connect($nom_serveur , $utilisateur ,$mot_de_passe , $nom_base_données);
$query= "SELECT ID_incidient, libelle_incident, description_incident, date_incident, libelle_type_incident FROM incident i INNER JOIN type_incident ti ON i.ID_type_incident = ti.ID_type_incident " ; 
$req =  mysqli_query($lien ,$query);
// id trajet, nom quai, nom gare, heure depart
echo json_encode(mysqli_fetch_all($req,MYSQLI_ASSOC));


?>