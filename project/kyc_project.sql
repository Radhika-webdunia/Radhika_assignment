-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 06:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kyc_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Radhika', 'webdunia@1');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `phone`, `email`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `image`, `status`) VALUES
(1, 'asdasd', 2147483647, 'radhika.dixit@webdunia.net', 'female', 'India', 'mp', 'indore', 455001, 'Please11 ente1d233r dd234raddre1ss', 'upload/rose-blue-flower-rose-blooms-67636.jpeg', 1),
(2, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 0),
(4, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 0),
(5, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 1),
(6, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 0),
(7, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 0),
(8, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 0),
(9, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', 'India', 'delhi', 'delhi', 455001, 'TE4T6', '', 1),
(10, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', 'India', 'mp', 'indore', 455001, 'Please enter addressDJTJRJ', '', 0),
(11, 'radhika dixit', 1234567890, 'radhika.dixit@webdunia.net', 'female', 'India', 'up"', 'luckhnow', 455001, '24014gv;fvil;yhv;lcd', '', 1),
(12, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', 'India', 'delhi', 'delhi', 455001, 'khgyh', '', 0),
(13, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', 'India', 'delhi', 'delhi', 455001, 'Please enter addresspihuiyi', '', 1),
(14, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 0),
(15, 'Radhika', 919983451, 'radhika.dixit@webdunia.net', 'female', '', '', '', 0, '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
