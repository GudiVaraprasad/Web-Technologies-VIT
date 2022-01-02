-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2021 at 05:17 AM
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
-- Database: `employeedetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_modified_task1`
--

CREATE TABLE `employee_modified_task1` (
  `empno` int(8) UNSIGNED NOT NULL,
  `empname` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `designation` varchar(20) NOT NULL,
  `department` varchar(10) NOT NULL,
  `salary` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_modified_task1`
--

INSERT INTO `employee_modified_task1` (`empno`, `empname`, `dob`, `doj`, `designation`, `department`, `salary`) VALUES
(101, 'GVP', '1954-11-12', '2014-09-15', 'Assistant Professor', 'SCOPE', 55000),
(102, 'Abhi', '1985-03-03', '2016-08-14', 'Associate Professor', 'SENSE', 40000),
(103, 'Gudi', '1966-08-14', '2013-07-14', 'Professor', 'MECH', 80000),
(104, 'Pranav', '1995-02-14', '2019-09-14', 'Associate Professor', 'SCOPE', 48500),
(105, 'Dev Gudi', '1997-11-14', '2011-11-11', 'Associate Professor', 'MECH', 30000),
(106, 'Priya Mohan', '1992-05-19', '2015-03-14', 'Professor', 'IT', 50000),
(107, 'Mohini', '1989-07-16', '2016-02-03', 'Associate Professor', 'CIVIL', 38000),
(108, 'Sukanya', '1955-04-26', '2014-09-17', 'Professor', 'SCOPE', 90000),
(109, 'Chandra Mohan', '1987-12-12', '2013-11-11', 'Professor', 'SCOPE', 110000),
(110, 'Driti Arjun', '1995-04-25', '2019-10-17', 'Associate Professor', 'SCOPE', 48000),
(111, 'Sreeja Raman', '1952-04-17', '2012-10-10', 'Professor', 'MECH', 65000),
(112, 'Rahul', '1994-01-09', '2020-04-17', 'Associate Professor', 'IT', 42000),
(113, 'Nandini', '2003-12-17', '2021-10-10', 'Associate Professor', 'IT', 35000),
(114, 'Suraj Krishna', '1995-11-21', '2019-11-22', 'Assistant Professor', 'MECH', 39000),
(115, 'Laila Singh', '1987-09-18', '2019-11-15', 'Associate Professor', 'CIVIL', 38000),
(116, 'Subham Nag', '1974-05-11', '2018-05-22', 'Assistant Professor', 'IT', 45000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_modified_task1`
--
ALTER TABLE `employee_modified_task1`
  ADD PRIMARY KEY (`empno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
