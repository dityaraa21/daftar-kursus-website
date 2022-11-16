-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 07:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lspuji`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kursus`
--

CREATE TABLE `jadwal_kursus` (
  `id` int(11) NOT NULL,
  `id_kursus` int(11) NOT NULL,
  `mulai` date NOT NULL,
  `selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_kursus`
--

INSERT INTO `jadwal_kursus` (`id`, `id_kursus`, `mulai`, `selesai`) VALUES
(4, 2, '2022-08-08', '2022-08-09'),
(6, 4, '2022-08-15', '2022-08-16'),
(7, 3, '2022-08-15', '2022-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `nama_kursus` varchar(25) NOT NULL,
  `lama_kursus` int(11) NOT NULL,
  `keterangan_kursus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id`, `nama_kursus`, `lama_kursus`, `keterangan_kursus`) VALUES
(2, 'Desain Grafis', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac bibendum justo. Duis auctor nisi vel odio sagittis aliquet. Ut sed quam at lorem vestibulum sodales eu sit amet neque. Mauris non purus in orci auctor venenatis eget vitae lacus. Vestibulum sagittis nunc vel elit euismod, malesuada molestie risus suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex posuere, accumsan felis ut, porta metus.'),
(3, 'Manajemen Layanan TI', 6, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac bibendum justo. Duis auctor nisi vel odio sagittis aliquet. Ut sed quam at lorem vestibulum sodales eu sit amet neque. Mauris non purus in orci auctor venenatis eget vitae lacus. Vestibulum sagittis nunc vel elit euismod, malesuada molestie risus suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex posuere, accumsan felis ut, porta metus.'),
(4, 'Programmer', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac bibendum justo. Duis auctor nisi vel odio sagittis aliquet. Ut sed quam at lorem vestibulum sodales eu sit amet neque. Mauris non purus in orci auctor venenatis eget vitae lacus. Vestibulum sagittis nunc vel elit euismod, malesuada molestie risus suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex posuere, accumsan felis ut, porta metus.'),
(8, 'Junior Web Programmer', 0, 'Tes JWP'),
(9, 'Jaringan Muda', 0, 'Tes Jamu');

-- --------------------------------------------------------

--
-- Table structure for table `kursus_daftar`
--

CREATE TABLE `kursus_daftar` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `krs` text NOT NULL,
  `status` varchar(25) NOT NULL,
  `tanggal_permintaan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus_daftar`
--

INSERT INTO `kursus_daftar` (`id`, `id_user`, `id_jadwal`, `krs`, `status`, `tanggal_permintaan`) VALUES
(1, 4, 2, '236-1565-1-PB2.pdf', 'menunggu persetujuan', '2022-08-08'),
(2, 4, 2, 'adoc_pub_bab-i-pendahuluan-kebutuhannya-konsep-ini-sudah-di1.pdf', 'menunggu persetujuan', '2022-08-08'),
(3, 5, 4, 'BAB_1_BAB_21.pdf', 'menunggu persetujuan', '2022-08-08'),
(4, 6, 2, '6001-11304-1-SM5.pdf', 'menunggu persetujuan', '2022-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `npm`, `password`, `kelas`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 1),
(6, 'Aditya Rahman', '50418204', 'smith', '4IA12', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kursus` (`id_kursus`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursus_daftar`
--
ALTER TABLE `kursus_daftar`
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
-- AUTO_INCREMENT for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kursus_daftar`
--
ALTER TABLE `kursus_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  ADD CONSTRAINT `jadwal_kursus_ibfk_1` FOREIGN KEY (`id_kursus`) REFERENCES `kursus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
