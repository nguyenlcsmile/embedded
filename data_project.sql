-- MySQL dump 10.18  Distrib 10.3.27-MariaDB, for debian-linux-gnueabihf (armv8l)
--
-- Host: localhost    Database: users
-- ------------------------------------------------------
-- Server version	10.3.27-MariaDB-0+deb10u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `temp_humid`
--

DROP TABLE IF EXISTS `temp_humid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_humid` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `temperature` float NOT NULL,
  `humidity` float NOT NULL,
  `creat_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_humid`
--

LOCK TABLES `temp_humid` WRITE;
/*!40000 ALTER TABLE `temp_humid` DISABLE KEYS */;
INSERT INTO `temp_humid` VALUES (1,28.6,87.2,'2021-06-02 16:13:06'),(2,28.7,86.8,'2021-06-02 16:13:08'),(3,28.6,86.6,'2021-06-02 16:13:10'),(4,28.7,86.7,'2021-06-02 16:13:13'),(5,28.7,86.7,'2021-06-02 16:13:15'),(6,28.6,86.6,'2021-06-02 16:15:54'),(7,29,86.3,'2021-06-02 16:15:56'),(8,28.9,86.1,'2021-06-02 16:15:59'),(9,28.9,86,'2021-06-02 16:16:01'),(10,28.9,85.9,'2021-06-02 16:16:03'),(11,28.9,85.9,'2021-06-02 16:16:05'),(12,28.9,85.9,'2021-06-02 16:16:08'),(13,28.9,85.9,'2021-06-02 16:16:41'),(14,28.9,86.1,'2021-06-02 16:16:46'),(15,28.9,86.1,'2021-06-02 16:16:48'),(16,30.1,46,'2021-06-03 10:05:45'),(17,30.2,47.4,'2021-06-03 10:05:52'),(18,30.2,47.4,'2021-06-03 10:05:54'),(19,30.2,47.3,'2021-06-03 10:05:56'),(20,30.2,47.2,'2021-06-03 10:05:58'),(21,30.2,47.2,'2021-06-03 10:06:01'),(22,30.2,47.1,'2021-06-03 10:06:03'),(23,30.2,47.2,'2021-06-03 10:06:05'),(24,30.2,47.1,'2021-06-03 10:06:07'),(25,30.2,47.1,'2021-06-03 10:06:10'),(26,30.2,47.3,'2021-06-03 10:06:12'),(27,30.2,50,'2021-06-03 10:06:14'),(28,30.2,51,'2021-06-03 10:06:16'),(29,30.2,51.7,'2021-06-03 10:06:19'),(30,30.3,52,'2021-06-03 10:06:21'),(31,30.3,52.2,'2021-06-03 10:06:23'),(32,30.3,52,'2021-06-03 10:06:26'),(33,30.3,51.3,'2021-06-03 10:06:28'),(34,30.3,50.5,'2021-06-03 10:06:30'),(35,30.3,49.8,'2021-06-03 10:06:32'),(36,30.4,49.3,'2021-06-03 10:06:35'),(37,30.3,48.7,'2021-06-03 10:06:37'),(38,30.3,48.4,'2021-06-03 10:06:39'),(39,30.4,48.2,'2021-06-03 10:06:41'),(40,30.3,47.9,'2021-06-03 10:06:44'),(41,30.4,47.8,'2021-06-03 10:06:46'),(42,30.4,47.6,'2021-06-03 10:06:48'),(43,30.3,47.5,'2021-06-03 10:06:50'),(44,30.3,47.4,'2021-06-03 10:06:53'),(45,30.3,47.4,'2021-06-03 10:06:55'),(46,30.3,47.3,'2021-06-03 10:06:57'),(47,30.3,47.3,'2021-06-03 10:07:00'),(48,30.3,47.2,'2021-06-03 10:07:02'),(49,30.3,47.2,'2021-06-03 10:07:04'),(50,30.3,47.2,'2021-06-03 10:07:06'),(51,30.3,47.1,'2021-06-03 10:07:09'),(52,30.3,47.1,'2021-06-03 10:07:11'),(53,30.3,47.1,'2021-06-03 10:07:13'),(54,30.3,47.1,'2021-06-03 10:07:15'),(55,30.3,47.1,'2021-06-03 10:07:18'),(56,30.3,47.1,'2021-06-03 10:07:20'),(57,30.3,47.1,'2021-06-03 10:07:22'),(58,30.3,47.1,'2021-06-03 10:07:24'),(59,30.3,47,'2021-06-03 10:07:27'),(60,30.3,47,'2021-06-03 10:07:29'),(61,30.3,47,'2021-06-03 10:07:31');
/*!40000 ALTER TABLE `temp_humid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'nguyen','123456','123'),(2,'hieu','123456','18146299@student.hcmute.edu.vn'),(3,'son','123456','18146366@student.hcmute.edu.vn'),(4,'quoc','123456','18146363@student.hcmute.edu.vn');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-04  3:12:00
