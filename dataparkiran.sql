-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 05:59 PM
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
-- Database: `aplikasiparkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataparkiran`
--

CREATE TABLE `dataparkiran` (
  `id` int(20) NOT NULL,
  `jenis_kendaraan` varchar(20) NOT NULL,
  `plat_nomor` varchar(10) NOT NULL,
  `jam_masuk` datetime NOT NULL,
  `jam_keluar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataparkiran`
--

INSERT INTO `dataparkiran` (`id`, `jenis_kendaraan`, `plat_nomor`, `jam_masuk`, `jam_keluar`) VALUES
(1, 'MAZDA RX7 FD', 'B1975AX', '2023-10-01 10:00:00', '2023-10-01 13:00:00'),
(2, 'HONDA NSX NA2', 'B3098AJ', '2023-10-01 07:00:09', '2023-10-01 09:00:00'),
(7, 'Nissan GTR R35', 'B1890AS', '2023-10-03 15:00:38', '2023-10-03 17:40:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataparkiran`
--
ALTER TABLE `dataparkiran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataparkiran`
--
ALTER TABLE `dataparkiran`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
