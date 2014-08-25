-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2014 at 11:54 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gadgets`
--

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE IF NOT EXISTS `gifts` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `giftor` varchar(8) NOT NULL,
  `giftee` varchar(8) NOT NULL,
  `code` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id`, `giftor`, `giftee`, `code`) VALUES
(33, 'alpha', 'beta', 'gex289'),
(32, 'alpha', 'beta', 'gex289'),
(31, 'alpha', 'beta', 'gex289'),
(30, 'alpha', 'beta', 'gex289'),
(29, 'alpha', 'beta', 'gex289'),
(28, 'alpha', '', 'gex289'),
(27, 'alpha', '', 'gex289'),
(26, 'alpha', '', 'gex289'),
(25, 'alpha', '', 'gex289'),
(24, 'alpha', 'beta', 'gex289'),
(23, 'alpha', 'beta', 'gex289'),
(22, 'alpha', 'beta', 'gex289'),
(21, 'alpha', 'beta', 'gex289'),
(20, 'alpha', 'beta', 'gex289'),
(34, 'alpha', 'beta', 'gex289');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `code` varchar(10) NOT NULL,
  `price` int(4) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`code`, `price`) VALUES
('GEx289', 6000),
('GEx290', 6000),
('GEx291', 6000),
('GEx292', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `buyer` varchar(8) NOT NULL,
  `code` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `buyer`, `code`) VALUES
(1, 'alpha', 'gex289'),
(2, 'alpha', 'gex289'),
(3, 'alpha', 'gex289');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(14) NOT NULL,
  `password` varchar(14) NOT NULL,
  `email` varchar(99) NOT NULL,
  `name` varchar(99) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `balance` int(9) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `name`, `phone`, `balance`) VALUES
('alpha', 'alpha-pwd-11', 'alpha@example.com', 'Alpha User', '1234567890', 999999999),
('beta', 'beta-pwd-11', 'beta@example.com', 'Beta User', '2345678901', 999999999),
('gamma', 'gamma-pwd-11', 'gamma@example.com', 'Gamma User', '3456789012', 999999999),
('delta', 'delta-pwd-11', 'delta@example.com', 'Delta User', '4567890123', 999999999),
('epsilon', 'epsilon-pwd-11', 'epsilon@example.com', 'Epsilon User', '5678901234', 999999999),
('zeta', 'zeta-pwd-11', 'zeta@example.com', 'Zeta User', '6789012345', 999999999),
('eta', 'eta-pwd-11', 'eta@example.com', 'Eta User', '7890123456', 999999999),
('', '', '', '', '', 999999999);
