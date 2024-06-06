-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:45 AM
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
-- Database: `aroyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `rps`
--

CREATE TABLE `rps` (
  `id_rps` int(11) NOT NULL,
  `matkul` varchar(512) NOT NULL,
  `kode` varchar(32) NOT NULL,
  `semester` int(1) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `materi1` varchar(512) NOT NULL,
  `materi2` varchar(512) NOT NULL,
  `materi3` varchar(512) NOT NULL,
  `materi4` varchar(512) NOT NULL,
  `materi5` varchar(512) NOT NULL,
  `materi6` varchar(512) NOT NULL,
  `materi7` varchar(512) NOT NULL,
  `materi8` varchar(512) NOT NULL,
  `materi9` varchar(512) NOT NULL,
  `materi10` varchar(512) NOT NULL,
  `materi11` varchar(512) NOT NULL,
  `materi12` varchar(512) NOT NULL,
  `materi13` varchar(512) NOT NULL,
  `materi14` varchar(512) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rps`
--

INSERT INTO `rps` (`id_rps`, `matkul`, `kode`, `semester`, `deskripsi`, `materi1`, `materi2`, `materi3`, `materi4`, `materi5`, `materi6`, `materi7`, `materi8`, `materi9`, `materi10`, `materi11`, `materi12`, `materi13`, `materi14`, `id_user`) VALUES
(1, 'Multimedia', 'DT019', 6, 'Mata Kuliah Multimedia', 'materi 1', 'materi 2', 'materi 3 tes', 'materi 4', 'materi 5', 'materi 6', 'materi 7', 'materi 8', 'materi 9 tes', 'materi 10 tes', 'materi 11', 'materi 12', 'Materi 13', '', 1),
(2, 'Perancangan Web 2', 'DT087', 2, 'Mata Kuliah Perancangan Web 2', 'Materi 1', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 'Materi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `nim` varchar(16) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `nim`, `username`, `password`) VALUES
(1, 'Aroyo Bintang Wiliantoro', '22.01.4794', 'aroyo', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rps`
--
ALTER TABLE `rps`
  ADD PRIMARY KEY (`id_rps`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rps`
--
ALTER TABLE `rps`
  MODIFY `id_rps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
