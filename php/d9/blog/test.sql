-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2016 at 08:23 AM
-- Server version: 5.6.14
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `first_name`, `last_name`, `country`) VALUES
(1, 'Roger', 'Pressman', 'America'),
(2, 'Balaguru', 'Sammy', 'India'),
(3, 'Balaguru', 'Copy', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `book_title` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `publish_year` int(11) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `author_id`, `book_title`, `publisher`, `publish_year`) VALUES
(1, 1, 'Software Engg', 'McGraw', 2008),
(2, 1, 'Intro to Software Engg', 'McGraw', 2008),
(3, 2, 'Introduction to C++', 'McGraw', 2008),
(4, 2, 'OOP in C++', 'Schaum', 2005);

-- --------------------------------------------------------

--
-- Table structure for table `gph_meta`
--

CREATE TABLE IF NOT EXISTS `gph_meta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `postlines` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `store_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_name` varchar(30) NOT NULL,
  `store_location` varchar(50) NOT NULL,
  PRIMARY KEY (`store_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`store_id`, `store_name`, `store_location`) VALUES
(1, 'Naseem Stationary', 'Sarban Chowk');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `roll_num` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `class` int(11) NOT NULL,
  PRIMARY KEY (`roll_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll_num`, `student_name`, `father_name`, `class`) VALUES
(1, 'Ayesha Mughal', 'Muhamad Safdar', 16),
(3, 'Sehrish Maqbool', 'Maqbool ur Rehman', 16),
(4, 'Mehnaz Maqsood', 'Maqsood ur Rehman', 16),
(5, 'Nida Rehman', 'Fazal ur Rehman', 16),
(10, 'Some Student', 'His Father', 16),
(11, 'Muhammad Ali', 'Muhammad Ali Father', 16);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
