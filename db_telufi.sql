-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 06:33 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_telufi`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `username` varchar(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`username`, `nama`, `password`, `no_hp`, `email`, `status`) VALUES
('a', 'a', 'b', '', '', 'adm'),
('bonakribo', 'BonaKribo', 'bonabona', '081234232', 'bonaki@gmail.com', 'adm'),
('budiman', 'Budi', 'budibudi', '085258382648', 'budi@gmail.com', 'adm'),
('masrayiemas', 'Rayiemas MP', 'bismillah', '085258382648', 'masrayie@gmail.com', 'adm'),
('rizkigucci', 'Rizki Jamilah', 'gucci', '081234575632', 'rizkijamilah@gmail.com', 'adm');

-- --------------------------------------------------------

--
-- Table structure for table `t_detil_lpbulananpmb`
--

CREATE TABLE `t_detil_lpbulananpmb` (
  `nomor` int(11) NOT NULL,
  `id_laporanbulanan` varchar(10) NOT NULL,
  `id_pembayaran` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_detil_lpbulananpms`
--

CREATE TABLE `t_detil_lpbulananpms` (
  `nomor` int(11) NOT NULL,
  `id_laporanbulanan` varchar(10) NOT NULL,
  `id_pemasukan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_detil_lpbulananpng`
--

CREATE TABLE `t_detil_lpbulananpng` (
  `nomor` int(11) NOT NULL,
  `id_laporanbulanan` varchar(10) NOT NULL,
  `id_pengeluaran` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_detil_pembayaran`
--

CREATE TABLE `t_detil_pembayaran` (
  `nomor` int(11) NOT NULL,
  `id_pembayaran` varchar(10) NOT NULL,
  `id_jenis_pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_detil_pembayaran`
--

INSERT INTO `t_detil_pembayaran` (`nomor`, `id_pembayaran`, `id_jenis_pembayaran`) VALUES
(1, 'PMH012', 'BPPIF'),
(2, 'PMH012', 'TMDKIF'),
(4, 'PMH013', 'BPPIF'),
(5, 'PMH013', 'TMDKIF'),
(6, 'PMH015', 'BPPIF'),
(7, 'PMH015', 'TMDKIF'),
(9, 'PMH015', 'ASRTRA');

-- --------------------------------------------------------

--
-- Table structure for table `t_detil_pembukuan`
--

CREATE TABLE `t_detil_pembukuan` (
  `nomor` varchar(10) NOT NULL,
  `id_pembukuan` varchar(10) NOT NULL,
  `id_laporanbulanan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis_pembayaran`
--

CREATE TABLE `t_jenis_pembayaran` (
  `id_jenis_pembayaran` varchar(10) NOT NULL,
  `jenis_pembayaran` varchar(255) DEFAULT NULL,
  `fakultas` varchar(3) DEFAULT NULL,
  `biaya` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jenis_pembayaran`
--

INSERT INTO `t_jenis_pembayaran` (`id_jenis_pembayaran`, `jenis_pembayaran`, `fakultas`, `biaya`) VALUES
('ASRTRA', 'Asrama Putra Telkom', 'FIF', 3000000),
('ASRTRI', 'Asrama Putri Telkom', 'FIF', 2800000),
('BPPIF', 'BPP S1 Teknik Informatika', 'FIF', 7500000),
('TMDKIF', 'Telkomedik', 'FIF', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `t_laporanbulanan`
--

CREATE TABLE `t_laporanbulanan` (
  `id_laporanbulanan` varchar(10) NOT NULL,
  `total_pemasukan` bigint(20) DEFAULT NULL,
  `total_pengeluaran` bigint(20) DEFAULT NULL,
  `bulan` varchar(10) NOT NULL,
  `total_bulanan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_laporanbulanan`
--

INSERT INTO `t_laporanbulanan` (`id_laporanbulanan`, `total_pemasukan`, `total_pengeluaran`, `bulan`, `total_bulanan`) VALUES
('LP0001', 495950000, 150000000, 'July 2016', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_mahasiswa`
--

CREATE TABLE `t_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `fakultas` varchar(3) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` varchar(3) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mahasiswa`
--

INSERT INTO `t_mahasiswa` (`nim`, `nama`, `jurusan`, `fakultas`, `angkatan`, `username`, `password`, `status`) VALUES
('1301140263', 'Aldry Hernanda S', 'S1 Teknik Informatika', 'FIF', '2014', 'aldry26', 'cinacina', 'mhs'),
('1301144233', 'Muhammad Farhan', 'S1 Teknik Informatika', 'FIF', '2014', 'mfarhan', 'paung', 'mhs'),
('1301144243', 'Rayiemas Manggala P', 'S1 Teknik Informatika', 'FIF', '2014', 'masmas', 'bisbis', 'mhs');

-- --------------------------------------------------------

--
-- Table structure for table `t_pemasukaninstitusi`
--

CREATE TABLE `t_pemasukaninstitusi` (
  `id_pemasukan` varchar(10) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `pemberi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pemasukaninstitusi`
--

INSERT INTO `t_pemasukaninstitusi` (`id_pemasukan`, `perihal`, `tanggal`, `jumlah`, `pemberi`) VALUES
('PMS001', 'Uang Tahunan Yayasan', '2016-07-01', 150000000, 'Bapak Yahya'),
('PMS002', 'Sponsor Bank', '2016-07-03', 200000000, 'Bapak Budiman'),
('PMS003', 'Uang Logistik', '2016-07-09', 120000000, 'Bapak Yudi'),
('PMS004', 'Dana Rektor', '2016-12-10', 140000000, 'Bapak Rektor');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembayaranmhs`
--

CREATE TABLE `t_pembayaranmhs` (
  `id_pembayaran` varchar(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pembayaranmhs`
--

INSERT INTO `t_pembayaranmhs` (`id_pembayaran`, `nim`, `jumlah`, `tanggal`, `status`) VALUES
('PMH012', '1301144243', 7650000, '2016-07-15', 'VALIDATED'),
('PMH013', '1301144233', 7650000, '2016-07-11', 'VALIDATED'),
('PMH015', '1301140263', 10650000, '2016-07-02', 'VALIDATED');

-- --------------------------------------------------------

--
-- Table structure for table `t_pembukuan`
--

CREATE TABLE `t_pembukuan` (
  `id_pembukuan` varchar(10) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `total_pemasukan` bigint(20) DEFAULT NULL,
  `total_pengeluaran` bigint(20) DEFAULT NULL,
  `total_tahunan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengeluaran`
--

CREATE TABLE `t_pengeluaran` (
  `id_pengeluaran` varchar(10) NOT NULL,
  `perihal` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jumlah` bigint(20) DEFAULT NULL,
  `pengaju` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengeluaran`
--

INSERT INTO `t_pengeluaran` (`id_pengeluaran`, `perihal`, `tanggal`, `jumlah`, `pengaju`) VALUES
('PNG002', 'Pembelian Komputer Lab IF', '2016-07-19', 80000000, 'Bapak Nudi'),
('PNG005', 'Pembelian Kaca Gedung D', '2016-07-30', 70000000, 'Bapak Roni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `t_detil_lpbulananpmb`
--
ALTER TABLE `t_detil_lpbulananpmb`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `fk_laporan` (`id_laporanbulanan`),
  ADD KEY `fk_pembayaran` (`id_pembayaran`);

--
-- Indexes for table `t_detil_lpbulananpms`
--
ALTER TABLE `t_detil_lpbulananpms`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `fk_laporan_pms` (`id_laporanbulanan`),
  ADD KEY `id_pemasukan` (`id_pemasukan`);

--
-- Indexes for table `t_detil_lpbulananpng`
--
ALTER TABLE `t_detil_lpbulananpng`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `id_laporanbulanan` (`id_laporanbulanan`),
  ADD KEY `id_pengeluaran` (`id_pengeluaran`);

--
-- Indexes for table `t_detil_pembayaran`
--
ALTER TABLE `t_detil_pembayaran`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `fk_idpembayaran` (`id_pembayaran`),
  ADD KEY `fk_jenispembayaran` (`id_jenis_pembayaran`);

--
-- Indexes for table `t_detil_pembukuan`
--
ALTER TABLE `t_detil_pembukuan`
  ADD PRIMARY KEY (`nomor`),
  ADD KEY `fk_pembukuan` (`id_pembukuan`),
  ADD KEY `fk_bulanan` (`id_laporanbulanan`);

--
-- Indexes for table `t_jenis_pembayaran`
--
ALTER TABLE `t_jenis_pembayaran`
  ADD PRIMARY KEY (`id_jenis_pembayaran`),
  ADD KEY `jenis_pembayaran` (`jenis_pembayaran`);

--
-- Indexes for table `t_laporanbulanan`
--
ALTER TABLE `t_laporanbulanan`
  ADD PRIMARY KEY (`id_laporanbulanan`);

--
-- Indexes for table `t_mahasiswa`
--
ALTER TABLE `t_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `t_pemasukaninstitusi`
--
ALTER TABLE `t_pemasukaninstitusi`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `t_pembayaranmhs`
--
ALTER TABLE `t_pembayaranmhs`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `fk_nim` (`nim`);

--
-- Indexes for table `t_pembukuan`
--
ALTER TABLE `t_pembukuan`
  ADD PRIMARY KEY (`id_pembukuan`);

--
-- Indexes for table `t_pengeluaran`
--
ALTER TABLE `t_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_detil_lpbulananpmb`
--
ALTER TABLE `t_detil_lpbulananpmb`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_detil_lpbulananpms`
--
ALTER TABLE `t_detil_lpbulananpms`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_detil_lpbulananpng`
--
ALTER TABLE `t_detil_lpbulananpng`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_detil_pembayaran`
--
ALTER TABLE `t_detil_pembayaran`
  MODIFY `nomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_detil_lpbulananpmb`
--
ALTER TABLE `t_detil_lpbulananpmb`
  ADD CONSTRAINT `fk_laporan` FOREIGN KEY (`id_laporanbulanan`) REFERENCES `t_laporanbulanan` (`id_laporanbulanan`),
  ADD CONSTRAINT `fk_pembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `t_pembayaranmhs` (`id_pembayaran`);

--
-- Constraints for table `t_detil_lpbulananpms`
--
ALTER TABLE `t_detil_lpbulananpms`
  ADD CONSTRAINT `fk_laporan_pms` FOREIGN KEY (`id_laporanbulanan`) REFERENCES `t_laporanbulanan` (`id_laporanbulanan`),
  ADD CONSTRAINT `t_detil_lpbulananpms_ibfk_1` FOREIGN KEY (`id_pemasukan`) REFERENCES `t_pemasukaninstitusi` (`id_pemasukan`);

--
-- Constraints for table `t_detil_lpbulananpng`
--
ALTER TABLE `t_detil_lpbulananpng`
  ADD CONSTRAINT `t_detil_lpbulananpng_ibfk_1` FOREIGN KEY (`id_laporanbulanan`) REFERENCES `t_laporanbulanan` (`id_laporanbulanan`),
  ADD CONSTRAINT `t_detil_lpbulananpng_ibfk_2` FOREIGN KEY (`id_pengeluaran`) REFERENCES `t_pengeluaran` (`id_pengeluaran`);

--
-- Constraints for table `t_detil_pembayaran`
--
ALTER TABLE `t_detil_pembayaran`
  ADD CONSTRAINT `fk_idpembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `t_pembayaranmhs` (`id_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jenispembayaran` FOREIGN KEY (`id_jenis_pembayaran`) REFERENCES `t_jenis_pembayaran` (`id_jenis_pembayaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_detil_pembukuan`
--
ALTER TABLE `t_detil_pembukuan`
  ADD CONSTRAINT `fk_bulanan` FOREIGN KEY (`id_laporanbulanan`) REFERENCES `t_laporanbulanan` (`id_laporanbulanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pembukuan` FOREIGN KEY (`id_pembukuan`) REFERENCES `t_pembukuan` (`id_pembukuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pembayaranmhs`
--
ALTER TABLE `t_pembayaranmhs`
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `t_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
