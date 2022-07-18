-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 06:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safari_pack`
--

-- --------------------------------------------------------

--
-- Table structure for table `pck`
--

CREATE TABLE `pck` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `price` varchar(45) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image_name` varchar(45) DEFAULT NULL,
  `pck_type` varchar(45) DEFAULT NULL,
  `discount` varchar(45) DEFAULT NULL,
  `other1` varchar(45) DEFAULT NULL,
  `other2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pck`
--

INSERT INTO `pck` (`id`, `name`, `price`, `details`, `status`, `image_name`, `pck_type`, `discount`, `other1`, `other2`) VALUES
(1, 'Individual', '10000', 'Jet ski rides are the most popular activity of all water sports. We offer Jet bikes and Jet skis for you.', 1, 'pic_trulli.jpg', 'Silver', '10', 'xx', 'xxx'),
(2, 'Couple ', '20000', 'Join us to sail freely and happily with your loved ones. We are ready to give you both a new experience.', 1, 'pic_trulli.jpg', 'Gold', '10', 'xx', 'xxx'),
(3, 'Family', '500000', 'Enjoy with your family, the performance-built SailCeylon primarily cruises the Sri lanka Islands ’s Inside Passage.', 1, 'pic_trulli.jpg', 'Gold', '10', 'xx', 'xxx'),
(4, 'Cooperative', '500000', 'Whether you are holding a staff conference, entertaining clients, team building or \r\nlaunching a new product, a cruise with us provides the perfect location.                                           ', 1, 'pic_trulli.jpg', 'Gold', '10', 'xx', 'xxx'),
(5, 'Function', '500000', 'Whether you’re planning a large-scale milestone celebration or an intimate get-together with your nearest and dearest, our extensive suite of luxury boat hire vessels will provide you with exciting ce', 1, 'pic_trulli.jpg', 'Gold', '10', 'xx', 'xxx'),
(6, 'Whale watching', '500000', 'Whale watching is one of the most breathtaking activities available in Sri Lanka. Imagine these lovely creatures gracefully leaping from the sea and floating in in front of you! Whales are beautiful,m', 1, 'pic_trulli.jpg', 'Gold', '10', 'xx', 'xxx'),
(7, 'Dolphin watching', '500000', 'Hundreds of dolphin swim across the island of Sri Lanka. Before sunset, passing through the channels is the best time to spot those dolphins', 1, 'pic_trulli.jpg', 'Gold', '10', 'xx', 'xxx'),
(8, 'Diving', '500000', 'One of the most common recreational activities among visitors.  You will be able to become acquainted with the colorful, rich, and   stunning coral reefs and fish while diving.', 1, 'pic_trulli.jpg', 'Gold', '10', 'xx', 'xxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pck`
--
ALTER TABLE `pck`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pck`
--
ALTER TABLE `pck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
