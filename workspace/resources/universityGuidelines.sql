-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 10:09 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- php_database Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `universityGuidelines`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobsFrequency`
--

CREATE TABLE IF NOT EXISTS `jobsFrequency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `occurence` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `jobsFrequency`
--

INSERT INTO `jobsFrequency` (`id`, `name`, `occurence`) VALUES
(11, 'social', 3),
(12, 'business', 3),
(13, 'law', 5),
(14, 'doctor', 6),
(15, 'programming', 2),
(16, 'i.t.', 1),
(17, 'computing', 7),
(18, 'art', 2),
(19, 'police', 2),
(20, 'judge', 1),
(21, 'vet', 2),
(22, 'agriculture', 2),
(23, 'retail', 3),
(24, 'engineering', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
