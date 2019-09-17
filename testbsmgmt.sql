-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 04:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testbsmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `UserId` int(10) NOT NULL,
  `itemid` varchar(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `itemname` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `tax` int(3) NOT NULL,
  `CreatedBy` varchar(20) NOT NULL,
  `Date Created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`UserId`, `itemid`, `category`, `itemname`, `description`, `cost`, `tax`, `CreatedBy`, `Date Created`) VALUES
(0, 'NiN21349', 'VehicleSpares', 'Exhaust', 'With Turbo Sound ', 12000, 3, 'Tony', '2019-09-17 13:54:14'),
(0, 'Px1212', 'Electronics', 'Battery', 'Long Lasting HP battery', 1000, 14, '', '2019-09-17 13:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `companyname` varchar(70) NOT NULL,
  `companyzipcode` varchar(20) NOT NULL,
  `companyemail` varchar(50) NOT NULL,
  `companyphoneno` varchar(12) NOT NULL,
  `comapanylogo` blob NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`itemid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
