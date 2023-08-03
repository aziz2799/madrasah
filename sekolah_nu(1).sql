-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 04:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_nu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbayar_spp`
--

CREATE TABLE `tbayar_spp` (
  `kd_bayar_spp` varchar(11) NOT NULL,
  `kd_admin` int(11) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `total_bayar` float NOT NULL,
  `ket_spp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbayar_spp`
--

INSERT INTO `tbayar_spp` (`kd_bayar_spp`, `kd_admin`, `nisn`, `tgl_bayar`, `total_bayar`, `ket_spp`) VALUES
('0003', 1, '123', '2023-04-17', 100000, '04/2023 Semester Genap'),
('0004', 1, '123', '2023-05-20', 100000, '04/2023 Semester Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `tdetil_ruang`
--

CREATE TABLE `tdetil_ruang` (
  `id_detilr` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `nisn` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tdetil_ruang`
--

INSERT INTO `tdetil_ruang` (`id_detilr`, `id_ruang`, `nisn`) VALUES
(1, 2, '123'),
(2, 2, '321'),
(3, 2, '111'),
(4, 3, '123'),
(5, 3, '111'),
(6, 3, '321');

-- --------------------------------------------------------

--
-- Table structure for table `tguru`
--

CREATE TABLE `tguru` (
  `id_guru` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tguru`
--

INSERT INTO `tguru` (`id_guru`, `nama`, `password`) VALUES
('G1', 'Aziz', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tmatpel`
--

CREATE TABLE `tmatpel` (
  `id_matpel` int(11) NOT NULL,
  `nama_matpel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tmatpel`
--

INSERT INTO `tmatpel` (`id_matpel`, `nama_matpel`) VALUES
(1, 'Matimatika'),
(2, 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tpresensi`
--

CREATE TABLE `tpresensi` (
  `id_presensi` int(11) NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tpresensi`
--

INSERT INTO `tpresensi` (`id_presensi`, `id_ruang`, `nisn`, `tgl_presensi`, `ket`) VALUES
(4, 2, '321', '2023-06-14', 'Hadir'),
(5, 2, '111', '2023-06-14', 'Absen'),
(6, 2, '123', '2023-06-14', 'Sakit'),
(7, 2, '123', '2023-06-13', 'Hadir'),
(8, 2, '321', '2023-06-13', 'Hadir'),
(9, 2, '111', '2023-06-13', 'Hadir');

-- --------------------------------------------------------

--
-- Table structure for table `truang`
--

CREATE TABLE `truang` (
  `id_ruang` int(11) NOT NULL,
  `id_guru` varchar(5) NOT NULL,
  `id_matpel` int(11) NOT NULL,
  `kelas` varchar(4) NOT NULL,
  `semester` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truang`
--

INSERT INTO `truang` (`id_ruang`, `id_guru`, `id_matpel`, `kelas`, `semester`) VALUES
(2, 'G1', 1, 'XII', '1'),
(3, 'G1', 2, 'XI', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tsiswa`
--

CREATE TABLE `tsiswa` (
  `nisn` varchar(12) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` char(9) NOT NULL,
  `status` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tsiswa`
--

INSERT INTO `tsiswa` (`nisn`, `nis`, `pass`, `nama`, `jk`, `status`) VALUES
('111', '111', '123', 'Tina', 'Perempuan', 'Aktif'),
('123', '123', '123', 'Ali', 'Laki-laki', 'Aktif'),
('321', '321', '123', 'Joko', 'Laki-Laki', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `kd_admin` int(4) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`kd_admin`, `nama_admin`, `username`, `password`, `email`, `level`) VALUES
(1, 'Aziz', 'aziz', '123', 'aziz@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbayar_spp`
--
ALTER TABLE `tbayar_spp`
  ADD PRIMARY KEY (`kd_bayar_spp`);

--
-- Indexes for table `tdetil_ruang`
--
ALTER TABLE `tdetil_ruang`
  ADD PRIMARY KEY (`id_detilr`);

--
-- Indexes for table `tguru`
--
ALTER TABLE `tguru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tmatpel`
--
ALTER TABLE `tmatpel`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indexes for table `tpresensi`
--
ALTER TABLE `tpresensi`
  ADD PRIMARY KEY (`id_presensi`);

--
-- Indexes for table `truang`
--
ALTER TABLE `truang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tsiswa`
--
ALTER TABLE `tsiswa`
  ADD PRIMARY KEY (`nisn`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`kd_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tdetil_ruang`
--
ALTER TABLE `tdetil_ruang`
  MODIFY `id_detilr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tmatpel`
--
ALTER TABLE `tmatpel`
  MODIFY `id_matpel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tpresensi`
--
ALTER TABLE `tpresensi`
  MODIFY `id_presensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `truang`
--
ALTER TABLE `truang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `kd_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
