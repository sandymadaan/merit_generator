-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2013 at 08:33 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.6-1ubuntu1.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `department_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `direct_temp2`
--

CREATE TABLE IF NOT EXISTS `direct_temp2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_no` varchar(50) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `seat_type` enum('Punjab 85','Other 15') CHARACTER SET utf8 NOT NULL,
  `student_category` varchar(50) NOT NULL,
  `sub_category` varchar(50) NOT NULL,
  `priority_list` varchar(50) NOT NULL,
  `aieee_roll_no` bigint(50) NOT NULL,
  `aieee_rank` bigint(50) NOT NULL,
  `rural_urban` enum('Rural','Urban') CHARACTER SET utf8 DEFAULT NULL,
  `sikh_status` enum('Yes','No') CHARACTER SET utf8 NOT NULL,
  `validation_status` varchar(20) NOT NULL,
  `serial_no` bigint(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2765 ;

--
-- Dumping data for table `direct_temp2`
--

INSERT INTO `direct_temp2` (`id`, `form_no`, `registration_no`, `name`, `seat_type`, `student_category`, `sub_category`, `priority_list`, `aieee_roll_no`, `aieee_rank`, `rural_urban`, `sikh_status`, `validation_status`, `serial_no`) VALUES
(3, '891', '562', 'Priya', 'Punjab 85', 'BA', '', '', 48909, 200, 'Urban', 'No', 'Validated', 103),
(4, '103', '455', 'Rimmi', 'Punjab 85', 'DF', 'DF2', 'F5', 4890, 3890, 'Rural', 'Yes', 'Validated', 104),
(5, '8374376', '455', 'Sandeep', 'Punjab 85', 'DF', 'DF1', 'F1', 37627, 200, 'Rural', 'No', 'Validated', 105),
(786, 'D-123', '7643', 'akshee', 'Other 15', 'SC', '', '', 98732, 123, 'Rural', 'No', 'Validated', 106),
(2763, 'D-111', '', 'Diljot', 'Punjab 85', 'GEN', '', '', 14536789, 234561, 'Rural', 'No', 'Validated', 100),
(2764, 'D-121', '', 'komal', 'Punjab 85', 'BC', '', '', 23145678, 123764, 'Urban', 'No', 'Validated', 101);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'gne');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
