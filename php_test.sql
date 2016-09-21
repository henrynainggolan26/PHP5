-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2016 at 05:59 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_post`, `title`, `content`, `user_id`, `create_at`, `update_at`) VALUES
(31, 'SS MAJU 1', '1We Are Hiring\r\nWe’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up.', '', '2016-09-16 14:08:50', '2016-09-20 14:50:15'),
(33, 'SS MAJU 2', '2\r\nWe Are Hiring\r\nWe’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up. 2', '1', '2016-09-16 16:55:57', '2016-09-16 16:59:22'),
(35, 'SS MAJU 3', '3\r\nWe Are Hiring\r\nWe’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up.3', '1', '2016-09-16 16:59:30', '2016-09-19 14:11:56'),
(36, 'SS MAJU 4', '\r\nWe Are Hiring\r\nWe’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up.4', '1', '2016-09-19 14:12:06', '2016-09-19 14:12:06'),
(37, 'SS MAJU 5', '5\r\nWe Are Hiring\r\nWe’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up.5', '1', '2016-09-19 14:12:20', '2016-09-19 14:12:20'),
(38, 'SS MAJU 6', '6\r\nWe Are Hiring\r\nWe’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up.6', '1', '2016-09-19 14:12:32', '2016-09-19 14:12:32'),
(39, 'SS MAJU 7', '7. We Are Hiring We’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up.', '1', '2016-09-19 15:22:38', '2016-09-19 15:22:38'),
(40, 'SS MAJU 8', 'We Are Hiring We’re changing the world through technology, one product at a time and we need you. We believe in people, surrounding designers, developers, QA and doers with in-house experts, to help deliver & execute the project or the best ideas we think up.8', '1', '2016-09-20 09:20:44', '2016-09-20 09:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
(1, 'blog_title', 'asdasd'),
(2, 'blog_description', 'asdasd'),
(7, 'footer_text', 'Copyright'),
(10, 'logo_text', 'logo');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`) VALUES
(1, 'ssmaju', 'ssmaju'),
(2, 'henry', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
