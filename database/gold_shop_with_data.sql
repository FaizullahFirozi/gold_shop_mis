-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2021 at 02:23 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gold_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) DEFAULT NULL,
  `father_name` varchar(128) DEFAULT NULL,
  `phone` char(10) DEFAULT NULL,
  `date_save` date DEFAULT NULL,
  PRIMARY KEY (`customer_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `father_name`, `phone`, `date_save`) VALUES
(1, 'فیض الله', 'فیروزی', 'حاجی فیروز خان', '0780002528', '2021-02-01'),
(2, 'مزمل', 'فیروزی', 'نعمت الله', '078787878', '2021-02-01'),
(3, 'احمدالله', 'وطن دوست', 'ګل نبی', '078754545', '2021-02-01'),
(4, 'فهیم الله', 'فیروزی', 'حاجی', '0773362648', '2021-02-01'),
(5, 'طارق', 'ایوبی', 'محمد ایوب', '0784533645', '2021-02-01'),
(6, 'اتل', 'وردګ', 'محمد', '0787878787', '2021-02-01'),
(7, 'لالا ', 'کابلی', 'وطن دوست', '0777888955', '2021-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `gold_sample`
--

DROP TABLE IF EXISTS `gold_sample`;
CREATE TABLE IF NOT EXISTS `gold_sample` (
  `sample_id` int(11) NOT NULL AUTO_INCREMENT,
  `sample_name` varchar(128) NOT NULL,
  PRIMARY KEY (`sample_id`),
  UNIQUE KEY `sample_name` (`sample_name`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gold_sample`
--

INSERT INTO `gold_sample` (`sample_id`, `sample_name`) VALUES
(1, 'نکل'),
(3, 'مس'),
(4, 'طلا');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `sample_id` int(11) DEFAULT NULL,
  `sr_no` varchar(128) DEFAULT NULL,
  `gold_weight` float NOT NULL,
  `gold_percentage` float NOT NULL,
  `gold_carat` float NOT NULL,
  `date_year` int(11) NOT NULL,
  `date_month` tinyint(4) NOT NULL,
  `date_day` tinyint(4) NOT NULL,
  `date_hijri` date NOT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`sale_id`),
  KEY `sales_customer_fk` (`customer_id`),
  KEY `sales_gold_sample_fk` (`sample_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `customer_id`, `sample_id`, `sr_no`, `gold_weight`, `gold_percentage`, `gold_carat`, `date_year`, `date_month`, `date_day`, `date_hijri`, `price`) VALUES
(1, 2, 4, '454571321', 656, 88, 21.12, 2021, 2, 1, '1399-11-13', NULL),
(2, 1, 3, '1212589', 55, 991, 237.84, 2021, 2, 1, '1399-11-13', NULL),
(3, 1, 3, '7811522', 1878, 8887, 2132.88, 2021, 2, 1, '1399-11-13', NULL),
(4, 1, 3, '12145432', 56, 321, 77.04, 2021, 2, 1, '1399-11-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `full_name` (`full_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `password`) VALUES
(1, 'Faizullah firozi', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
