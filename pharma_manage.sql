-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2015 at 06:01 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_status`
--

CREATE TABLE IF NOT EXISTS `bill_status` (
  `sl_num` bigint(20) unsigned NOT NULL,
  `order_id` int(11) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_status`
--

INSERT INTO `bill_status` (`sl_num`, `order_id`, `pay_status`, `total_bill`) VALUES
(3, 1, 1, 1935);

-- --------------------------------------------------------

--
-- Table structure for table `company_product`
--

CREATE TABLE IF NOT EXISTS `company_product` (
  `sl_num` int(11) NOT NULL,
  `ut_num` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_product`
--

INSERT INTO `company_product` (`sl_num`, `ut_num`, `product_id`) VALUES
(5, 6456456, 1),
(6, 6456456, 2),
(7, 6456456, 3),
(8, 6456456, 4),
(9, 6456456, 5),
(10, 6456456, 6),
(11, 6456456, 7),
(12, 6456456, 8),
(13, 6456456, 9),
(14, 6456456, 10),
(15, 6456456, 11);

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `cus_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `ut_number` int(11) NOT NULL,
  `company_address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `tel_number` int(11) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`cus_id`, `first_name`, `last_name`, `company_name`, `ut_number`, `company_address`, `city`, `state`, `zip`, `country`, `tel_number`, `gender`, `designation`) VALUES
(1, 'Del', 'Piero', 'Piero Pharma', 32343242, 'Gothliwing Street', 'Dortmund', 'West Bavaria', 9999, 'Germany', 345342342, 'male', 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

CREATE TABLE IF NOT EXISTS `customer_login` (
  `cus_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`cus_id`, `username`, `email`, `password`) VALUES
(1, 'piero', 'piero@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `mpo_customer_relation`
--

CREATE TABLE IF NOT EXISTS `mpo_customer_relation` (
  `sl_num` int(11) NOT NULL,
  `mpo_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpo_customer_relation`
--

INSERT INTO `mpo_customer_relation` (`sl_num`, `mpo_id`, `cus_id`, `status`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `mpo_details`
--

CREATE TABLE IF NOT EXISTS `mpo_details` (
  `mpo_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `ut_number` varchar(50) NOT NULL,
  `company_address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `tel_number` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpo_details`
--

INSERT INTO `mpo_details` (`mpo_id`, `first_name`, `last_name`, `company_name`, `ut_number`, `company_address`, `city`, `state`, `zip`, `country`, `tel_number`, `gender`, `designation`) VALUES
(1, 'Pastor', 'Maldonado', 'Mercedes AMG', '6456456', 'Downin Street', 'Berlin', 'Berlin', 6556, 'Germany', 987779897, 'male', 'Medical Representative'),
(2, 'Enriq', 'Mosley', 'Mercedes AMG', '6456456', 'Downin Street', 'Frankfurt', 'North Germany', 3222, 'Germany', 0, 'male', 'Medical Representative');

-- --------------------------------------------------------

--
-- Table structure for table `mpo_login`
--

CREATE TABLE IF NOT EXISTS `mpo_login` (
  `mpo_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mpo_login`
--

INSERT INTO `mpo_login` (`mpo_id`, `username`, `email`, `password`) VALUES
(1, 'pastor', 'pastor@gmail.com', '12345678'),
(2, 'enriq', 'enriq@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `order_description`
--

CREATE TABLE IF NOT EXISTS `order_description` (
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_of_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_description`
--

INSERT INTO `order_description` (`order_id`, `quantity`, `price`, `date_of_order`) VALUES
(1, 45, 43, 12),
(2, 30, 34, 12);

-- --------------------------------------------------------

--
-- Table structure for table `order_relation`
--

CREATE TABLE IF NOT EXISTS `order_relation` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `mpo_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `ut_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_relation`
--

INSERT INTO `order_relation` (`order_id`, `product_id`, `mpo_id`, `cus_id`, `ut_number`) VALUES
(1, 8, 1, 1, 6456456),
(2, 3, 1, 1, 6456456);

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`order_id`, `status`) VALUES
(1, 3),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_availability`
--

CREATE TABLE IF NOT EXISTS `product_availability` (
  `product_id` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_availability`
--

INSERT INTO `product_availability` (`product_id`, `availability`) VALUES
(4545, 2),
(1, 1),
(2, 1),
(3, 1),
(4, 0),
(5, 0),
(6, 0),
(7, 1),
(8, 1),
(9, 1),
(10, 0),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_description`
--

CREATE TABLE IF NOT EXISTS `product_description` (
  `product_id` int(11) NOT NULL,
  `business_name` varchar(50) NOT NULL,
  `scientific_name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `batch_number` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_description`
--

INSERT INTO `product_description` (`product_id`, `business_name`, `scientific_name`, `product_type`, `batch_number`, `price`) VALUES
(1, 'Para Bayer', 'Paracetamol', 'Tablet', '3343233', 34),
(2, 'Apotel', 'Paracetamol', 'Syrup', '4454443', 56),
(3, 'Seacold', 'Antitussive', 'Syrup', '667778', 34),
(4, 'Aeknil', 'Paracetamol', 'Injection', '555443', 566),
(5, 'Pyricalm', 'Paracetamol', 'Injection', '555443', 344),
(6, 'Aclosh', 'Paracetamol', 'Tablet', '555443', 344),
(7, 'Ethics', 'Paracetamol', 'Capsule', '778887', 346),
(8, 'Loserol', 'Omeprazol', 'Injection', '55455', 43),
(9, 'Isrol', 'Ismoprazol', 'Injection', '2232', 65),
(10, '', '', '', '', 0),
(11, 'Insulation', 'Insulin', 'Injection', '334332', 400);

-- --------------------------------------------------------

--
-- Table structure for table `sm_details`
--

CREATE TABLE IF NOT EXISTS `sm_details` (
  `sm_id` bigint(20) unsigned NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `com_name` text NOT NULL,
  `ut_num` int(11) NOT NULL,
  `com_address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `tel_numb` int(11) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `webs` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_details`
--

INSERT INTO `sm_details` (`sm_id`, `first_name`, `last_name`, `com_name`, `ut_num`, `com_address`, `city`, `state`, `zip`, `country`, `tel_numb`, `designation`, `webs`) VALUES
(16, 'adfd', 'afd', 'afdff', 4354, 'afaf', 'adfadf', 'adf', 343, 'Argentina', 4356353, 'afdf', 'www.amg.com'),
(17, 'Nico', 'Roserberg', 'Mercedes AMG', 6456456, 'Downin Street', 'Dortmund', 'Bavaria', 7876, 'Germany', 2147483647, 'Sales Manager', 'www.mercedes-amg.com'),
(18, 'Lewis', 'Hamilton', 'Mclaren F1', 2147483647, 'Silverstone', 'London', 'South England', 2212, 'UK', 7776567, 'Sales Manager', 'www.mclaren.com');

-- --------------------------------------------------------

--
-- Table structure for table `sm_login`
--

CREATE TABLE IF NOT EXISTS `sm_login` (
  `sm_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sm_login`
--

INSERT INTO `sm_login` (`sm_id`, `username`, `email`, `password`) VALUES
(1, 'afafa', 'af@gmail.com', '12345678'),
(17, 'root', 'roser@gmail.com', 'superacces'),
(18, 'lewis', 'lewis@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_status`
--
ALTER TABLE `bill_status`
  ADD PRIMARY KEY (`sl_num`),
  ADD UNIQUE KEY `sl_num` (`sl_num`);

--
-- Indexes for table `company_product`
--
ALTER TABLE `company_product`
  ADD PRIMARY KEY (`sl_num`);

--
-- Indexes for table `mpo_customer_relation`
--
ALTER TABLE `mpo_customer_relation`
  ADD PRIMARY KEY (`sl_num`);

--
-- Indexes for table `product_description`
--
ALTER TABLE `product_description`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sm_details`
--
ALTER TABLE `sm_details`
  ADD PRIMARY KEY (`sm_id`),
  ADD UNIQUE KEY `sm_id` (`sm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_status`
--
ALTER TABLE `bill_status`
  MODIFY `sl_num` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company_product`
--
ALTER TABLE `company_product`
  MODIFY `sl_num` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `mpo_customer_relation`
--
ALTER TABLE `mpo_customer_relation`
  MODIFY `sl_num` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sm_details`
--
ALTER TABLE `sm_details`
  MODIFY `sm_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
