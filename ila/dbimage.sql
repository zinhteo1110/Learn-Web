-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 10:06 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbimage`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE IF NOT EXISTS `tbl_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `feature` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descript` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `file`, `feature`, `name`, `descript`) VALUES
(10, 'assets/images/food/.31801-carrot.jpg', 'Vitamin A', 'carrot', 'Carrots were one of the vegetables examined in recent research on foods rich in beta-carotene and bone health.'),
(11, 'assets/images/food/.19266-grapes.jpg', 'Vitamin B,C,A,E', 'grapes', 'A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis.'),
(12, 'assets/images/food/.79949-melon.jpg', 'Vitamin B,C,A', 'melon', 'A melon is any of various plants of the family Cucurbitaceae with sweet edible, fleshy fruit.'),
(13, 'assets/images/food/.7157-peach.jpg', 'Vitamin A,B,C,E,K', 'peach', 'The peach (Prunus persica) is a deciduous tree native to the region of Northwest China between the Tarim Basin and the north slopes of the Kunlun Shan mountains, where it was first domesticated and cultivated.'),
(14, 'assets/images/food/.32889-strawberry.jpg', 'Vitamin B,C,E,K', 'strawberry', 'The garden strawberry (or simply strawberry; Fragaria ? ananassa)[1] is a widely grown hybrid species of the genus Fragaria, collectively known as the strawberries.'),
(15, 'assets/images/food/.87478-pineapple.jpg', 'Vitamin B,C', 'pineapple', 'The pineapple (Ananas comosus) is a tropical plant with an edible multiple fruit consisting of coalesced berries, also called pineapples, and the most economically significant plant in the Bromeliaceae family.'),
(16, 'assets/images/food/.26321-pear.jpg', 'Vitamin A', 'pear', 'abcd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
