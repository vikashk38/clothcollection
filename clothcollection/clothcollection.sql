-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2017 at 07:49 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothcollection`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(5) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_description` text NOT NULL,
  `p_price` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `cat_id`, `p_name`, `p_description`, `p_price`) VALUES
(1, 1, 'Men Jeans', 'Men Jeans!', '100'),
(2, 2, 'Women Jeans', 'Women Jeans', '155');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(10) NOT NULL,
  `is_parrent` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cat_id`, `cat_name`, `is_parrent`) VALUES
(1, 'Men', 0),
(2, 'Women', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `pg_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL COMMENT 'product id of product Table',
  `pg_name` varchar(100) NOT NULL,
  `pg_extension` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_variation`
--

CREATE TABLE `product_variation` (
  `pv_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `pv_value` varchar(15) NOT NULL,
  `pv_type` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_variation`
--

INSERT INTO `product_variation` (`pv_id`, `p_id`, `pv_value`, `pv_type`) VALUES
(1, 1, 'Red', 'color'),
(2, 1, '30', 'size'),
(3, 2, 'Blue', 'color'),
(4, 2, '28', 'size');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(100) DEFAULT NULL,
  `v_email` varchar(50) DEFAULT NULL,
  `v_mobile` varchar(15) DEFAULT NULL,
  `v_password` varchar(255) DEFAULT NULL,
  `v_street_address` text,
  `v_locality` varchar(255) DEFAULT NULL,
  `v_zipcode` int(6) DEFAULT NULL,
  `v_radius` int(5) DEFAULT NULL,
  `v_create_date` datetime DEFAULT NULL,
  `ip_address` varchar(20) NOT NULL,
  `v_status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`v_id`, `v_name`, `v_email`, `v_mobile`, `v_password`, `v_street_address`, `v_locality`, `v_zipcode`, `v_radius`, `v_create_date`, `ip_address`, `v_status`) VALUES
(1, 'Jamal Asharf', 'encore.jamal@gmail.com', '9971067266', '098f6bcd4621d373cade4e832627b4f6', 'Sakti Khand-4', 'Indrapuram', 201012, 5, '2017-08-20 00:00:00', '', '0'),
(2, 'Vikash Kumar', 'encore.vikash@gmail.com', '8745816343', '098f6bcd4621d373cade4e832627b4f6', 'Som Bazar Road', 'Uttam Nagar', 110059, 8, '2017-08-20 00:00:00', '', '0'),
(7, 'Vikash Kumar', 'testwazz22@gmail.com', NULL, 'ceb6c970658f31504a901b89dcd3e461', NULL, NULL, NULL, NULL, NULL, '', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`pv_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `pv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
