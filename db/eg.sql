-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 10:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eg`
--

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `ftype` varchar(30) NOT NULL,
  `location` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donar`
--

INSERT INTO `donar` (`fname`, `lname`, `gender`, `email`, `address`, `city`, `state`, `zip`, `mobile`, `password`, `cpassword`, `ftype`, `location`, `status`) VALUES
('aravindh', 'R', 'Male', 'aravindh@gmail.com', 'retteri', 'chennai', 'Tamil nadu', '785645', '6745893423', 'kamalakannan', 'kamalakannan', 'Non-Veg', 'chennai', 'Accepted'),
('kannan', 'mohan', 'Male', 'kannan08@gmail.com', 'middle street', 'Ranipet', 'Tamil Nadu', '875634', '9785645345', 'kamalakannan', 'kamalakannan', 'Non-Veg', 'mkmjbjhb', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `receive`
--

CREATE TABLE `receive` (
  `name` varchar(40) NOT NULL,
  `orphan` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receive`
--

INSERT INTO `receive` (`name`, `orphan`, `mobile`, `address`) VALUES
('fghuyhj', 'Yes', '', '9874563489');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `mobile` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`fname`, `lname`, `gender`, `email`, `address`, `city`, `state`, `zip`, `mobile`) VALUES
('rtgvrv', 'yghb', 'Male', 'hjbbj@gmail.com', 'tbsnryny', 'hbhvv', 'ghvhgv', '567876', '5645678967'),
('kannan', 'mohan', 'Male', 'kannan@gmail.com', 'middle street', 'Ranipet', 'Tamil Nadu', '987456', '9786452345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `uid` (`email`);

--
-- Indexes for table `receive`
--
ALTER TABLE `receive`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`mobile`),
  ADD UNIQUE KEY `uid` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
