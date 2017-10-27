-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2017 at 05:06 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `date` int(11) NOT NULL,
  `author` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `date`, `author`) VALUES
(1, 'Drupal bugathon at Zyxware', 'We are happy to announce that we will be conducting a Drupal bugathon at our office at Sasthamangalam, Trivandrum on the 1st of February 2014. If you are a Drupal developer and you would like to get some guidance on how to contribute to Drupal you are welcome to join us. Bring your own laptops for the session.', 1391106600, 'webmaster'),
(2, 'Zyxware is one of the 5 featured service providers', 'We are happy to announce that Zyxware is now a Featured Service Provider on Drupal.org, a select club of Drupal providers with only another 4 members from India. This is a recognition of our contributions to Drupal over these years. We thank all our employees who have helped make this possible through their sustained contributions and members of the Drupal community who have guided,mentored and helped us as we grew in the Drupal space.', 1387132200, 'webmaster'),
(3, 'Drupal Boost Captcha by Zyxware', 'We have created and released a new module Boost Captcha to allow static page caching of pages with forms with captcha without running into the captcha session timeout errors. By helping boost cache more pages the module will allow for better performance without compromising on spam protection.', 1378751400, 'webmaster');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_path` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image_path`) VALUES
(1, 'cat', 'cat@cat', '9d989e8d27dc9e0ec3389fc855f142c3d40f0c50', 'uploads/1.jpg'),
(26, 'asd', 'asda', 'asad', 'asdada'),
(27, 'gesff', 'werwred@gdg', 'f1cb38fe82ede99eef2ba155b497066533c7adc8', 'uploads/27.jpg'),
(28, 'cat', 'cat@cat', '9d989e8d27dc9e0ec3389fc855f142c3d40f0c50', 'uploads/28.jpg'),
(29, 'jithin', 'sdfsf@gdfdg', '65c6a0c77aa59444a785ce12c261692862ee6c30', 'uploads/29.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
