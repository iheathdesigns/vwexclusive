-- phpMyAdmin SQL Dump
-- version 3.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2012 at 09:17 PM
-- Server version: 5.0.91
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ianheath`
--

-- --------------------------------------------------------

--
-- Table structure for table `vw_exclusive`
--

CREATE TABLE IF NOT EXISTS `vw_exclusive` (
  `id` tinyint(2) unsigned NOT NULL auto_increment,
  `file_name` varchar(100) NOT NULL,
  `alt` varchar(100) NOT NULL,
  `width` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `publish` enum('y','n') NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `vw_exclusive`
--

INSERT INTO `vw_exclusive` (`id`, `file_name`, `alt`, `width`, `height`, `date_created`, `date_modified`, `publish`) VALUES
(1, 'IMG_0484', 'IMG_0484', '500', '500', '2012-04-22 21:19:19', '2012-04-23 01:18:47', 'y'),
(2, 'IMG_1761', 'IMG_1761', '500', '500', '2012-04-22 21:21:03', '2012-04-23 01:18:47', 'y'),
(3, 'IMG_2621 [50%]', 'IMG_2621 [50%]', '500', '500', '2012-04-22 21:22:13', '2012-04-23 01:19:57', 'y'),
(4, 'IMG_6635', 'IMG_6635', '500', '500', '2012-04-22 21:22:31', '2012-04-23 01:19:57', 'y'),
(5, 'MTE-VW-Golf-R32-1', 'MTE-VW-Golf-R32-1', '500', '500', '2009-04-22 21:22:58', '2009-04-23 01:20:43', 'y'),
(6, 'Re-edited-copy', 'Re-edited-copy', '500', '500', '2012-04-22 21:23:17', '2012-04-23 01:20:43', 'y'),
(7, 'SC0004_2008_WP_1280x1024', 'SC0004_2008_WP_1280x1024', '500', '500', '2012-04-22 21:24:08', '2012-04-23 01:21:37', 'y'),
(8, 'Volkswagen-mk4-jetta-gli-Jetta-GLI-for-sale-custom-27081-2508', 'Volkswagen-mk4-jetta-gli-Jetta-GLI-for-sale-custom-27081-2508', '500', '500', '2012-04-22 21:19:19', '2012-04-23 01:18:47', 'y'),
(9, 'Volkswagen_Golf_Mk1_Euro__by_buckas', 'Volkswagen_Golf_Mk1_Euro__by_buckas', '500', '500', '2012-04-22 21:21:03', '2012-04-23 01:18:47', 'y'),
(10, 'Volkswagen_Scirocco_GT_by_DSMCarDesign', 'Volkswagen_Scirocco_GT_by_DSMCarDesign', '500', '500', '2012-04-22 21:22:13', '2012-04-23 01:19:57', 'y'),
(11, 'jgh002', 'jgh002', '500', '500', '2012-04-22 21:22:31', '2012-04-23 01:19:57', 'y'),
(12, 'passat-cc-kbr-motorsport-1', 'passat-cc-kbr-motorsport-1', '500', '500', '2012-04-22 21:22:58', '2012-04-23 01:20:43', 'y'),
(13, 'post-14-1211061735', 'post-14-1211061735', '500', '500', '2012-04-22 21:23:17', '2012-04-23 01:20:43', 'y'),
(14, 'rotiform wheels 051', 'rotiform wheels 051', '500', '500', '2012-04-22 21:24:08', '2012-04-23 01:21:37', 'y'),
(15, 'sciroccoFT640web', 'sciroccoFT640web', '500', '500', '2012-04-22 21:19:19', '2012-04-23 01:18:47', 'y'),
(16, 'sportec-sc350-vw-scirocco-2', 'sportec-sc350-vw-scirocco-2', '500', '500', '2012-04-22 21:21:03', '2012-04-23 01:18:47', 'y'),
(17, 'volkswagen_scirocco_3_rieger_04', 'volkswagen_scirocco_3_rieger_04', '500', '500', '2012-04-22 21:22:13', '2012-04-23 01:19:57', 'y'),
(18, 'vw-mk5-gli-rotiform-tmb-bagged-air-suspension-001', 'vw-mk5-gli-rotiform-tmb-bagged-air-suspension-001', '500', '500', '2012-04-22 21:22:31', '2012-04-23 01:19:57', 'y'),
(19, 'vw-mk5-gli-rotiform-tmb-bagged-air-suspension-003', 'vw-mk5-gli-rotiform-tmb-bagged-air-suspension-003', '500', '500', '2012-04-22 21:22:58', '2012-04-23 01:20:43', 'y'),
(20, 'vw_cc_stern_st-1', 'vw_cc_stern_st-1', '500', '500', '2012-04-22 21:23:17', '2012-04-23 01:20:43', 'y'),
(21, 'vwvortex-beetle-rs-5', 'vwvortex-beetle-rs-5', '500', '500', '2012-04-22 21:24:08', '2012-04-23 01:21:37', 'y')


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
