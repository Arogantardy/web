-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2026 at 01:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'GAG', '\"Grow a Garden\" artinya adalah \"menumbuhkan kebun\" secara harfiah, tetapi lebih dikenal sebagai nama sebuah permainan simulasi berkebun viral di platform Roblox. Dalam permainan ini, pemain bisa menanam, merawat, dan memanen tanaman virtual untuk mendapatkan uang (disebut Shackles) yang kemudian digunakan untuk mengembangkan kebun mereka dengan bibit dan hewan langka.', 'tirek.png', '2025-12-07 14:12:46', 'admin'),
(2, 'ZEN', 'Zenin Event\r\nZenin Event Grow a Garden adalah acara terbatas waktu dalam gim video Grow a Garden di platform Roblox, yang berlangsung dari 19 Juli 2025 hingga 2 Agustus 2025. Acara ini berfokus pada pengumpulan mata uang baru bernama Zen dengan cara mengumpulkan Tanaman Tenang (Tranquil Plants) yang muncul selama Acara Zen Aura, lalu menukarkannya di NPC biksu untuk membuka hadiah bertema Jepang seperti kosmetik dan hewan peliharaan baru.', 'koi.png', '2025-12-07 14:13:54', 'admin'),
(4, 'Anis turu', 'Alomani jam 12 keturon dc', '20251211092921.png', '2025-12-11 09:29:21', 'admin'),
(7, 'saya banh', 'erin nyonyok ngide', '20260103021809.png', '2026-01-03 02:18:09', 'manajer1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `gambar`, `tanggal`, `username`) VALUES
(3, 'saya banh', '20260109072940.png', '2026-01-09', 'admin'),
(4, 'animek', '20260108213254.jpg', '2026-01-08', 'admin'),
(5, 'animek 2', '20260108213306.jpg', '2026-01-08', 'admin'),
(6, 'animek3', '20260108213319.jpg', '2026-01-08', 'admin'),
(7, 'narugacuga', '20260108213341.jpg', '2026-01-08', 'admin'),
(8, 'saya banh', '20260109183400.png', '2026-01-09', 'danny');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '20260109030826.jpg'),
(5, 'fajri', '202cb962ac59075b964b07152d234b70', ''),
(6, 'dika', '202cb962ac59075b964b07152d234b70', ''),
(7, 'bowok', '202cb962ac59075b964b07152d234b70', ''),
(8, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(9, 'ardi', '202cb962ac59075b964b07152d234b70', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
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
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
