CREATE DATABASE jour09
    DEFAULT CHARACTER SET = 'utf8mb4';
    use jour09;
--
-- Table structure for table etage
--

DROP TABLE IF EXISTS etage;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE etage (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(255) NOT NULL,
  numero int NOT NULL,
  superficie int NOT NULL,
  PRIMARY KEY (id)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Table structure for table etudiants
--

DROP TABLE IF EXISTS etudiants;


CREATE TABLE etudiants (
  id int NOT NULL AUTO_INCREMENT,
  prenom varchar(255) NOT NULL,
  nom varchar(255) NOT NULL,
  naissance date NOT NULL,
  sexe varchar(25) NOT NULL,
  email varchar(191) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY email (email)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


--
-- Table structure for table salles
--

DROP TABLE IF EXISTS salles;


CREATE TABLE salles (
  id int NOT NULL AUTO_INCREMENT,
  nom varchar(255) NOT NULL,
  id_etage int NOT NULL,
  capacite int NOT NULL,
  PRIMARY KEY (id),
  KEY fk_salles_etage (id_etage)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

