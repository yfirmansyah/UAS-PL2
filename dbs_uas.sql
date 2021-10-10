-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 12:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbs_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE IF NOT EXISTS `tbl_buku` (
`kd_buku` int(20) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`kd_buku`, `judul`, `pengarang`, `penerbit`, `lokasi`, `stok`) VALUES
(1, 'Coba', 'Coba 1', 'Coba 2', 'rak', '5'),
(2, 'Judul2', 'Pengarang 2', 'Penerbit 2', 'Rak', '2'),
(3, 'latihan', 'pengarang', 'penerbit', 'rak', '2'),
(4, 'Latihan', 'Yusuf', 'Aneka Buana', 'Rak', '2'),
(5, 'Latihan', 'Yusuf', 'Aneka Buana', 'Rak', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku_tamu`
--

CREATE TABLE IF NOT EXISTS `tbl_buku_tamu` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku_tamu`
--

INSERT INTO `tbl_buku_tamu` (`nama`, `alamat`, `tanggal`) VALUES
('Andni', 'Cibadak, Kayumanis - Kota Bogor', '2021-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjam_buku`
--

CREATE TABLE IF NOT EXISTS `tbl_pinjam_buku` (
`kd_pinjam` int(10) NOT NULL,
  `nama_pinjam` varchar(50) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pinjam_buku`
--

INSERT INTO `tbl_pinjam_buku` (`kd_pinjam`, `nama_pinjam`, `nama_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
(1, 'Rahmat', 'Coba', '2021-10-10', '2021-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`kd_user` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('1','2','3','4') NOT NULL,
  `status` enum('1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kd_user`, `username`, `password`, `level`, `status`) VALUES
(1, 'kepala', 'kepala', '4', '1'),
(2, 'petugas', 'petugas', '2', '1'),
(3, 'andi', '1234', '3', '1'),
(4, 'anggota', 'anggota', '1', '1'),
(5, 'umum', 'umum', '3', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
 ADD PRIMARY KEY (`kd_buku`), ADD KEY `stok` (`stok`);

--
-- Indexes for table `tbl_pinjam_buku`
--
ALTER TABLE `tbl_pinjam_buku`
 ADD PRIMARY KEY (`kd_pinjam`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
MODIFY `kd_buku` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_pinjam_buku`
--
ALTER TABLE `tbl_pinjam_buku`
MODIFY `kd_pinjam` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `kd_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
