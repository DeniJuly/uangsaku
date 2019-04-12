-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2019 at 06:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uangsaku_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `ID_DEPOSIT` int(10) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `TANGGAL_DEPOSIT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID_PAYMAN_POINT` int(10) NOT NULL,
  `JUMLAH_DEPOSIT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID_FEEDBACK` int(10) NOT NULL,
  `ID_TAGIHAN` int(10) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `NILAI_FEEDBACK` int(1) NOT NULL,
  `DESKRIPSI_FEEDBACK` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembiayaan`
--

CREATE TABLE `jenis_pembiayaan` (
  `ID_JENIS_PEMBIAYAAN` int(10) NOT NULL,
  `ID_SEKOLAH` int(10) NOT NULL,
  `NAMA_PEMBIAYAAN` varchar(50) NOT NULL,
  `BIAYA` int(10) NOT NULL,
  `TGL_MULAI` datetime NOT NULL,
  `TGL_SELESAI` datetime NOT NULL,
  `DESKRIPSI_PEMBIAYAAN` varchar(200) NOT NULL,
  `JENIS_PEMBIAYAAN` enum('status_on','status_off') NOT NULL,
  `STATUS_PEMBIAYAAN` enum('status_on','status_off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `ID_KERANJANG` int(10) NOT NULL,
  `ID_PRODUK` int(10) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `TGL_KERANJANG` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `JUMLAH_PRODUK` int(10) NOT NULL,
  `TOTAL_HARGA` int(10) NOT NULL,
  `ID_TAGIHAN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `ID_MITRA` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `NPSN` varchar(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `FOTO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `ID_ORANG_TUA` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `NIK_ORANG_TUA` varchar(16) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `TANGGAL_LAHIR` datetime NOT NULL,
  `JENIS_KELAMIN` enum('L','P') NOT NULL,
  `NO_TELP` varchar(12) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `PIN` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payman_point`
--

CREATE TABLE `payman_point` (
  `ID_PAYMAN_POINT` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pedapatan_sekolah`
--

CREATE TABLE `pedapatan_sekolah` (
  `ID_PENDAPATAN_SEKOLAH` int(10) NOT NULL,
  `ID_SEKOLAH` int(10) NOT NULL,
  `ID_PEMBAYARAN` varchar(10) NOT NULL,
  `ID_TAGIHAN` varchar(10) NOT NULL,
  `TGL_PENDAPATAN_SEKOLAH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_PENDAPATAN_SEKOLAH` int(10) NOT NULL,
  `ID_SALDO_DANA_SEKOLAH` int(10) NOT NULL,
  `STATUS_PENDAPATAN-SEKOLAH` enum('status_on','status_off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembiayaan`
--

CREATE TABLE `pembiayaan` (
  `ID_PEMBIAYAAN` int(10) NOT NULL,
  `ID_JENIS_PEMBIAYAAN` int(10) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `TGL_PEMBIAYAAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_BIAYA` int(10) NOT NULL,
  `ID_TAGIHAN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penarikan_dana_mitra`
--

CREATE TABLE `penarikan_dana_mitra` (
  `ID_PENARIKAN_DANA_MITRA` int(10) NOT NULL,
  `ID_MITRA` int(10) NOT NULL,
  `ID_SALDO_DANA_MITRA` int(10) NOT NULL,
  `ID_REKENING` int(10) NOT NULL,
  `TGL_PENARIKAN_DANA_MITRA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_PENARIKAN_DANA_MITRA` int(10) NOT NULL,
  `STATUS_PENARIKAN_DANA_MITRA` enum('status_on','status_off') NOT NULL,
  `BUKTI_TRANSFER` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penarikan_dana_sekolah`
--

CREATE TABLE `penarikan_dana_sekolah` (
  `ID_PENARIKAN_DANA_SEKOLAH` int(10) NOT NULL,
  `ID_SEKOLAH` int(10) NOT NULL,
  `ID_SALDO_DANA_SEKOLAH` varchar(10) NOT NULL,
  `ID_REKENING` int(10) NOT NULL,
  `TGL_PENARIKAN_DANA_SEKOLAH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_PENARIKAN_DANA_SEKOLAH` int(10) NOT NULL,
  `STATUS_PENARIKAN_DANA_SEKOLAH` enum('status_on','status_off') NOT NULL,
  `BUKTI_TRANSFER` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan_mitra`
--

CREATE TABLE `pendapatan_mitra` (
  `ID_PENDAPATAN_MITRA` int(10) NOT NULL,
  `ID_MITRA` int(10) NOT NULL,
  `ID_PEMBAYARAN` int(10) NOT NULL,
  `ID_TAGIHAN` int(10) NOT NULL,
  `TGL_PENDAPATAN_MITRA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_PENDAPATAN_MITRA` int(10) NOT NULL,
  `ID_SALDO_DANA_MITRA` int(10) NOT NULL,
  `STATUS_PENDAPATAN_MITRA` enum('status_on','status_off') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ID_PRODUK` int(10) NOT NULL,
  `ID_MITRA` int(10) NOT NULL,
  `NAMA_PRODUK` varchar(50) NOT NULL,
  `DESKRIPSI_PRODUK` varchar(200) NOT NULL,
  `HARGA_PRODUK` int(10) NOT NULL,
  `STOK` int(10) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `KODE` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `ID_REKENING` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `NAMA_BANK` varchar(50) NOT NULL,
  `NAMA_REKENING` varchar(50) NOT NULL,
  `NO_REKENING` int(20) NOT NULL,
  `CABANG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saldo_dana_mitra`
--

CREATE TABLE `saldo_dana_mitra` (
  `ID_SALDO_DANA_MITRA` int(10) NOT NULL,
  `ID_MITRA` int(10) NOT NULL,
  `TGL_SALDO_MITRA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_SALDO_MITRA` int(10) NOT NULL,
  `STATUS_SALDO_MITRA` enum('111','110') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saldo_dana_sekolah`
--

CREATE TABLE `saldo_dana_sekolah` (
  `ID_SALDO_DANA_SEKOLAH` int(10) NOT NULL,
  `ID_SEKOLAH` int(10) NOT NULL,
  `TGL_SALDO_SEKOLAH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_SALDO_SEKOLAH` int(10) NOT NULL,
  `STATUS_DANA_SEKOLAH` enum('111','110') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saldo_dana_siswa`
--

CREATE TABLE `saldo_dana_siswa` (
  `ID_SALDO_DANA_SISWA` int(10) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `TGL_SALDO_SISWA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_SALDO_SISWA` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `ID_SEKOLAH` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `NPSN` varchar(8) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `LOGO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_SISWA` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `NIK_ORANG_TUA` varchar(16) NOT NULL,
  `NISN` varchar(10) NOT NULL,
  `NIK` varchar(16) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `TANGGAL_LAHIR` datetime NOT NULL,
  `JENIS_KELAMIN` enum('L','P') NOT NULL,
  `NO_TELP` varchar(12) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `KELAS` int(2) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `PIN` int(6) NOT NULL,
  `NPSN` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `JENIS_USER` enum('sekolah','siswa','orang_tua','mitra','payman_point') NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `STATUS_LOGIN` enum('online','offline') NOT NULL,
  `KODE_VERIFIKASI` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`ID_DEPOSIT`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID_FEEDBACK`);

--
-- Indexes for table `jenis_pembiayaan`
--
ALTER TABLE `jenis_pembiayaan`
  ADD PRIMARY KEY (`ID_JENIS_PEMBIAYAAN`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`ID_KERANJANG`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`ID_MITRA`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`ID_ORANG_TUA`);

--
-- Indexes for table `pedapatan_sekolah`
--
ALTER TABLE `pedapatan_sekolah`
  ADD PRIMARY KEY (`ID_PENDAPATAN_SEKOLAH`);

--
-- Indexes for table `pembiayaan`
--
ALTER TABLE `pembiayaan`
  ADD PRIMARY KEY (`ID_PEMBIAYAAN`);

--
-- Indexes for table `penarikan_dana_mitra`
--
ALTER TABLE `penarikan_dana_mitra`
  ADD PRIMARY KEY (`ID_PENARIKAN_DANA_MITRA`);

--
-- Indexes for table `pendapatan_mitra`
--
ALTER TABLE `pendapatan_mitra`
  ADD PRIMARY KEY (`ID_PENDAPATAN_MITRA`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_PRODUK`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`ID_REKENING`);

--
-- Indexes for table `saldo_dana_mitra`
--
ALTER TABLE `saldo_dana_mitra`
  ADD PRIMARY KEY (`ID_SALDO_DANA_MITRA`);

--
-- Indexes for table `saldo_dana_sekolah`
--
ALTER TABLE `saldo_dana_sekolah`
  ADD PRIMARY KEY (`ID_SALDO_DANA_SEKOLAH`);

--
-- Indexes for table `saldo_dana_siswa`
--
ALTER TABLE `saldo_dana_siswa`
  ADD PRIMARY KEY (`ID_SALDO_DANA_SISWA`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`ID_SEKOLAH`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`ID_SISWA`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `ID_DEPOSIT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID_FEEDBACK` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_pembiayaan`
--
ALTER TABLE `jenis_pembiayaan`
  MODIFY `ID_JENIS_PEMBIAYAAN` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `ID_KERANJANG` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `ID_MITRA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `ID_ORANG_TUA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedapatan_sekolah`
--
ALTER TABLE `pedapatan_sekolah`
  MODIFY `ID_PENDAPATAN_SEKOLAH` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pembiayaan`
--
ALTER TABLE `pembiayaan`
  MODIFY `ID_PEMBIAYAAN` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penarikan_dana_mitra`
--
ALTER TABLE `penarikan_dana_mitra`
  MODIFY `ID_PENARIKAN_DANA_MITRA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendapatan_mitra`
--
ALTER TABLE `pendapatan_mitra`
  MODIFY `ID_PENDAPATAN_MITRA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_PRODUK` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `ID_REKENING` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saldo_dana_mitra`
--
ALTER TABLE `saldo_dana_mitra`
  MODIFY `ID_SALDO_DANA_MITRA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saldo_dana_sekolah`
--
ALTER TABLE `saldo_dana_sekolah`
  MODIFY `ID_SALDO_DANA_SEKOLAH` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `saldo_dana_siswa`
--
ALTER TABLE `saldo_dana_siswa`
  MODIFY `ID_SALDO_DANA_SISWA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `ID_SEKOLAH` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_SISWA` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
