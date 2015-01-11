-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2011 at 11:22 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kenhbuon_buonban`
--

-- --------------------------------------------------------

--
-- Table structure for table `kbb_users`
--

CREATE TABLE IF NOT EXISTS `kbb_users` (
  `uid` int(10) unsigned NOT NULL auto_increment,
  `mail` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `kbb_users`
--

