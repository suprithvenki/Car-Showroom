-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 02:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcar`
--

CREATE TABLE `addcar` (
  `carname` varchar(30) NOT NULL,
  `carmodel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcar`
--

INSERT INTO `addcar` (`carname`, `carmodel`) VALUES
('aston martin', 'db5'),
('rolls royace', 'ghost');

-- --------------------------------------------------------

--
-- Table structure for table `addspec`
--

CREATE TABLE `addspec` (
  `seater` int(30) NOT NULL,
  `mileage` int(30) NOT NULL,
  `fuel` varchar(30) NOT NULL,
  `topspeed` int(30) NOT NULL,
  `amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addspec`
--

INSERT INTO `addspec` (`seater`, `mileage`, `fuel`, `topspeed`, `amount`) VALUES
(4, 20, 'petrol', 200, 80000000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email`, `password`) VALUES
(1, 'teju', 'teju@gmail.com', '1234'),
(2, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billid` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `dateofbilling` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billid`, `id`, `amount`, `dateofbilling`) VALUES
(1, 3, 45000000, '2020-12-22'),
(3, 4, 230000000, '2021-01-20'),
(4, 7, 30000000, '2021-01-05'),
(6, 10, 140000000, '2021-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `carname` varchar(30) NOT NULL,
  `carmodel` varchar(30) NOT NULL,
  `dateofbooking` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `id`, `carname`, `carmodel`, `dateofbooking`) VALUES
(3, 3, 'rolls royace', 'ghost', '2020-12-25'),
(4, 3, 'rolls royace', 'ghost', '2021-01-13'),
(8, 10, 'rolls royace', 'phantom', '2021-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `mobile`, `address`) VALUES
(3, 'nik', 'nik@12', '123456', 2147483647, 'jayanagar'),
(4, 'abc', 'adasd@gmail.com', '1234', 1234, 'chennai'),
(7, 'endline', 'endline@gmail.com', '1234', 12345, 'bangalore'),
(10, 'qqq', 'q@gmail.com', '1234', 1234, 'chennai'),
(11, 'car', 'car@gmail.com', '1234', 1234, 'bangalore'),
(12, 'kanishkar', 'kanishkar182000@gmail.com', '1234', 1234, 'bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `spec`
--

CREATE TABLE `spec` (
  `chassisno` int(30) NOT NULL,
  `id` int(30) NOT NULL,
  `seater` int(30) NOT NULL,
  `mileage` int(30) NOT NULL,
  `fuel` varchar(30) NOT NULL,
  `topspeed` int(30) NOT NULL,
  `amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spec`
--

INSERT INTO `spec` (`chassisno`, `id`, `seater`, `mileage`, `fuel`, `topspeed`, `amount`) VALUES
(1, 3, 2, 6, 'petrol', 350, 45000000),
(4, 3, 2, 4, 'petrol', 350, 30000000),
(6, 10, 4, 15, 'petrol', 200, 140000000),
(8, 7, 4, 20, 'petrol', 360, 40000000),
(9, 7, 4, 20, 'petrol', 360, 40000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcar`
--
ALTER TABLE `addcar`
  ADD PRIMARY KEY (`carname`);

--
-- Indexes for table `addspec`
--
ALTER TABLE `addspec`
  ADD PRIMARY KEY (`seater`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`),
  ADD KEY `Test1` (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`),
  ADD KEY `Test` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spec`
--
ALTER TABLE `spec`
  ADD PRIMARY KEY (`chassisno`),
  ADD KEY `Test3` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `spec`
--
ALTER TABLE `spec`
  MODIFY `chassisno` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `Test1` FOREIGN KEY (`id`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `Test` FOREIGN KEY (`id`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spec`
--
ALTER TABLE `spec`
  ADD CONSTRAINT `Test3` FOREIGN KEY (`id`) REFERENCES `register` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
