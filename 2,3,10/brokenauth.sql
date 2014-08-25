-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2014 at 02:56 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brokenauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` char(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` char(128) NOT NULL,
  `city` text NOT NULL,
  `credit` int(15) NOT NULL,
  `phone` int(15) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `email`, `salt`, `city`, `credit`, `phone`, `lastname`, `firstname`) VALUES
(15, '', '6187de23349a41c1acc69a53e7d46f102a0181e32cccb05ff8e641fd6283b466', '', '235', '', 0, 0, '', ''),
(16, 'test', 'bc7b936ac2c6a09222ecd5b3dba7e6f395c93b0439c1d478c75109e02f6f060f', 'avi@mail.com', 'be4', '', 0, 0, '', ''),
(17, 'avinash', '6a917c9944454a8649ee51b0b8d502ce2b9692fea53eb098af13bfd6c37c6b28', 'avinash.mankoo@gmail.com', '735', '', 0, 0, '', ''),
(18, 'avinash', '50f0ca38507a8844ab236c127df49d00507825b6637f2410336b485456c09c13', 'aa', '7b7', '', 0, 0, '', ''),
(19, 'wow', '581343c7ab30614dc76773070c42dad8878b42fe1b2b50f616ddfab52866280f', 'wow', 'acf', '', 0, 0, '', ''),
(20, 'wow2', 'ff36621449ac8d20f48ef25e2625fb86531a767eb2c431f711ad251130d99f1f', 'wow2@gmail.com', 'bd1', 'wowcity', 2147483647, 1234567890, '', ''),
(21, 'testing', 'f53d4e1f609984831324820fbdbac700575920df1316e5b0fdfc28ddaab6c041', 'testing@gmail.com', '355', 'testing City', 2147483647, 876543210, 'Testing lastname', 'testing firstname');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
