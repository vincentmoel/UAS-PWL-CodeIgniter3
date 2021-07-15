-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 10:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pwl_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_uas`
--

CREATE TABLE `barang_uas` (
  `kode` char(10) NOT NULL,
  `nama_barang` varchar(40) NOT NULL,
  `harga` int(12) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_uas`
--

INSERT INTO `barang_uas` (`kode`, `nama_barang`, `harga`, `gambar`) VALUES
('B0001', 'Tepung Terigu', 70000, '1.jpg'),
('B0002', 'Sunlight', 30000, '2.jpg'),
('B0003', 'Rinso Besar', 300000, '3.jpg'),
('B0004', 'Vixal Pembersih', 450000, '4.jpg'),
('B0005', 'Rinso Sachet', 1000, '5.jpg'),
('B0006', 'Mama Lemon', 40000, '6.jpg'),
('B0007', 'Minyak Goreng', 23000, '7.jpg'),
('B0008', 'Sabun Mandi Nuvo', 3000, '8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_uas`
--
ALTER TABLE `barang_uas`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
