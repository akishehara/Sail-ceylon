-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 11:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sailceylon`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignresource`
--

CREATE TABLE `assignresource` (
  `Reservation_ID` int(11) NOT NULL,
  `Package_ID` varchar(10) NOT NULL,
  `Location_ID` varchar(10) NOT NULL,
  `Boat_ID` varchar(10) NOT NULL,
  `tourguide_ID` varchar(10) NOT NULL,
  `driver_ID` varchar(10) NOT NULL,
  `tour_date` date DEFAULT NULL,
  `tour_start_time` varchar(20) DEFAULT NULL,
  `tour_end_time` varchar(20) DEFAULT NULL,
  `customer` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `instructions` varchar(20) NOT NULL,
  `c_username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignresource`
--

INSERT INTO `assignresource` (`Reservation_ID`, `Package_ID`, `Location_ID`, `Boat_ID`, `tourguide_ID`, `driver_ID`, `tour_date`, `tour_start_time`, `tour_end_time`, `customer`, `mobile`, `instructions`, `c_username`) VALUES
(1, 'P001', 'L001', 'B001', 'S005', 'S006', '2021-01-09', '14:00:00', '16:00:00', '', '', '', ''),
(2, 'P004', 'L002', 'B002', 'S008', 'S009', '2021-01-09', '14:00:00', '18:00:00', '', '', '', ''),
(3, 'P004', 'L005', 'B005', 'S002', 'S003', '2021-03-09', '13:00:00', '17:00:00', '', '', '', ''),
(4, 'P005', 'L003', 'B008', 'S005', 'S012', '2021-05-10', '14:00:00', '16:00:00', '', '', '', ''),
(5, 'P005', 'L005', 'B001', 'S002', 'S003', '2021-02-03', '17:00:00', '19:00:00', '', '', '', ''),
(30, 'P001', 'L001', '', '', '', '2021-05-17', '08:0:00', '0', 'ss', '', '', 'shamin'),
(31, 'P002', 'L002', '', '', '', '2021-05-12', '08:0:00', '0', 'shamin', '+94777273057', 'n/a', 'shamin'),
(32, 'P001', 'L001', '', '', '', '0000-00-00', '08:0:00', '0', '', '', '', 'shamin'),
(33, 'P001', 'L001', '', '', '', '2021-05-29', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(34, 'P001', 'L001', '', '', '', '2021-05-26', '08:0:00', '0', 'shamin fernando', '+94777273057', '', 'shamin'),
(35, 'P001', 'L001', '', '', '', '2021-05-25', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(36, 'P001', 'L001', '', '', '', '2021-05-22', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(37, 'P001', 'L001', '', '', '', '2021-05-21', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(38, 'P001', 'L001', '', '', '', '2021-05-21', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(39, 'P001', 'L001', '', '', '', '2021-05-26', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(40, 'P001', 'L001', '', '', '', '2021-05-26', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(41, 'P001', 'L001', '', '', '', '2021-05-19', '08:0:00', '0', 'Lalan Fernando', '+94777273057', '', 'shamin'),
(42, 'P001', 'L001', '', '', '', '2021-05-20', '08:0:00', '0', 'lala', 'dwdw', 'wdwd', 'null'),
(43, 'P001', 'L001', '', '', '', '2021-05-17', '08:0:00', '0', 'shamin', '0762008919', '', 'null'),
(44, 'P001', 'L001', '', '', '', '2021-05-05', '08:0:00', '0', 'shamin', '0762008919', '', 'null'),
(45, 'P001', 'L001', '', '', '', '2021-05-28', '08:0:00', '0', 'shamin', 'dwdw', '', 'null'),
(47, 'P001', 'L001', '', '', '', '2021-05-12', '08:0:00', '0', 'shamin', '0762008919', '', 'null'),
(48, 'P001', 'L001', '', '', '', '2021-05-11', '08:0:00', '0', 'shamin', '0762008919', 'dwd', 'null'),
(49, 'P001', 'L001', '', '', '', '2021-05-12', '08:0:00', '0', 'shamin', 'dwdw', '', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `boat`
--

CREATE TABLE `boat` (
  `Boat_ID` varchar(10) NOT NULL,
  `B_license` varchar(15) DEFAULT NULL,
  `B_type` varchar(10) DEFAULT NULL,
  `L_ID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boat`
--

INSERT INTO `boat` (`Boat_ID`, `B_license`, `B_type`, `L_ID`) VALUES
('B001', '90', 'T001', 'L003'),
('B002', 'KI-008', 'T002', 'L002'),
('B003', 'HJ-010', 'T005', 'L003'),
('B004', 'MI-8989', 'T001', 'L004'),
('B005', 'LI-8978', 'T002', 'L005'),
('B006', 'JU-7878', 'T004', 'L001'),
('B007', 'KE-2453', 'T004', 'L002'),
('B008', 'VBH-908', 'T004', 'L003'),
('B009', 'CBD-205', 'T004', 'L004'),
('B010', 'UI-870', 'T004', 'L005'),
('B011', 'JI-474', 'T003', 'L001'),
('B013', 'YU-467', 'T003', 'L005'),
('B014', 'YU-467', 'T003', 'L005'),
('B015', 'YU-467', 'T003', 'L005'),
('B016', 'JI-474', 'T002', 'L001');

-- --------------------------------------------------------

--
-- Table structure for table `boat_type`
--

CREATE TABLE `boat_type` (
  `B_typeID` varchar(10) NOT NULL,
  `B_typeName` varchar(20) DEFAULT NULL,
  `No_of_seats` int(11) DEFAULT NULL,
  `speed_mph` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boat_type`
--

INSERT INTO `boat_type` (`B_typeID`, `B_typeName`, `No_of_seats`, `speed_mph`) VALUES
('T001', 'tourist_boat', 8, 40),
('T002', 'sail_boat', 10, 40),
('T003', 'comapny_boat', 40, 20),
('T004', 'fishing_boat', 30, 40),
('T005', 'underwater_boat', 10, 40);

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `c_ID` int(11) NOT NULL,
  `namedd` varchar(20) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `comment` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`c_ID`, `namedd`, `staff_name`, `comment`) VALUES
(1, 'Lalan Fernando', '', 'dadah'),
(2, 'wddw', '', 'dwdwd'),
(3, 'wddw', '', 'dwdwd'),
(4, 'wddw', '', 'dwdwd'),
(5, '', '', ''),
(6, 'shamin', 'dsdsds', 'dwwddwwd');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `C_ID` int(11) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_subject` varchar(20) NOT NULL,
  `c_message` varchar(400) NOT NULL,
  `c_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`C_ID`, `c_email`, `c_subject`, `c_message`, `c_name`) VALUES
(1, '', '', '', ''),
(2, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_username` varchar(15) NOT NULL,
  `C_password` varchar(20) DEFAULT NULL,
  `C_fname` varchar(10) DEFAULT NULL,
  `C_lname` varchar(20) DEFAULT NULL,
  `C_email` varchar(25) DEFAULT NULL,
  `C_phone` int(11) DEFAULT NULL,
  `C_address` varchar(40) DEFAULT NULL,
  `C_DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_username`, `C_password`, `C_fname`, `C_lname`, `C_email`, `C_phone`, `C_address`, `C_DOB`) VALUES
('d', '12', 'sdsd', NULL, NULL, NULL, NULL, NULL),
('dwdw', 'ww', 'uqii', NULL, NULL, NULL, NULL, NULL),
('john_smith', '90SHam', 'John', 'Smith', 'jSmith@gmail.com', 778905643, 'newyork 90/3', '2001-09-21'),
('kamila_shiran', 'Kshi4T6#', 'kamila', 'shiran', 'kshi@gmail.com', 777935670, '67/b colombo 07', '1995-01-21'),
('natasha_perera', 'nj7Y6', 'Natasha', 'perera', 'nat@gmail.com', 777273057, '3/A Boralesgamuwa', '1990-10-02'),
('naven_koliya', 'Nave2$', 'Naven', 'Koliya', 'naveenkol@gmail.com', 777931900, '1/A nugegoda', '2005-11-01'),
('nayana', '123', 'dd', NULL, NULL, NULL, NULL, NULL),
('S001', '12', 'dd', NULL, NULL, NULL, NULL, NULL),
('S003', '78', 'sdsd', NULL, NULL, NULL, NULL, NULL),
('shamin', '123', 'dd', NULL, NULL, NULL, NULL, NULL),
('shamin_fernando', 'Lal#21', 'Shamin', 'Fernando', 'hhshamin@gmail.com', 777931060, '38 b hoarana', '2000-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Staff_ID` varchar(10) NOT NULL,
  `D_license` varchar(20) DEFAULT NULL,
  `D_no_of_hours` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Staff_ID`, `D_license`, `D_no_of_hours`) VALUES
('S003', '3273927392739', '6'),
('S006', '32734342739', '16'),
('S009', '6363586385639', '2'),
('S012', '3223338392739', '5'),
('S015', '3276888445455', '4');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `Location_ID` varchar(10) NOT NULL,
  `L_name` varchar(20) DEFAULT NULL,
  `L_address` varchar(50) DEFAULT NULL,
  `L_phone` int(11) DEFAULT NULL,
  `Manager` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`Location_ID`, `L_name`, `L_address`, `L_phone`, `Manager`) VALUES
('L001', 'sdsd', 'Pasikuda', 872, 'S001'),
('L002', 'galle', '90/A galle', 783356552, 'S007'),
('L003', 'hambantota', ' n0.20 hambantota', 783544672, 'S010'),
('L004', 'trincomalee', '7/1 trincomalle', 789343542, 'S013'),
('L005', 'mirissa', 'no.99 mirissa', 789354602, 'S001');

-- --------------------------------------------------------

--
-- Table structure for table `office_staff`
--

CREATE TABLE `office_staff` (
  `Staff_ID` varchar(10) NOT NULL,
  `S_no_of_days` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office_staff`
--

INSERT INTO `office_staff` (`Staff_ID`, `S_no_of_days`) VALUES
('S001', '6'),
('S004', '4'),
('S007', '5'),
('S010', '4'),
('S013', '2');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_ID` varchar(10) NOT NULL,
  `P_name` varchar(20) DEFAULT NULL,
  `P_duration_hr` decimal(10,0) DEFAULT NULL,
  `P_maxCap` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `boat_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_ID`, `P_name`, `P_duration_hr`, `P_maxCap`, `price`, `boat_type`) VALUES
('P001', 'basic package', '2', 2, '2000', 'T001'),
('P002', 'silver package', '3', 2, '4000', 'T002'),
('P003', 'gold package', '4', 5, '5000', 'T003'),
('P004', 'diamond package', '4', 10, '11000', 'T001'),
('P005', 'premium package', '2', 25, '20000', 'T002');

-- --------------------------------------------------------

--
-- Table structure for table `package_boattype`
--

CREATE TABLE `package_boattype` (
  `Package_ID` varchar(10) NOT NULL,
  `B_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_boattype`
--

INSERT INTO `package_boattype` (`Package_ID`, `B_type`) VALUES
('P001', 'T001'),
('P001', 'T002'),
('P002', 'T001'),
('P002', 'T002'),
('P003', 'T001'),
('P004', 'T002'),
('P005', 'T003'),
('P005', 'T004');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Reservation_ID` int(11) NOT NULL,
  `Payment_ID` varchar(20) NOT NULL,
  `P_mode` varchar(15) DEFAULT NULL,
  `P_Amount` decimal(10,0) DEFAULT NULL,
  `P_date` date DEFAULT NULL
) ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Reservation_ID`, `Payment_ID`, `P_mode`, `P_Amount`, `P_date`) VALUES
(1, 'PY001', 'credit card', '2000', '2021-01-08'),
(2, 'PY02', 'debit card', '11000', '2021-01-08'),
(3, 'PY003', 'cash', '1100', '2021-01-08'),
(4, 'PY004', 'paypal', '20000', '2021-01-08'),
(5, 'PY005', 'credit card', '20000', '2021-01-08');

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
  `other2` varchar(45) DEFAULT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pck`
--

INSERT INTO `pck` (`id`, `name`, `price`, `details`, `status`, `image_name`, `pck_type`, `discount`, `other1`, `other2`, `link`) VALUES
(1, 'Individual', '10000', 'Jet ski rides are the most popular activity of all water sports. We offer Jet bikes and Jet skis for you.', 1, '1.jpg', 'Silver', '10', 'xx', 'xxx', 'individual.html'),
(2, 'Couple ', '20000', 'Join us to sail freely and happily with your loved ones. We are ready to give you both a new experience.', 1, '2.jpg', 'Gold', '10', 'xx', 'xxx', 'couple.html'),
(3, 'Family', '500000', 'Enjoy with your family, the performance-built SailCeylon primarily cruises the Sri lanka Islands ’s Inside Passage.', 1, '3.jpg', 'Gold', '10', 'xx', 'xxx', 'family.html'),
(4, 'Cooperative', '500000', 'Whether you are holding a staff conference, entertaining clients, team building or \r\nlaunching a new product, a cruise with us provides the perfect location.                                           ', 1, '4.jpg', 'Gold', '10', 'xx', 'xxx', ''),
(5, 'Function', '500000', 'Whether you’re planning a large-scale milestone celebration or an intimate get-together with your nearest and dearest, our extensive suite of luxury boat hire vessels will provide you with exciting ce', 1, '5.jpg', 'Gold', '10', 'xx', 'xxx', ''),
(6, 'Whale watching', '500000', 'Whale watching is one of the most breathtaking activities available in Sri Lanka. Imagine these lovely creatures gracefully leaping from the sea and floating in in front of you! Whales are beautiful,m', 1, '6.jpg', 'Gold', '10', 'xx', 'xxx', ''),
(7, 'Dolphin watching', '500000', 'Hundreds of dolphin swim across the island of Sri Lanka. Before sunset, passing through the channels is the best time to spot those dolphins', 1, '7.jpg', 'Gold', '10', 'xx', 'xxx', ''),
(8, 'Diving', '500000', 'One of the most common recreational activities among visitors.  You will be able to become acquainted with the colorful, rich, and   stunning coral reefs and fish while diving.', 1, '8.jpg', 'Gold', '10', 'xx', 'xxx', '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `P_ID` int(11) NOT NULL,
  `C_name` varchar(20) NOT NULL,
  `e_mail` varchar(20) NOT NULL,
  `descrip` date NOT NULL,
  `image_name` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`P_ID`, `C_name`, `e_mail`, `descrip`, `image_name`) VALUES
(1, '', '', '0000-00-00', ''),
(2, 'dihdidwname', 'wddwd', '0000-00-00', 0x416464726573732e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_ID` int(11) NOT NULL,
  `no_of_Seats` int(11) DEFAULT NULL,
  `instructions` varchar(100) DEFAULT NULL,
  `C_username` varchar(15) DEFAULT NULL,
  `customer` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_ID`, `no_of_Seats`, `instructions`, `C_username`, `customer`, `mobile`) VALUES
(1, 5, 'n/a', 'shamin_fernando', '', ''),
(2, 20, 'safey wear must', 'naven_koliya', '', ''),
(3, 2, 'no tour guide needed', 'shamin_fernando', '', ''),
(4, 4, 'n/a', 'natasha_perera', '', ''),
(5, 6, 'only 30min ride', 'natasha_perera', '', ''),
(6, NULL, NULL, NULL, '', ''),
(7, NULL, 'n.a', NULL, 'shamin', '0762008919'),
(8, NULL, 'n/a', NULL, 'shamin', '0762008919'),
(9, NULL, 'n/a', NULL, 'shamin', '0762008919');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `Reservation_ID` int(11) NOT NULL,
  `Package` varchar(20) NOT NULL,
  `Location` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `start_Time` varchar(10) NOT NULL,
  `end_time` varchar(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_username` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` varchar(10) NOT NULL,
  `S_fname` varchar(15) DEFAULT NULL,
  `S_lname` varchar(30) DEFAULT NULL,
  `S_address` varchar(50) DEFAULT NULL,
  `Supervisor_ID` varchar(10) DEFAULT NULL,
  `S_username` varchar(15) DEFAULT NULL,
  `S_password` varchar(20) DEFAULT NULL,
  `L_ID` varchar(10) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tp_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `S_fname`, `S_lname`, `S_address`, `Supervisor_ID`, `S_username`, `S_password`, `L_ID`, `role`, `email`, `tp_number`) VALUES
('S001', 'keshani', 'perera', '78/0 mirissa', NULL, 'kesh_p', 'kesh123', 'L005', 'manager', 'hhsham@gmail', '076200819'),
('S002', 'hesha', 'perera', '56/0 mirissa', 'S001', 'hesh_p', 'nav##', 'L005', 'recep', '', ''),
('S003', 'namali', 'fernando', '11/0 mirissa', 'S001', 'nim_f', 'uy8&', 'L005', '', '', ''),
('S004', 'meenu', 'ariyachandra', '18/0 pasikuda', NULL, 'meen_a', 'pal$1', 'L001', '', '', ''),
('S005', 'vinoli', 'simhawamsha', '8/0 pasikuda', 'S004', 'vino_s', 'tu7/', 'L001', '', '', ''),
('S006', 'amandi', 'withanage', '1/0 pasikuda', 'S004', 'aman_with', 'amn#hh1', 'L001', '', '', ''),
('S007', 'hriuni', 'desilve', '78/0 galle', NULL, 'hiru_ds', 'hi8&', 'L002', 'admin', '', ''),
('S008', 'kaveen', 'soori', '78/A galle', 'S007', 'kav_s', 'kav^7%', 'L002', '', '', ''),
('S009', 'kalhara', 'kandambi', 'No.78 galle', 'S007', 'kal_k', 'lao09#', 'L002', '', '', ''),
('S010', 'chris', 'mehel', '34/S Hambantota', NULL, 'chri_me', 'UJ9$', 'L003', '', '', ''),
('S011', 'avishki', 'chandra', '34/S Hambantota', 'S010', 'av_c', 'avi89&', 'L003', '', '', ''),
('S012', 'namli', 'perera', '34/S Hambantota', 'S010', 'nam_p', 'namp3', 'L003', '', '', ''),
('S013', 'malshi', 'within', '2/L Trincomalee', NULL, 'mal_with', 'm178', 'L004', '', '', ''),
('S014', 'samudi', 'liyanage', '1/L Trincomalee', 'S013', 'sam_li', 'sam90l', 'L004', '', '', ''),
('S015', 'uththra', 'fernando', '3/L Trincomalee', 'S013', 'uth_F', 'u&1', 'L004', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_contact`
--

CREATE TABLE `staff_contact` (
  `Staff_ID` varchar(10) NOT NULL,
  `S_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_contact`
--

INSERT INTO `staff_contact` (`Staff_ID`, `S_phone`) VALUES
('S001', 786734567),
('S001', 786736777),
('S002', 788923967),
('S002', 789793923),
('S003', 784353535),
('S004', 786263867);

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `Staff_ID` varchar(10) NOT NULL,
  `S_no_of_tours` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`Staff_ID`, `S_no_of_tours`) VALUES
('S002', 4),
('S005', 10),
('S008', 9),
('S011', 8),
('S014', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignresource`
--
ALTER TABLE `assignresource`
  ADD PRIMARY KEY (`Reservation_ID`,`Package_ID`,`Location_ID`,`Boat_ID`,`tourguide_ID`,`driver_ID`),
  ADD KEY `AR_FK2` (`Package_ID`),
  ADD KEY `AR_FK3` (`Location_ID`),
  ADD KEY `AR_FK4` (`Boat_ID`),
  ADD KEY `AR_FK5` (`tourguide_ID`),
  ADD KEY `AR_FK6` (`driver_ID`);

--
-- Indexes for table `boat`
--
ALTER TABLE `boat`
  ADD PRIMARY KEY (`Boat_ID`),
  ADD KEY `B_FK1` (`L_ID`),
  ADD KEY `B_FK2` (`B_type`);

--
-- Indexes for table `boat_type`
--
ALTER TABLE `boat_type`
  ADD PRIMARY KEY (`B_typeID`);

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`c_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_username`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`Location_ID`),
  ADD KEY `Manager` (`Manager`);

--
-- Indexes for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_ID`),
  ADD KEY `boat_type` (`boat_type`);

--
-- Indexes for table `package_boattype`
--
ALTER TABLE `package_boattype`
  ADD PRIMARY KEY (`Package_ID`,`B_type`),
  ADD KEY `PB_FK2` (`B_type`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Reservation_ID`,`Payment_ID`);

--
-- Indexes for table `pck`
--
ALTER TABLE `pck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_ID`),
  ADD KEY `R_FK` (`C_username`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`Reservation_ID`),
  ADD KEY `c_username` (`c_username`),
  ADD KEY `Location` (`Location`),
  ADD KEY `Package` (`Package`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD KEY `S_FK1` (`L_ID`),
  ADD KEY `S_FK2` (`Supervisor_ID`);

--
-- Indexes for table `staff_contact`
--
ALTER TABLE `staff_contact`
  ADD PRIMARY KEY (`Staff_ID`,`S_phone`);

--
-- Indexes for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignresource`
--
ALTER TABLE `assignresource`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `c_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pck`
--
ALTER TABLE `pck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignresource`
--
ALTER TABLE `assignresource`
  ADD CONSTRAINT `AR_FK2` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`),
  ADD CONSTRAINT `AR_FK3` FOREIGN KEY (`Location_ID`) REFERENCES `location` (`Location_ID`);

--
-- Constraints for table `boat`
--
ALTER TABLE `boat`
  ADD CONSTRAINT `B_FK1` FOREIGN KEY (`L_ID`) REFERENCES `location` (`Location_ID`),
  ADD CONSTRAINT `B_FK2` FOREIGN KEY (`B_type`) REFERENCES `boat_type` (`B_typeID`);

--
-- Constraints for table `driver`
--
ALTER TABLE `driver`
  ADD CONSTRAINT `D_FK` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`Manager`) REFERENCES `staff` (`Staff_ID`);

--
-- Constraints for table `office_staff`
--
ALTER TABLE `office_staff`
  ADD CONSTRAINT `OS_FK` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`boat_type`) REFERENCES `boat_type` (`B_typeID`);

--
-- Constraints for table `package_boattype`
--
ALTER TABLE `package_boattype`
  ADD CONSTRAINT `PB_FK1` FOREIGN KEY (`Package_ID`) REFERENCES `package` (`Package_ID`),
  ADD CONSTRAINT `PB_FK2` FOREIGN KEY (`B_type`) REFERENCES `boat_type` (`B_typeID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`Reservation_ID`) REFERENCES `reservation` (`Reservation_ID`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `R_FK` FOREIGN KEY (`C_username`) REFERENCES `customer` (`C_username`);

--
-- Constraints for table `reserve`
--
ALTER TABLE `reserve`
  ADD CONSTRAINT `reserve_ibfk_1` FOREIGN KEY (`c_username`) REFERENCES `customer` (`C_username`),
  ADD CONSTRAINT `reserve_ibfk_2` FOREIGN KEY (`Location`) REFERENCES `location` (`Location_ID`),
  ADD CONSTRAINT `reserve_ibfk_3` FOREIGN KEY (`Package`) REFERENCES `package` (`Package_ID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `S_FK1` FOREIGN KEY (`L_ID`) REFERENCES `location` (`Location_ID`),
  ADD CONSTRAINT `S_FK2` FOREIGN KEY (`Supervisor_ID`) REFERENCES `staff` (`Staff_ID`);

--
-- Constraints for table `staff_contact`
--
ALTER TABLE `staff_contact`
  ADD CONSTRAINT `SC_FK` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`);

--
-- Constraints for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD CONSTRAINT `TG_FK` FOREIGN KEY (`Staff_ID`) REFERENCES `staff` (`Staff_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
