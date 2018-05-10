-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 03:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bn` int(11) NOT NULL,
  `cname` varchar(15) NOT NULL,
  `cage` int(11) NOT NULL,
  `Pizza` int(11) NOT NULL,
  `Burger` int(11) NOT NULL,
  `Sandwich` int(11) NOT NULL,
  `Pastry` int(11) NOT NULL,
  `Patties` int(11) NOT NULL,
  `Cold_Drink` int(11) NOT NULL,
  `Coffee` int(11) NOT NULL,
  `Tea` int(11) NOT NULL,
  `Total` float NOT NULL,
  `Tax` float NOT NULL,
  `NetTot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bn`, `cname`, `cage`, `Pizza`, `Burger`, `Sandwich`, `Pastry`, `Patties`, `Cold_Drink`, `Coffee`, `Tea`, `Total`, `Tax`, `NetTot`) VALUES
(1, '', 0, 1, 4, 5, 0, 0, 0, 0, 0, 210, 37.8, 247.8),
(2, '', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11),
(3, '', 0, 1, 4, 5, 0, 0, 0, 0, 0, 210, 37.8, 247.8),
(4, 'ffff', 14, 1, 4, 5, 0, 0, 0, 0, 0, 210, 37.8, 247.8),
(5, 'ffff', 14, 1, 4, 5, 0, 0, 0, 0, 0, 210, 37.8, 247.8),
(6, 'rituraj', 15, 2, 0, 4, 0, 1, 0, 0, 0, 215, 38.7, 253.7),
(7, 'rituraj', 15, 2, 0, 4, 0, 0, 0, 0, 0, 200, 36, 236),
(8, 'rituraj', 15, 2, 0, 4, 0, 0, 0, 0, 0, 200, 36, 236),
(9, 'rituraj', 15, 2, 0, 4, 0, 0, 0, 0, 0, 200, 36, 236),
(10, 'rituraj', 15, 1, 0, 0, 0, 0, 0, 0, 0, 80, 8, 88),
(11, 'rituraj', 15, 1, 1, 1, 0, 0, 0, 0, 0, 110, 19.8, 129.8),
(12, 'rituraj', 15, 1, 1, 1, 0, 0, 0, 0, 0, 110, 19.8, 129.8),
(13, 'rituraj', 15, 1, 1, 1, 0, 0, 0, 0, 0, 110, 19.8, 129.8),
(14, 'anand', 15, 1, 1, 0, 1, 0, 0, 0, 0, 125, 22.5, 147.5),
(15, 'anand', 15, 1, 0, 1, 1, 0, 0, 0, 0, 115, 20.7, 135.7),
(16, 'anand', 19, 1, 0, 1, 0, 0, 0, 1, 0, 105, 18.9, 123.9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl`
--

CREATE TABLE `tbl` (
  `sn` int(11) NOT NULL,
  `item` varchar(15) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl`
--

INSERT INTO `tbl` (`sn`, `item`, `price`, `stock`, `sold`) VALUES
(1, 'Pizza', 80, 85, 51),
(2, 'Burger', 20, 96, 90),
(3, 'Sandwich', 10, 79, 122),
(4, 'Pastry', 25, 98, 13),
(5, 'Patties', 15, 99, 13),
(6, 'Cold Drink', 20, 100, 8),
(7, 'Coffee', 15, 99, 3),
(8, 'Tea', 10, 100, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bn`);

--
-- Indexes for table `tbl`
--
ALTER TABLE `tbl`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tbl`
--
ALTER TABLE `tbl`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
