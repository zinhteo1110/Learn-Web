-- MySQL dump 10.14  Distrib 5.5.56-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: dbimage
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
-- Table structure for table `tbl_images`
--

DROP TABLE IF EXISTS `tbl_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `feature` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descript` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_category` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_images`
--

LOCK TABLES `tbl_images` WRITE;
/*!40000 ALTER TABLE `tbl_images` DISABLE KEYS */;
INSERT INTO `tbl_images` VALUES (1,'assets/images/food/31801-carrot.jpg','Vitamin A','carrot','Carrots were one of the vegetables examined in recent research on foods rich in beta-carotene and bone health.','food'),(2,'assets/images/food/19266-grapes.jpg','Vitamin B,C,A,E','grapes','A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis.','food'),(3,'assets/images/food/79949-melon.jpg','Vitamin B,C,A','melon','A melon is any of various plants of the family Cucurbitaceae with sweet edible, fleshy fruit.','food'),(4,'assets/images/food/7157-peach.jpg','Vitamin A,B,C,E,K','peach','The peach (Prunus persica) is a deciduous tree native to the region of Northwest China between the Tarim Basin and the north slopes of the Kunlun Shan mountains, where it was first domesticated and cultivated.','food'),(5,'assets/images/food/32889-strawberry.jpg','Vitamin B,C,E,K','strawberry','The garden strawberry (or simply strawberry; Fragaria ? ananassa)[1] is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries.','food'),(6,'assets/images/food/87478-pineapple.jpg','Vitamin B,C','pineapple','The pineapple (Ananas comosus) is a tropical plant with an edible multiple fruit consisting of coalesced berries, also called pineapples, and the most economically significant plant in the Bromeliaceae family.','food'),(7,'assets/images/food/26321-pear.jpg','Vitamin A','pear','abcd','food'),(8,'assets/images/food/74183-tomato.jpg','Vitamin X, Y, Z','tomato','The tomato (solanum lycopersicum) is a fruit. It is shiny and smooth. It has many small seeds. It is very tasty. It is also very good for health.','food'),(9,'assets/images/transportation/80369-bus.jpeg','pulic transportation','bus','pulic','transportation'),(10,'assets/images/transportation/47287-helicopter.jpg','The Downey Obesity R','helicopter','One of the cases reported involved a patient who weighed 250 pounds.','Transportation'),(11,'assets/images/transportation/19397-truck.png','Truck Transportation','truck','Truck, Transportation, Vehicle, Container.','Transportation');
/*!40000 ALTER TABLE `tbl_images` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-10 16:38:13
