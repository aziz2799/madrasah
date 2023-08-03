-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2022 pada 22.56
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinas_pendidikan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username_admin`, `pass`) VALUES
('admin01', '12345'),
('admin02', '1233456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(40) NOT NULL,
  `id_provinsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `id_provinsi`) VALUES
(2201, 'Kota Palangka Raya', 22),
(2202, 'Kabupaten Barito Selatan', 22),
(2203, 'Kabupaten Barito Timur', 22),
(2204, 'Kabupaten Barito Utara', 22),
(2205, 'Kabupaten Gunung Mas', 22),
(2206, 'Kabupaten Kapuas', 22),
(2207, 'Kabupaten Katingan', 22),
(2208, 'Kabupaten Kotawaringin Barat', 22),
(2209, 'Kabupaten Kotawaringin Timur', 22),
(2210, 'Kabupaten Lamandau', 22),
(2211, 'Kabupaten Murung Raya', 22),
(2212, 'Kabupaten Pulang Pisau', 22),
(2213, 'Kabupaten Seruyan', 22),
(2214, 'Kabupaten Sukamara', 22);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(40) NOT NULL,
  `id_kabupaten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kabupaten`) VALUES
(220901, 'Baamang', 2209),
(220902, 'Mentawa Baru Ketapang', 2209),
(220903, 'Seranau', 2209),
(220904, 'Kota Besi', 2209),
(220905, 'Cempaga', 2209),
(220906, 'Cempaga Hulu', 2209),
(220907, 'Mentaya Hilir Selatan', 2209),
(220908, 'Mentaya Hilir Utara', 2209),
(220909, 'Pulau Hanaut', 2209),
(220910, 'Teluk Sampit', 2209),
(220911, 'Parenggean', 2209),
(220912, 'Mentaya Hulu', 2209),
(220913, 'Antang Kalang', 2209),
(220914, 'Telaga Antang', 2209),
(220915, 'Tualan Hulu', 2209),
(220916, 'Bukit Santuai', 2209),
(220917, 'Telawang', 2209);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketua`
--

CREATE TABLE `ketua` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ketua`
--

INSERT INTO `ketua` (`nip`, `nama`, `gambar`) VALUES
('196406171988031016', 'Suparmadi, SE., MM', 'pak suparmadi.jpeg'),
('197505081993112001', 'SUSIAWATI, S.Sos', 'ttd kadisdik.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Nanggroe Aceh Darussalam'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatera Selatan'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'DI Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Utara'),
(21, 'Kalimantan Barat'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Selatan'),
(24, 'Kalimantan Timur'),
(25, 'Gorontalo'),
(26, 'Sulawesi Utara'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Selatan'),
(30, 'Sulawesi Tenggara'),
(31, 'Maluku Utara'),
(32, 'Maluku'),
(33, 'Papua Barat'),
(34, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `kode_sekolah` varchar(12) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`kode_sekolah`, `nama_sekolah`, `id_kecamatan`, `password`, `alamat_sekolah`) VALUES
('30201105', 'SD NEGERI 1 MEKAR SARI', 220915, '30201105', 'Jl. Desa Mekar Sari'),
('30201107', 'SD NEGERI 1 MEKAR JAYA', 220911, '30201107', 'Jl. Desa Mekar Jaya'),
('30201108', 'SD NEGERI 1 LUWUK SAMPUN', 220915, '30201108', 'Luwuk Sampun'),
('30201109', 'SD NEGERI 1 LUWUK KUWAN', 220914, '30201109', 'Luwuk Kuwan'),
('30201120', 'SD NEGERI 1 KULUK TALAWANG', 220913, '30201120', 'Kuluk Talawang'),
('30201125', 'SD NEGERI 1 NAHAN KIDU', 220906, '30201125', 'Desa Sudan'),
('30201126', 'SD NEGERI 1 PADAS SEBUT', 220917, '30201126', 'Jln. Rambutan'),
('30201127', 'SD NEGERI 2 PADAS SEBUT', 220917, '30201127', 'DESA BIRU MAJU'),
('30201128', 'SD NEGERI 1 PALANGAN', 220904, '30201128', 'Palangan'),
('30201129', 'SD NEGERI 2 PALANGAN', 220917, '30201129', 'Jl. Bukit Kupang'),
('30201130', 'SD NEGERI 4 KOTA BESI HULU', 220904, '30201130', 'Jl. Cilik Riwut Km.20 Desa Bajarum'),
('30201131', 'SD NEGERI 3 KOTA BESI HULU', 220904, '30201131', 'Jl. Samudra RT.006 RW.002'),
('30201132', 'SD NEGERI 1 HANJALIPAN', 220904, '30201132', 'Jl. Hanjalipan'),
('30201134', 'SD NEGERI 1 KANDAN', 220904, '30201134', 'Jl. Kandan'),
('30201135', 'SD NEGERI 2 KANDAN', 220904, '30201135', 'Jl. R.A.JKARTINI  no.10  RT.2  RW.1'),
('30201136', 'SD NEGERI 3 KANDAN', 220904, '30201136', 'Jl. R.A.Kartini Kandan'),
('30201137', 'SD NEGERI 1 KARANG SARI', 220911, '30201137', 'Jl. Desa Karang Sari'),
('30201138', 'SD NEGERI 1 KARANG TUNGGAL', 220911, '30201138', 'Jl. Anggrek Desa Karang Tunggal Rt/w. 02/06'),
('30201139', 'SD NEGERI 2 KARANG TUNGGAL', 220911, '30201139', 'Jl. Desa Karang Tunggal'),
('30201140', 'SD NEGERI 1 KATATARI', 220906, '30201140', 'Katatari'),
('30201141', 'SD NEGERI 1 KOTA BESI HILIR', 220904, '30201141', 'Jl. Pangeran Diponegoro'),
('30201142', 'SD NEGERI 3 KOTA BESI HILIR', 220904, '30201142', 'Jl. Pangeran Diponegoro'),
('30201143', 'SD NEGERI 1 KOTA BESI HULU', 220904, '30201143', 'Jl. Samudra'),
('30201144', 'SD NEGERI 2 KOTA BESI HULU', 220904, '30201144', 'Jl. Paul Suling'),
('30201145', 'SD NEGERI 2 GUNUNG MAKMUR', 220913, '30201145', 'Jl.Poros Pasar Desa Gunung Makmur'),
('30201146', 'SD NEGERI 3 PALANGAN', 220917, '30201146', 'Luwuk Ranggas'),
('30201147', 'SD NEGERI 1 PAMALIAN', 220904, '30201147', 'Pamalian'),
('30201148', 'SD NEGERI 1 SEBUNGSU', 220915, '30201148', 'Jl. Desa Sebungsu'),
('30201149', 'SD NEGERI 1 SELUCING', 220906, '30201149', 'Selucing'),
('30201150', 'SD NEGERI 1 SIMPUR', 220904, '30201150', 'Simpur'),
('30201151', 'SD NEGERI 2 SIMPUR', 220904, '30201151', 'Soren Rt.03 Rw.01'),
('30201152', 'SD NEGERI 3 SIMPUR', 220904, '30201152', 'Rasau Tumbuh'),
('30201153', 'SD NEGERI SP-1 BABALUH KECIL', 220909, '30201153', 'Jl. Sampit-Pagatan'),
('30201154', 'SD NEGERI SP-2 BABALUH', 220909, '30201154', 'Jl. Jalur 3'),
('30201155', 'SD NEGERI SUMBER MAKMUR', 220911, '30201155', 'Jl. Desa Sumber Makmur'),
('30201157', 'SD NEGERI 1 SEI PURING', 220913, '30201157', 'JL. DESA SUNGAI PURING'),
('30201158', 'SD NEGERI 1 SUNGAI UBAR', 220906, '30201158', 'Sungai Ubar Mandiri'),
('30201159', 'SD NEGERI 1 TANAH PUTIH', 220917, '30201159', 'Tanah Putih'),
('30201160', 'SD NEGERI 2 TANAH PUTIH', 220917, '30201160', 'Jl. Dukuh Sati'),
('30201161', 'SD NEGERI 4 SEBAMBAN', 220907, '30201161', 'Jl.Samuda-Ujung Pandaran Km 7,5'),
('30201162', 'SD NEGERI 2 SABAMBAN', 220907, '30201162', 'Sungai Ijum'),
('30201163', 'SD NEGERI 2 PAMALIAN', 220904, '30201163', 'Dusun Pamadauan'),
('30201164', 'SD NEGERI 1 PARENGGEAN', 220911, '30201164', 'Jl. Pelita Rt.16, Rw.04'),
('30201168', 'SD NEGERI 1 PEMANTANG', 220912, '30201168', 'Jl. H. Ali'),
('30201169', 'SD NEGERI 1 RANTAU KATANG', 220914, '30201169', 'Jln Nuir no.217 Rt 06 Rw 02 Ds. Rantau Katang'),
('30201170', 'SD NEGERI 1 SAMUDA BESAR', 220907, '30201170', 'Samuda Besar'),
('30201172', 'SD NEGERI 1 SEBABI', 220917, '30201172', 'Jl. MENDRUT DESA SEBABI'),
('30201173', 'SD NEGERI 2 SEBABI', 220917, '30201173', 'Jl. Mendrut'),
('30201174', 'SD NEGERI 3 SEBABI', 220917, '30201174', 'Jl. Jend. Sudirman Km. 78'),
('30201175', 'SD NEGERI 1 SEBAMBAN', 220907, '30201175', 'Jl. Anang Jalil'),
('30201176', 'SD NEGERI 3 TANAH PUTIH', 220917, '30201176', 'Muara Ubar'),
('30201177', 'SD NEGERI 4 BASIRIH HILIR', 220907, '30201177', 'Jl. Anang Sr'),
('30201178', 'SD NEGERI 5 BAPINANG HULU', 220909, '30201178', 'Jl. Handil Sepakat'),
('30201179', 'SD NEGERI 5 KETAPANG', 220902, '30201179', 'Jalan Ir H Juanda Rt 13 Telaga'),
('30201180', 'SD NEGERI 5 KUALA KUAYAN', 220912, '30201180', 'Jl. Bukit Tajahan Rt. 07 Rw. 04'),
('30201181', 'SD NEGERI 5 PELANGSIAN', 220902, '30201181', 'Jl. H.m. Arsyad Km.20 Sampit'),
('30201182', 'SD NEGERI 5 SAMUDA KOTA', 220907, '30201182', 'JL.SAPIHAN BESAR'),
('30201185', 'SD NEGERI 6 BAAMANG TENGAH', 220901, '30201185', 'Jl. Kihajar Dewantara'),
('30201187', 'SD NEGERI 6 KETAPANG', 220902, '30201187', 'Jl. H. Imbran'),
('30201188', 'SD NEGERI 6 PELANGSIAN', 220902, '30201188', 'Jl. H.m. Arsyad Km. 15'),
('30201189', 'SD NEGERI 6 SAMUDA KOTA', 220907, '30201189', 'Jl. Trans. Handil Sohor'),
('30201190', 'SD NEGERI 7 BAAMANG HILIR', 220901, '30201190', 'Jl. Chritopel Mihing'),
('30201191', 'SD NEGERI 5 BAPINANG HILIR LAUT', 220909, '30201191', 'Jl. Bapinang- Pagatan Sei Kelampan Kecil Rt.002 Rw'),
('30201193', 'SD NEGERI 4 CEMPAKA MULIA BARAT', 220905, '30201193', 'Jl. Cempaka Mulia Barat'),
('30201194', 'SD NEGERI 4 KETAPANG', 220902, '30201194', 'Jl. D.I. Panjaitan Selatan'),
('30201195', 'SD NEGERI 4 KUALA KUAYAN', 220912, '30201195', 'Jl. Ongko Balai'),
('30201196', 'SD NEGERI 4 PARENGGEAN', 220911, '30201196', 'Jl. Mulia Permata,RT.15, RW.03'),
('30201197', 'SD NEGERI 4 PARIT', 220906, '30201197', 'Jalan Tjilik Riwut km 77'),
('30201198', 'SD NEGERI 4 PELANGSIAN', 220902, '30201198', 'Jl. H.m. Arsyad Km. 8'),
('30201199', 'SD NEGERI 4 PUNDU', 220906, '30201199', 'Km. 60 Pundu'),
('30201300', 'SD NEGERI 4 RUBUNG BUYUNG', 220906, '30201300', 'Pelantaran Bawah'),
('30201301', 'SD NEGERI 4 SAMUDA KOTA', 220907, '30201301', 'Jl. Bagandung'),
('30201302', 'SD NEGERI 4 SAWAHAN', 220902, '30201302', 'Jl. Jend. Sudirman Km. 6,5 Kompleks Perumahan Bina'),
('30201303', 'SD NEGERI 5 BAAMANG HILIR', 220901, '30201303', 'Jl. Kapuas No. 59 Baamang Hilir'),
('30201304', 'SD NEGERI 5 BAAMANG HULU', 220901, '30201304', 'Jl. Gunung Arjuno VIII Rt. 47, Rw. 008'),
('30201306', 'SD NEGERI 7 BAAMANG TENGAH', 220901, '30201306', 'Jl. Cilik Riwut Km. 4,5'),
('30201307', 'SD NEGERI 7 BAPINANG HILIR LAUT', 220909, '30201307', 'Jl. Bapinang Pagatan Sei Rungun Kab. Kotawaringin '),
('30201308', 'SD NEGERI 7 BAPINANG HULU', 220909, '30201308', 'Jl. Bapinang Hulu'),
('30201309', 'SD NEGERI 1 BATUAH', 220903, '30201309', 'Jl. Batuah'),
('30201310', 'SD NEGERI 1 BERINGIN JAYA', 220914, '30201310', 'Jl. Beringin Jaya'),
('30201311', 'SD NEGERI BERINGIN TUNGGAL JAYA', 220911, '30201311', 'Jl. Desa Beringin Tunggal Jaya'),
('30201312', 'SD NEGERI 1 BUKIT BATU', 220906, '30201312', 'Jl. Desa Bukit Batu'),
('30201313', 'SD NEGERI 1 BUKIT HARAPAN', 220911, '30201313', 'Jl. Dusun Bukit Harapan Rt. 04 Rw 01'),
('30201315', 'SD NEGERI 1 BUKIT MAKMUR', 220915, '30201315', 'Jl. Barito'),
('30201316', 'SD NEGERI BUKIT SARI', 220911, '30201316', 'Jl. Rajawali No. 2'),
('30201317', 'SD NEGERI 1 CAMBA', 220904, '30201317', 'Jl. Camba Rt/Rw, 04/02'),
('30201318', 'SD NEGERI 2 CAMBA', 220904, '30201318', 'Jl. Gg. Inpres'),
('30201319', 'SD NEGERI 3 CAMBA', 220904, '30201319', 'Jl. Camba Hilir'),
('30201320', 'SD NEGERI 1 CEMPAKA PUTIH', 220915, '30201320', 'Jl. Sawit 4'),
('30201321', 'SD NEGERI DAMAR MAKMUR', 220915, '30201321', 'Jl. Desa Damar Makmur Rt. 09 Rw. 09'),
('30201322', 'SD NEGERI 1 BATU AGUNG', 220914, '30201322', 'Jl. Batu Agung'),
('30201323', 'SD NEGERI 1 BARUNANG MIRI', 220911, '30201323', 'Jl. Bina Siswa'),
('30201324', 'SD NEGERI 7 PELANGSIAN', 220902, '30201324', 'Jl. Ir. H. Juanda Gg. Mawar'),
('30201326', 'SD NEGERI 8 BAPINANG HILIR LAUT', 220909, '30201326', 'Jl. BAPINANG - PAGATAN'),
('30201328', 'SD NEGERI 9 BAAMANG HILIR', 220901, '30201328', 'Jl. Kapuas'),
('30201329', 'SD NEGERI 9 BAAMANG TENGAH', 220901, '30201329', 'Jl. Muchran Ali'),
('30201331', 'SD NEGERI 1 AGUNG MULYA', 220914, '30201331', 'JALAN SOLO NO 222'),
('30201336', 'SD NEGERI I BANDAR AGUNG', 220911, '30201336', 'Jl. Amarta 2'),
('30201337', 'SD NEGERI 1 BANINAN', 220905, '30201337', 'Jl. Baninan'),
('30201338', 'SD NEGERI 1 GUNUNG MAKMUR', 220913, '30201338', 'Jl. Kenari'),
('30201401', 'SD NEGERI 4 TANAH PUTIH', 220917, '30201401', 'Jl. Jend. Sudirman Km. 35'),
('30201404', 'SD NEGERI 1 TUMBANG RAMEI', 220913, '30201404', 'Jl. Tumbang Ramei'),
('30201405', 'SD NEGERI 1 TUMBANG SANGAI', 220914, '30201405', 'Jl. Jatta'),
('30201406', 'SD NEGERI 2 TUMBANG SANGAI', 220914, '30201406', 'Jl. Ongko Banai'),
('30201407', 'SD NEGERI 1 TUMBANG SEPAYANG', 220913, '30201407', 'Jl. Tumbang Sepayang'),
('30201409', 'SD NEGERI 1 JATI WARINGIN', 220915, '30201409', 'Jl. Rawa Utara Jalur 3'),
('30201410', 'SD NEGERI 1 WARINGIN AGUNG', 220913, '30201410', 'Jl. Waringin Agung'),
('30201411', 'SD NEGERI WONOSARI', 220915, '30201411', 'Jl. KENANGA'),
('30201416', 'SD NEGERI 1 TUMBANG KULING', 220906, '30201416', 'Jl. Tumbang Kuling'),
('30201417', 'SD NEGERI 5 TANAH PUTIH', 220917, '30201417', 'Runting Tada'),
('30201418', 'SD NEGERI 6 TANAH PUTIH', 220917, '30201418', 'Jl. Jend. Sudirman Km. 52'),
('30201419', 'SD NEGERI 1 TANJUNG JORONG', 220915, '30201419', 'Jl. Temanggung Singam'),
('30201421', 'SD NEGERI 1 TARUI PINANG', 220914, '30201421', 'Tambun Bungai No. 17 Rt. 01 Rw. 01'),
('30201423', 'SD NEGERI 1 TINDUK', 220901, '30201423', 'Jl. Leman'),
('30201424', 'SD NEGERI 1 TRIBUANA', 220914, '30201424', 'Jl.Beringin'),
('30201425', 'SD NEGERI 1 TUKANG LANGIT', 220914, '30201425', 'Jln. Damai RT. 02 RW. 01 Desa Tukang Langit'),
('30201426', 'SD NEGERI 1 TUMBANG BAJANEI', 220914, '30201426', 'Tumbang Bajanei'),
('30201428', 'SD NEGERI 1 TUMBANG KALANG', 220913, '30201428', 'Jl. Tumbang Kalang'),
('30201465', 'SD MUHAMMADIYAH SAMPIT', 220902, '30201465', 'Jl. Pelita Timur No.1 Sampit'),
('30201466', 'SD NEGERI 1 BAPINANG HULU', 220909, '30201466', 'Jl. Bapinang Hulu'),
('30201467', 'SD NEGERI 1 BASIRIH HILIR', 220907, '30201467', 'Jl. Darlan Umar'),
('30201468', 'SD NEGERI 1 BASIRIH HULU', 220907, '30201468', 'Jl. IDRIS NAIM'),
('30201470', 'SD NEGERI 1 BAWAN', 220912, '30201470', 'Jl. Bawan'),
('30201471', 'SD NEGERI 1 BHAKTI KARYA', 220913, '30201471', 'Jl. Andjar Soegianto'),
('30201472', 'SD NEGERI 1 BUANA MUSTIKA', 220914, '30201472', 'Jl. Kartini no 1 Desa Buana Mustika'),
('30201473', 'SD NEGERI 1 BUKIT INDAH', 220914, '30201473', 'Jl. Bukit Indah'),
('30201474', 'SD NEGERI 1 BUNTUT NUSA', 220913, '30201474', 'Jl. Buntut Nusa'),
('30201475', 'SD NEGERI 1 CEMPAKA MULIA BARAT', 220905, '30201475', 'Jl. Cempaka Mulia Barat'),
('30201476', 'SD NEGERI 1 CEMPAKA MULIA TIMUR', 220905, '30201476', 'Jl. Damai No.33 Cmt  Cempaga Kotim'),
('30201477', 'SD NEGERI 1 JAYA KARET', 220907, '30201477', 'Jl. H.m. Arsyad Km 3,5 Nomor 18 Samuda'),
('30201478', 'SD NEGERI 1 JAYA KELAPA', 220907, '30201478', 'Jl. Ilmi No.1 Rt.1 Jaya Kelapa'),
('30201479', 'SD NEGERI 1 BAPINANG HILIR LAUT', 220909, '30201479', 'Jl. Padat Karya RT 05 RW 02'),
('30201482', 'SDS.SAWITAN PT. BUM', 220913, '30201482', 'Jl. Tumbang Kalang'),
('30201483', 'SDS1 SEKAR SARI', 220916, '30201483', 'PT. SARPATIM BBC Km. 107 Kec. Bukit Santuai'),
('30201484', 'SD WIJAYA KUSUMA', 220911, '30201484', 'Jl. Emplacemet Kebun Rt. 5 Rw. 2'),
('30201488', 'SD NEGERI 1 BAAMANG HULU', 220901, '30201488', 'Jl. Baamang Hulu I'),
('30201489', 'SD NEGERI 1 BAAMANG TENGAH', 220901, '30201489', 'Jl. Muchran Ali'),
('30201490', 'SD NEGERI 1 BAAMPAH', 220912, '30201490', 'Jl. Baampah'),
('30201492', 'SD NEGERI 1 BAGENDANG HILIR', 220908, '30201492', 'Jl. Padat Karya RT.05 RW.03'),
('30201493', 'SD NEGERI 1 BAGENDANG HULU', 220908, '30201493', 'Jl. Raja Rt.05'),
('30201494', 'SD NEGERI 1 JEMARAS', 220905, '30201494', 'Jl. Cilik Riwut Km.38 RT.01 RW.I'),
('30201495', 'SD NEGERI 1 KABUAU', 220911, '30201495', 'Jl. Tambak Rotan  Ds. Kabuau'),
('30201497', 'SD NEGERI 1 PAHIRANGAN', 220912, '30201497', 'Pahirangan'),
('30201498', 'SD NEGERI 1 PANTAI HARAPAN', 220906, '30201498', 'DESA PANTAI HARAPAN'),
('30201499', 'SD NEGERI 1 PAREBOK', 220910, '30201499', 'Jl. BABUS SUHADA'),
('30201501', 'SD NEGERI 1 PARIT', 220906, '30201501', 'Parit'),
('30201502', 'SD NEGERI 1 PATAI', 220905, '30201502', 'Jl.Tjilik Riwut Km.48 RT.005 RW.003'),
('30201503', 'SD NEGERI 1 PELANGSIAN', 220902, '30201503', 'Jalan Padat Karya'),
('30201505', 'SD NEGERI 1 PENDA DURIAN', 220912, '30201505', 'Penda Durian'),
('30201506', 'SD NEGERI 1 PONDOK DAMAR', 220908, '30201506', 'Jln. Macan Lantut'),
('30201507', 'SD NEGERI 1 PUNDU', 220906, '30201507', 'Pundu'),
('30201508', 'SD NEGERI 1 RAMBAN', 220908, '30201508', 'Jalan Binjai 2'),
('30201509', 'SD NEGERI 1 RANTAU TAMPANG', 220914, '30201509', 'Jln. Anjar Soegianto KM 7 Desa Rantau Tampang Kec.'),
('30201510', 'SD NEGERI 1 NATAI BARU', 220908, '30201510', 'Jl. Dusun Rongkang'),
('30201511', 'SD NEGERI 1 MULYA AGUNG', 220913, '30201511', 'Mulya Agung'),
('30201513', 'SD NEGERI 1 KARYA BERSAMA', 220911, '30201513', 'Karya Bersama'),
('30201514', 'SD NEGERI 1 KAWAN BATU', 220912, '30201514', 'Kawan Batu'),
('30201515', 'SD NEGERI 1 KERUING', 220906, '30201515', 'JL. Padat Karya Desa Keruing'),
('30201516', 'SD NEGERI 1 KUALA KUAYAN', 220912, '30201516', 'Jl. Jumai Rt. 03 Rw.03'),
('30201517', 'SD NEGERI 1 LUNUK BAGANTUNG', 220916, '30201517', 'Lunuk Bagantung'),
('30201519', 'SD NEGERI 1 LUWUK KAMA', 220905, '30201519', 'Luwuk Kama'),
('30201520', 'SD NEGERI 1 LUWUK RANGGAN', 220905, '30201520', 'Jl.Cilik Riwut KM 44'),
('30201521', 'SD NEGERI 1 MENJALIN', 220911, '30201521', 'Jl. Poros Desa Menjalin Rt. 03 Rw. 01'),
('30201522', 'SD NEGERI 1 MENTAWA BARU HILIR', 220902, '30201522', 'Jl. Ir. H. Juanda'),
('30201523', 'SD NEGERI 1 MENTAWA BARU HULU', 220902, '30201523', 'Jl. Gatot Subroto'),
('30201524', 'SD NEGERI 1 MERAH', 220915, '30201524', 'Merah'),
('30201525', 'SD NEGERI 1 RUBUNG BUYUNG', 220905, '30201525', 'Jl.TJILIK RIWUT KM. 53'),
('30201559', 'SDISLAM BAITURRAHIM', 220902, '30201559', 'Jl. S. Parman'),
('30201561', 'SDISLAM DARUTTASLIM', 220902, '30201561', 'Jl. Kuini/ Teluk Dalam Sampit'),
('30201565', 'SDS KARYA MAKMUR BAHAGIA', 220914, '30201565', 'Jl. Andjar Soegianto Km.14 Metro Mentaya'),
('30201568', 'SDKATHOLIK YOS SOEDARSO SAMPIT', 220902, '30201568', 'Jl. S. Parman No.22 Sampit'),
('30201569', 'SD KAYU MERANTI MUSTIKA', 220903, '30201569', 'TANJUNG MAS'),
('30201570', 'SD KRISTEN SAMPIT', 220902, '30201570', 'Jl. S. Parman No.27 Sampit'),
('30201573', 'SDAL MARHAMAH', 220901, '30201573', 'Jl. Tjilik Riwut Km. 2,5 Sampit'),
('30201574', 'SD2 TEGUH SAMPURNA', 220912, '30201574', 'PT. Teguh Sampurna 2'),
('30201584', 'SD1 KRIDATAMA LANCAR', 220912, '30201584', 'Pt. Klr I Sme'),
('30201585', 'SD1 TEGUH SAMPURNA', 220912, '30201585', 'PT. Teguh Sampurna'),
('30201587', 'SD2 KRIDATAMA LANCAR', 220912, '30201587', 'Pt. Kridatama'),
('30201588', 'SD NEGERI 6 MENTAYA SEBERANG', 220903, '30201588', 'TANJUNG KATUNG'),
('30201589', 'SD NEGERI 2 CEMPAKA MULIA TIMUR', 220905, '30201589', 'Jl.Desa Cempaka Mulia Timur'),
('30201590', 'SD NEGERI 2 PATAI', 220905, '30201590', 'Patai'),
('30201591', 'SD NEGERI 2 PELANGSIAN', 220903, '30201591', 'Sei Lemiring'),
('30201593', 'SD NEGERI 2 PUNDU', 220906, '30201593', 'Jalan Tjilik Riwut Km.129'),
('30201594', 'SD NEGERI 2 RUBUNG BUYUNG', 220906, '30201594', 'Jl. Tjilik Riwut Km. 74'),
('30201595', 'SD NEGERI 2 SAMUDA KOTA', 220907, '30201595', 'Jl. H.m. Noor'),
('30201597', 'SD NEGERI 2 SAWAHAN', 220902, '30201597', 'Jl. Cut Nya Dien'),
('30201598', 'SD NEGERI 2 SETIRUK', 220909, '30201598', 'JL.INPRES'),
('30201599', 'SD NEGERI 2 SUMBER MAKMUR', 220908, '30201599', 'Jl.Trans Bunut'),
('30201600', 'SD NEGERI 2 SUNGAI PARING', 220905, '30201600', 'Sungai Paring'),
('30201601', 'SD NEGERI 2 TANJUNG HARAPAN', 220914, '30201601', 'Jl. Meranti'),
('30201602', 'SD NEGERI 2 TANJUNG JARINGAU', 220912, '30201602', 'Jl. KABUPATEN'),
('30201603', 'SD NEGERI 2 PARIT', 220906, '30201603', 'Parit'),
('30201604', 'SD NEGERI 2 PARENGGEAN', 220911, '30201604', 'JL. Ramba, Rt.17, Rw. 04'),
('30201605', 'SD NEGERI 2 JAYA KARET', 220907, '30201605', 'Jl. Jaya Karet Rt 003 Rw 002 No 16 Samuda'),
('30201607', 'SD NEGERI 2 KERUING', 220906, '30201607', 'Keruing'),
('30201609', 'SD NEGERI 2 KUALA KUAYAN', 220912, '30201609', 'Jl. Pelangkong'),
('30201610', 'SD NEGERI 2 LAMPUYANG', 220910, '30201610', 'Jl. Samuda Ujung Pandaran Km 19,5'),
('30201611', 'SD NEGERI 2 LUWUK BUNTER', 220905, '30201611', 'Jl. Cilik Riwut Km.26 Desa Luwuk Bunter'),
('30201612', 'SD NEGERI 2 LUWUK KAMA', 220905, '30201612', 'Jalan Tjilik Riwut Km 39 Desa Jemaras Kecamatan Ce'),
('30201613', 'SD NEGERI 2 MEKAR JAYA', 220911, '30201613', 'Jl. Beringin Kota No. 03'),
('30201614', 'SD NEGERI 2 MENTAWA BARU HULU', 220902, '30201614', 'Jl. MT. Haryono'),
('30201615', 'SD NEGERI 2 MENTAYA SEBERANG', 220903, '30201615', 'Jl. Mufakat No. 013'),
('30201616', 'SD NEGERI 2 NATAI BARU', 220908, '30201616', 'JL. DUSUN NATAI BARU'),
('30201619', 'SD NEGERI 2 TERANTANG', 220903, '30201619', 'Terantang Hilir RT.007 RW.003'),
('30201620', 'SD NEGERI 2 TUMBANG KALANG', 220913, '30201620', 'Jl. Desa Tumbang Kalang'),
('30201621', 'SD NEGERI 3 PARIT', 220906, '30201621', 'Jl.Terobos km.71 Bukit Raya'),
('30201622', 'SD NEGERI 3 PELANGSIAN', 220902, '30201622', 'Jl. H.m. Arsyad Km. 17'),
('30201623', 'SD NEGERI 3 PUNDU', 220906, '30201623', 'Jl. Tjilik Riwut km. 114'),
('30201624', 'SD NEGERI 3 RUBUNG BUYUNG', 220905, '30201624', 'Rubung Buyung'),
('30201625', 'SD NEGERI 3 SAMUDA KOTA', 220907, '30201625', 'Jalan Trans Handil Sohor'),
('30201626', 'SD NEGERI 3 SAWAHAN', 220902, '30201626', 'Jl. Sampurna'),
('30201628', 'SD NEGERI 3 TANJUNG JARIANGAU', 220912, '30201628', 'Tanjung Jariangau'),
('30201629', 'SD NEGERI 3 TERANTANG', 220903, '30201629', 'Terantang'),
('30201630', 'SD NEGERI 4 BAAMANG HILIR', 220901, '30201630', 'Jl. Padat Karya'),
('30201631', 'SD NEGERI 4 BAAMANG HULU', 220901, '30201631', 'Jl. Baamang Hulu I Gg. Pronamas'),
('30201632', 'SD NEGERI 4 BAAMANG TENGAH', 220901, '30201632', 'Jl.SARIGADING GG.INPRES'),
('30201633', 'SD NEGERI 4 BAPINANG HILIR', 220909, '30201633', 'Jl. Bapinang Hilir'),
('30201634', 'SD NEGERI 3 PARENGGEAN', 220911, '30201634', 'Jl. Mota Indah'),
('30201635', 'SD NEGERI 3 LUWUK RANGGAN', 220905, '30201635', 'Luwuk Ranggan'),
('30201636', 'SD NEGERI 3 BAAMANG HILIR', 220901, '30201636', 'Jl. Cristopel Mihing RT.11 RW.04'),
('30201637', 'SD NEGERI 3 BAAMANG HULU', 220901, '30201637', 'Jl. Tanah Mas'),
('30201638', 'SD NEGERI 3 BAAMANG TENGAH', 220901, '30201638', 'Jl. Jl. Muchran Ali Gg. Ananta'),
('30201639', 'SD NEGERI 3 BAGENDANG HILIR', 220908, '30201639', 'Jl. Garuda'),
('30201640', 'SD NEGERI 3 BAPINANG HILIR', 220909, '30201640', 'Jl. Bapinang-Pagatan,RT 07/RW 03.Handil Mawar'),
('30201641', 'SD NEGERI 3 BAPINANG HILIR LAUT', 220909, '30201641', 'Jl. Bapinang -Pagatan,Handel Setia.'),
('30201642', 'SD NEGERI 3 BAPINANG HULU', 220909, '30201642', 'Jl. Bapinang - Pagatan'),
('30201643', 'SD NEGERI 3 BASIRIH HILIR', 220907, '30201643', 'Manunggal Vi'),
('30201644', 'SD NEGERI 3 CEMPAKA MULIA BARAT', 220905, '30201644', 'Jl. CILIK RIWUT KM 33'),
('30201645', 'SD NEGERI 3 JAYA KELAPA', 220907, '30201645', 'Jl. H.muhamad Ilmi'),
('30201646', 'SD NEGERI 3 KETAPANG', 220902, '30201646', 'Jl. H. Imbran No. 65 Sampit'),
('30201647', 'SD NEGERI 3 KUALA KUAYAN', 220912, '30201647', 'Jl. Suka Damai'),
('30201648', 'SD NEGERI 3 LAMPUYANG', 220910, '30201648', 'JL. SAMUDA UJUNG PANDARAN KM.23'),
('30201649', 'SD NEGERI 4 BAPINANG HILIR LAUT', 220909, '30201649', 'Jl. Bapinang - Pagatan Rt 04 Rw 1 Hantipan'),
('30201650', 'SD NEGERI 1 SAMUDA KECIL', 220907, '30201650', 'Jl. Samuda - Ujung Pandaran'),
('30201651', 'SD NEGERI 1 TANJUNG HARAPAN', 220914, '30201651', 'Jl. Galam no 36'),
('30201652', 'SD NEGERI 1 TANJUNG JARIANGAU', 220912, '30201652', 'Jl. M. Atak'),
('30201653', 'SDN-1 TEHANG', 220911, '30201653', 'Jl. Durian No. 1 Desa Tehang'),
('30201654', 'SD NEGERI 1 TERANTANG', 220903, '30201654', 'Terantang'),
('30201655', 'SD NEGERI 1 TEWAI HARA', 220916, '30201655', 'Tewai Hara'),
('30201657', 'SD NEGERI 1 TUMBANG BATU', 220916, '30201657', 'Tumbang Batu'),
('30201658', 'SD NEGERI 1 TUMBANG BOLOI', 220914, '30201658', 'TUMBANG BOLOI'),
('30201659', 'SD NEGERI 1 TUMBANG GAGU', 220913, '30201659', 'Tumbang Gagu'),
('30201660', 'SD NEGERI 1 TUMBANG GETAS', 220916, '30201660', 'Tumbang Getas'),
('30201661', 'SD NEGERI 1 TUMBANG HEJAN', 220913, '30201661', 'Tumbang Hejan'),
('30201662', 'SD NEGERI TUMBANG KAMINTING', 220916, '30201662', 'Jl. Tumbang Kaminting'),
('30201663', 'SD NEGERI 1 TUMBANG KANIA', 220916, '30201663', 'Jl. Tumbang Kania'),
('30201664', 'SD NEGERI 1 TANJUNG BANTUR', 220912, '30201664', 'Tanjung Bantur'),
('30201665', 'SD NEGERI 1 TANGKAROBAH', 220912, '30201665', 'TANGKAROBAH'),
('30201667', 'SD NEGERI 1 SAMUDA KOTA', 220907, '30201667', 'Jl. H.M. Noor No.67'),
('30201668', 'SD NEGERI 1 SANTILIK', 220912, '30201668', 'Santilik'),
('30201669', 'SD NEGERI 1 SATIUNG', 220912, '30201669', 'Jalan Bukit Bahurui No. 01 Desa Satiung'),
('30201670', 'SD NEGERI 1 SAWAHAN', 220902, '30201670', 'Jl. Cilik Riwut Km. 1'),
('30201671', 'SD NEGERI 1 SATIRUK', 220909, '30201671', 'Jalan Satiruk Laut rt 02 rw 01'),
('30201672', 'SD NEGERI 1 SINGSINGAN', 220911, '30201672', 'Dusun Singsingan'),
('30201673', 'SD NEGERI 1 SUMBER MAKMUR', 220908, '30201673', 'Jl.HM.SUHARTO'),
('30201674', 'SD NEGERI 1 SUNGAI HANYA', 220913, '30201674', 'Sungai Hanya'),
('30201675', 'SD NEGERI 1 SUNGAI PARING', 220905, '30201675', 'Jln.Tjilik Riwut,Km.28, desa Sungai Paring,RT.07,R'),
('30201677', 'SD NEGERI 1 TANAH HALUAN', 220916, '30201677', 'Tanah Haluan'),
('30201679', 'SD NEGERI 1 TANDANG', 220911, '30201679', 'Jl. H.Endek No. 92 RT. 02 RW. 02'),
('30201680', 'SD NEGERI 1 TANGAR', 220912, '30201680', 'Tangar'),
('30201681', 'SD NEGERI 1 TUMBANG MANGKUP', 220914, '30201681', 'Jl. Inpres'),
('30201682', 'SD NEGERI 1 TUMBANG MANYA', 220913, '30201682', 'Jl. Tumbang Manya'),
('30201683', 'SD NEGERI 2 CEMPAKA MULIA BARAT', 220905, '30201683', 'Jl. Cempaka Mulia Barat'),
('30201684', 'SD NEGERI 11 PELANGSIAN', 220902, '30201684', 'Jl. H.m. Arsyad Km. 17'),
('30201685', 'SD NEGERI 12 MENTAWA BARU HULU', 220902, '30201685', 'Jl. DI. Panjaitan Sampit'),
('30201687', 'SD NEGERI 2 BAAMANG HILIR', 220901, '30201687', 'Jl. Walter Condrat'),
('30201688', 'SD NEGERI 2 BAAMANG HULU', 220901, '30201688', 'Jl. Muchran Ali Gg. Abdul Rasul'),
('30201689', 'SD NEGERI 2 BAAMANG TENGAH', 220901, '30201689', 'Jl. Muchran Ali Baamang Tengah'),
('30201691', 'SD NEGERI 2 BAGENDANG HILIR', 220908, '30201691', 'Jl. Plasit'),
('30201692', 'SD NEGERI 2 BAGENDANG HULU', 220908, '30201692', 'Jl. Yusuf Akhmad'),
('30201693', 'SD NEGERI 2 BAPINANG HILIR', 220909, '30201693', 'Jl. Bapinang - Pagatan  Desa Babaung'),
('30201694', 'SD NEGERI 2 BAPINANG HILIR LAUT', 220909, '30201694', 'Jl. Handil  Pandan'),
('30201695', 'SD NEGERI 2 BASIRIH HILIR', 220907, '30201695', 'Jl. Samuda - Ujung Pandaran'),
('30201696', 'SD NEGERI 2 BATUAH', 220903, '30201696', 'Jl. Batuah RT. 03 RW. 02'),
('30201698', 'SD NEGERI 11 BAAMANG TENGAH', 220901, '30201698', 'Jl. Tidar Blok. A'),
('30201699', 'SD NEGERI 1 TUMBANG MUJAM', 220915, '30201699', 'Jl. Tumbang Mujam Rt.1 Rw. 01'),
('30201700', 'SD NEGERI 1 TUMBANG NGAHAN', 220913, '30201700', 'Jl. Tumbang Ngahan'),
('30201702', 'SD NEGERI 1 TUMBANG PAYANG', 220916, '30201702', 'Jl. Tumbang Payang'),
('30201704', 'SD NEGERI 1 TUMBANG SAPIA', 220916, '30201704', 'Jl. Tumbang Sapia'),
('30201705', 'SD NEGERI 1 TUMBANG SAPIRI', 220912, '30201705', 'Jl. Tumbang Sapiri'),
('30201707', 'SD NEGERI 10 PELANGSIAN', 220902, '30201707', 'Jl. HM ARSYAD KM 10,5 JALUR 1'),
('30201709', 'SD NEGERI 1 TUMBANG TORUNG', 220916, '30201709', 'Jl. Tumbang Turung'),
('30201710', 'SD NEGERI 1 TUMBANG TILAP', 220916, '30201710', 'Jl. Nyangon'),
('30201711', 'SD NEGERI 1 TUMBANG TAWAN', 220916, '30201711', 'Jl. Tumbang Tawan'),
('30201712', 'SD NEGERI 1 TUMBANG SERAWAK', 220906, '30201712', 'Jl. Tumbang Serawak'),
('30203757', 'SD NEGERI 1 KALAP PASEBAN', 220910, '30203757', 'Jl. Desa Ujung Pandaran Km. 14'),
('30203758', 'SD NEGERI KUNJUNG PASIR PUTIH', 220902, '30203758', 'Jl. Sampit - Pangkalanbun Km. 18'),
('30203759', 'SD NEGERI 1 BASAWANG', 220910, '30203759', 'JL. VETERAN HADRIS'),
('30203760', 'SD NEGERI 1 KETAPANG', 220902, '30203760', 'Jl. H. Imbran'),
('30203761', 'SD NEGERI 1 LAMPUYANG', 220910, '30203761', 'Jl. SAMUDA UJUNG PANDARAN KM. 30'),
('30203762', 'SD NEGERI 10 MENTAWA BARU HULU', 220902, '30203762', 'Jl. MT HARYONO'),
('30203763', 'SD NEGERI 2 BASAWANG', 220910, '30203763', 'Jl. SAMUDA UJUNG PANDARAN KM. 15'),
('30203764', 'SD NEGERI 2 KETAPANG', 220902, '30203764', 'Jl. Ir. H. Juanda'),
('30203765', 'SD NEGERI 2 MENTAWA BARU HILIR', 220902, '30203765', 'Jl. H.m. Arsyad Gg. Manggis 1'),
('30203766', 'SD NEGERI 3 MENTAWA BARU HILIR', 220902, '30203766', 'Jl. D.I.Panjaitan Gg. Ketapi 6 No.17'),
('30203767', 'SD NEGERI 3 MENTAWA BARU HULU', 220902, '30203767', 'Jl. A. Yani'),
('30203768', 'SD NEGERI 4 MENTAWA BARU HILIR', 220902, '30203768', 'Jl. Siaga Komplek Perumnas'),
('30203769', 'SD NEGERI 4 MENTAWA BARU HULU', 220902, '30203769', 'Jl. Suprapto'),
('30203770', 'SD NEGERI 5 MENTAWA BARU HILIR', 220902, '30203770', 'Jl. D.i Panjaitan Gg. Ketapi 6'),
('30203771', 'SD NEGERI 5 MENTAWA BARU HULU', 220902, '30203771', 'Jl. Batu Akik No. 58 Sampit'),
('30203772', 'SD NEGERI 6 MENTAWA BARU HULU', 220902, '30203772', 'JL. JEND.A. YANI NO.126 SAMPIT'),
('30203773', 'SD NEGERI 7 KETAPANG', 220902, '30203773', 'Jl. Jenderal Sudirman Km. 5,5 Sawit Raya VI Sampit'),
('30203774', 'SD NEGERI 8 MENTAWA BARU HULU', 220902, '30203774', 'Jl. MT. Haryono. Sampit'),
('30203775', 'SD NEGERI KUNJUNG LAMPUYANG', 220910, '30203775', 'Jl. SAMUDA UJUNG PANDARAN'),
('30204098', 'SD3 KRIDATAMA LANCAR', 220912, '30204098', 'Sapiri'),
('30204099', 'SDBUMI HUTAN LESTARI', 220915, '30204099', 'Kebun Bhl'),
('30204100', 'SD BUMITAMA CEMPAGA HULU', 220906, '30204100', 'PT.Windu Nabatindo Lestari'),
('30204101', 'SDS TUNAS AGRO', 220915, '30204101', 'Jl.Poros Luwuk Sampun Komp. PT. TASK I Estate II'),
('30204102', 'SD NEGERI 1 LUWUK BUNTER', 220905, '30204102', 'Luwuk Bunter'),
('30204103', 'SD NEGERI 1 MENTAYA SEBERANG', 220903, '30204103', 'Jl Mentaya Seberang'),
('30204104', 'SD NEGERI 1 UJUNG PANDARAN', 220910, '30204104', 'JL. PUTRA NELAYAN'),
('30204105', 'SD NEGERI 2 JAYA KELAPA', 220907, '30204105', 'Jl. Jaya Kelapa'),
('30204106', 'SD NEGERI 2 KOTA BESI HILIR', 220904, '30204106', 'Jl. Pangeran Diponegoro'),
('30204110', 'SD NEGERI 3 MENTAYA SEBERANG', 220903, '30204110', 'Jl. Pipisan'),
('30204113', 'SD NEGERI 4 MENTAYA SEBERANG', 220903, '30204113', 'JL. Lingkung Raya'),
('30204114', 'SD NEGERI 4 SEBABI', 220917, '30204114', 'Jl. Jenderal Sudirman Km 86'),
('30204115', 'SD NEGERI 5 BAPINANG HILIR', 220909, '30204115', 'Jl. Bapinang -Pagatan'),
('30204116', 'SD ISLAM TERPADU ARAFAH', 220902, '30204116', 'Jl. Mangga 1 No. 2 Sampit'),
('30204117', 'SDISLAM TERPADU ASIAH', 220902, '30204117', 'Jl. Jeruk No 45'),
('30204238', 'SDCITA BUNDA ELEMENTARY SCHOOL SAMPIT', 220902, '30204238', 'Jl. Jeruk I No. 2 Sampit'),
('30204259', 'SD NEGERI 3 TUMBANG KALANG', 220913, '30204259', 'Jl Anjar Soegianto Desa Tumbang Kalang'),
('30204379', 'SD BINA BANGSA 01', 220908, '30204379', 'Jl. Jenderal Sudirman Km. 62 Sampit'),
('30204705', 'SD NEGERI 1 TUMBANG PENYAHUAN', 220916, '30204705', 'Jl. Teluk Sambas RT. 05 RW. 02'),
('30204706', 'SD NEGERI 1 TUMBANG SALUANG', 220916, '30204706', 'Jl. Desa Tumbang Saluang'),
('30204707', 'SD NEGERI 6 KUALA KUAYAN', 220912, '30204707', 'Jl. Kuala Kuayan'),
('30204708', 'SD SWASTA RANTAU SAWANG', 220914, '30204708', 'Jl Rantau Sawang'),
('30204710', 'SDRANTAU SUANG', 220914, '30204710', 'Jl. Desa Rantau Suang'),
('30204711', 'SD ANWAR KARIM IV', 220917, '30204711', 'Jl Jenderal Sudirman Km 86'),
('30204713', 'SD EKA TJIPTA SERANAU', 220912, '30204713', 'Jl Sarpatim KM. 16'),
('30204738', 'SD NEGERI SULUH BAKUNG', 220908, '30204738', 'Jl Jend.Sudirman Km 45 - Jl. Dusun Sulu Bakung'),
('30204923', 'SD NEGERI 5 MENTAYA SEBERANG', 220903, '30204923', 'Jl SAWAHAN No. 50  RT/RW. 13/04'),
('30204957', 'SD SWASTA EMBANG BATARUNG JAYA', 220904, '30204957', 'Jl UPT Kandan RT 04 RW 02'),
('30205024', 'SD SWASTA TUNAS HARAPAN', 220912, '30205024', 'Jl Batang Garing'),
('30205231', 'SD SWASTA 2 HAMPARAN', 220917, '30205231', 'PT. HMBP II, Jl Jendral Sudirman Km 43'),
('30205330', 'SD SWASTA ISLAM TERPADU AL MADANIAH SAMU', 220907, '30205330', 'Jl PARTO MUKSIN BASIRIH HILIR SAMUDA'),
('30205375', 'SD SWASTA EKA TJIPTA KUAYAN', 220916, '30205375', 'Jl Sarpatim Desa Kaminting'),
('30205485', 'SD NEGERI 2 RAMBAN', 220908, '30205485', 'DESA RAMBAN RT 04 NO 142'),
('30205486', 'SD NEGERI TELUK TEWAH (KLS JAUH)', 220905, '30205486', 'Luwuk Bunter RT 02 RW 01'),
('30205487', 'SD SWASTA SETIA TUMBANG SANAK', 220906, '30205487', 'Jl Tumbang Sanak'),
('30208734', 'SD NEGERI 1 PENYANG', 220917, '30208734', 'Jl Jenderal Sudirman'),
('30208935', 'SDS 019 BEST AGRO', 220912, '30208935', 'PT TASK 2'),
('40204112', 'SD NEGERI 3 SABAMBAN', 220907, '40204112', 'Jl. H. Asnawi RT.05.RW.02'),
('69753178', 'SD BINA BANGSA 02', 220917, '69753178', 'PT.KKPS 1 Sumber Makmur'),
('69753179', 'SDS 020 BEST AGRO', 220905, '69753179', 'Jl. Kasuari Estate'),
('69765810', 'SDS EKA TJIPTA TAJUR BERAS', 220912, '69765810', 'DESA PEMANTANG'),
('69765813', 'SDS ANWAR KARIM VI', 220917, '69765813', 'PT. Maju Aneka Sawit Estate Tanah Mas Jl. Jenderal'),
('69787161', 'SDS EKA TJIPTA BUKIT SANTUAI', 220916, '69787161', 'JL. DESA TUMBANG KAMINTING'),
('69787998', 'SDS ANWAR KARIM VII', 220913, '69787998', 'Antang Kalang'),
('69816355', 'SDS 06 BEST AGRO', 220915, '69816355', 'Jl. Merak Estate PT. TASK'),
('69821194', 'SDS 08 BEST AGRO', 220915, '69821194', 'JL. POROS LUWUK SAMPUN, DESA SEBUNGSU  PT. TASK 2'),
('69821196', 'SDS 07 BEST AGRO', 220915, '69821196', 'JL. Poros Luwuk Sampun'),
('69821197', 'SDS SARANA TUNAS HARAPAN', 220911, '69821197', 'JL. DESA KARANG SARI KM. 19'),
('69824961', 'SDS EKA TJIPTA SAPIRI', 220912, '69824961', 'JL. DESA TANJUNG JARIANGAU'),
('69851421', 'SDS BUMITAMA KRYE', 220906, '69851421', 'PT. Windu Nabatindo Keruing Raya Estate'),
('69856873', 'SDS BUMITAMA SBHE', 220906, '69856873', 'JL. SELUCING'),
('69857911', 'SDS 23 BEST AGRO', 220908, '69857911', 'Jln. Jendral sudirman km.43 sampit-pangkalanbun'),
('69859374', 'SDS PANTAP', 220912, '69859374', 'Jl. Desa Pantap'),
('69859694', 'SDN 1 BAAMANG BARAT', 220901, '69859694', 'Jl. Wengga Agung 8'),
('69862659', 'SDN 2 PAREBOK', 220910, '69862659', 'Jl. Keluarga'),
('69864651', 'SDS TUNAS JAYA', 220915, '69864651', 'Base Camp PT. Hutan Sawit Lestari'),
('69872389', 'SDN 1 KAPUK', 220912, '69872389', 'JL. Desa Kapuk RT. 1 RW. 1'),
('69894032', 'SDS 1 TUNAS HARAPAN JAYA', 220913, '69894032', 'PT. Karya Makmur Bahagia Sungai Puring'),
('69900605', 'SDS TUNAS BANGSA', 220905, '69900605', 'Desa Patai'),
('69903508', 'SDS BINA BANGSA 06', 220912, '69903508', 'PT. Mentaya Sawit Mas'),
('69918678', 'SDIT AL ISLAH', 220913, '69918678', 'Jl. Anjar Soegianto Km.14'),
('69929347', 'SDS TUNAS AGRO 2', 220916, '69929347', 'Jl. Perumahan Estate PT. AWL KMS (GoodHope)'),
('69931998', 'SDS MULIA PERMAI', 220902, '69931998', 'Jl. Jenderal Sudirman Km. 29 Sampit'),
('69965650', 'SD IT ANNIDA QOLBU', 220901, '69965650', 'JL. JAYA WIJAYA 4 No. 05 B RT. 058 RW. 007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` char(9) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kode_sekolah` varchar(12) NOT NULL,
  `no_sttb` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `tgl_lahir`, `jk`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat`, `kode_sekolah`, `no_sttb`, `status`) VALUES
('0012345678', 'tata', '2014-06-02', 'Perempuan', 'Darmono', 'Wirasawasta', 'Wanda', 'Ibu Rumah Tangga', 'Jl. Ir. Juanda', '30201105', '', ''),
('0012345679', 'tono', '2014-06-02', 'Laki-laki', 'Darmono', 'Wirasawasta', 'Wanda', 'Ibu Rumah Tangga', 'Jl. Ir. Juanda', '30201191', 'DN-14 Dd 0012946', 'Lulus'),
('0012345680', 'yaya', '2014-06-04', 'Laki-laki', 'Darmon', 'Petani', 'Sumarni', 'ART', 'Jl.Batu Berlian', '30201191', '', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ijazah_hilang`
--

CREATE TABLE `surat_ijazah_hilang` (
  `no_surat` int(11) NOT NULL,
  `no_sktlk` varchar(50) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `kode_sekolah` varchar(12) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `nip_ks` varchar(30) NOT NULL,
  `nama_ks` varchar(40) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_ijazah_hilang`
--

INSERT INTO `surat_ijazah_hilang` (`no_surat`, `no_sktlk`, `nisn`, `kode_sekolah`, `tahun_ajaran`, `nip_ks`, `nama_ks`, `nip`, `tgl_dibuat`, `status`) VALUES
(1, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(2, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Sudah ACC'),
(3, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(4, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(5, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(6, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(7, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(8, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(9, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(10, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(11, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(12, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(13, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(14, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(15, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(16, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(17, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(18, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(19, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(20, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(21, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(22, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(23, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(24, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(25, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(26, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(27, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(28, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(29, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(30, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(31, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(32, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(33, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(34, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(35, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(36, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(37, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(38, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(39, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(40, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(41, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(42, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(43, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(44, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(45, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(46, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(47, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(48, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(49, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(50, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(51, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(52, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(53, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(54, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(55, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(56, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(57, '421.2/870/060/VI/2022', '0012345679', '30201191', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-08-01', 'Sudah ACC'),
(58, '421.2/870/060/VI/2022', '0012345679', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-08-01', 'Sudah ACC'),
(59, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-08-01', 'Belum ACC'),
(60, '421.2/870/060/VI/2022', '0012345678', '30201134', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-08-01', 'Belum ACC'),
(63, '421.2/870/060/VI/2022', '0012345679', '30201191', '2014/2015', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-08-01', 'Belum ACC'),
(64, 'jkldnlkv lbhini/lihsifh', '0012345679', '30201191', '2002', '78298920', 'Agung', '196406171988031016', '2022-08-09', 'Belum ACC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ijazah_rusak`
--

CREATE TABLE `surat_ijazah_rusak` (
  `no_surat` int(11) NOT NULL,
  `kode_sekolah` varchar(12) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `kerusakan` varchar(50) NOT NULL,
  `nip_ks` varchar(30) NOT NULL,
  `nama_ks` varchar(40) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_ijazah_rusak`
--

INSERT INTO `surat_ijazah_rusak` (`no_surat`, `kode_sekolah`, `nisn`, `tahun_ajaran`, `kerusakan`, `nip_ks`, `nama_ks`, `nip`, `tgl_dibuat`, `status`) VALUES
(1, '30201191', '0012345679', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Sudah ACC'),
(2, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(3, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(4, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(5, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(6, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(7, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(8, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(9, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(10, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(11, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(12, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(13, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(14, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(15, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(16, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(17, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(18, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(19, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(20, '30201134', '0012345678', '2014/2015', 'terbakar', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(21, '30201191', '0012345679', '2002', 'Terbakar di rumah saat kebakaran', '78298920', 'Agung', '196406171988031016', '2022-08-09', 'Belum ACC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ijazah_salah`
--

CREATE TABLE `surat_ijazah_salah` (
  `no_surat` int(11) NOT NULL,
  `kode_sekolah` varchar(12) NOT NULL,
  `nisn` varchar(12) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `salah_tulis` varchar(40) NOT NULL,
  `tulisan_benar` varchar(40) NOT NULL,
  `nip_ks` varchar(30) NOT NULL,
  `nama_ks` varchar(40) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_ijazah_salah`
--

INSERT INTO `surat_ijazah_salah` (`no_surat`, `kode_sekolah`, `nisn`, `tahun_ajaran`, `salah_tulis`, `tulisan_benar`, `nip_ks`, `nama_ks`, `nip`, `tgl_dibuat`, `status`) VALUES
(1, '30201191', '0012345679', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Sudah ACC'),
(2, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(3, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(4, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(5, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(6, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(7, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(8, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(9, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(10, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(11, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(12, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(13, '30201134', '0012345678', '2014/2015', 'Tata', 'Tatha', '196406171988031016', 'Teguh Wahyu Susanto, S.Pd', '197505081993112001', '2022-07-31', 'Belum ACC'),
(14, '30201191', '0012345679', '2002', 'Berlinda', 'Belinda', '78298920', 'Agung', '196406171988031016', '2022-08-09', 'Belum ACC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_pindah`
--

CREATE TABLE `surat_pindah` (
  `no` int(11) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `sekolah_asal` varchar(12) NOT NULL,
  `siswa_kelas` varchar(20) NOT NULL,
  `sekolah_tujuan` varchar(30) NOT NULL,
  `alasan_pindah` text NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `surat_rekom_asal` varchar(50) NOT NULL,
  `surat_dari_ortu` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_pindah`
--

INSERT INTO `surat_pindah` (`no`, `nisn`, `nis`, `sekolah_asal`, `siswa_kelas`, `sekolah_tujuan`, `alasan_pindah`, `nip`, `tgl_dibuat`, `surat_rekom_asal`, `surat_dari_ortu`, `status`) VALUES
(2, '0012345678', '2135', '30201134', '2', '30204104', 'mengikuti orang tua', '197505081993112001', '2022-07-31', 'DATA SISWA JULI 2022.xlsx', 'kabupaten_kalteng.csv', 'Belum ACC'),
(3, '0012345679', '1234', '30201191', '2', '30201120', 'mengikuti orang tua', '197505081993112001', '2022-08-01', 'Form-Berita-Acara-Sidang-TA 20212022.doc', 'Form-Berita-Acara-Sidang-TA 20212022 (1).doc', 'Sudah ACC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indeks untuk tabel `ketua`
--
ALTER TABLE `ketua`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`kode_sekolah`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `surat_ijazah_hilang`
--
ALTER TABLE `surat_ijazah_hilang`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `surat_ijazah_rusak`
--
ALTER TABLE `surat_ijazah_rusak`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `surat_ijazah_salah`
--
ALTER TABLE `surat_ijazah_salah`
  ADD PRIMARY KEY (`no_surat`);

--
-- Indeks untuk tabel `surat_pindah`
--
ALTER TABLE `surat_pindah`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `sekolah_asal` (`sekolah_asal`),
  ADD KEY `sekolah_tujuan` (`sekolah_tujuan`),
  ADD KEY `nip` (`nip`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2215;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220918;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `surat_ijazah_hilang`
--
ALTER TABLE `surat_ijazah_hilang`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `surat_ijazah_rusak`
--
ALTER TABLE `surat_ijazah_rusak`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `surat_ijazah_salah`
--
ALTER TABLE `surat_ijazah_salah`
  MODIFY `no_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `surat_pindah`
--
ALTER TABLE `surat_pindah`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id_kabupaten`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_pindah`
--
ALTER TABLE `surat_pindah`
  ADD CONSTRAINT `surat_pindah_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_pindah_ibfk_2` FOREIGN KEY (`sekolah_asal`) REFERENCES `sekolah` (`kode_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_pindah_ibfk_3` FOREIGN KEY (`sekolah_tujuan`) REFERENCES `sekolah` (`kode_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_pindah_ibfk_4` FOREIGN KEY (`nip`) REFERENCES `ketua` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
