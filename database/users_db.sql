-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2022 at 04:17 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_form`
--

DROP TABLE IF EXISTS `users_form`;
CREATE TABLE IF NOT EXISTS `users_form` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_form`
--

INSERT INTO `users_form` (`id`, `email`, `password`) VALUES
(1, 'hilary046@oulook.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'daveolo046@gmail.com', '2fc4a68635c26db1019047965180ce1b'),
(3, 'daveolo046@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'hilar046@oulook.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'hilary046@oulook.com', 'bcbe3365e6ac95ea2c0343a2395834dd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
