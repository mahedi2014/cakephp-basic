-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2014 at 12:55 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.14-1+deb.sury.org~saucy+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp-basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `first_name` varchar(128) DEFAULT NULL,
  `last_name` varchar(128) DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `mobile_number` varchar(30) DEFAULT NULL,
  `image` text,
  `company_name` varchar(128) DEFAULT NULL,
  `primary_address_street` varchar(255) DEFAULT NULL,
  `primary_address_street_2` varchar(255) DEFAULT NULL,
  `primary_address_city` varchar(128) DEFAULT NULL,
  `primary_address_state` varchar(128) DEFAULT NULL,
  `primary_address_post_code` varchar(20) DEFAULT NULL,
  `primary_address_country` varchar(128) DEFAULT NULL,
  `billing_address_street` varchar(255) DEFAULT NULL,
  `billing_address_city` varchar(128) DEFAULT NULL,
  `billing_address_state` varchar(128) DEFAULT NULL,
  `billing_address_post_code` varchar(20) DEFAULT NULL,
  `billing_address_country` varchar(128) DEFAULT NULL,
  `security_question_1` varchar(128) DEFAULT NULL,
  `security_answer_1` varchar(128) DEFAULT NULL,
  `security_question_2` varchar(128) DEFAULT NULL,
  `security_answer_2` varchar(128) DEFAULT NULL,
  `security_question_custom` varchar(128) DEFAULT NULL,
  `security_answer_custom` varchar(128) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profile_FI_1` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `uuid`, `user_id`, `dealer_id`, `first_name`, `last_name`, `gender`, `date_of_birth`, `phone_number`, `mobile_number`, `image`, `company_name`, `primary_address_street`, `primary_address_street_2`, `primary_address_city`, `primary_address_state`, `primary_address_post_code`, `primary_address_country`, `billing_address_street`, `billing_address_city`, `billing_address_state`, `billing_address_post_code`, `billing_address_country`, `security_question_1`, `security_answer_1`, `security_question_2`, `security_answer_2`, `security_question_custom`, `security_answer_custom`, `created_at`, `updated_at`) VALUES
(2, '4f765aa3-3d16-49f7-83e8-efbcb6a2ffcb', 4, 0, 's', '', 1, '2014-09-23', 'dfdf', 'dfd', 'uploads/542791bc7a291web-solution-placeholder.jpg', 'dfd', 'df', 'dfdf', 'dfd', 'sd', '11', 'austria', '1', '2', '3', '4', 'aruba', 'what is the name of your favorite childhood friend? ', 'a', 'what is the name of your hometown?', 'a', 'aae', 'a', '2014-09-22 14:34:04', '2014-09-28 10:42:36'),
(3, '223606b6-fdef-46b2-9dc0-cb01da23babf', 5, 0, 'q', '     a     ', 0, '2014-09-02', '1', '1', 'uploads/5423b53685c80mahediazad.jpg', '1', '1', '1', '1', '1', '1', 'cartier islands', '1', '2', 's', '4', 'ashmore ', 'in what city were you born?', '1', 'what is the title and author of your favorite book?', '1', '1p', '1', '2014-09-23 16:34:37', '2014-09-28 11:05:59'),
(4, 'd294548b-80a6-43e0-a5eb-2bc7dd098d8c', 6, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-09-25 16:07:59', '2014-09-25 16:07:59'),
(5, '3de2b718-a22f-4ad4-a49a-9a33271e0ea3', 7, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2014-09-25 16:32:57', '2014-09-25 16:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `visible` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `username`, `email`, `password`, `role`, `visible`, `status`, `created_at`, `updated_at`) VALUES
(19, '', 'root', '', 'c05b94754b6d9c0e44f26c44b91d01b07488af14', 0, 0, 0, NULL, NULL),
(20, '', 'root', '', 'c05b94754b6d9c0e44f26c44b91d01b07488af14', 0, 0, 0, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
