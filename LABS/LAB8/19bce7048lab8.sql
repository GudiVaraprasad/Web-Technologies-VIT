-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 02:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `19bce7048lab8`
--

-- --------------------------------------------------------

--
-- Table structure for table `mydetails`
--

CREATE TABLE `mydetails` (
  `regno` varchar(7) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `year` int(3) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mydetails`
--

INSERT INTO `mydetails` (`regno`, `name`, `dob`, `branch`, `year`, `email`, `password`) VALUES
('101', 'Chandra Mohan', '20-07-1987', 'CSE', 3, 'chandu.d@gmail.com', 'chandu123'),
('102', 'Varaprasad', '12-11-2001', 'CSE', 3, 'gudi.varaprasad@gmail.com', 'gudi123'),
('103', 'Ram Miryala', '20-03-1997', 'ECE', 4, 'ram@gmail.com', 'ram123'),
('104', 'Kali Linux', '13-03-2013', 'IT', 1, 'root@yahoo.com', 'toor'),
('105', 'VIT University', '11-05-2017', 'EEE', 2, 'vitap@vit.ac.in', 'test2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mydetails`
--
ALTER TABLE `mydetails`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
