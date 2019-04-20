-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2019 at 06:49 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME`, `EMAIL`, `FOTO`, `PASSWORD`) VALUES
(1, 'Deni Juli Setiawan', 'denijuli112@gmail.com', 'deni.jpg', '43f41d127a81c54d4c8f5f93daeb7118');

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
  `JENIS_PEMBIAYAAN` varchar(50) NOT NULL,
  `STATUS_PEMBIAYAAN` enum('online','offline') NOT NULL,
  `DESKRIPSI` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pembiayaan`
--

INSERT INTO `jenis_pembiayaan` (`ID_JENIS_PEMBIAYAAN`, `ID_SEKOLAH`, `NAMA_PEMBIAYAAN`, `BIAYA`, `JENIS_PEMBIAYAAN`, `STATUS_PEMBIAYAAN`, `DESKRIPSI`) VALUES
(5, 21, 'SPP SMKN 1 BAWANG', 90000, 'SPP', 'offline', 'Pembayaran SPP ');

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
  `NPSN` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `FOTO` varchar(100) DEFAULT 'default.png',
  `PASSWORD` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`ID_MITRA`, `ID_USER`, `NPSN`, `EMAIL`, `NAMA`, `ALAMAT`, `FOTO`, `PASSWORD`) VALUES
(3, 29, NULL, 'bang68055@gmail.com', 'TOKO DENI JULI', NULL, 'default.png', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `ID_ORANG_TUA` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `ID_SISWA` int(10) DEFAULT NULL,
  `NIK_ORANG_TUA` varchar(16) DEFAULT NULL,
  `NISN` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` enum('L','P') DEFAULT NULL,
  `NO_TELP` varchar(12) DEFAULT NULL,
  `FOTO` varchar(100) DEFAULT 'default.png',
  `ALAMAT` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `PIN` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`ID_ORANG_TUA`, `ID_USER`, `ID_SISWA`, `NIK_ORANG_TUA`, `NISN`, `EMAIL`, `NAMA`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `NO_TELP`, `FOTO`, `ALAMAT`, `PASSWORD`, `PIN`) VALUES
(1, 30, NULL, '1234567890123456', NULL, 'bang68055@gmail.com', 'DENI JULI SETIAWAN', '0000-00-00', 'L', '', 'DENI_JULI_SETIAWAN,19-Apr-2019,18-18-24.jpeg', 'Banjengan', '43f41d127a81c54d4c8f5f93daeb7118', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_point`
--

CREATE TABLE `payment_point` (
  `ID_PAYMAN_POINT` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` int(10) NOT NULL,
  `ID_TAGIHAN` int(11) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `TGL_PEMBAYARAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_PEMBAYARAN` int(10) NOT NULL,
  `METODE_PEMBAYARAN` enum('payment_poin','saldo') NOT NULL,
  `ID_PAYMENT_POINT` int(10) NOT NULL,
  `ID_SALDO_DANA_SISWA` int(11) NOT NULL,
  `STATUS_PEMBAYARAN` enum('nyicil','lunas') NOT NULL,
  `BUKTI_PEMBAYARAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembiayaan`
--

CREATE TABLE `pembiayaan` (
  `ID_PEMBIAYAAN` int(10) NOT NULL,
  `ID_JENIS_PEMBIAYAAN` int(10) NOT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `NISN` int(10) NOT NULL,
  `NAMA_SISWA` varchar(50) NOT NULL,
  `KELAS_SISWA` varchar(2) NOT NULL,
  `TGL_PEMBIAYAAN` date NOT NULL,
  `TOTAL_BIAYA` int(10) NOT NULL,
  `TOTAL_TERBAYAR` int(10) NOT NULL,
  `ID_TAGIHAN` int(10) NOT NULL,
  `STATUS_TAGIHAN` enum('online','offline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembiayaan`
--

INSERT INTO `pembiayaan` (`ID_PEMBIAYAAN`, `ID_JENIS_PEMBIAYAAN`, `ID_SISWA`, `NISN`, `NAMA_SISWA`, `KELAS_SISWA`, `TGL_PEMBIAYAAN`, `TOTAL_BIAYA`, `TOTAL_TERBAYAR`, `ID_TAGIHAN`, `STATUS_TAGIHAN`) VALUES
(3, 5, 2, 1234567891, 'Deni Juli', 'XI', '2019-04-20', 90000, 0, 5, 'online');

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
-- Table structure for table `pendapatan_sekolah`
--

CREATE TABLE `pendapatan_sekolah` (
  `ID_PENDAPATAN_SEKOLAH` int(10) NOT NULL,
  `ID_SEKOLAH` int(10) NOT NULL,
  `ID_PEMBAYARAN` varchar(10) NOT NULL,
  `ID_TAGIHAN` varchar(10) NOT NULL,
  `TGL_PENDAPATAN_SEKOLAH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TOTAL_PENDAPATAN_SEKOLAH` int(10) NOT NULL,
  `ID_SALDO_DANA_SEKOLAH` int(10) NOT NULL,
  `STATUS_PENDAPATAN_SEKOLAH` enum('status_on','status_off') DEFAULT NULL
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
  `TERJUAL` int(10) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  `KODE` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ID_PRODUK`, `ID_MITRA`, `NAMA_PRODUK`, `DESKRIPSI_PRODUK`, `HARGA_PRODUK`, `STOK`, `TERJUAL`, `FOTO`, `KODE`) VALUES
(3, 3, 'KEWECI', '', 5000, 10, 0, 'KEWECI_19-04-192.jpg', 0);

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

--
-- Dumping data for table `saldo_dana_sekolah`
--

INSERT INTO `saldo_dana_sekolah` (`ID_SALDO_DANA_SEKOLAH`, `ID_SEKOLAH`, `TGL_SALDO_SEKOLAH`, `TOTAL_SALDO_SEKOLAH`, `STATUS_DANA_SEKOLAH`) VALUES
(1, 21, '2019-04-15 14:52:14', 100000, '111'),
(2, 21, '2019-04-15 14:52:10', 10000, '110'),
(3, 21, '2019-04-15 14:54:45', 20000, '111'),
(12, 21, '2019-04-19 02:48:34', 30000, '111'),
(13, 21, '2019-04-19 09:54:42', 40000, '111'),
(14, 21, '2019-04-19 12:32:37', 50000, '111');

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

--
-- Dumping data for table `saldo_dana_siswa`
--

INSERT INTO `saldo_dana_siswa` (`ID_SALDO_DANA_SISWA`, `ID_SISWA`, `TGL_SALDO_SISWA`, `TOTAL_SALDO_SISWA`) VALUES
(1, 2, '2019-04-17 10:46:28', 10000),
(4, 2, '2019-04-18 12:19:09', 50000);

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
  `ALAMAT` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `LOGO` varchar(100) DEFAULT NULL,
  `TINGKAT_SEKOLAH` enum('smp/mts','sma/smk') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`ID_SEKOLAH`, `ID_USER`, `NPSN`, `EMAIL`, `NAMA`, `ALAMAT`, `PASSWORD`, `LOGO`, `TINGKAT_SEKOLAH`) VALUES
(21, 24, '12345679', 'denijsa112@gmail.com', 'SMKN 1 Bawang', NULL, '43f41d127a81c54d4c8f5f93daeb7118', 'default.png', 'sma/smk');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `ID_SISWA` int(10) NOT NULL,
  `ID_USER` int(10) NOT NULL,
  `ID_SEKOLAH` int(10) NOT NULL,
  `NIK_ORANG_TUA` varchar(16) DEFAULT NULL,
  `NISN` varchar(10) NOT NULL,
  `NIK` varchar(16) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `NAMA` varchar(50) NOT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `JENIS_KELAMIN` enum('L','P') NOT NULL,
  `NO_TELP` varchar(12) DEFAULT NULL,
  `FOTO` varchar(100) NOT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `KELAS` varchar(3) NOT NULL,
  `PASSWORD` varchar(200) DEFAULT NULL,
  `PIN` int(6) DEFAULT NULL,
  `NPSN` int(8) NOT NULL,
  `PARENT_CODE` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`ID_SISWA`, `ID_USER`, `ID_SEKOLAH`, `NIK_ORANG_TUA`, `NISN`, `NIK`, `EMAIL`, `NAMA`, `TANGGAL_LAHIR`, `JENIS_KELAMIN`, `NO_TELP`, `FOTO`, `ALAMAT`, `KELAS`, `PASSWORD`, `PIN`, `NPSN`, `PARENT_CODE`) VALUES
(2, 26, 21, NULL, '1234567891', '', 'denijuli112@gmail.com', 'Deni Juli', '0000-00-00', 'L', '', 'Deni_Juli_Setiawan,16-Apr-2019,00-27-20.jpg', 'Banjengan RT 02/01', 'XI', '43f41d127a81c54d4c8f5f93daeb7118', NULL, 12345679, 'o7AnVqQi');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `ID_TAGIHAN` int(11) NOT NULL,
  `PRODUK` varchar(100) NOT NULL,
  `TGL_TAGIHAN` date DEFAULT NULL,
  `ID_SISWA` int(10) NOT NULL,
  `KODE_TAGIHAN` varchar(8) NOT NULL,
  `STATUS_BAYAR` enum('lunas','belum_lunas') NOT NULL,
  `TOTAL_TAGIHAN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`ID_TAGIHAN`, `PRODUK`, `TGL_TAGIHAN`, `ID_SISWA`, `KODE_TAGIHAN`, `STATUS_BAYAR`, `TOTAL_TAGIHAN`) VALUES
(5, 'SPP', '2019-04-20', 2, 'Z7PRHBHJ', 'belum_lunas', 90000);

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
  `STATUS_USER` enum('online','offline') DEFAULT NULL,
  `KODE_VERIFIKASI` int(6) DEFAULT NULL,
  `STATUS_EMAIL` enum('online','offline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `JENIS_USER`, `EMAIL`, `USERNAME`, `PASSWORD`, `STATUS_USER`, `KODE_VERIFIKASI`, `STATUS_EMAIL`) VALUES
(24, 'sekolah', 'denijsa112@gmail.com', 'SMKN 1 Bawang', '43f41d127a81c54d4c8f5f93daeb7118', 'online', 908256, 'online'),
(26, 'siswa', 'denijuli112@gmail.com', 'Deni Juli Setiawan', '43f41d127a81c54d4c8f5f93daeb7118', 'online', 437407, 'online'),
(30, 'orang_tua', 'bang68055@gmail.com', 'DENI JULI SETIAWAN', '43f41d127a81c54d4c8f5f93daeb7118', 'offline', 15538, 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

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
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`);

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
-- Indexes for table `pendapatan_sekolah`
--
ALTER TABLE `pendapatan_sekolah`
  ADD PRIMARY KEY (`ID_PENDAPATAN_SEKOLAH`);

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
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`ID_TAGIHAN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `ID_JENIS_PEMBIAYAAN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `ID_KERANJANG` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `ID_MITRA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `ID_ORANG_TUA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PEMBAYARAN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembiayaan`
--
ALTER TABLE `pembiayaan`
  MODIFY `ID_PEMBIAYAAN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `pendapatan_sekolah`
--
ALTER TABLE `pendapatan_sekolah`
  MODIFY `ID_PENDAPATAN_SEKOLAH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_PRODUK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `ID_SALDO_DANA_SEKOLAH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `saldo_dana_siswa`
--
ALTER TABLE `saldo_dana_siswa`
  MODIFY `ID_SALDO_DANA_SISWA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `ID_SEKOLAH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `ID_SISWA` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `ID_TAGIHAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
