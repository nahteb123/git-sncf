-- Structure de la table client
CREATE TABLE `client` (
  `id_client` int(11) NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(250) NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table client
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('1', 'nabc', 'def', 'aeiou', '1234');
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('2', 'Bermond', 'Ethan', 'ethan.bermond@charlespeguymarseille.com', 'abc');
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('3', 'abc', 'abc', 'nahteb@hotmail.fr', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e');
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('4', 'abc', 'abc', '123', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e');
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('5', 'abc', 'abc', 'nahteb@hotmail.fr', '74db569ec96d0f940ee920cf1a43e4321674234ae71b2b39504a2d531e7fbce5');
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('6', 'Nom1', 'Prenom1', 'adresse.test@gmail.fr', 'fb7e478fd81d594650e65d796ef6fd3f47f8834b7d60b7a6637ed6963bf4823f');
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('7', 'Nom2', 'Prenom2', 'adresse.test@gmail.fr', '52d1576cdfd7ab4ac0469a5100aafbe893a2463af84b62d6e50d3eb84c958ed9');
INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `email`, `mot_de_passe`) VALUES ('8', 'Nom2', 'Prenom2', 'adresse.test@gmail.fr', '52d1576cdfd7ab4ac0469a5100aafbe893a2463af84b62d6e50d3eb84c958ed9');

-- Structure de la table employés
CREATE TABLE `employés` (
  `id_employé` int(11) NOT NULL AUTO_INCREMENT,
  `nom_employé` varchar(50) NOT NULL,
  `prenom_employé` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(250) NOT NULL,
  PRIMARY KEY (`id_employé`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table employés
INSERT INTO `employés` (`id_employé`, `nom_employé`, `prenom_employé`, `email`, `mot_de_passe`) VALUES ('1', 'yyygy', 'hiuu', 'ethan.bermond@charlespeguymarseille.com', '0c1aed23445b8427a4caf76bf08d1c15fe1693e36d7862e1bd869c421aa77fac');
INSERT INTO `employés` (`id_employé`, `nom_employé`, `prenom_employé`, `email`, `mot_de_passe`) VALUES ('6', 'Nom2', 'Prenom2', 'adresse.test@gmail.fr', '52d1576cdfd7ab4ac0469a5100aafbe893a2463af84b62d6e50d3eb84c958ed9');

-- Structure de la table gare
CREATE TABLE `gare` (
  `ID_gare` int(11) NOT NULL,
  `nom_gare` varchar(5) NOT NULL,
  PRIMARY KEY (`ID_gare`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table gare
INSERT INTO `gare` (`ID_gare`, `nom_gare`) VALUES ('1', 'Saint');
INSERT INTO `gare` (`ID_gare`, `nom_gare`) VALUES ('2', 'Aix-e');
INSERT INTO `gare` (`ID_gare`, `nom_gare`) VALUES ('3', 'Gare');

-- Structure de la table logs_tentative_connexion
CREATE TABLE `logs_tentative_connexion` (
  `id_logs` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_ip` varchar(250) NOT NULL,
  `adresse_mail_teste` varchar(100) NOT NULL,
  `mot_de_passe_teste` varchar(250) NOT NULL,
  `id_type` int(11) NOT NULL,
  `sucess` tinyint(1) NOT NULL,
  `heure_connexion` datetime NOT NULL,
  PRIMARY KEY (`id_logs`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table logs_tentative_connexion
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('21', '::1', '123', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '1', '0000-00-00 00:00:00');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('22', '::1', 'dqsdsds', 'e9559b0dfd01d5c3843bb7decc99d89eb36c2cd4d2c4e1a4accc8e6f449ecef5', '2', '0', '2024-06-02 18:19:56');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('23', '::1', 'sdd', '10e0e7c792b89c63a25c72c73f76b6888e423364c538cee7effb80da349d16df', '2', '0', '2024-06-02 18:20:06');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('24', '::1', 'sdsd', '19a7f93c60e68d8f2fe453ca6788acb3b52e0be5534ebf8ba5eb5f21488564f6', '2', '0', '2024-06-02 18:20:09');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('25', '::1', 'dsdsds', '6b8c617af8f9b63b9d518e301d63cc0cc3c896c93918e5063518abfcf29eac5f', '2', '0', '2024-06-02 18:20:14');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('26', '::1', 'dsdsds', '6b8c617af8f9b63b9d518e301d63cc0cc3c896c93918e5063518abfcf29eac5f', '2', '0', '2024-06-02 18:20:34');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('27', '::1', 'sdsd', '5f637371be4783f8aabf33e5c9f9789d76278d75b1b0d7a1ca9b841cb3b3027f', '2', '0', '2024-06-02 18:20:40');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('28', '::1', 'sdsd', '5f637371be4783f8aabf33e5c9f9789d76278d75b1b0d7a1ca9b841cb3b3027f', '2', '0', '2024-06-02 18:27:01');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('29', '::1', 'nahteb@hotmail.fr', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '1', '2024-06-02 18:27:07');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('30', '::1', 'nahteb@hotmail.fr', '74db569ec96d0f940ee920cf1a43e4321674234ae71b2b39504a2d531e7fbce5', '2', '1', '2024-06-02 21:17:39');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('31', '::1', 'nahteb@hotmail.fr', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '1', '2024-06-03 21:49:04');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('32', '::1', 'ethan.bermond@charlespeguymarseille.com', '0c1aed23445b8427a4caf76bf08d1c15fe1693e36d7862e1bd869c421aa77fac', '1', '1', '2024-06-04 15:38:27');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('33', '::1', 'ethan.bermond@charlespeguymarseille.com', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '1', '0', '2024-06-05 10:53:18');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('34', '::1', 'ethan.bermond@charlespeguymarseille.com', '0c1aed23445b8427a4caf76bf08d1c15fe1693e36d7862e1bd869c421aa77fac', '1', '1', '2024-06-05 10:53:25');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('35', '5.50.84.57', 'nahteb@hotmail.fr', '21ce998f4475ff701c4612ec3ed5d33278223bf44b20f55ae5a087a02e3f4ae4', '2', '0', '2024-06-05 11:55:16');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('36', '5.50.84.57', 'nahteb@hotmail.fr', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '1', '2024-06-05 11:55:21');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('37', '5.50.84.57', 'nahteb@hotmail.fr', '21ce998f4475ff701c4612ec3ed5d33278223bf44b20f55ae5a087a02e3f4ae4', '2', '0', '2024-06-05 12:00:54');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('38', '5.50.84.57', 'nahteb@hotmail.fr', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '1', '2024-06-05 12:01:00');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('39', '::1', 'nahteb@hotmail.fr', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '1', '2024-06-05 14:27:03');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('40', '::1', 'ethan.bermond@charlespeguymarseille.com', '0c1aed23445b8427a4caf76bf08d1c15fe1693e36d7862e1bd869c421aa77fac', '1', '1', '2024-06-05 16:50:31');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('41', '2a01:e0a:afc:5010:9144:3b7b:e959:b616', 'adresse.test@gmail.fr', 'fb7e478fd81d594650e65d796ef6fd3f47f8834b7d60b7a6637ed6963bf4823f', '2', '1', '2024-06-06 14:18:59');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('42', '2a01:e0a:afc:5010:9144:3b7b:e959:b616', 'adresse.test@gmail.fr', '6a4f523d6fd0da7900137d0a32e74b57f8d55d888ec33130200356c419681c5d', '1', '0', '2024-06-06 14:21:57');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('43', '2a01:e0a:afc:5010:9144:3b7b:e959:b616', 'adresse.test@gmail.fr', '6a4f523d6fd0da7900137d0a32e74b57f8d55d888ec33130200356c419681c5d', '1', '0', '2024-06-06 14:22:16');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('44', '2a01:e0a:afc:5010:9144:3b7b:e959:b616', 'adresse.test@gmail.fr', '52d1576cdfd7ab4ac0469a5100aafbe893a2463af84b62d6e50d3eb84c958ed9', '1', '1', '2024-06-06 14:24:38');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('45', '::1', 'ethan.bermond@charlespeguymarseille.com', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '0', '2024-06-08 01:00:04');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('46', '::1', 'ethan.bermond@charlespeguymarseille.com', '0c1aed23445b8427a4caf76bf08d1c15fe1693e36d7862e1bd869c421aa77fac', '2', '0', '2024-06-08 01:00:09');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('47', '::1', 'nahteb@hotmail.fr', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '2', '1', '2024-06-08 01:00:16');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('48', '::1', 'ethan.bermond@charlespeguymarseille.com', '0c1aed23445b8427a4caf76bf08d1c15fe1693e36d7862e1bd869c421aa77fac', '1', '1', '2024-06-08 01:01:48');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('49', '::1', 'ethan.bermond@charlespeguymarseille.com', '3e19209c07693f885ac0c0e82dc81ac12b8eb3de14f4398a4a847b33e6d19c4e', '1', '0', '2024-06-08 13:25:17');
INSERT INTO `logs_tentative_connexion` (`id_logs`, `adresse_ip`, `adresse_mail_teste`, `mot_de_passe_teste`, `id_type`, `sucess`, `heure_connexion`) VALUES ('50', '::1', 'ethan.bermond@charlespeguymarseille.com', '0c1aed23445b8427a4caf76bf08d1c15fe1693e36d7862e1bd869c421aa77fac', '1', '1', '2024-06-08 13:25:25');

-- Structure de la table type_train
CREATE TABLE `type_train` (
  `ID_type_train` int(11) NOT NULL,
  `libelle_type_train` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_type_train`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table type_train
INSERT INTO `type_train` (`ID_type_train`, `libelle_type_train`) VALUES ('1', 'Express');
INSERT INTO `type_train` (`ID_type_train`, `libelle_type_train`) VALUES ('2', 'Local');

-- Structure de la table train
CREATE TABLE `train` (
  `ID_train` int(11) NOT NULL,
  `nom_train` char(5) NOT NULL,
  `capacité_train` int(11) NOT NULL,
  `nombre_réservation` int(11) NOT NULL,
  `ID_station` int(11) DEFAULT NULL,
  `ID_type_train` int(11) NOT NULL,
  PRIMARY KEY (`ID_train`),
  KEY `Train_Gare_FK` (`ID_station`),
  KEY `Train_Type_train0_FK` (`ID_type_train`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table train
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('0', 'A104', '0', '0', '1', '2');
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('1', 'A101', '0', '0', '1', '1');
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('2', 'B102', '0', '0', '2', '2');
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('3', 'C103', '0', '0', '3', '1');
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('4', 'A104', '0', '0', '2', '2');
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('5', 'A105', '0', '0', '1', '1');
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('6', 'A106', '0', '0', '3', '2');
INSERT INTO `train` (`ID_train`, `nom_train`, `capacité_train`, `nombre_réservation`, `ID_station`, `ID_type_train`) VALUES ('7', 'A107', '0', '0', '3', '2');

-- Structure de la table type_incident
CREATE TABLE `type_incident` (
  `ID_type_incident` int(11) NOT NULL,
  `libelle_type_incident` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_type_incident`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table type_incident
INSERT INTO `type_incident` (`ID_type_incident`, `libelle_type_incident`) VALUES ('1', 'Accident');
INSERT INTO `type_incident` (`ID_type_incident`, `libelle_type_incident`) VALUES ('2', 'Panne technique');
INSERT INTO `type_incident` (`ID_type_incident`, `libelle_type_incident`) VALUES ('3', 'Retard');

-- Structure de la table incident
CREATE TABLE `incident` (
  `ID_incidient` int(11) NOT NULL,
  `libelle_incident` varchar(50) NOT NULL,
  `description_incident` varchar(50) NOT NULL,
  `date_incident` date NOT NULL,
  `ID_type_incident` int(11) NOT NULL,
  PRIMARY KEY (`ID_incidient`),
  KEY `Incident_Type_incident_FK` (`ID_type_incident`),
  CONSTRAINT `Incident_Type_incident_FK` FOREIGN KEY (`ID_type_incident`) REFERENCES `type_incident` (`ID_type_incident`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table incident
INSERT INTO `incident` (`ID_incidient`, `libelle_incident`, `description_incident`, `date_incident`, `ID_type_incident`) VALUES ('1', 'abc', 'def', '2024-05-02', '1');
INSERT INTO `incident` (`ID_incidient`, `libelle_incident`, `description_incident`, `date_incident`, `ID_type_incident`) VALUES ('2', 'abc', 'def', '2024-05-01', '1');

-- Structure de la table trajet
CREATE TABLE `trajet` (
  `ID_trajet` int(11) NOT NULL,
  `date_depart` date NOT NULL,
  `date_arrivee` date NOT NULL,
  `heure_depart` time NOT NULL,
  `heure_arrivee` time NOT NULL,
  `id_train` int(11) NOT NULL,
  PRIMARY KEY (`ID_trajet`),
  KEY `trajet_train` (`id_train`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table trajet
INSERT INTO `trajet` (`ID_trajet`, `date_depart`, `date_arrivee`, `heure_depart`, `heure_arrivee`, `id_train`) VALUES ('0', '2024-05-08', '2024-05-10', '21:34:00', '20:36:00', '1');
INSERT INTO `trajet` (`ID_trajet`, `date_depart`, `date_arrivee`, `heure_depart`, `heure_arrivee`, `id_train`) VALUES ('1', '2023-12-16', '2023-12-16', '10:00:00', '13:27:00', '1');
INSERT INTO `trajet` (`ID_trajet`, `date_depart`, `date_arrivee`, `heure_depart`, `heure_arrivee`, `id_train`) VALUES ('2', '2023-12-16', '2023-12-16', '15:15:00', '15:45:00', '2');
INSERT INTO `trajet` (`ID_trajet`, `date_depart`, `date_arrivee`, `heure_depart`, `heure_arrivee`, `id_train`) VALUES ('3', '2023-12-16', '2023-12-16', '21:00:00', '00:10:00', '1');

-- Structure de la table subir
CREATE TABLE `subir` (
  `ID_train` int(11) NOT NULL,
  `ID_incidient` int(11) NOT NULL,
  PRIMARY KEY (`ID_train`,`ID_incidient`),
  KEY `Subir_Incident0_FK` (`ID_incidient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Structure de la table reserver
CREATE TABLE `reserver` (
  `id_train` int(11) NOT NULL,
  `Id_client` int(11) NOT NULL,
  PRIMARY KEY (`id_train`,`Id_client`),
  KEY `Impacter_Incident0_FK` (`Id_client`),
  CONSTRAINT `client_reserver` FOREIGN KEY (`Id_client`) REFERENCES `client` (`id_client`),
  CONSTRAINT `train_reserver` FOREIGN KEY (`id_train`) REFERENCES `train` (`ID_train`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table reserver
INSERT INTO `reserver` (`id_train`, `Id_client`) VALUES ('1', '1');
INSERT INTO `reserver` (`id_train`, `Id_client`) VALUES ('1', '2');
INSERT INTO `reserver` (`id_train`, `Id_client`) VALUES ('2', '1');

-- Structure de la table station
CREATE TABLE `station` (
  `ID_station` int(11) NOT NULL,
  `nom_station` char(5) NOT NULL,
  PRIMARY KEY (`ID_station`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table station
INSERT INTO `station` (`ID_station`, `nom_station`) VALUES ('1', 'Gare1');
INSERT INTO `station` (`ID_station`, `nom_station`) VALUES ('2', 'Gare2');
INSERT INTO `station` (`ID_station`, `nom_station`) VALUES ('3', 'Gare3');

-- Structure de la table quai
CREATE TABLE `quai` (
  `ID_quai` int(11) NOT NULL,
  `nom_quai` char(5) NOT NULL,
  `id_gare` int(11) NOT NULL,
  PRIMARY KEY (`ID_quai`),
  KEY `gare_quai` (`id_gare`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table quai
INSERT INTO `quai` (`ID_quai`, `nom_quai`, `id_gare`) VALUES ('1', 'QuaiA', '1');
INSERT INTO `quai` (`ID_quai`, `nom_quai`, `id_gare`) VALUES ('2', 'QuaiB', '0');
INSERT INTO `quai` (`ID_quai`, `nom_quai`, `id_gare`) VALUES ('3', 'QuaiC', '0');

-- Structure de la table creer
CREATE TABLE `creer` (
  `id_employé` int(11) NOT NULL,
  `id_trajet` int(11) NOT NULL,
  PRIMARY KEY (`id_employé`,`id_trajet`),
  KEY `creer_trajet` (`id_trajet`),
  CONSTRAINT `creer_employes` FOREIGN KEY (`id_employé`) REFERENCES `employés` (`id_employé`),
  CONSTRAINT `creer_trajet` FOREIGN KEY (`id_trajet`) REFERENCES `trajet` (`ID_trajet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table creer
INSERT INTO `creer` (`id_employé`, `id_trajet`) VALUES ('1', '2');

-- Structure de la table avoir
CREATE TABLE `avoir` (
  `id_trajet` int(11) NOT NULL,
  `id_gare_depart` int(11) NOT NULL,
  `id_gare_arrivee` int(11) NOT NULL,
  PRIMARY KEY (`id_trajet`,`id_gare_depart`,`id_gare_arrivee`),
  KEY `avoir_gare` (`id_gare_depart`),
  KEY `id_gare_arrivee` (`id_gare_arrivee`),
  CONSTRAINT `avoir_gare` FOREIGN KEY (`id_gare_depart`) REFERENCES `gare` (`ID_gare`),
  CONSTRAINT `avoir_ibfk_1` FOREIGN KEY (`id_gare_arrivee`) REFERENCES `gare` (`ID_gare`),
  CONSTRAINT `avoir_trajet` FOREIGN KEY (`id_trajet`) REFERENCES `trajet` (`ID_trajet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

-- Données de la table avoir
INSERT INTO `avoir` (`id_trajet`, `id_gare_depart`, `id_gare_arrivee`) VALUES ('1', '1', '2');
INSERT INTO `avoir` (`id_trajet`, `id_gare_depart`, `id_gare_arrivee`) VALUES ('2', '1', '2');
INSERT INTO `avoir` (`id_trajet`, `id_gare_depart`, `id_gare_arrivee`) VALUES ('3', '2', '3');

