-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 12:11 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doggodaycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `daycarelist`
--

CREATE TABLE `daycarelist` (
  `DID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DESCRIPTION` varchar(300) NOT NULL,
  `LONGITUDE` float(20,20) NOT NULL,
  `LATITUDE` float(20,20) NOT NULL,
  `IMG` varchar(30) NOT NULL,
  `RATING` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daycarelist`
--

INSERT INTO `daycarelist` (`DID`, `NAME`, `DESCRIPTION`, `LONGITUDE`, `LATITUDE`, `IMG`, `RATING`) VALUES
(1, 'Doggo Haven', 'A place for dogs to have fun.', -1.00000000000000000000, 1.00000000000000000000, 'something', 4),
(2, 'Dog Town', 'A friendly place for your pets.', -1.00000000000000000000, 1.00000000000000000000, 'something', 3),
(3, 'Dog House', 'Best dog daycare', 1.00000000000000000000, -1.00000000000000000000, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `RID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `RATING` float(2,2) NOT NULL,
  `DETAILS` varchar(500) NOT NULL,
  `DIDforeign` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`RID`, `NAME`, `RATING`, `DETAILS`, `DIDforeign`) VALUES
(1, 'Daniel Brooks', 0.99, 'Kingston had a wonderful time with Lillian and her family. It was a great experience from the meet and greet ,to the drop off and pick up. Kingston enjoyed the friendly, loving atmosphere and it really made us relax knowing Kingston was in such good hands. Thank you to Lillian and her lovely family!', 1),
(2, 'John Evans', 0.99, 'We left Luke with Lillian and her family for 2 weeks- the longest we’ve been away. Also Luke is blind and hence needs some special consideration. Lillian went above and beyond for us by reading up about blind dogs before he arrived and helping him through some of his fears during his stay. We loved the frequent updates and photos as well. Thanks for making our time away worry-free!', 1),
(5, 'Sarah Smith', 0.99, 'Very great place', 1),
(6, 'James Lee', 0.99, 'very nice daycare', 1),
(7, 'James Lee', 0.99, 'very nice daycare', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `NEWSLETTER` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `EMAIL`, `NEWSLETTER`) VALUES
(1, 'doggolover', '12345678', 'doggolover@gmail.com', 0),
(5, 'joe smith', 'number123', 'joesmith@gmail.com', 0),
(6, 'James Bob', 'number123', 'james@gmail.com', 0),
(7, 'James Bob', 'number123', 'james@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daycarelist`
--
ALTER TABLE `daycarelist`
  ADD PRIMARY KEY (`DID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `review_ibfk_1` (`DIDforeign`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daycarelist`
--
ALTER TABLE `daycarelist`
  MODIFY `DID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`DIDforeign`) REFERENCES `daycarelist` (`DID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
