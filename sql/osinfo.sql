-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 03:23 AM
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
-- Database: `osinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblinfo`
--

CREATE TABLE `tblinfo` (
  `id` int(11) NOT NULL,
  `occupation` varchar(25) NOT NULL,
  `industry` varchar(25) NOT NULL,
  `osversion` varchar(25) NOT NULL,
  `salary` decimal(8,0) NOT NULL,
  `dateAdded` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblinfo`
--

INSERT INTO `tblinfo` (`id`, `occupation`, `industry`, `osversion`, `salary`, `dateAdded`) VALUES
(1, 'Worker', 'Mining', 'Windows', '50000', '02-04-2021'),
(2, 'Bone Doctor', 'Doctor', 'Mac', '100000', '02-04-2021'),
(3, 'Professor', 'University', 'Mac', '60000', '02-04-2021'),
(4, 'Barista', 'Student', 'Chromebook', '20000', '02-04-2021'),
(5, 'Firm Partner', 'Lawyer', 'Windows', '90000', '02-04-2021'),
(6, 'Transmission', 'Mechanic', 'Windows', '40000', '02-04-2021'),
(7, 'Floor Sweeper', 'Sanitation', 'Windows', '30000', '02-04-2021'),
(8, 'CTO', 'Information Technology', 'Linux', '80000', '02-04-2021'),
(9, 'Personal Banker', 'Banking', 'Windows', '45000', '02-04-2021'),
(10, 'City Council Member', 'Government', 'Windows', '65000', '02-04-2021'),
(11, 'Basket Designer', 'Basket Making', 'Windows', '15000', '02-04-2021'),
(14, 'Cool guy', 'Cool CEO', 'Windows', '100000', '02-05-2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblinfo`
--
ALTER TABLE `tblinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblinfo`
--
ALTER TABLE `tblinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
