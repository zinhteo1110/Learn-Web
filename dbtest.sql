<<<<<<< HEAD
<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 10:12 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'zinhteo', 'duongngochai3000@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b'),
(2, 'hai_dota2', 'zinhteo@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `server` (
 `serverId` int(11) NOT NULL AUTO_INCREMENT,
 `serverName` varchar(30) NOT NULL,
 `IP` varchar(15),
 `Model` varchar(20),
 `CPU` varchar(20),
 `Cores` int(5),
 `HDD` varchar(20), 
 `Raid` varchar(20),
 `Rack` varchar(5),
 `Units` varchar(5),
 `Serial` varchar(20),
 `IP_iLO` varchar(15),
 `VLAN` int(5),
 `KVM_Note` varchar(30),
 `MAC_eth0` varchar(20),
 `Switch` varchar(15),
 `Port` varchar(10),
 `Note` varchar(50),
 PRIMARY KEY (`serverId`),
 UNIQUE KEY `IP` (`IP`)
=======
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 10:12 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'zinhteo', 'duongngochai3000@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b'),
(2, 'hai_dota2', 'zinhteo@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `server` (
 `serverId` int(11) NOT NULL AUTO_INCREMENT,
 `serverName` varchar(30) NOT NULL,
 `IP` varchar(15),
 `Model` varchar(20),
 `CPU` varchar(20),
 `Cores` int(5),
 `HDD` varchar(20), 
 `Raid` varchar(20),
 `Rack` varchar(5),
 `Units` varchar(5),
 `Serial` varchar(20),
 `IP_iLO` varchar(15),
 `VLAN` int(5),
 `KVM_Note` varchar(30),
 `MAC_eth0` varchar(20),
 `Switch` varchar(15),
 `Port` varchar(10),
 `Note` varchar(50),
 PRIMARY KEY (`serverId`),
 UNIQUE KEY `IP` (`IP`)
>>>>>>> b6fdec54d9c3bc63d30c0a17b9be740353d2a661
=======
<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 10:12 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'zinhteo', 'duongngochai3000@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b'),
(2, 'hai_dota2', 'zinhteo@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `server` (
 `serverId` int(11) NOT NULL AUTO_INCREMENT,
 `serverName` varchar(30) NOT NULL,
 `IP` varchar(15),
 `Model` varchar(20),
 `CPU` varchar(20),
 `Cores` int(5),
 `HDD` varchar(20), 
 `Raid` varchar(20),
 `Rack` varchar(5),
 `Units` varchar(5),
 `Serial` varchar(20),
 `IP_iLO` varchar(15),
 `VLAN` int(5),
 `KVM_Note` varchar(30),
 `MAC_eth0` varchar(20),
 `Switch` varchar(15),
 `Port` varchar(10),
 `Note` varchar(50),
 PRIMARY KEY (`serverId`),
 UNIQUE KEY `IP` (`IP`)
=======
-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2017 at 10:12 AM
-- Server version: 5.5.54-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userEmail` (`userEmail`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(1, 'zinhteo', 'duongngochai3000@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b'),
(2, 'hai_dota2', 'zinhteo@gmail.com', '221b37fcdb52d0f7c39bbd0be211db0e1c00ca5fbecd5788780463026c6b964b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE IF NOT EXISTS `server` (
 `serverId` int(11) NOT NULL AUTO_INCREMENT,
 `serverName` varchar(30) NOT NULL,
 `IP` varchar(15),
 `Model` varchar(20),
 `CPU` varchar(20),
 `Cores` int(5),
 `HDD` varchar(20), 
 `Raid` varchar(20),
 `Rack` varchar(5),
 `Units` varchar(5),
 `Serial` varchar(20),
 `IP_iLO` varchar(15),
 `VLAN` int(5),
 `KVM_Note` varchar(30),
 `MAC_eth0` varchar(20),
 `Switch` varchar(15),
 `Port` varchar(10),
 `Note` varchar(50),
 PRIMARY KEY (`serverId`),
 UNIQUE KEY `IP` (`IP`)
>>>>>>> b6fdec54d9c3bc63d30c0a17b9be740353d2a661
>>>>>>> aaaf96b1a48f0e5a8fe3e9458fec0b82e302150b
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=3;