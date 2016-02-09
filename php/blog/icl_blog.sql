-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 07:50 AM
-- Server version: 5.6.14
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icl_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(0, 'Uncategorized'),
(6, 'News'),
(7, 'Events'),
(8, 'Notes');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_content` text NOT NULL,
  `publish_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `category_id`, `post_title`, `post_content`, `publish_date`) VALUES
(1, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(4, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(5, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(6, 4, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(7, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(8, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-28 06:34:45'),
(9, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(10, 4, 0, 'This is first post', 'This is dummy content.', '2016-01-28 06:34:45'),
(11, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(12, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-29 06:34:45'),
(13, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-28 06:34:45'),
(14, 4, 0, 'This is first post', 'This is dummy content.', '2016-01-30 06:34:45'),
(15, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(16, 1, 7, 'Dummy Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore sint non. Illum soluta quibusdam cumque, laudantium magni adipisci ratione voluptatum sapiente, et atque neque, dolorem unde provident doloribus ullam sint molestias corporis. Eum, enim! Ipsa cum culpa, ducimus! Dolorum, commodi a quos! Veniam ullam natus non cumque aliquam officia laudantium, ut mollitia nihil dicta facere accusamus dolorum vero commodi recusandae eaque, ipsum numquam, eveniet maxime cum sunt quo fugit quam. Suscipit tenetur harum, provident, nihil error alias animi quis voluptatem modi. Perspiciatis voluptatum, est culpa maxime, quo vitae quasi animi quod laborum libero dolores, deleniti fugit quaerat! Laudantium, maxime distinctio est ducimus hic provident magni veritatis ullam amet earum, fugit pariatur tempore, enim labore fuga nemo perspiciatis at non commodi ipsa, quia culpa repellat. Expedita accusamus excepturi aliquam voluptatibus at non quis eaque, provident ut similique nam, nihil earum error voluptate ullam voluptatem facilis incidunt delectus mollitia ad rerum.', '2016-02-04 06:21:14'),
(17, 1, 8, 'Where to Learn Web Development?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore sint non. Illum soluta quibusdam cumque, laudantium magni adipisci ratione voluptatum sapiente, et atque neque, dolorem unde provident doloribus ullam sint molestias corporis. Eum, enim! Ipsa cum culpa, ducimus! Dolorum, commodi a quos! Veniam ullam natus non cumque aliquam officia laudantium, ut mollitia nihil dicta facere accusamus dolorum vero commodi recusandae eaque, ipsum numquam, eveniet maxime cum sunt quo fugit quam. Suscipit tenetur harum, provident, nihil error alias animi quis voluptatem modi. Perspiciatis voluptatum, est culpa maxime, quo vitae quasi animi quod laborum libero dolores, deleniti fugit quaerat! Laudantium, maxime distinctio est ducimus hic provident magni veritatis ullam amet earum, fugit pariatur tempore, enim labore fuga nemo perspiciatis at non commodi ipsa, quia culpa repellat. Expedita accusamus excepturi aliquam voluptatibus at non quis eaque, provident ut similique nam, nihil earum error voluptate ullam voluptatem facilis incidunt delectus mollitia ad rerum.', '2016-02-04 06:21:36'),
(18, 1, 6, 'Convocation of BS Students', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore sint non. Illum soluta quibusdam cumque, laudantium magni adipisci ratione voluptatum sapiente, et atque neque, dolorem unde provident doloribus ullam sint molestias corporis. Eum, enim! Ipsa cum culpa, ducimus! Dolorum, commodi a quos! Veniam ullam natus non cumque aliquam officia laudantium, ut mollitia nihil dicta facere accusamus dolorum vero commodi recusandae eaque, ipsum numquam, eveniet maxime cum sunt quo fugit quam. Suscipit tenetur harum, provident, nihil error alias animi quis voluptatem modi. Perspiciatis voluptatum, est culpa maxime, quo vitae quasi animi quod laborum libero dolores, deleniti fugit quaerat! Laudantium, maxime distinctio est ducimus hic provident magni veritatis ullam amet earum, fugit pariatur tempore, enim labore fuga nemo perspiciatis at non commodi ipsa, quia culpa repellat. Expedita accusamus excepturi aliquam voluptatibus at non quis eaque, provident ut similique nam, nihil earum error voluptate ullam voluptatem facilis incidunt delectus mollitia ad rerum.', '2016-02-04 06:22:02'),
(19, 1, 6, 'Masters Result Announced', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore sint non. Illum soluta quibusdam cumque, laudantium magni adipisci ratione voluptatum sapiente, et atque neque, dolorem unde provident doloribus ullam sint molestias corporis. Eum, enim! Ipsa cum culpa, ducimus! Dolorum, commodi a quos! Veniam ullam natus non cumque aliquam officia laudantium, ut mollitia nihil dicta facere accusamus dolorum vero commodi recusandae eaque, ipsum numquam, eveniet maxime cum sunt quo fugit quam. Suscipit tenetur harum, provident, nihil error alias animi quis voluptatem modi. Perspiciatis voluptatum, est culpa maxime, quo vitae quasi animi quod laborum libero dolores, deleniti fugit quaerat! Laudantium, maxime distinctio est ducimus hic provident magni veritatis ullam amet earum, fugit pariatur tempore, enim labore fuga nemo perspiciatis at non commodi ipsa, quia culpa repellat. Expedita accusamus excepturi aliquam voluptatibus at non quis eaque, provident ut similique nam, nihil earum error voluptate ullam voluptatem facilis incidunt delectus mollitia ad rerum.', '2016-02-04 06:22:20'),
(20, 1, 0, 'Notifications Test', '<h1>This is heading level 1</h1>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam labore sint non. Illum soluta quibusdam cumque, laudantium magni adipisci ratione voluptatum sapiente, et atque neque, dolorem unde provident doloribus ullam sint molestias corporis. Eum, enim! Ipsa cum culpa, ducimus! Dolorum, commodi a quos! Veniam ullam natus non cumque aliquam officia laudantium, ut mollitia nihil dicta facere accusamus dolorum vero commodi recusandae eaque, ipsum numquam, eveniet maxime cum sunt quo fugit quam. Suscipit tenetur harum, provident, nihil error alias animi quis voluptatem modi. Perspiciatis voluptatum, est culpa maxime, quo vitae quasi animi quod laborum libero dolores, deleniti fugit quaerat! Laudantium, maxime distinctio est ducimus hic provident magni veritatis ullam amet earum, fugit pariatur tempore, enim labore fuga nemo perspiciatis at non commodi ipsa, quia culpa repellat. Expedita accusamus excepturi aliquam voluptatibus at non quis eaque, provident ut similique nam, nihil earum error voluptate ullam voluptatem facilis incidunt delectus mollitia ad rerum.', '2016-02-04 06:24:57'),
(21, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(22, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(23, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(24, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(25, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(26, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(27, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(28, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(29, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(30, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(31, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(32, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(33, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(34, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(35, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(36, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(37, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(38, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(39, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(40, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(41, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(42, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(43, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(44, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(45, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(46, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45'),
(47, 1, 0, 'This is first post', 'This is dummy content.', '2016-01-27 06:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `username`, `password`) VALUES
(1, 'John Doe', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'Jane Doe', 'test', '098f6bcd4621d373cade4e832627b4f6');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
