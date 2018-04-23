-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dbinventory
-- ------------------------------------------------------
-- Server version	5.5.56-MariaDB

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
-- Table structure for table `server`
--

DROP TABLE IF EXISTS `server`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `server` (
  `serverId` int(11) NOT NULL AUTO_INCREMENT,
  `serverName` varchar(30) NOT NULL,
  `IP` varchar(15) DEFAULT NULL,
  `Model` varchar(20) DEFAULT NULL,
  `CPU` varchar(20) DEFAULT NULL,
  `Cores` int(5) DEFAULT NULL,
  `HDD` varchar(20) DEFAULT NULL,
  `Raid` varchar(20) DEFAULT NULL,
  `Rack` varchar(5) DEFAULT NULL,
  `Units` varchar(5) DEFAULT NULL,
  `Serial_Number` varchar(30) DEFAULT NULL,
  `IP_iLO` varchar(15) DEFAULT NULL,
  `VLAN` int(5) DEFAULT NULL,
  `KVM_Note` varchar(30) DEFAULT NULL,
  `MAC_eth0` varchar(20) DEFAULT NULL,
  `Switch` varchar(15) DEFAULT NULL,
  `Port` varchar(10) DEFAULT NULL,
  `Note` varchar(50) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`serverId`),
  UNIQUE KEY `IP` (`IP`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server`
--

LOCK TABLES `server` WRITE;
/*!40000 ALTER TABLE `server` DISABLE KEYS */;
INSERT INTO `server` VALUES (3,'Cache 205 nginx routing','111.65.244.205','DL160 G6','E5620 x 2',16,'160GB x 2','B110i','H6','29','CN794703BT','2.0.86.29',530,'admin/admin','18:A9:05:70:06:26','2960G-G8-U41','Gi0/4 - Gi','','../images/38341-hp_dl160-g6_1.jpg'),(4,'Cache 211 nginx routing','111.65.244.211','DL160 G6','E5620 x 2',16,'160GB x 2','mdadm','H6','22','CN794503L6','2.0.86.22',530,'admin/admin - KVM - Lo100i fw ','18:A9:05:41:9B:AE','3750G','Gi1/0/6 - ','','../images/47818-hp_dl160-g6_1.jpg'),(5,'Cache 204 nginx routing','111.65.244.204','DL160 G6','E5620 x 2',16,'160GB x 2','mdadm','H6','4','CN794502RN','2.0.86.4',530,'admin/admin - KVM - Lo100i fw ','00:26:55:86:41:6C','3750G','Gi1/0/10 -','','../images/79172-hp_dl160-g6_1.jpg');
/*!40000 ALTER TABLE `server` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-23 10:57:09
