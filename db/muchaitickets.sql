-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 06:13 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muchaitickets`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `idno` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `branch`, `photo`, `idno`, `fullname`, `username`, `email`, `phone`, `password`) VALUES
(1, 'NYERI', 'president2.jpg', 32651478, 'Gideon Kiplangat', 'Giddy', 'gideon.kiplangat@riarauniversity.ac.ke', 702499324, '123'),
(2, 'Nakuru', 'sec1.png', 25143698, 'James Wachira', 'James', 'james@gmail.com', 714253698, '1234'),
(3, 'Nakuru', 'president1.png', 25146978, 'Andrew Simiyu Wafula', 'Andrew', 'andrew@gmail.com', 706020027, '123'),
(4, 'Nairobi', 'tres3.png', 23154628, 'Muthoni Wagendo', 'Muthoni', 'muthoni20@gmail.com', 705499324, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `yf` year(4) NOT NULL,
  `manager` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch`, `yf`, `manager`) VALUES
(1, 'Nyeri', 2018, 'Chris Muoki'),
(2, 'Eldoret', 2016, 'David Langat');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(11) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `yop` year(4) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `branch`, `regno`, `yop`, `color`) VALUES
(1, 'NYERI', ' KDD105Q', 2021, 'White'),
(2, 'Mombasa', ' KCT289W', 2020, 'White'),
(3, 'Mombasa', ' KCT289W', 2020, 'White'),
(4, 'Nairobi', ' KCT289W', 2021, 'White'),
(5, 'Eldoret', ' KDD105Q', 2021, 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `idno` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `branch`, `photo`, `idno`, `fullname`, `email`, `phone`) VALUES
(1, 'NYERI', 'tres4.png', 24153698, 'Chris Wanyonyi', 'chris@gmail.com', 712457896),
(2, 'Nyeri', 'president2.jpg', 36251478, 'James Waweru', 'waweru@gmail.com', 112365248),
(3, 'Nyeri', 'president1.png', 25361498, 'James Waweru', 'waweru@gmail.com', 112546398);

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `idno` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `branch`, `photo`, `idno`, `fullname`, `email`, `phone`) VALUES
(1, 'Mombasa', 'president3.png', 32651498, 'Hassan Omar', 'omar@gmail.com', 114523698);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `fromm` varchar(100) NOT NULL,
  `too` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `fromm`, `too`) VALUES
(1, 'NYERI ', 'NAIROBI'),
(2, 'NAIROBI', 'NYERI');

-- --------------------------------------------------------

--
-- Table structure for table `s_admin`
--

CREATE TABLE `s_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_admin`
--

INSERT INTO `s_admin` (`id`, `email`, `username`, `password`) VALUES
(3, 'muchai@gmail.com', 'Muchai', '086d754f70e3f8cc0fb37e4e39c7ae1b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_admin`
--
ALTER TABLE `s_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `s_admin`
--
ALTER TABLE `s_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
