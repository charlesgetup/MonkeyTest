-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2014 at 12:37 PM
-- Server version: 5.6.15
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monkey`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_enquiries`
--

CREATE TABLE IF NOT EXISTS `customer_enquiries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `daytime_contact_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` enum('ACT','NSW','NT','QLD','SA','TAS','VIC','WA') COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enquiry_type` enum('General enquiry','Product feedback or enquiry','Product complaint') COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `use_by_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `batch_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enquiry` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer_enquiries`
--

INSERT INTO `customer_enquiries` (`id`, `first_name`, `surname`, `email`, `daytime_contact_number`, `address`, `suburb`, `state`, `postcode`, `enquiry_type`, `product_name`, `product_size`, `use_by_date`, `batch_code`, `enquiry`, `created_at`, `updated_at`) VALUES
(1, 'charles', 'li', '123@13.com', '123', '123', '123', 'NSW', '123', 'Product feedback or enquiry', '', '', '', '', '', '2014-01-14 23:09:13', '2014-01-14 23:09:13'),
(2, 'charles', 'li', '123@13.com', '123', '123', '123', 'NSW', '123', 'Product complaint', '123', '123', '123', '123', '123', '2014-01-14 23:18:28', '2014-01-14 23:18:28'),
(3, 'charles', 'li', '123@13.com', '123', '123', '123', 'NSW', '123', 'General enquiry', '', '', '', '', '', '2014-01-14 23:20:41', '2014-01-14 23:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_01_15_055551_create_customer_enquiries_table', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
