-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: desafio
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `documento`
--

DROP TABLE IF EXISTS `documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documento` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `NroDocumento` varchar(10) DEFAULT NULL,
  `Titulo` varchar(40) DEFAULT NULL,
  `DescDocumento` varchar(225) DEFAULT NULL,
  `DataDocumento` date DEFAULT NULL,
  `PathArquivoPDF` varchar(100) DEFAULT NULL,
  `TipoDocumento_Id` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_Doucmento_TipoDocumento_idx` (`TipoDocumento_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documento`
--

LOCK TABLES `documento` WRITE;
/*!40000 ALTER TABLE `documento` DISABLE KEYS */;
INSERT INTO `documento` VALUES (8,'1','Teste','Teste','2022-05-11',NULL,1),(9,'7777','FFFFF','FFFFFF','2022-05-12',NULL,1),(10,'4444','dadadda','dadad','2022-05-12',NULL,1),(11,'321','dada','dadad','2022-05-12',NULL,5),(12,'555555','dadad','adadda','2022-05-12',NULL,5);
/*!40000 ALTER TABLE `documento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setor`
--

DROP TABLE IF EXISTS `setor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setor` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Sigla` varchar(10) DEFAULT NULL,
  `DescSetor` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setor`
--

LOCK TABLES `setor` WRITE;
/*!40000 ALTER TABLE `setor` DISABLE KEYS */;
INSERT INTO `setor` VALUES (2,'INFO','Informática'),(3,'FIN','Financeiro'),(4,'GGG','1dada'),(5,'FFF','dasdad');
/*!40000 ALTER TABLE `setor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipodocumento`
--

DROP TABLE IF EXISTS `tipodocumento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipodocumento` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `DescTipoDocumento` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipodocumento`
--

LOCK TABLES `tipodocumento` WRITE;
/*!40000 ALTER TABLE `tipodocumento` DISABLE KEYS */;
INSERT INTO `tipodocumento` VALUES (5,'AAAA');
/*!40000 ALTER TABLE `tipodocumento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tramitacaodocumento`
--

DROP TABLE IF EXISTS `tramitacaodocumento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tramitacaodocumento` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Documento_Id` int(11) NOT NULL,
  `Setor_Envio_Id` int(11) DEFAULT NULL,
  `DataHoraEnvio` timestamp NULL DEFAULT NULL,
  `DataHoraRecebido` timestamp NULL DEFAULT NULL,
  `Setor_Recebe_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `fk_TramitacaoDocumento_Doucmento1_idx` (`Documento_Id`),
  KEY `fk_TramitacaoDocumento_Setor1_idx` (`Setor_Envio_Id`),
  KEY `fk_TramitacaoDocumento_Setor2_idx` (`Setor_Recebe_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramitacaodocumento`
--

LOCK TABLES `tramitacaodocumento` WRITE;
/*!40000 ALTER TABLE `tramitacaodocumento` DISABLE KEYS */;
INSERT INTO `tramitacaodocumento` VALUES (5,8,NULL,NULL,NULL,NULL),(8,8,2,'2022-05-12 04:24:14',NULL,NULL),(11,8,2,'2022-05-12 04:24:14','2022-05-12 05:11:01',3),(12,8,2,'2022-05-12 04:24:14','2022-05-12 05:14:51',4),(13,9,NULL,NULL,NULL,NULL),(14,9,2,'2022-05-13 02:06:33',NULL,NULL),(15,9,2,'2022-05-13 02:06:33','2022-05-13 02:16:57',3),(16,10,NULL,NULL,NULL,NULL),(17,10,2,'2022-05-13 02:18:32',NULL,NULL),(18,11,NULL,NULL,NULL,NULL),(19,11,2,'2022-05-13 02:31:51',NULL,NULL),(20,11,2,'2022-05-13 02:31:51','2022-05-13 02:32:04',3),(21,12,NULL,NULL,NULL,NULL),(22,12,NULL,NULL,'2022-05-13 02:50:49',3);
/*!40000 ALTER TABLE `tramitacaodocumento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'desafio'
--

--
-- Dumping routines for database 'desafio'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-12 19:39:18
