-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2014 at 07:36 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(69) NOT NULL,
  `contact` int(8) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `contact` (`contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `contact`, `date`, `time`) VALUES
(8, 'abc', 123, '2013-11-29', '00:00:00'),
(9, 'cde', 765, '2013-11-30', '00:00:00'),
(10, 'abc', 123, '2013-11-29', '00:00:00'),
(15, '', 0, '0000-00-00', '00:00:00'),
(16, '', 0, '0000-00-00', ''),
(17, '', 0, '0000-00-00', ''),
(18, '', 0, '0000-00-00', ''),
(19, 'abc', 0, '2014-01-05', ''),
(20, 'abc', 0, '', ''),
(21, 'abc', 0, '', ''),
(22, 'abc', 0, '', ''),
(23, 'abc', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `cnic` varchar(20) NOT NULL,
  `cell` int(8) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `practice` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `fathername`, `cnic`, `cell`, `qualification`, `specialization`, `practice`, `gender`, `username`, `password`) VALUES
(1, 'alksdfjlaskfj', 'khan', '0', 0, 'aslkdfj', '', 'skldfj34', '0', 'abcde', 'cdefg'),
(2, 'alksdfjlaskfj', 'khan', '0', 0, 'aslkdfj', 'Mbbs', 'skldfj34', '0', 'zayad', 'zayad'),
(3, 'ali khan', 'ali', '0', 0, 'msc', 'kuchnahee', 'kal say', '0', 'ali', 'ali'),
(5, 'alksfd', 'kjh', '0', 0, '', '', '', '0', 'jan', 'jan'),
(8, '', '', '0', 0, '', '', '', '0', '', ''),
(9, '', '', '0', 0, '', '', '', '0', '', ''),
(10, '', '', '0', 0, '', '', '', '0', '', ''),
(11, 'abc', '', '0', 0, '', '', '', '0', '', ''),
(12, '', '', '0', 0, '', '', '', '0', '', ''),
(13, 'lala', '', '0', 0, 'lksf', 'lkj', 'lkj', '0', 'lala', 'lala'),
(14, 'Farrukh', '', '0', 0, 'MBBS', 'Urology', 'Dabgari', '', 'farrukh', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(8) NOT NULL,
  `patient_id` int(8) NOT NULL,
  `name` varchar(40) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `doctor_id`, `patient_id`, `name`, `feedback`) VALUES
(3, 0, 0, 'abc', 'kjdshfklsjadfh'),
(4, 0, 0, 'abc', ';laskdfjsdkfh'),
(5, 0, 0, 'abc', 'The quick brown fox jumps over the lazy dog.');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `cnic` varchar(15) NOT NULL,
  `cell` int(8) NOT NULL,
  `dob` int(8) NOT NULL,
  `age` int(8) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL,
  `file` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `name` (`name`),
  KEY `cell` (`cell`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `fathername`, `cnic`, `cell`, `dob`, `age`, `gender`, `address`, `city`, `district`, `bloodgroup`, `email`, `country`, `username`, `password`, `title`, `file`) VALUES
(7, 'cde', 'cde', '879', 765, 56, 34, '', 'kljh', 'kljh', 'lkjh', 'lkjh', 'kjh', 'kljh', 'cde', 'cde', '', ''),
(14, 'khan', 'khan', '8796', 876, 12, 18, 'male', 'asdf', 'dsag', 'as@gmail.com', 'khan', 'khan', '', 'dsafg', 'asdf', '', ''),
(15, 'hjg', 'kjg', '785', 85, 75, 54, 'Male', 'kjg', 'kjg', 'kgh', 'jkg', 'hjgf', '', 'khan', 'khan', '', ''),
(17, 'Farrukh', 'Farid', '2147483647', 32324324, 25, 12, 'Male', 'Peshawar', 'Peshawar', 'Peshawar', 'A+ve', 'farrukhbrains@gmail.com', '', 'admin', 'admin', '', ''),
(20, 'lkjh', 'lkjh', '0', 0, 0, 0, 'Male', 'kljh', 'lkjh', 'kljh', 'kjlh', 'kjlh', '', 'abc', 'abc', '', ''),
(21, 'aftab', 'khan', '1234', 123, 120948, 13, 'Male', 'l;aksdfhsdjkfh', 'kljhljkh', 'kljh', 'kljh', 'kljh', '', 'aftab', 'aftab', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `regno` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `shopaddress` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `name`, `fathername`, `regno`, `email`, `shopaddress`, `username`, `password`) VALUES
(1, 'abc', 'abc', 3, 'skdj', 'asdf', 'abc', 'abc'),
(3, 'gulbadin', 'gulkhan', 1234, 'khsdlf@gmail.com', 'lkashdf', 'gulbadin', 'gulbadin'),
(8, '', '', 0, '', '', 'farrukh', 'abc'),
(9, '', '', 0, '', '', 'aftab', 'aftab'),
(10, '', '', 0, '', '', 'lala', 'kha');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(8) NOT NULL,
  `doctorname` varchar(50) NOT NULL,
  `patient_id` int(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  `prescription` varchar(200) NOT NULL,
  `treated` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_id` (`patient_id`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `doctor_id`, `doctorname`, `patient_id`, `name`, `prescription`, `treated`) VALUES
(12, 0, '', 20, 'abc', 'kjhgkhkjgh', 'Treated'),
(13, 0, '', 20, 'abc', 'hjgkjghkjghkjg', 'Treated'),
(14, 0, '', 20, 'abc', 'Disprol', 'Treated'),
(15, 3, '', 20, 'abc', 'Angiocard', 'Treated'),
(17, 3, '', 20, 'abc', 'lkjbkljb', ''),
(19, 3, '', 20, 'abc', 'Ascard', ''),
(20, 3, '', 20, 'abc', 'Ascard', 'Treated'),
(22, 13, 'lala', 20, 'abc', 'lhlkjhlkjhlkjh', 'Treated'),
(23, 14, 'farrukh', 21, 'aftab', 'panadol', 'Treated');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `patient_id` int(8) NOT NULL,
  `title` varchar(40) NOT NULL,
  `file` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `patient_id`, `title`, `file`) VALUES
(27, 21, '', '../doctorpanel/reports/1501774_619381511444064_266143309_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `doctor_id` varchar(40) NOT NULL,
  `patientname` varchar(40) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(30) NOT NULL,
  `patient_id` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=188 ;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `doctor_id`, `patientname`, `date`, `time`, `patient_id`) VALUES
(186, '14', 'abc', '2014-01-13', '4pm', 20),
(187, '14', 'abc', '14-01-14', '4:45pm', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
