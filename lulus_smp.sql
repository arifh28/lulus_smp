-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2020 at 07:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lulus_smp`
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
(1, 'Arif Hidayat', 'admin', 'admin');

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
-- Dumping data for table `login_app`
--

INSERT INTO `login_app` (`id_login_app`, `ip`, `agent`, `tanggal`, `id_siswa`) VALUES
(1, '', '', '2020-05-03 06:32:27', 1),
(2, '', '', '2020-05-03 06:35:26', 1),
(3, '', '', '2020-05-05 04:47:35', 1),
(4, '', '', '2020-05-05 06:10:15', 1),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '2020-06-02 09:16:59', 1),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '2020-06-02 09:27:48', 1),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '2020-06-02 09:30:20', 1),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '2020-06-03 03:31:57', 1);

-- --------------------------------------------------------

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
-- Dumping data for table `masuk_web`
--

INSERT INTO `masuk_web` (`id_masuk_web`, `ip`, `agent`, `tanggal`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36', '0000-00-00 00:00:00');

-- --------------------------------------------------------

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
  `tahun_ajaran` varchar(13) NOT NULL,
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
(1, 'SMP Muhammadiyah Plus Cimanggu', '2019/2020', 'Rakhmat Efendi, S. Ag', '968 168', '', 'Jln. Raya Cimanggu No. 496 Kecamatan Cimanggu Kabupaten Cilacap, Jawa Tengah   ', 'May 07 2020, 20:15:00', 'ttd_ks.png', 'stempel_sekolah.png', 'Cimanggu, 7 Mei 2021', 'Selasa tanggal 2 Juni 2020 ', '001/IV.4.AU/M/2023');

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
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nis`, `nama`, `ttl`, `orang_tua`, `kelas`, `password`, `status`) VALUES
(1, '0046965216', 7449, 'ALDI WILDAN NUGROHO', 'Cilacap, 21 Agustus 2004', 'Targono', 'IX.A', '4840431', 'LULUS'),
(2, '0058958731', 7450, 'ALZIER HAFIZH FATURAHMAN', 'Cilacap, 31 Maret 2005', 'Juhriyanto', 'IX.A', '7122124', 'LULUS'),
(3, '0043942766', 7452, 'ANDIKA', 'Cilacap, 4 Agustus 2004', 'Nurdin', 'IX.A', '8957558', 'LULUS'),
(4, '0068630729', 7456, 'AQYAS FIRMANSYAH', 'Cilacap, 7 April 2005', 'Salman', 'IX.A', '1907547', 'LULUS'),
(5, '0047300032', 7459, 'AZHAR HAENUR RIZKI', 'Cilacap, 12 Desember 2004', 'Suratman', 'IX.A', '6832501', 'LULUS'),
(6, '0053912760', 7460, 'BAGUS ADITYA', 'Cilacap, 31 Januari 2005', 'Saryo', 'IX.A', '7189338', 'LULUS'),
(7, '0066118333', 7476, 'DIYANA FELIYANATA', 'Cilacap, 4 Februari 2006', 'Karyono', 'IX.A', '4429108', 'LULUS'),
(8, '0046400432', 7477, 'DONI MAHESA PUTRA', 'Tangerang, 8 Januari 2004', 'Sudirman', 'IX.A', '6253937', 'LULUS'),
(9, '0049100177', 7479, 'ERISKA DWI FITRIYANI', 'Cilacap, 8 November 2004', 'Carsono', 'IX.A', '8461686', 'LULUS'),
(10, '0056250967', 7480, 'ERRI ERLITA BUDIARTI', 'Cilacap, 16 Januari 2005', 'Ratum Raharjo', 'IX.A', '9191991', 'LULUS'),
(11, '0062509009', 7481, 'ERZA ASHFAHANI NURSAPUTRA', 'Cilacap, 2 Juli 2006', 'Kadir Saputra', 'IX.A', '9506717', 'LULUS'),
(12, '0065225098', 7484, 'FARCHANUDIN', 'Cilacap, 19 Januari 2006', 'Suratman', 'IX.A', '3189632', 'LULUS'),
(13, '0047751374', 7492, 'IBNATA FADILLA RAMADHANI', 'Cilacap, 12 November 2004', 'Pindi', 'IX.A', '3861984', 'LULUS'),
(14, '0057816498', 7494, 'INAYATI KHODIJAH', 'Cilacap, 24 April 2005', 'Cahyono', 'IX.A', '3247296', 'LULUS'),
(15, '0052796183', 7498, 'JINGGA MUTIARA AZ-ZAHRA', 'Cilacap, 12 Juni 2005', 'Suyar Helmi Suyarto', 'IX.A', '7652156', 'LULUS'),
(16, '0053912774', 7509, 'LARAS JUWITA SALSABILA', 'Cilacap, 10 Januari 2005', 'Emid Tarmedi', 'IX.A', '6644016', 'LULUS'),
(17, '0052796328', 7518, 'MUTIA ZHAFIRAH SAFITRI LIPUTO', 'Cilacap, 26 November 2005', 'Fahmi Liputo', 'IX.A', '8227949', 'LULUS'),
(18, '0042128521', 7543, 'RIPKI MAOLANA', 'Cilacap, 7 November 2004', 'Taryanto', 'IX.A', '1368697', 'LULUS'),
(19, '0056918785', 7544, 'RISMA NURUL PADHILAH', 'Cilacap, 10 Januari 2005', 'Topiq', 'IX.A', '2418324', 'LULUS'),
(20, '0044715335', 7549, 'SAILA FIKRIYATUN', 'Cilacap, 29 Oktober 2004', 'Haryanto', 'IX.A', '1112995', 'LULUS'),
(21, '0057338215', 7553, 'SUCI FEBRIANA', 'Cilacap, 28 Februari 2005', 'Maryono', 'IX.A', '9049297', 'LULUS'),
(22, '0052305544', 7556, 'SUCI SUKMA RAHAYU', 'Cilacap, 20 Mei 2005', 'S.A Suryadinata', 'IX.A', '3836714', 'LULUS'),
(23, '0053067212', 7559, 'TAUFIK FAUJAN', 'Cilacap, 16 Maret 2005', 'Darmin', 'IX.A', '7442678', 'LULUS'),
(24, '0052796692', 7561, 'TIARA ZAHWAH SAFITRI LIPUTO', 'Cilacap, 26 November 2005', 'Fahmi Liputo', 'IX.A', '9714618', 'LULUS'),
(25, '0059734891', 7569, 'YOZAN AKMAL FIRDAUS', 'Bekasi, 2 Juli 2005', 'Kafrawi', 'IX.A', '3781244', 'LULUS'),
(26, '0052597753', 7446, 'AKBAR FADIL MAULANA', 'Cilacap, 10 November 2005', 'Teguh Prihatin', 'IX.B', '7842109', 'LULUS'),
(27, '0047688372', 7458, 'AYNLINA DARAWAHIBA', 'Cilacap, 25 Desember 2004', 'Toha', 'IX.B', '2541211', 'LULUS'),
(28, '0041003388', 7462, 'CINDI HARDIANTI', 'Cilacap, 16 Maret 2004', 'Ruswanto', 'IX.B', '6232770', 'LULUS'),
(29, '0054877978', 7466, 'DE YULITA NUR AZIZAH', 'Cilacap, 7 Mei 2005', 'Suteja Solehudin', 'IX.B', '6351311', 'LULUS'),
(30, '0047218315', 7468, 'DEAH LESTARI', 'Cilacap, 3 September 2004', 'Mad Soleh', 'IX.B', '7459189', 'LULUS'),
(31, '0047218318', 7478, 'DONI TEGUH PRASETIO', 'Cilacap, 17 September 2004', 'Sadar Ariyanto', 'IX.B', '5873496', 'LULUS'),
(32, '0052796006', 7485, 'FARRAS HAIDZAR ISNAENI', 'Cilacap, 25 Maret 2005', 'Isnaeni', 'IX.B', '5685054', 'LULUS'),
(33, '0057327054', 7486, 'FASKIA DINAR AZZAHRA', 'Cilacap, 14 Februari 2005', 'Umar Hasan Sani', 'IX.B', '1960271', 'LULUS'),
(34, '0053912763', 7487, 'GALIH ALIPIANSYAH PUTRA', 'Cilacap, 30 Januari 2005', 'Sugiarto', 'IX.B', '3731324', 'LULUS'),
(35, '0044255149', 7496, 'IVAN FAUZI', 'Cilacap, 05 Juli 2004', 'Sudirman', 'IX.B', '3945604', 'LULUS'),
(36, '0036101351', 7512, 'MOHAMAD FAIZIN', 'Cilacap, 28 November 2003', 'Rokiman', 'IX.B', '6403378', 'LULUS'),
(37, '0047342230', 7513, 'MUHAMMAD FATHUL ALJABAR', 'Cilacap, 11 Oktober 2004', 'Hendro Saputra', 'IX.B', '3061019', 'LULUS'),
(38, '0045232336', 7516, 'MUHAMMAD RIFAI ASIFA', 'Cilacap, 16 Desember 2004', 'Sobari', 'IX.B', '6751172', 'LULUS'),
(39, '0049034559', 7515, 'MUHAMMAD ZIDAN', 'Cilacap, 27 April 2004', 'Pujiyanto', 'IX.B', '5523721', 'LULUS'),
(40, '0042626498', 7523, 'NAWANG WULAN', 'Cilacap, 18 November 2004', 'Mad Sahli', 'IX.B', '8413948', 'LULUS'),
(41, '0053912786', 7524, 'NIKEN OLIVIA', 'Cilacap, 30 Maret 2005', 'Tarsono', 'IX.B', '9837039', 'LULUS'),
(42, '0041524334', 7530, 'PRINGGO POSO DIANTORO', 'Cilacap, 30 Oktober 2004', 'Antum Gunawan', 'IX.B', '2503567', 'LULUS'),
(43, '0051557498', 7531, 'RAFLIE ALFARIDZI', 'Cilacap, 17 Desember 2005', 'Taufik Setiono', 'IX.B', '4082559', 'LULUS'),
(44, '0047002490', 7534, 'RENZA PRATAMA PUTRO', 'Cilacap, 13 Desember 2004', 'Dihro', 'IX.B', '8703303', 'LULUS'),
(45, '0048675837', 7535, 'RESHA ANI PRATIWI', 'Cilacap, 12 Oktober 2004', 'Waryanto', 'IX.B', '5169360', 'LULUS'),
(46, '0054461059', 7551, 'SIDIK ALI NURJAMAN', 'Cilacap, 24 September 2005', 'Rustoyo', 'IX.B', '9919347', 'LULUS'),
(47, '0051406776', 7552, 'SINTA BELLA RAHMAWATI', 'Cilacap, 8 Januari 2005', 'Rohadi', 'IX.B', '7781986', 'LULUS'),
(48, '0045179433', 7592, 'SOTYA KUSUMA WATI', 'Klaten, 26 Desember 2004', 'Subekti', 'IX.B', '6015445', 'LULUS'),
(49, '0060030326', 7557, 'SYAHLA TSABITUL AZMI', 'Cilacap, 7 Januari 2006', 'Tarsum', 'IX.B', '8613696', 'LULUS'),
(50, '0050610081', 7572, 'ZIDAN ARIF BAHTIAR', 'Cilacap, 28 Januari 2005', 'Saliwan', 'IX.B', '2542366', 'LULUS'),
(51, '0046253317', 7448, 'ALDI CAHYANA', 'Cilacap, 20 Desember 2004', 'Suwarso', 'IX C', '6430462', 'LULUS'),
(52, '0057653278', 7451, 'AMELIA MERDEKA WATI', 'Cilacap, 17 Agustus 2005', 'Rustono', 'IX C', '5250784', 'LULUS'),
(53, '0055778694', 7457, 'ASIH DWI RAHAYU', 'Cilacap, 24 Agustus 2005', 'Solehan', 'IX C', '3279383', 'LULUS'),
(54, '0050717692', 7461, 'CAMELIYA FITRI', 'Cilacap, 1 November 2005', 'Supriyadi', 'IX C', '8279961', 'LULUS'),
(55, '0044714950', 7463, 'DANI KHOERON IMRON', 'Cilacap, 26 Maret 2004', 'Windi Saryanto Alias Eko Perri', 'IX C', '3122805', 'LULUS'),
(56, '0051048716', 7472, 'DIANA GALUH PERTIWI', 'Cilacap, 4 Februari 2005', 'Tarjono', 'IX C', '2026553', 'LULUS'),
(57, '0059296483', 7482, 'FAHDY RIYANTO', 'Cilacap, 3 November 2005', 'Triswanto', 'IX C', '6301104', 'LULUS'),
(58, '0053758586', 7588, 'FARIZ ROMADON', 'Cilacap, 27 November 2005', 'Samsun', 'IX C', '2294308', 'LULUS'),
(59, '0056623469', 7490, 'HAWA ALFIA WINDARI', 'Cilacap, 23 September 2005', 'Harun', 'IX C', '3513479', 'LULUS'),
(60, '0042858095', 7495, 'IRPAN AJI PRABOWO', 'Cilacap, 29 Agustus 2004', 'Herman', 'IX C', '2992420', 'LULUS'),
(61, '0047298834', 7502, 'KARTIKA DWI SAFITRI', 'Cilacap, 28 November 2004', 'Suhendro', 'IX C', '3338630', 'LULUS'),
(62, '0048479143', 7510, 'MARISA NOVITA SARI', 'Cilacap, 26 Maret 2004', 'Warsum', 'IX C', '2201124', 'LULUS'),
(63, '0047218910', 7517, 'MUHAMAD RIZALDI', 'Cilacap, 21 Desember 2004', 'Casino', 'IX C', '7547874', 'LULUS'),
(64, '0032567094', 7533, 'RENATA RAMADANI', 'Cilacap, 21 November 2003', 'Ahmad Sudarto', 'IX C', '9748820', 'LULUS'),
(65, '0049477218', 7541, 'REZA NUR APRILIAN', 'Cilacap, 24 April 2004', 'Mahron', 'IX C', '4770877', 'LULUS'),
(66, '0050718086', 7542, 'RIFAN MAY RIDWANSYAH', 'Cilacap, 11 Mei 2005', 'Tajudin', 'IX C', '5350424', 'LULUS'),
(67, '0050718093', 7545, 'RIZKI RHAMADANI', 'Cilacap, 31 Oktober 2005', 'Parisno', 'IX C', '9942504', 'LULUS'),
(68, '0050718088', 7555, 'SUCI RAHMAWATI', 'Jakarta, 1 Juni 2005', 'Aminudin', 'IX C', '7768894', 'LULUS'),
(69, '0052335492', 7560, 'TIARA MAURIL SUCI YANI', 'Cilacap, 13 April 2005', 'Edi Suciadi', 'IX C', '2922153', 'LULUS'),
(70, '0049256873', 7562, 'TIO DIMAS RAMADHAN', 'Cilacap, 20 Oktober 2004', 'Harsono', 'IX C', '6210939', 'LULUS'),
(71, '0058152752', 7564, 'TRI WAHYUNI', 'Cilacap, 29 Januari 2005', 'Sadikin', 'IX C', '3609213', 'LULUS'),
(72, '0047185454', 7566, 'VRISKA DWI AGUSTINA', 'Cilacap, 31 Agustus 2004', 'Cahyadin', 'IX C', '5203177', 'LULUS'),
(73, '0057112139', 7567, 'WIQMAN LUQITO', 'Cilacap, 23 Juli 2005', 'Kasiman', 'IX C', '3877071', 'LULUS'),
(74, '0050718094', 7571, 'YUNI FITRIANSYAH', 'Cilacap, 1 November 2005', 'Sarkim', 'IX C', '6051787', 'LULUS'),
(75, '0043336322', 7443, 'ACA ADELIA SAPUTRI', 'Cilacap, 21 Desember 2003', 'Karmono', 'IX D', '8310592', 'LULUS'),
(76, '0058025277', 7444, 'ADAM CAHYA WANDIRA', 'Cilacap, 23 September 2005', 'Harun', 'IX D', '7090648', 'LULUS'),
(77, '0055935841', 7454, 'ANNISA RISKY NAFILASARI', 'Cilacap, 17 Januari 2005', 'Puji Supriyono', 'IX D', '5785345', 'LULUS'),
(78, '0045448620', 7455, 'APRIYANSAH NUGRAHA', 'Cilacap, 8 April 2004', 'Rusyanto', 'IX D', '1643181', 'LULUS'),
(79, '0050718089', 7469, 'DENDY ARDIANSYAH', 'Cilacap, 27 Juni 2005', 'Rohendi', 'IX D', '3418266', 'LULUS'),
(80, '0059014149', 7474, 'DINI SILFIANA TRIFIRKI', 'Cilacap, 25 Maret 2005', 'Dasirin', 'IX D', '8457096', 'LULUS'),
(81, '0047662469', 7475, 'DITIYA ANIS MARHAMAH', 'Cilacap, 7 Oktober 2004', 'Wakimin', 'IX D', '7270655', 'LULUS'),
(82, '0058746298', 7488, 'HAIKAL WISNU WARDANA', 'Kediri, 10 Agustus 2005', 'Andik Ruwianto', 'IX D', '6753278', 'LULUS'),
(83, '0053912857', 7489, 'HARI FIRMANSYAH', 'Cilacap, 22 Juli 2005', 'Hamdan', 'IX D', '6277018', 'LULUS'),
(84, '0059981274', 7491, 'HUNAFA SAFITRI', 'Cilacap, 3 November 2005', 'Sahidin', 'IX D', '6592303', 'LULUS'),
(85, '0042503822', 7493, 'IKHWAN LAKSANA PUTRA', 'Cilacap, 20 November 2005', 'Saryono', 'IX D', '8489297', 'LULUS'),
(86, '0059413177', 7499, 'KALVIAN RIZKI SAPUTRA', 'Cilacap, 26 Mei 2005', 'Sarkim', 'IX D', '5476331', 'LULUS'),
(87, '0057819163', 7503, 'KARTIKA SRI RAHAYU', 'Cilacap, 9 April 2005', 'Watono', 'IX D', '3072589', 'LULUS'),
(88, '0059135979', 7504, 'KAYLILA LUXY SARI', 'Cilacap, 7 Mei 2005', 'Carno', 'IX D', '2111568', 'LULUS'),
(89, '0053912779', 7521, 'NANDA PAMUNGKAS', 'Cilacap, 20 Januari 2006', 'Sakim Suratman', 'IX D', '8236512', 'LULUS'),
(90, '0047218324', 7522, 'NAUFAL AFKAR ALMASYAH', 'Cilacap, 20 September 2004', 'Sukiyat', 'IX D', '8622221', 'LULUS'),
(91, '0056107595', 7525, 'NUNUNG ASTRIYANTI', 'Cilacap, 26 Mei 2005', 'Mamat', 'IX D', '9184621', 'LULUS'),
(92, '0058800881', 7527, 'OLIVIA PERMATASARI', 'Cilacap, 16 Maret 2005', 'Daryanto', 'IX D', '5825312', 'LULUS'),
(93, '0054872677', 7537, 'RESVIONI NUR BELVITA', 'Cilacap, 31 Oktober 2005', 'Doni Haryanto', 'IX D', '7319009', 'LULUS'),
(94, '0042188163', 7538, 'RETNO ENJELI', 'Cilacap, 17 Maret 2004', 'Suratno', 'IX D', '5688424', 'LULUS'),
(95, '0059809714', 7540, 'REYHAN ZULKARNAEN', 'Cilacap, 21 Februari 2005', 'Nasrun', 'IX D', '9323032', 'LULUS'),
(96, '0043080209', 7546, 'ROSHI ANA PRATIWI', 'Cilacap, 12 Oktober 2004', 'Wawan', 'IX D', '6756856', 'LULUS'),
(97, '0050718082', 7547, 'SAHRA LISNAENI PUTRI', 'Cilacap, 29 Maret 2005', 'Sulisno', 'IX D', '9948280', 'LULUS'),
(98, '0049464469', 7550, 'SEPTI FITRIA RAMA DIANA', 'Cilacap, 4 November 2004', 'Warsono', 'IX D', '2175030', 'LULUS'),
(99, '0055662818', 7548, 'SYAHRUL FEBRI IRAWAN', 'Cilacap, 2 Februari 2005', 'Amso Riyanto', 'IX D', '1484816', 'LULUS'),
(100, '0037124689', 7586, 'WILFAN DWI AGUSTIAN', 'Cilacap, 16 Agustus 2003', 'Kasam', 'IX D', '8318466', 'LULUS'),
(101, '0034601420', 7453, 'ANISAH RISKA YULIANA', 'Cilacap, 18 Mei 2003', 'Mistor', 'IX E', '1422831', 'LULUS'),
(102, '0057575162', 7464, 'DANAN FELFANSYAH AKBAR', 'Cilacap, 3 Mei 2005', 'Wadiyono', 'IX E', '9195914', 'LULUS'),
(103, '0038449358', 7465, 'DARNIYATI', 'Cilacap, 21 Januari 2005', 'Watam Al Sanwardi', 'IX E', '7833734', 'LULUS'),
(104, '0041282819', 7470, 'DEVIANA AYUNDARI', 'Cilacap, 17 Desember 2004', 'Diding Kirman', 'IX E', '3396516', 'LULUS'),
(105, '0046147484', 7471, 'DEVIN ADNAN', 'Cilacap, 3 Desember 2004', 'Sumarya', 'IX E', '9819125', 'LULUS'),
(106, '0058823332', 7473, 'DINA APRILIANA', 'Cilacap, 2 April 2005', 'Wardi', 'IX E', '9970523', 'LULUS'),
(107, '0053912769', 7497, 'JAUZA HASNA INAS', 'Cilacap, 15 April 2005', 'Tatang Suryadi', 'IX E', '3855005', 'LULUS'),
(108, '0034784698', 7505, 'KENDI SAPUTRA', 'Cilacap, 25 September 2003', 'Karyoto', 'IX E', '1101291', 'LULUS'),
(109, '0034499903', 7506, 'KHOERUN NISA', 'Cilacap, 16 Januari 2003', 'Sukendar', 'IX E', '5906301', 'LULUS'),
(110, '0038430622', 7508, 'LAELA FAZILAH', 'Cilacap, 23 Maret 2005', 'Sanholid M S', 'IX E', '6942786', 'LULUS'),
(111, '0044180195', 7511, 'MIKO', 'Cilacap, 23 Oktober 2003', 'Catam', 'IX E', '6075335', 'LULUS'),
(112, '0053696471', 7514, 'MUHAMMAD FADHIL RAMADHAN', 'Cilacap, 1 November 2005', 'Wagyo', 'IX E', '5252908', 'LULUS'),
(113, '0048727997', 7520, 'NADILA SAFIRA', 'Cilacap, 30 November 2004', 'Suntoro', 'IX E', '1937605', 'LULUS'),
(114, '0046309515', 7526, 'NURKHOLIS HIDAYAT', 'Cilacap, 14 Januari 2004', 'Joko Suparman', 'IX E', '1943491', 'LULUS'),
(115, '0052027788', 7528, 'PAHMI DWI', 'Cilacap, 26 Maret 2005', 'Rasiwan', 'IX E', '3882388', 'LULUS'),
(116, '0057450040', 7532, 'RANI MAHDALENA', 'Cilacap, 31 Juli 2005', 'Abidin', 'IX E', '6760286', 'LULUS'),
(117, '0041205122', 7536, 'RESTI AGUSTIN', 'Cilacap, 24 Agustus 2004', 'Mah\'mudin', 'IX E', '4858417', 'LULUS'),
(118, '0058019903', 7554, 'SUCI RAHMAWATI', 'Cilacap, 15 Mei 2005', 'Kardiyanto', 'IX E', '6302797', 'LULUS'),
(119, '0059803509', 7558, 'TAMARA ANDITA', 'Cilacap, 5 Januari 2005', 'Hermanto Al Wagino', 'IX E', '1984443', 'LULUS'),
(120, '0051512888', 7563, 'TIFAL PUJA RAHAYU', 'Cilacap, 5 Januari 2005', 'Rakum', 'IX E', '4677870', 'LULUS'),
(121, '0048315368', 7568, 'YOLANDA KHOERUNNISA', 'Cilacap, 29 Mei 2004', 'Karno', 'IX E', '6155089', 'LULUS'),
(122, '0027959610', 7570, 'YULI AYUNDASARI', 'Cilacap, 28 Juli 2002', 'Madtohirin', 'IX E', '1558188', 'LULUS');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `login_app`
--
ALTER TABLE `login_app`
  MODIFY `id_login_app` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `masuk_web`
--
ALTER TABLE `masuk_web`
  MODIFY `id_masuk_web` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
