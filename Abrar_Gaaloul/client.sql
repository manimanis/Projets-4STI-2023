-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 03:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`username`, `password`) VALUES
('abrar', 'abrar123'),
('nour', 'nour123');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `nameItem` varchar(64) NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `nameItem`, `amount`, `price`) VALUES
(1, 'casque white shark', 50, 43000),
(2, 'tapis souris white shark', 74, 39000),
(3, 'souris white shark', 40, 29000),
(4, 'ventilateur white shark', 21, 39000),
(5, 'haut parleur white shark', 13, 42900),
(6, 'manette sans fil white shark', 85, 47500);

-- --------------------------------------------------------

--
-- Table structure for table `puchase`
--

CREATE TABLE `puchase` (
  `id` int(11) NOT NULL,
  `usernane` varchar(64) NOT NULL,
  `amountItem` int(11) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `puchase`
--

INSERT INTO `puchase` (`id`, `usernane`, `amountItem`, `sum`) VALUES
(2, 'nour', 2, 78000),
(6, 'abrar', 2, 95000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puchase`
--
ALTER TABLE `puchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usernane` (`usernane`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `puchase`
--
ALTER TABLE `puchase`
  ADD CONSTRAINT `puchase_ibfk_1` FOREIGN KEY (`usernane`) REFERENCES `client` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `puchase_ibfk_2` FOREIGN KEY (`id`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
