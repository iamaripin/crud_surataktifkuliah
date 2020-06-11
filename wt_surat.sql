-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 07:29 PM
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
-- Database: `wt_surat`
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
(6, 'sss', 'sddd', '2006-06-20', 'Surat Sudah Bisa Diambil', '68064-Dheni Purwanti.pdf', '68640-BAB II_5.pdf'),
(9, 'aku', 'aku', '2010-06-20', 'Berkas Tidak Lengkap', '4394-surat_8.pdf', '41753-surat_3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'saras w', 'saras', 'saras', 'admin'),
(3, 'wati xxx', 'watixx', 'watixx', 'mahasiswa'),
(4, 'aku', 'aku', 'aku', 'mahasiswa'),
(6, 'wewe', '12345', '12345', 'mahasiswa');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
