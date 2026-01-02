-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2025 at 04:03 PM
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
(5, 'saya banh', 'Si nyonyok ngide', '20251211093337.png', '2025-12-11 09:33:37', 'admin');

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
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
