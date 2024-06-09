<?php
$nom_serveur = "mysql-ethanbermond.alwaysdata.net";
$utilisateur = "340115";
$mot_de_passe = "N@hteb2004";
$nom_base_données = "ethanbermond_3";
$backup_file = "backup_" . date("Y-m-d_H-i-s") . ".sql";

// Création de la connexion
$conn = new mysqli($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_données);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion: " . $conn->connect_error);
}

// Ouverture du fichier de sauvegarde
$handle = fopen($backup_file, 'w');
if (!$handle) {
    die("Impossible d'ouvrir le fichier de sauvegarde pour écrire.");
}

// Liste des tables dans l'ordre souhaité
$tables = array("client", "employés", "gare", "logs_tentative_connexion", "type_train", "train", "type_incident", "incident", "trajet", "subir", "reserver", "station","quai","creer","avoir");

foreach ($tables as $table_name) {
    // Récupération de la structure de la table
    $sql_create = "SHOW CREATE TABLE $table_name";
    $result_create = $conn->query($sql_create);
    if ($result_create->num_rows > 0) {
        $row_create = $result_create->fetch_assoc();
        fwrite($handle, "-- Structure de la table $table_name\n");
        fwrite($handle, $row_create['Create Table'] . ";\n\n");
    }
    
    // Récupération des données de la table
    $sql_select = "SELECT * FROM $table_name";
    $result_select = $conn->query($sql_select);
    if ($result_select->num_rows > 0) {
        fwrite($handle, "-- Données de la table $table_name\n");
        while ($row_select = $result_select->fetch_assoc()) {
            $columns = array_keys($row_select);
            $values = array_values($row_select);
            
            // Échappement des valeurs
            foreach ($values as $key => $value) {
                $values[$key] = $conn->real_escape_string($value);
            }
            
            $columns_list = implode("`, `", $columns);
            $values_list = implode("', '", $values);
            
            $sql_insert = "INSERT INTO `$table_name` (`$columns_list`) VALUES ('$values_list');\n";
            fwrite($handle, $sql_insert);
        }
        fwrite($handle, "\n");
    }
}

// Fermeture du fichier de sauvegarde
fclose($handle);

// Fermeture de la connexion
$conn->close();

echo "Sauvegarde de la base de données effectuée avec succès dans le fichier $backup_file.";
?>