CREATE DATABASE  IF NOT EXISTS `series`;
USE `series`;

--
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE `actor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL,
  `fechaNacimiento` varchar(64) DEFAULT NULL,
  `nacionalidad` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

LOCK TABLES `actor` WRITE;
INSERT INTO `actor` VALUES (1,'Scarlet','Johason','1971-06-06','Estadounidense'),(2,'Johnny','Depp','1963-06-09','Estadounidense'),(3,'Dwaye','Johnson','1972-05-02','Estadounidense');
UNLOCK TABLES;

--
-- Table structure for table `actorserie`
--

DROP TABLE IF EXISTS `actorserie`;
CREATE TABLE `actorserie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idActor` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ActorSerie_Serie1_idx` (`idSerie`),
  KEY `fk_ActorSerie_Actor1_idx` (`idActor`),
  CONSTRAINT `fk_ActorSerie_Actor` FOREIGN KEY (`idActor`) REFERENCES `actor` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ActorSerie_Serie` FOREIGN KEY (`idSerie`) REFERENCES `serie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actorserie`
--

LOCK TABLES `actorserie` WRITE;
INSERT INTO `actorserie` VALUES (1,1,1),(2,2,1),(3,1,2),(4,3,2),(5,2,3),(6,3,3),(7,2,4),(8,3,5);
UNLOCK TABLES;

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
CREATE TABLE `director` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) DEFAULT NULL,
  `apellidos` varchar(64) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `nacionalidad` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `director`
--

LOCK TABLES `director` WRITE;
INSERT INTO `director` VALUES (1,'Guillermo','del Toro','1964-10-09','Mexicano'),(2,'Alfred ','Hitchcock','1899-08-13','Inglés'),(3,'Steven','Spielbeg','1946-12-18','Estadounidense');
UNLOCK TABLES;

--
-- Table structure for table `idioma`
--

DROP TABLE IF EXISTS `idioma`;
CREATE TABLE `idioma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) DEFAULT NULL,
  `codigoISO` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `idioma`
--

LOCK TABLES `idioma` WRITE;
INSERT INTO `idioma` VALUES (1,'Español','ES'),(2,'Ingles','EN');
UNLOCK TABLES;

--
-- Table structure for table `idiomaserie`
--

DROP TABLE IF EXISTS `idiomaserie`;
CREATE TABLE `idiomaserie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idIdioma` int(11) NOT NULL,
  `idSerie` int(11) NOT NULL,
  `tipo` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_IdiomaSerie_Idioma_idx` (`idIdioma`),
  KEY `fk_IdiomaSerie_Serie1_idx` (`idSerie`),
  CONSTRAINT `fk_IdiomaSerie_Idioma` FOREIGN KEY (`idIdioma`) REFERENCES `idioma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_IdiomaSerie_Serie` FOREIGN KEY (`idSerie`) REFERENCES `serie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `idiomaserie`
--

LOCK TABLES `idiomaserie` WRITE;
INSERT INTO `idiomaserie` VALUES (1,1,1,'Audio'),(2,1,2,'Audio'),(3,2,3,'Audio'),(4,1,3,'Subtítulos'),(5,2,4,'Audio'),(6,1,4,'Subtítulos'),(7,2,5,'Audio');
UNLOCK TABLES;

--
-- Table structure for table `plataforma`
--

DROP TABLE IF EXISTS `plataforma`;
CREATE TABLE `plataforma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plataforma`
--

LOCK TABLES `plataforma` WRITE;
INSERT INTO `plataforma` VALUES (1,'Netflix'),(2,'Disney+');
UNLOCK TABLES;

--
-- Table structure for table `serie`
--

DROP TABLE IF EXISTS `serie`;
CREATE TABLE `serie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(128) DEFAULT NULL,
  `idPlataforma` int(11) NOT NULL,
  `idDirector` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Serie_Plataforma_idx` (`idPlataforma`),
  KEY `fk_Serie_Director_idx` (`idDirector`),
  CONSTRAINT `fk_Serie_Director` FOREIGN KEY (`idDirector`) REFERENCES `director` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Serie_Plataforma` FOREIGN KEY (`idPlataforma`) REFERENCES `plataforma` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serie`
--

LOCK TABLES `serie` WRITE;
INSERT INTO `serie` VALUES (1,'Troll Hunters',1,1),(2,'Tales of Arcadia',1,1),(3,'Psycho',1,2),(4,'The Birds',1,2),(5,'Halo',2,3);
UNLOCK TABLES;
