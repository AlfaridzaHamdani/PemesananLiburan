-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 04:50 PM
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
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pesanan`
--

CREATE TABLE `daftar_pesanan` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `phone` int(100) DEFAULT NULL,
  `jumlah_peserta` int(100) DEFAULT NULL,
  `jumlah_hari` int(100) DEFAULT NULL,
  `akomodasi` tinyint(1) DEFAULT NULL,
  `transportasi` tinyint(1) DEFAULT NULL,
  `service` tinyint(1) DEFAULT NULL,
  `harga_paket` int(100) DEFAULT NULL,
  `total_tagihan` int(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar_pesanan`
--

INSERT INTO `daftar_pesanan` (`id`, `name`, `phone`, `jumlah_peserta`, `jumlah_hari`, `akomodasi`, `transportasi`, `service`, `harga_paket`, `total_tagihan`, `date`) VALUES
(15, 'Alfaridza Hamdani', 81234567, 1, 1, 1, 1, 1, 2200000, 2700000, '2024-10-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pesanan`
--
ALTER TABLE `daftar_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
