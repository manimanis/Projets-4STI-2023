-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 01:45 PM
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
-- Database: `sign_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `Full_name` varchar(32) NOT NULL,
  `ID` int(8) NOT NULL,
  `Classe` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Mobile_Number` int(8) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`Full_name`, `ID`, `Classe`, `Email`, `Mobile_Number`, `Password`) VALUES
('Mohamed Amine Msallem', 234588, 'Science Informatique', 'msallem474@gmail.com', 99072160, 'amine');

-- --------------------------------------------------------

--
-- Table structure for table `informatique`
--

CREATE TABLE `informatique` (
  `sti_ctr1` int(11) NOT NULL,
  `sti_ctr2` int(11) NOT NULL,
  `sti_s` int(11) NOT NULL,
  `prog_ctr1` int(11) NOT NULL,
  `prog_ctr2` int(11) NOT NULL,
  `prog_s` int(11) NOT NULL,
  `math_ctr1` int(11) NOT NULL,
  `math_s` int(11) NOT NULL,
  `phy_ctr1` int(11) NOT NULL,
  `phy_ctr2` int(11) NOT NULL,
  `phy_s` int(11) NOT NULL,
  `arb_s` int(11) NOT NULL,
  `phi_ora` int(11) NOT NULL,
  `phi_ctr1` int(11) NOT NULL,
  `phi_s` int(11) NOT NULL,
  `fr_ctr1` int(11) NOT NULL,
  `fr_ctr2` int(11) NOT NULL,
  `fr_s` int(11) NOT NULL,
  `an_ctr1` int(11) NOT NULL,
  `an_ctr2` int(11) NOT NULL,
  `an_s` int(11) NOT NULL,
  `op_ctr1` int(11) NOT NULL,
  `op_s` int(11) NOT NULL,
  `s_ctr1` int(11) NOT NULL,
  `s_s` int(11) NOT NULL,
  `ID` int(8) NOT NULL,
  `moy` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informatique`
--

INSERT INTO `informatique` (`sti_ctr1`, `sti_ctr2`, `sti_s`, `prog_ctr1`, `prog_ctr2`, `prog_s`, `math_ctr1`, `math_s`, `phy_ctr1`, `phy_ctr2`, `phy_s`, `arb_s`, `phi_ora`, `phi_ctr1`, `phi_s`, `fr_ctr1`, `fr_ctr2`, `fr_s`, `an_ctr1`, `an_ctr2`, `an_s`, `op_ctr1`, `op_s`, `s_ctr1`, `s_s`, `ID`, `moy`) VALUES
(20, 20, 20, 15, 15, 15, 15, 15, 15, 15, 0, 15, 15, 15, 15, 15, 15, 15, 15, 15, 15, 16, 15, 16, 16, 234588, 15.91);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
