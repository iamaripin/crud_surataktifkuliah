-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 07:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sup_surat_aktif`
--

-- --------------------------------------------------------

--
-- Table structure for table `surat_mhs`
--

CREATE TABLE `surat_mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `tanggal` varchar(225) NOT NULL,
  `status` varchar(100) NOT NULL,
  `file` varchar(225) NOT NULL,
  `krs` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_mhs`
--

INSERT INTO `surat_mhs` (`id`, `nama`, `nim`, `tanggal`, `status`, `file`, `krs`) VALUES
(6, 'sss', 'sddd', '2006-06-20', 'Sedang Diproses', '68064-Dheni Purwanti.pdf', '68640-BAB II_5.pdf'),
(14, 'aku', 'aku', 'Thursday, 11-06-2020', 'Surat Sudah Bisa Diambil', '43972-surat_16.pdf', '76692-surat_12.pdf'),
(15, 'aku watix', 'watixx', 'Thursday, 11-06-2020', 'Sudah Diajukan', '34002-hapusmhs.php', '84050-tambah.php');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `daftar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `daftar`) VALUES
(1, 'saras w', 'saras', 'saras', 'admin', 'Thursday, 11-06-2020'),
(3, 'wati xxx', 'watixx', 'watixx', 'mahasiswa', 'Thursday, 11-06-2020'),
(4, 'aku', 'aku', 'aku', 'mahasiswa', 'Thursday, 11-06-2020'),
(6, 'wewe', '12345', '12345', 'mahasiswa', ''),
(7, 'yusuf', '123', '123', 'admin', ''),
(8, 'qwe', 'qwe', 'qwe', 'mahasiswa', 'Thursday, 11-06-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `surat_mhs`
--
ALTER TABLE `surat_mhs`
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
-- AUTO_INCREMENT for table `surat_mhs`
--
ALTER TABLE `surat_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
