-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 08:36 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emedics_tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(211) NOT NULL,
  `password` varchar(212) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(100) NOT NULL,
  `description` varchar(110) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_title` (`cat_title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `description`, `image`) VALUES
(13, 'Yamaha', 'Multan', 'yamaha-yzf-r15-v20-revving-blue.png');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `price` varchar(110) NOT NULL,
  `cat_title` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cat_title` (`cat_title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `price`, `cat_title`, `image`) VALUES
(22, 'Yahama 125', '50000', 'Yamaha', 'yamaha-yzf-r15s-track-white.jpg'),
(23, 'test', 'gg', 'Yamaha', 'cs403.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(202) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` varchar(212) NOT NULL,
  `city` varchar(213) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `city`) VALUES
(5, 'usman', 'usman@gmail.com', 'user', '123456789', 'Multan'),
(13, 'Test User', 'test@gamil.com', '12345', '5646545411', 'Okara'),
(14, 'Ali Raza', 'ali@gmail.com', 'user', '0300123456789', 'Islamabad'),
(15, 'Nazish', 'nazish@gmail.com', '12345', '6454564545', 'Rawalpindi'),
(16, 'Ali', 'ali@gmail.com', '12345', '314897565', 'Islamabad Capital Territory');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`cat_title`) REFERENCES `categories` (`cat_title`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
