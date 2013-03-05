-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2013 at 07:40 PM
-- Server version: 5.5.8-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sphinx`
--

-- --------------------------------------------------------

--
-- Table structure for table `sp_page_links_clicks`
--

CREATE TABLE IF NOT EXISTS `sp_page_links_clicks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(20) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sp_products`
--

CREATE TABLE IF NOT EXISTS `sp_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `tagline` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `app_logo` varchar(100) NOT NULL DEFAULT 'img/1.png',
  `url` text NOT NULL,
  `visibility` tinyint(4) NOT NULL,
  `version` varchar(10) NOT NULL,
  `app_type` varchar(20) NOT NULL DEFAULT 'Application',
  `date_of_creation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sp_products`
--

INSERT INTO `sp_products` (`id`, `name`, `tagline`, `desc`, `app_logo`, `url`, `visibility`, `version`, `app_type`, `date_of_creation`) VALUES
(1, 'BMI-Calculator', 'Body mass Index Calculator, used to calculate BMI Index based on the submitted Date of birth and Mass', 'Body mass Index Calculator, used to calculate BMI Index based on the submitted Date of birth and Mass.\r\nBody mass Index Calculator, used to calculate BMI Index based on the submitted Date of birth and Mass.\r\nBody mass Index Calculator, used to calculate BMI Index based on the submitted Date of birth and Mass.\r\nBody mass Index Calculator, used to calculate BMI Index based on the submitted Date of birth and Mass.', 'images/1.png', 'play.google.com', 1, '1.0', 'Application', '2013-02-09 09:00:00'),
(2, 'Currency Converter', 'Currency Converted based on the Upto date currency values from the current market', 'Currency Converted based on the Upto date currency values from the current market\r\nCurrency Converted based on the Upto date currency values from the current market\r\nCurrency Converted based on the Upto date currency values from the current market\r\nCurrency Converted based on the Upto date currency values from the current market', 'images/1.png', 'play.google.com', 1, '1.', 'Application', '2013-02-09 17:32:00'),
(3, 'Basic Calculator', 'Basic day to day operations to be performed', 'Basic day to day operations to be performed\r\nBasic day to day operations to be performedBasic day to day operations to be performed\r\nBasic day to day operations to be performed\r\nBasic day to day operations to be performed\r\nBasic day to day operations to be performed', 'images/1.png', 'play.google.com', 1, '1.0', 'Application', '2013-02-09 17:32:00'),
(4, 'Scientific Calculator', 'All the scientific calculators upto its maximum range', 'All the scientific calculators upto its maximum range\r\nAll the scientific calculators upto its maximum range\r\nAll the scientific calculators upto its maximum rangeAll the scientific calculators upto its maximum range\r\nAll the scientific calculators upto its maximum range\r\nAll the scientific calculators upto its maximum range\r\nAll the scientific calculators upto its maximum range', 'images/1.png', 'play.google.com', 1, '1.0', 'Application', '2013-02-09 09:00:00'),
(5, 'TaskList', 'Map based optimal task scheduler ', 'Map based optimal task scheduler \r\nMap based optimal task scheduler Map based optimal task scheduler \r\nMap based optimal task scheduler \r\nMap based optimal task scheduler \r\nMap based optimal task scheduler \r\nMap based optimal task scheduler \r\nMap based optimal task scheduler Map based optimal task scheduler Map based optimal task scheduler Map based optimal task scheduler Map based optimal task scheduler Map based optimal task scheduler Map based optimal task scheduler ', 'images/1.png', 'play.google.com', 1, '1.0', 'Application', '2013-02-09 09:00:00'),
(6, 'Soccer', 'A realistic soccer game with exciting gaming features', 'A realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming features\r\nA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming featuresA realistic soccer game with exciting gaming features', 'images/1.png', 'play.google.com', 1, '1.0', 'Game', '2013-02-09 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sp_products_links_clicks`
--

CREATE TABLE IF NOT EXISTS `sp_products_links_clicks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) NOT NULL,
  `dateofclick` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sp_product_version`
--

CREATE TABLE IF NOT EXISTS `sp_product_version` (
  `id` int(11) NOT NULL,
  `version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
