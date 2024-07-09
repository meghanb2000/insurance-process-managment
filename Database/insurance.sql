-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 09:01 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `policyname` varchar(200) NOT NULL,
  `policynumber` varchar(200) NOT NULL,
  `deadline` varchar(200) NOT NULL,
  `amount` int(20) NOT NULL,
  `commencedate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `phone`, `policyname`, `policynumber`, `deadline`, `amount`, `commencedate`) VALUES
(1, '9742441687', 'Jivan umang', '47895', '2024-05-13', 2500, '2024-05-13'),
(4, '9742441687', 'car', '874521', '2024-05-13', 2574, '2024-05-13'),
(5, '9742441687', 'Jivan prakash', '98745', '2024-08-21', 8745, '2024-07-10'),
(7, '9742441687', 'Jivan shanthi', '3654', '2024-06-13', 254, '2024-05-03'),
(13, '9742441687', 'Jivan umang', '123654', '2024-06-14', 8574, '2024-05-16'),
(14, '9742441687', 'scooty', '695874', '2024-06-23', 1325, '2024-05-16'),
(17, '9742441687', 'CAR ', '1234', '2024-05-16', 5000, '2023-05-16'),
(18, '9742441687', 'Bike', '1235', '2024-06-30', 2500, '2023-06-30'),
(19, '9742441687', 'Jivan prakash', '9874', '', 8745, ''),
(20, '9742441687', 'Jivan prakash', '98745', '', 874, ''),
(21, '9742441687', 'Jivan prakash', '98745', '', 87, ''),
(22, '9742441687', 'car', '587498', '2024-06-08', 258, '2024-05-16'),
(23, '9742441687', 'car', '36985', '2024-05-30', 543, '2024-05-24'),
(24, '6364571671', 'car', '2587', '2024-06-06', 2001, '2024-05-16'),
(25, '9449448851', 'car', '1234', '2024-06-13', 2000, '2024-05-16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `repassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `phone`, `email`, `password`, `repassword`) VALUES
('Michel jackson', '6363145146', '', '', ''),
('meghana', '6364571671', 'meghana@gmail.com', '30', '30'),
('kushal', '6958474152', 'asdf@email.com', '03', '30'),
('Rajath', '9449448851', 'rajath@email.com', '02', '02'),
('gireesh', '9742441687', 'gireesh@gmail.con', '11', '11'),
('maiky', '9902032556', 'maiky@gmail.com', '04', '04'),
('maiky', '9902092556', 'maiky@gmail.com', '04', '04'),
('Alok', '9902317766', 'alok@gmail.com', 'password', 'password'),
('Alok', '9902327766', 'alok@gmail.com', '05', '05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
