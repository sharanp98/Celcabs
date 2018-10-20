-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for celcabs
CREATE DATABASE IF NOT EXISTS `celcabs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `celcabs`;

-- Dumping structure for table celcabs.customers
CREATE TABLE IF NOT EXISTS `customers` (
  `CNo` int(11) NOT NULL,
  `CName` varchar(50) NOT NULL,
  `CAddress` varchar(350) DEFAULT NULL,
  `CPrefDriver` varchar(50) DEFAULT NULL,
  `CNoOfBookings` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table celcabs.customers: ~3 rows (approximately)
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`CNo`, `CName`, `CAddress`, `CPrefDriver`, `CNoOfBookings`) VALUES
	(1, 'Aadith', 'address1', 'Driverr 1', 0),
	(2, 'Sharan', 'address 2', 'sad', 3),
	(0, '895463211', NULL, NULL, NULL);
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;

-- Dumping structure for table celcabs.login_details
CREATE TABLE IF NOT EXISTS `login_details` (
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table celcabs.login_details: ~1 rows (approximately)
/*!40000 ALTER TABLE `login_details` DISABLE KEYS */;
INSERT INTO `login_details` (`Username`, `Password`) VALUES
	('sharan', 'abc');
/*!40000 ALTER TABLE `login_details` ENABLE KEYS */;

-- Dumping structure for table celcabs.login_timestamp
CREATE TABLE IF NOT EXISTS `login_timestamp` (
  `username` varchar(50) DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table celcabs.login_timestamp: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_timestamp` DISABLE KEYS */;
INSERT INTO `login_timestamp` (`username`, `login_time`) VALUES
	('sharan', '2018-10-15 20:37:49');
/*!40000 ALTER TABLE `login_timestamp` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
