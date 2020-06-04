-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2020 at 10:12 AM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u6515303_lulus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `password`, `username`) VALUES
(1, 'Administrator', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `login_app`
--

CREATE TABLE `login_app` (
  `id_login_app` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `agent` varchar(250) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `masuk_web`
--

CREATE TABLE `masuk_web` (
  `id_masuk_web` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `agent` varchar(250) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `bhs_indo` int(11) NOT NULL,
  `bhs_inggris` int(11) NOT NULL,
  `bhs_jawa` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `ipa` int(11) NOT NULL,
  `ips` int(11) NOT NULL,
  `penjasorkes` int(11) NOT NULL,
  `ppkn` int(11) NOT NULL,
  `seni` int(11) NOT NULL,
  `pai` int(11) NOT NULL,
  `prakarya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id_setting` int(11) NOT NULL,
  `nama_sekolah` varchar(200) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `nama_kepala_sekolah` varchar(200) NOT NULL,
  `nbm_kepala_sekolah` varchar(20) NOT NULL,
  `logo_sekolah` varchar(200) NOT NULL,
  `kop` varchar(5000) NOT NULL,
  `waktu_pengumuman` varchar(250) NOT NULL,
  `tanda_tangan_ks` varchar(200) NOT NULL,
  `stempel_sekolah` varchar(200) NOT NULL,
  `pengesahan` varchar(200) NOT NULL,
  `tanggal_rapat` varchar(250) NOT NULL,
  `no_surat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `nama_sekolah`, `tahun_ajaran`, `nama_kepala_sekolah`, `nbm_kepala_sekolah`, `logo_sekolah`, `kop`, `waktu_pengumuman`, `tanda_tangan_ks`, `stempel_sekolah`, `pengesahan`, `tanggal_rapat`, `no_surat`) VALUES
(1, 'SMP MUHAMMADIYAH CIMANGGU', '2019/2020', 'Rakhmat Efendi, S. Ag', '-', '', '<p style=\"text-align:center\"><img src=\"data:image/png;base64,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', 'Jun 02 2020, 07:00:00', 'ttd_ks.png', 'stempel_sekolah.png', 'Cimanggu, 5 Juni 2020', 'Selasa, 2 Juni 2020', '034/IV.4.AU/F/2020');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` text NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ttl` varchar(250) NOT NULL,
  `orang_tua` varchar(250) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `login_app`
--
ALTER TABLE `login_app`
  ADD PRIMARY KEY (`id_login_app`);

--
-- Indexes for table `masuk_web`
--
ALTER TABLE `masuk_web`
  ADD PRIMARY KEY (`id_masuk_web`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_app`
--
ALTER TABLE `login_app`
  MODIFY `id_login_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masuk_web`
--
ALTER TABLE `masuk_web`
  MODIFY `id_masuk_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
