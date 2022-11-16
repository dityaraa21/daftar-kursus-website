-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 08:40 PM
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
-- Database: `ujianlsp`
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
(5, 4, '2022-08-08', '2022-08-09');

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
(4, 'Programmer', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac bibendum justo. Duis auctor nisi vel odio sagittis aliquet. Ut sed quam at lorem vestibulum sodales eu sit amet neque. Mauris non purus in orci auctor venenatis eget vitae lacus. Vestibulum sagittis nunc vel elit euismod, malesuada molestie risus suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ex posuere, accumsan felis ut, porta metus.');

-- --------------------------------------------------------

--
-- Table structure for table `kursus_daftar`
--

CREATE TABLE `kursus_daftar` (
  `id` int(11) NOT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `krs` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kursus_daftar`
--

INSERT INTO `kursus_daftar` (`id`, `id_mhs`, `id_user`, `id_jadwal`, `krs`, `status`) VALUES
(3, 0, 3, 2, '242-237-1-SM2.pdf', 'menunggu persetujuan'),
(5, 0, 2, 2, 'BAB_I_GALIH2.pdf', 'menunggu persetujuan'),
(6, 0, 2, 4, '10590-31055-1-PB.pdf', 'menunggu persetujuan');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal_permintaan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `id_user`, `nama`, `kelas`, `npm`, `status`, `tanggal_permintaan`) VALUES
(1, 2, 'Aditya Rahman', '4IA12', '50418204', 'menunggu', '2022-08-07'),
(2, 3, 'Vancherz', '4IA03', '52418862', 'menunggu', '2022-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 1),
(2, '50418204', 'smith', 2),
(3, 'vancherz', 'vancherz', 2);

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
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kursus_daftar`
--
ALTER TABLE `kursus_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_kursus`
--
ALTER TABLE `jadwal_kursus`
  ADD CONSTRAINT `jadwal_kursus_ibfk_1` FOREIGN KEY (`id_kursus`) REFERENCES `kursus` (`id`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
