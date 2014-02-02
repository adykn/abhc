-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2013 at 07:28 PM
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
  `patientid` int(8) NOT NULL,
  `name` varchar(69) NOT NULL,
  `contact` int(8) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patientid` (`patientid`),
  KEY `name` (`name`),
  KEY `contact` (`contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patientid`, `name`, `contact`, `date`, `time`) VALUES
(8, 6, 'abc', 123, '2013-11-29', '00:00:00'),
(9, 7, 'cde', 765, '2013-11-30', '00:00:00'),
(10, 6, 'abc', 123, '2013-11-29', '00:00:00'),
(14, 0, '', 0, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `cnic` int(8) NOT NULL,
  `cell` int(8) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `practice` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `fathername`, `cnic`, `cell`, `qualification`, `specialization`, `practice`, `gender`, `username`, `password`) VALUES
(1, 'alksdfjlaskfj', 'khan', 0, 0, 'aslkdfj', '', 'skldfj34', 0, 'abcde', 'cdefg'),
(2, 'alksdfjlaskfj', 'khan', 0, 0, 'aslkdfj', '', 'skldfj34', 0, 'zayad', 'zayad'),
(3, 'ali khan', 'ali', 0, 0, 'msc', 'kuchnahee', 'kal say', 0, 'ali', 'ali'),
(4, 'khan', '', 0, 0, 'ldksfj', 'kjh', 'kjh', 0, 'lala', 'lala'),
(5, 'alksfd', 'kjh', 0, 0, '', '', '', 0, 'jan', 'jan'),
(6, 'alksfd', 'kjh', 0, 0, '', '', '', 0, 'jan', 'jan'),
(7, 'alksfd', 'kjh', 0, 0, '', '', '', 0, 'jan', 'jan'),
(8, '', '', 0, 0, '', '', '', 0, '', ''),
(9, '', '', 0, 0, '', '', '', 0, '', ''),
(10, '', '', 0, 0, '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `cnic` int(8) NOT NULL,
  `cell` int(8) NOT NULL,
  `dob` int(8) NOT NULL,
  `age` int(8) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `bloodgroup` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `name` (`name`),
  KEY `cell` (`cell`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `fathername`, `cnic`, `cell`, `dob`, `age`, `address`, `city`, `district`, `bloodgroup`, `email`, `country`, `username`, `password`) VALUES
(6, 'abc', 'abc', 1234, 123, 2, 3, 'sdfhk', 'kjh', 'kjh', 'kjh', 'kjh', 'kjh', 'abc', 'abc'),
(7, 'cde', 'cde', 879, 765, 56, 34, 'kljh', 'kljh', 'lkjh', 'lkjh', 'kjh', 'kljh', 'cde', 'cde'),
(8, 'lala', 'lala', 0, 0, 0, 0, '', '', '', '', '', '', 'lala', 'lala');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE IF NOT EXISTS `pharmacy` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `patientid` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `regno` int(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `shopaddress` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patientid` (`patientid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`id`, `patientid`, `name`, `fathername`, `regno`, `email`, `shopaddress`, `username`, `password`) VALUES
(1, 6, 'abc', 'abc', 3, 'skdj', 'asdf', 'abc', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `serielnumber`
--

CREATE TABLE IF NOT EXISTS `serielnumber` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `serielnumber`
--

INSERT INTO `serielnumber` (`id`, `name`, `fathername`) VALUES
(1, 'aklsdfj', 'akljsfh');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD CONSTRAINT `pharmacy_ibfk_1` FOREIGN KEY (`patientid`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
