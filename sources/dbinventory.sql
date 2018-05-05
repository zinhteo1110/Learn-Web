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
  `Model` varchar(50) DEFAULT NULL,
  `CPU` varchar(50) DEFAULT NULL,
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
  `Num_Physical_CPU` int(2) NOT NULL,
  PRIMARY KEY (`serverId`),
  UNIQUE KEY `IP` (`IP`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `server`
--

LOCK TABLES `server` WRITE;
/*!40000 ALTER TABLE `server` DISABLE KEYS */;
INSERT INTO `server` VALUES (3,'Cache 205 nginx routing','111.65.244.205','HP Proliant DL160 G6 Server','Intel® Xeon® Processor E5620',16,'160GB x 2','B110i','H6','29','CN794703BT','2.0.86.29',530,'admin/admin','18:A9:05:70:06:26','2960G-G8-U41','Gi0/4 - Gi','','../images/38341-hp_dl160-g6_1.jpg',2),(4,'Cache 211 nginx routing','111.65.244.211','HP Proliant DL160 G6 Server','Intel® Xeon® Processor E5620',16,'160GB x 2','mdadm','H6','22','CN794503L6','2.0.86.22',530,'admin/admin - KVM - Lo100i fw ','18:A9:05:41:9B:AE','3750G','Gi1/0/6 - ','','../images/47818-hp_dl160-g6_1.jpg',2),(5,'Cache 204 nginx routing','111.65.244.204','HP Proliant DL160 G6 Server','Intel® Xeon® Processor E5620',16,'160GB x 2','mdadm','H6','4','CN794502RN','2.0.86.4',530,'admin/admin - KVM - Lo100i fw ','00:26:55:86:41:6C','3750G','Gi1/0/10 -','','../images/79172-hp_dl160-g6_1.jpg',2),(6,'Hadoop238','111.65.244.238','Dell PowerEdge R420 ','Intel® Xeon® Processor E5-2420 v2',12,'1TB x 4','Perc H710p\n','H8','U39','794R622 - 3LYBNW1','2.0.88.39',530,'root/794R622 - KVM -iDRAC','C8:1F:66:C6:68:B7','2960G-G8-U41','Gi0/8','','',1),(7,'Image Cache 229','111.65.244.229','HP Proliant DL160 G6 Server','Intel® Xeon® Processor E5504',8,'1 x 160GB + 1 x 1TB','mdadm','G8','U38','CN794703C0','2.0.78.38',530,'admin/admin - KVM - Lo100i fw ','18:A9:05:70:06:8A','3750G','Gi1/0/13','','../images/94024-hp-proliant_dl160_g6-001.jpg',2),(8,'Image Cache 209','111.65.244.209','HP Proliant DL160 G6 Server','Intel® Xeon® Processor E5504',8,'160GB x 2','mdadm','H6','U27','CN794503LA','2.0.86.27',530,'admin/admin - KVM - Lo100i fw ','00:26:55:85:BD:9C','3750G','Gi2/0/16','','../images/60959-hp_dl160-g6_1.jpg',2),(9,'Image Cache 228 | Temp For 10G','111.65.244.228','Dell PowerEdge R430 Server','IntelÂ® XeonÂ® Processor E5-2640 v4',32,'300GB x 4','Perc H730','H8','U36','JD5R7C2','2.0.88.36',0,'root/12345678','1866.dabc.1663','3750G','Gi2/0/3','','../images/90926-dell_r430-2.jpg',2);
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

-- Dump completed on 2018-05-05 16:44:19
