-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 03:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_zibran`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `kontak` text NOT NULL,
  `tstamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `kontak`, `tstamp`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin SPP', '0812-8022-2992', 'tstamp');

-- --------------------------------------------------------

--
-- Table structure for table `resp_hps_adm`
--

CREATE TABLE `resp_hps_adm` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `keterangan` text NOT NULL,
  `tstamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id` int(11) NOT NULL,
  `nis` text NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `tapel` text NOT NULL,
  `bayar` text NOT NULL,
  `bulan` text NOT NULL,
  `tstamp` text NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bayar`
--

INSERT INTO `tb_bayar` (`id`, `nis`, `nama`, `kelas`, `tapel`, `bayar`, `bulan`, `tstamp`, `admin`) VALUES
(21, '19120021912', 'Muhamad Zibran F', 'XII', '2020 / 2021', '90000', '12', '20-12-2020 05:59:00 pm', 'Admin SPP'),
(25, '177013', 'Djoko Sandi', 'X', '2020 / 2021', '250000', '12', '20-12-2020 06:51:10 pm', 'Admin SPP'),
(26, '100022929', 'Muhamad Zibran', 'X', '2020 / 2021', '250000', '12', '20-12-2020 06:53:02 pm', 'Admin SPP'),
(35, '12345678', 'V. Tchaivovksy', 'X', '2020 / 2021', '270000', '12', '21-12-2020 10:48:32 am', 'Admin SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_pembayaran`
--

CREATE TABLE `tb_jenis_pembayaran` (
  `id` int(11) NOT NULL,
  `tapel` text NOT NULL,
  `kelas` text NOT NULL,
  `nominal` text NOT NULL,
  `tstamp` text NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jenis_pembayaran`
--

INSERT INTO `tb_jenis_pembayaran` (`id`, `tapel`, `kelas`, `nominal`, `tstamp`, `admin`) VALUES
(2, '2020 / 2021', 'X', '250000', '15-12-2020 08:33:13 pm', 'Admin SPP'),
(5, '2020 / 2021', 'XII', '90000', '16-12-2020 08:29:23 am', 'Admin SPP'),
(6, '2020 / 2021', 'XI', '200000', '20-12-2020 06:58:44 pm', 'Admin SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` int(11) NOT NULL,
  `kelas` text NOT NULL,
  `tstamp` text NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `kelas`, `tstamp`, `admin`) VALUES
(2, 'X', '15-12-2020 08:03:06 am', 'Admin SPP'),
(3, 'XI', '16-12-2020 08:27:16 am', 'Admin SPP'),
(4, 'XII', '16-12-2020 08:28:10 am', 'Admin SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prodi`
--

CREATE TABLE `tb_prodi` (
  `id` int(11) NOT NULL,
  `prodi` text NOT NULL COMMENT 'program studi',
  `tstamp` text NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_prodi`
--

INSERT INTO `tb_prodi` (`id`, `prodi`, `tstamp`, `admin`) VALUES
(1, 'Multimedia', '15-12-2020 09:11:02 am', 'Admin SPP'),
(3, 'Rekayasa Perangkat Lunak', '20-12-2020 06:59:25 pm', 'Admin SPP'),
(4, 'Teknik Komputer dan Jaringan', '20-12-2020 06:59:41 pm', 'Admin SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nis` text NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `prodi` text NOT NULL,
  `tstamp` text NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nis`, `nama`, `kelas`, `prodi`, `tstamp`, `admin`) VALUES
(10, '12345678', 'V. Tchaivovksy', 'X', 'Multimedia', '20-12-2020 06:36 pm', 'Admin SPP'),
(11, '100022929', 'Muhamad Zibran', 'X', 'Multimedia', '20-12-2020 06:42 pm', 'Admin SPP'),
(12, '177013', 'Djoko Sandi', 'X', 'Multimedia', '20-12-2020 06:50 pm', 'Admin SPP'),
(13, '12392091929', 'Muhammad Bakti', 'XII', 'Rekayasa Perangkat Lunak', '22-12-2020 06:14 am', 'Admin SPP'),
(14, '228922', 'Burhan Yusuf', 'XI', 'Teknik Komputer dan Jaringan', '22-12-2020 06:15 am', 'Admin SPP'),
(15, '19283892', 'Budi Wijaya', 'XI', 'Multimedia', '22-12-2020 09:18 am', 'Admin SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tagihan`
--

CREATE TABLE `tb_tagihan` (
  `id` int(11) NOT NULL,
  `nis` text NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `prodi` text NOT NULL,
  `bulan` text NOT NULL,
  `keterangan` text NOT NULL,
  `tstamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tagihan`
--

INSERT INTO `tb_tagihan` (`id`, `nis`, `nama`, `kelas`, `prodi`, `bulan`, `keterangan`, `tstamp`) VALUES
(6, '12345678', 'V. Tchaivovksy', 'X', 'Multimedia', '12', 'lunas', '20-12-2020 06:36 pm'),
(7, '100022929', 'Muhamad Zibran', 'X', 'Multimedia', '12', 'lunas', '20-12-2020 06:42 pm'),
(8, '177013', 'Djoko Sandi', 'X', 'Multimedia', '12', 'lunas', '20-12-2020 06:50 pm'),
(9, '12392091929', 'Muhammad Bakti', 'XII', 'Rekayasa Perangkat Lunak', '-', 'belum lunas', '22-12-2020 06:14 am'),
(10, '228922', 'Burhan Yusuf', 'XI', 'Teknik Komputer dan Jaringan', '-', 'belum lunas', '22-12-2020 06:15 am'),
(11, '19283892', 'Budi Wijaya', 'XI', 'Multimedia', '-', 'belum lunas', '22-12-2020 09:18 am');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tapel` text NOT NULL,
  `tstamp` text NOT NULL,
  `admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`id`, `tapel`, `tstamp`, `admin`) VALUES
(3, '2020 / 2021', '15-12-2020 06:52:40 pm', 'Admin SPP'),
(4, '2019 / 2020', '15-12-2020 06:56:31 pm', 'Admin SPP');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tapel`
--

CREATE TABLE `tb_tapel` (
  `id` int(11) NOT NULL,
  `tapel` int(11) NOT NULL COMMENT 'tahun pelajaran',
  `tstamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resp_hps_adm`
--
ALTER TABLE `resp_hps_adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tapel`
--
ALTER TABLE `tb_tapel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resp_hps_adm`
--
ALTER TABLE `resp_hps_adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_jenis_pembayaran`
--
ALTER TABLE `tb_jenis_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_tagihan`
--
ALTER TABLE `tb_tagihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_tapel`
--
ALTER TABLE `tb_tapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
