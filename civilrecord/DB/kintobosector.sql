-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2016 at 06:58 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kintobosector`
--

-- --------------------------------------------------------

--
-- Table structure for table `chlidrenbirth`
--

CREATE TABLE IF NOT EXISTS `chlidrenbirth` (
  `ch_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `chfname` varchar(20) NOT NULL,
  `chlname` varchar(20) NOT NULL,
  `dateOfbirth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `fathnames` varchar(40) NOT NULL,
  `matnames` varchar(40) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `vallege` varchar(20) NOT NULL,
  `alive` varchar(20) NOT NULL,
  PRIMARY KEY (`ch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `chlidrenbirth`
--

INSERT INTO `chlidrenbirth` (`ch_id`, `date`, `chfname`, `chlname`, `dateOfbirth`, `gender`, `fathnames`, `matnames`, `cell`, `vallege`, `alive`) VALUES
(1, '2016-07-13 20:45:41', 'maniragaba', 'Ricard', '2016-06-06', 'Male', 'mutunzi Gaspali', 'nyirarukundo', 'Ngishyita', 'Ngishyita', 'Alive');

-- --------------------------------------------------------

--
-- Table structure for table `dear1`
--

CREATE TABLE IF NOT EXISTS `dear1` (
  `d_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `natio_id` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dateofdear` date NOT NULL,
  `fatnames` varchar(40) NOT NULL,
  `monames` varchar(40) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `vellage` varchar(20) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `dear1`
--

INSERT INTO `dear1` (`d_id`, `date`, `fname`, `lname`, `natio_id`, `gender`, `dateofdear`, `fatnames`, `monames`, `sector`, `vellage`) VALUES
(1, '2016-06-13 10:50:50', 'lolo', 'keza', '1201653333444', 'Male', '2016-12-30', 'mukuzi', 'nyiramahirwe', 'kamusana', 'rubavu');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `manId` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`manId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manId`, `username`, `password`) VALUES
(1, 'Josiane', 'Josiane');
