-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2013 at 11:34 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

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
-- Table structure for table `sp_ideas`
--

CREATE TABLE IF NOT EXISTS `sp_ideas` (
  `idea_id` int(11) NOT NULL AUTO_INCREMENT,
  `idea_author_id` varchar(30) NOT NULL,
  `idea_title` varchar(200) NOT NULL,
  `idea_description` text NOT NULL,
  `idea_datetime` datetime NOT NULL,
  PRIMARY KEY (`idea_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sp_ideas`
--

INSERT INTO `sp_ideas` (`idea_id`, `idea_author_id`, `idea_title`, `idea_description`, `idea_datetime`) VALUES
(1, '', 'Bmi calculator', 'calculates your BMI', '2013-03-07 14:17:03'),
(2, '', 'currency cobnverter', 'Idea Description', '2013-03-07 14:51:18'),
(3, '', 'disco lights', 'Idea Description', '2013-03-07 14:58:44'),
(4, '', 'new one', 'Idea Description', '2013-03-07 16:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `sp_idea_comments`
--

CREATE TABLE IF NOT EXISTS `sp_idea_comments` (
  `idea_comment_id` int(13) NOT NULL AUTO_INCREMENT,
  `idea_comment_author_id` varchar(30) NOT NULL,
  `idea_comment` text NOT NULL,
  `idea_comment_datetime` datetime NOT NULL,
  `idea_id` int(11) NOT NULL,
  PRIMARY KEY (`idea_comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sp_idea_comments`
--

INSERT INTO `sp_idea_comments` (`idea_comment_id`, `idea_comment_author_id`, `idea_comment`, `idea_comment_datetime`, `idea_id`) VALUES
(1, '', 'Comment', '2013-03-07 16:25:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sp_idea_comment_ratings`
--

CREATE TABLE IF NOT EXISTS `sp_idea_comment_ratings` (
  `idea_comment_id` int(13) NOT NULL,
  `idea_comment_rating_author_id` varchar(30) NOT NULL,
  `idea_comment_rating_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_idea_ratings`
--

CREATE TABLE IF NOT EXISTS `sp_idea_ratings` (
  `idea_id` int(11) NOT NULL,
  `idea_rating_author_id` varchar(30) NOT NULL,
  `idea_rating_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_idea_ratings`
--

INSERT INTO `sp_idea_ratings` (`idea_id`, `idea_rating_author_id`, `idea_rating_datetime`) VALUES
(1, 'rahul', '2013-03-08 15:15:31'),
(1, 'karthik', '2013-03-08 15:16:23'),
(1, 'rp', '2013-03-08 15:16:29'),
(2, 'rp', '2013-03-08 15:16:35'),
(3, 'rp', '2013-03-08 15:16:40'),
(3, 'karthik', '2013-03-08 15:16:47'),
(3, 'abcd', '2013-03-08 15:16:54');

-- --------------------------------------------------------

--
-- Table structure for table `sp_idea_tags`
--

CREATE TABLE IF NOT EXISTS `sp_idea_tags` (
  `idea_id` int(11) NOT NULL,
  `idea_tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_idea_views`
--

CREATE TABLE IF NOT EXISTS `sp_idea_views` (
  `idea_id` int(11) NOT NULL,
  `idea_views` int(6) NOT NULL,
  UNIQUE KEY `idea_id` (`idea_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `sp_products_media`
--

CREATE TABLE IF NOT EXISTS `sp_products_media` (
  `product_id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp_products_media`
--

INSERT INTO `sp_products_media` (`product_id`, `url`, `type`) VALUES
(1, '1.png', '1'),
(1, '2.png', '1'),
(1, '3.png', '1'),
(1, '4.png', '1'),
(1, '5.png', '1'),
(1, '6.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sp_product_reviews`
--

CREATE TABLE IF NOT EXISTS `sp_product_reviews` (
  `review_id` int(10) NOT NULL,
  `review_author_id` varchar(30) NOT NULL,
  `review` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `review_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_product_version`
--

CREATE TABLE IF NOT EXISTS `sp_product_version` (
  `id` int(11) NOT NULL,
  `version` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_user_details`
--

CREATE TABLE IF NOT EXISTS `sp_user_details` (
  `user_id` varchar(30) NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_dob` date NOT NULL,
  `user_gender` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sp_user_login`
--

CREATE TABLE IF NOT EXISTS `sp_user_login` (
  `mode` tinyint(2) NOT NULL DEFAULT '0',
  `user_id` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL DEFAULT 'g36'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
