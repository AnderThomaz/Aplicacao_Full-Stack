-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: dados
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `conta`
--

DROP TABLE IF EXISTS `conta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `path` varchar(250) NOT NULL,
  `directory` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `Id-IdUser` (`user_id`),
  CONSTRAINT `Id-IdUser` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conta`
--

LOCK TABLES `conta` WRITE;
/*!40000 ALTER TABLE `conta` DISABLE KEYS */;
INSERT INTO `conta` VALUES (5,1,'6633e69d409a2.jpg','D:/aplicacao/app/fotoPerfil/','2024-05-02 16:16:45');
/*!40000 ALTER TABLE `conta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'andersom.thomaz@gmail.com','Anderson Thomaz','$2y$10$dX6q2q..16MPDOJR2sF.1O28txegsYiN7aXUddJ9INhVxrPbivik6','2024-05-03 20:47:09'),(2,'jose@gmail.com','Jose','$2y$10$xPmEeRBD45oG3h2fqFx9GOnsPHwQk0GwpzuGMfjc/MGSw88v./XBO','2024-05-03 20:47:09'),(3,'marcos@gmail.com','Marcos thomay','$2y$10$QERdNrlHOSwJnhh19Arhu.4FjxwYegBxU0KqaYpND.YItmBX2rM4q','2024-05-03 20:47:09'),(4,'larissacarvalho247@gmail.com','Lari','$2y$10$tcP/DnDs8U9Zmb5r8EgBhe7TtIZSoP/98tvrfAwA/513u.yM.NYHW','2024-05-03 20:47:09'),(5,'josecarlos@gmail.com','Jose Carlos','$2y$10$Len3BdT4ls3u7S2AqxH8me43.UnJIc6tLKE8eOjZe.KS7zmrWfsay','2024-05-03 20:47:09'),(6,'josias@gmail.com','Josias','$2y$10$fFQb3K2yrz0XLfvge47U5OBA1Rrv9U1MDI7PGNUANi8zGdxv7N01q','2024-05-03 20:47:09'),(7,'Anderson@gmail.com','Anderson','$2y$10$A9R8cxGEAGZJkNLsmIl5S./lEPEyOi.2d0WrbE7lx28fkz6RwGyDG','2024-05-04 10:50:22');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transacoes`
--

DROP TABLE IF EXISTS `transacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transacoes` (
  `id_transacao` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `tipo_de_transi` int NOT NULL DEFAULT '0',
  `data_pagamento` date NOT NULL,
  `valor` float NOT NULL,
  `Descricao` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_transacao`),
  KEY `IdUSer` (`user_id`),
  CONSTRAINT `IdUSer` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transacoes`
--

LOCK TABLES `transacoes` WRITE;
/*!40000 ALTER TABLE `transacoes` DISABLE KEYS */;
INSERT INTO `transacoes` VALUES (1,1,1,'2024-04-19',20000,'Salario'),(3,1,0,'2024-04-18',20000,'Salario'),(4,1,0,'2024-04-20',600,'Salario'),(5,1,0,'2024-05-04',8000,'Salario'),(6,1,1,'2024-04-25',6000,'Faculdade'),(7,1,1,'2024-03-20',5000,'Conta'),(8,1,1,'2024-05-01',60065.6,'Faculdade'),(9,3,0,'2024-04-23',20000,'Salario'),(10,1,0,'2024-05-02',80455.2,'Salario'),(11,1,0,'2024-05-05',2000,'Salario'),(12,1,1,'2024-05-04',2000,'Faculdade'),(13,1,1,'2024-05-04',2000,'Faculdade'),(14,1,1,'2024-05-10',6000,'Aluguel'),(15,1,1,'2024-05-20',5000,'Salario Fun');
/*!40000 ALTER TABLE `transacoes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-05  0:00:09
