-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2018 at 12:13 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_of` varchar(255) NOT NULL,
  `appointment_time` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `patient_name`, `appointment_date`, `appointment_of`, `appointment_time`, `type`) VALUES
(1, 'testm', 'Munaf', '2018-12-04', '2', '02:00', 'hospital'),
(2, 'testm', 'Munaf Hajir', '2018-01-30', '1', '01:01', 'hospital'),
(4, 'testm', 'new', '2018-01-01', '2', '01:00', 'hospital'),
(5, 'testm', 'test', '2018-01-01', '3', '01:00', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

CREATE TABLE IF NOT EXISTS `gym` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `time_from` timestamp NULL DEFAULT NULL,
  `time_end` timestamp NULL DEFAULT NULL,
  `trainer` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `contact_no` bigint(12) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`username`),
  UNIQUE KEY `email_id` (`email_id`,`contact_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email_id`, `contact_no`, `type`) VALUES
(1, 'testm', 'e10adc3949ba59abbe56e057f20f883e', 'munafhajirpro@gmail.com', 2147483647, ''),
(2, 'testmu', 'e10adc3949ba59abbe56e057f20f883e', 'test@gmail.com', 2147483647, ''),
(4, 'testu', 'e10adc3949ba59abbe56e057f20f883e', 'mafon@hiaf', 1234567890, '');

-- --------------------------------------------------------

--
-- Table structure for table `validation`
--

CREATE TABLE IF NOT EXISTS `validation` (
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validation`
--

INSERT INTO `validation` (`name`, `type`) VALUES
('Suraj', 'Hospital'),
('Munaf', 'Gym'),
('Moin', 'Yoga');

-- --------------------------------------------------------

--
-- Table structure for table `yoga`
--

CREATE TABLE IF NOT EXISTS `yoga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `appointment_date` varchar(255) NOT NULL,
  `time_from` timestamp NOT NULL,
  `time_end` timestamp NOT NULL,
  `trainer` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
