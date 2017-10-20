-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2014 at 07:32 AM
-- Server version: 5.5.28-0ubuntu0.12.04.2
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `date` int(11) NOT NULL,
  `author` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `date`, `author`) VALUES
(1, 'Drupal bugathon at Zyxware', 'We are happy to announce that we will be conducting a Drupal bugathon at our office at Sasthamangalam, Trivandrum on the 1st of February 2014. If you are a Drupal developer and you would like to get some guidance on how to contribute to Drupal you are welcome to join us. Bring your own laptops for the session.', 1391106600, 'webmaster'),
(2, 'Zyxware is one of the 5 featured service providers', 'We are happy to announce that Zyxware is now a Featured Service Provider on Drupal.org, a select club of Drupal providers with only another 4 members from India. This is a recognition of our contributions to Drupal over these years. We thank all our employees who have helped make this possible through their sustained contributions and members of the Drupal community who have guided,mentored and helped us as we grew in the Drupal space.', 1387132200, 'webmaster'),
(3, 'Drupal Boost Captcha by Zyxware', 'We have created and released a new module Boost Captcha to allow static page caching of pages with forms with captcha without running into the captcha session timeout errors. By helping boost cache more pages the module will allow for better performance without compromising on spam protection.', 1378751400, 'webmaster');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
