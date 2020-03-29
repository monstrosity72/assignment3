-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 07:52 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_appointments`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `APPOINTMENT_ID` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `CAR_LICENCE` varchar(10) NOT NULL,
  `CAR_ENGINE_NO` varchar(10) NOT NULL,
  `MECHANIC` varchar(50) NOT NULL,
  `PREFERRED_DATE` date NOT NULL,
  `PHONE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`APPOINTMENT_ID`, `NAME`, `ADDRESS`, `CAR_LICENCE`, `CAR_ENGINE_NO`, `MECHANIC`, `PREFERRED_DATE`, `PHONE`) VALUES
(28, 'Alpha', 'Munshiganj', '212s12', '212122', 'Shifat Sarwar', '2020-03-08', '01830999999'),
(29, 'Beta', 'regregerg', '124333', 'fsf2hj', 'Shifat Sarwar', '2020-03-08', '21291092019'),
(30, 'Theta', 'Jhigatola', '212s12', 'fsf2hj', 'Shifat Sarwar', '2020-03-08', '01515151515'),
(31, 'geerrgg', 'Jhigatola', '124333', '111111', 'Shifat Sarwar', '2020-03-08', '01992912919'),
(32, 'Q', 'Jhigatola', '124333', '111111', 'Ashiq Ashiqi', '2020-03-08', '01151515151'),
(33, 'Naqi', 'jbbhjb', '2121 2', '2e12da', 'Rifat Talukdar', '2020-03-09', '21291092019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`APPOINTMENT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `APPOINTMENT_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
