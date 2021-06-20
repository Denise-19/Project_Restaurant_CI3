-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 05:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_kategori` int(1) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_kategori`, `kategori`) VALUES
(1, 'BestSeller'),
(2, 'Standard'),
(3, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(25) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `kategori` varchar(1) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `ukuran`, `kategori`, `gambar`) VALUES
(1, 'Pizza Ayam', 60000, 'Reguler', '2', 'img1.png'),
(2, 'Burger Gila', 120000, 'Large', '1', 'img.png'),
(3, 'Sandwich Lumer', 100000, 'Medium', '1', 'img4.png'),
(6, 'Pizza Cakep', 130000, 'Large', '1', 'img3.png'),
(8, 'Pizza Gilaa', 150000, 'Large', '1', 'img15.png'),
(9, 'Taco Kenyang', 60000, 'Medium', '1', 'taco.png'),
(10, 'Paket Segar', 120000, 'Medium', '1', 'slider-png1.png'),
(11, 'Burger Crispy', 30000, 'Medium', '1', 'bgr2.png');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_penjualan`
--

CREATE TABLE `riwayat_penjualan` (
  `id` int(11) NOT NULL,
  `tanggal_beli` varchar(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `total_harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat_penjualan`
--

INSERT INTO `riwayat_penjualan` (`id`, `tanggal_beli`, `Username`, `total_harga`) VALUES
(1, '2021-06-20', 'admin', 60000),
(2, '2021-06-20', 'admin', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(6) NOT NULL,
  `saldo` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `saldo`) VALUES
(14, 'mantap', 'mantap@coba.com', '$2y$10$BYBeHOJFG8yGJ1msvUIuHu32GCFu0kixgQYD9WthmtMARSnDdHXz6', 'admin', 0),
(15, 'test32', 'test32@asd.com', '$2y$10$hGO.8Nmd/gWzkc72Wuh95.M3Qd7LQry0zgdS8ZTFOc1BIlCADE4XC', 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_menu`
--
ALTER TABLE `kategori_menu`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_penjualan`
--
ALTER TABLE `riwayat_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_menu`
--
ALTER TABLE `kategori_menu`
  MODIFY `id_kategori` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riwayat_penjualan`
--
ALTER TABLE `riwayat_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
