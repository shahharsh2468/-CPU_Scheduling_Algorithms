-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2020 at 05:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `os project`
--
CREATE DATABASE IF NOT EXISTS `os project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `os project`;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `cid` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`cid`, `name`, `email`, `password`, `contact`) VALUES
(1, 'demo', 'demo@gmail.com', 'demo', '9012345678'),
(2, 'TARAK', 'TARAK@GMAIL.COM', '1234', '8128630863'),
(3, 'harsh', 'harsh@gmail.com', '12345', '8160359415'),
(4, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `select_algorithm`
--

CREATE TABLE IF NOT EXISTS `select_algorithm` (
  `name` varchar(255) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `select_algorithm`
--

INSERT INTO `select_algorithm` (`name`, `id`) VALUES
('First Come First Served', 1),
('Shortest Job First', 2),
('Round Robin', 3),
('NON-PREEMPTIVE PRIORITY', 4),
('PRIORITY', 5),
('SHORTEST REMAINING TIME FIRST', 6),
('Longest Remaining Time First', 7),
('Longest Job First', 8);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(3) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `poster`, `video`) VALUES
(1, 'poster4.PNG', 'FCFS.mp4'),
(2, 'poster6.PNG', 'SJF.mp4'),
(3, 'poster7.PNG', 'RR.mp4'),
(4, 'npp.PNG', 'npp.mp4'),
(5, 'PRIORITY.PNG', 'priority.mp4'),
(6, 'srtf.PNG', 'srtf.mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
