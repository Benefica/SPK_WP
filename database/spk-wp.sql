-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 15, 2023 at 03:47 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-wp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int NOT NULL,
  `kode` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alternatif` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `k1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `k2` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `k3` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `k4` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `k5` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nopol` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `kode`, `alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`, `nopol`) VALUES
(66, 'A001', 'Suzuki Ertiga GX MT', '170000000', '2018', '3', '4', '4', 'B 1204 ERO'),
(67, 'A002', 'Mazda Biante', '210000000', '2016', '3', '4', '5', 'B 2060 SRF'),
(68, 'A003', 'BMW 320i E90 LE', '219000000', '2012', '3', '5', '5', 'B 2440 PSD'),
(69, 'A004', 'Mercedes Benz C300 A', '300000000', '2012', '5', '5', '5', 'B 210 STR'),
(70, 'A005', 'BMW 320i SPORT', '345000000', '2014', '4', '5', '5', 'B 1770 EFL');

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `id` int NOT NULL,
  `nama_mobil` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nopol` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `B1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `B2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `B3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `B4` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `B5` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hasil_pengecekan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`id`, `nama_mobil`, `nopol`, `B1`, `B2`, `B3`, `B4`, `B5`, `hasil_pengecekan`) VALUES
(8, 'Suzuki Ertiga GX MT', 'B 1204 ERO', '4', '4', '3', '4', '4', 'Baik'),
(9, 'Mazda Biante', 'B 2060 SRF', '4', '4', '3', '4', '3', 'Baik'),
(10, 'BMW 320i E90 LE', 'B 2440 PSD', '5', '4', '5', '5', '5', 'Sangat Baik'),
(11, 'Mercedes Benz C300 AVG', 'B 210 STR', '5', '5', '4', '4', '5', 'Sangat Baik'),
(12, 'BMW 320i SPORT', 'B 1770 EFL', '5', '4', '5', '5', '4', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `interior`
--

CREATE TABLE `interior` (
  `id` int NOT NULL,
  `nama_mobil` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nopol` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `I1` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `I2` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `I3` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `I4` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `I5` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hasil_pengecekan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interior`
--

INSERT INTO `interior` (`id`, `nama_mobil`, `nopol`, `I1`, `I2`, `I3`, `I4`, `I5`, `hasil_pengecekan`) VALUES
(4, 'Suzuki Ertiga GX MT', 'B 1204 ERO', '3', '4', '4', '2', '5', 'Baik'),
(5, 'Mazda Biante', 'B 2060 SRF', '5', '5', '4', '4', '5', 'Sangat Baik'),
(6, 'BMW 320i E90 LE', 'B 2440 PSD', '5', '4', '4', '5', '5', 'Sangat Baik'),
(7, 'Mercedes Benz C300 AVG', 'B 210 STR', '5', '5', '4', '4', '5', 'Sangat Baik'),
(8, 'BMW 320i SPORT', 'B 1770 EFL', '5', '4', '5', '5', '5', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int NOT NULL,
  `kriteria` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kepentingan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `cost_benefit` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `kepentingan`, `cost_benefit`) VALUES
(1, 'K1 Harga', '5', 'cost'),
(2, 'K2 Tahun', '3', 'benefit'),
(3, 'K3 Kondisi Mesin', '5', 'benefit'),
(4, 'K4 Kondisi Body', '4', 'benefit'),
(5, 'K5 Kondisi Interior', '3', 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `mesin`
--

CREATE TABLE `mesin` (
  `id` int NOT NULL,
  `nama_mobil` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nopol` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `M1` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `M2` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `M3` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `M4` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `M5` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `hasil_pengecekan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mesin`
--

INSERT INTO `mesin` (`id`, `nama_mobil`, `nopol`, `M1`, `M2`, `M3`, `M4`, `M5`, `hasil_pengecekan`) VALUES
(8, 'Suzuki Ertiga GX MT', 'B 1204 ERO', '3', '3', '4', '3', '3', 'Cukup Layak'),
(9, 'Mazda Biante', 'B 2060 SRF', '3', '3', '3', '4', '4', 'Cukup Layak'),
(10, 'BMW 320i E90 LE', 'B 2440 PSD', '3', '4', '3', '4', '3', 'Cukup Layak'),
(11, 'Mercedes Benz C300 AVG', 'B 210 STR', '5', '5', '5', '5', '4', 'Sangat Layak'),
(12, 'BMW 320i SPORT', 'B 1770 EFL', '4', '5', '3', '4', '4', 'Layak');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int NOT NULL,
  `nama_mobil` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nopol` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tahun` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `warna` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `wiraniaga` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `nama_mobil`, `nopol`, `harga`, `tahun`, `warna`, `wiraniaga`) VALUES
(15, 'Suzuki Ertiga GX MT', 'B 1204 ERO', '170000000', '2018', 'Hitam', 'Budi Gunawan'),
(16, 'Mazda Biante', 'B 2060 SRF', '210000000', '2016', 'Putih', 'Agus Setiawan'),
(17, 'BMW 320i E90 LE', 'B 2440 PSD', '219000000', '2012', 'Hitam', 'Gilang'),
(18, 'Mercedes Benz C300 AVG', 'B 210 STR', '300000000', '2012', 'Putih', 'Putra Anugrah'),
(19, 'BMW 320i SPORT', 'B 1770 EFL', '345000000', '2014', 'Hitam', 'Ahmad Farhan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(4, 'Dwi Prayogo', 'Admin01', '$2y$10$fDlSUWIRoyI1DIaY6ghn8Os026DaHGSt5/N84K1Dh8YA4yEiw/a/i', 'admin'),
(18, 'Zulfikar Mada Suksena', 'Admin00', '$2y$10$KQX1de/yVfMo6R0CIdafFOdnTjumupa6jilEkL8F.8nvQ3f7n.dwi', 'admin'),
(73, 'Ridwan', 'Sales01', '$2y$10$6QQxo0zcEeY8TrqZMwN5COh1Zpg7eA1VM278JdrBSyte4hkud1t8S', 'sales'),
(77, 'Gunawan', 'Sales02', '$2y$10$l3v0gRHjKmiyC/OeNZw.Pu9Z//gzCcJKggU7BTypMnCs85BmrwGq.', 'sales'),
(78, 'Rudi Gunawan', 'Admin02', '$2y$10$UwCnRV/v1APxH9PXzAek2OG.Tg.T34RJytCXF84iybfXxM7JW28Dm', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interior`
--
ALTER TABLE `interior`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `mesin`
--
ALTER TABLE `mesin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `interior`
--
ALTER TABLE `interior`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mesin`
--
ALTER TABLE `mesin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
